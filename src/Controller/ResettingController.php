<?php 

// src/Controller/ResettingController.php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Security\Csrf\TokenGenerator\TokenGeneratorInterface;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Component\Translation\TranslatorInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Form\FormErrorIterator;
use App\Entity\User;
use App\Services\Mailer;
use App\Form\ResettingType;

/**
 * @Route("/renew-password")
 */
class ResettingController extends Controller
{
    /**
     * @Route("/requete", name="request_resetting")
     */
    public function request(Request $request, Mailer $mailer, TokenGeneratorInterface $tokenGenerator)
    {
        // création d'un formulaire "à la volée", afin que l'internaute puisse renseigner son mail
        $form = $this->createFormBuilder()
            ->add('email', EmailType::class, [
                'constraints' => [
                    new NotBlank(),
                    new Email()
                ]
            ])
            ->getForm();
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $em = $this->getDoctrine()->getManager();

            $user = $this->getDoctrine()
                ->getRepository(User::class)
                ->findOneBy(['email' => $form['email']->getData()]);

            // aucun email associé à ce compte.
            if (!$user) {
                $request->getSession()->getFlashBag()->add('warning', "Cet email n'existe pas dans la base.");
            } 
            else
            {
                // création du token
                $user->setToken($tokenGenerator->generateToken());
                // enregistrement de la date de création du token
                $user->setPasswordRequestedAt(new \Datetime());
                $em->flush();

                // on utilise le service Mailer créé précédemment
                $bodyMail = $mailer->createBodyMail('emails/resetLink.html.twig', [
                    'user' => $user
                ]);
                $mailer->sendMessage('robot@go-kids.be', $user->getEmail(), 'Go Kids - Renouvellement de votre mot de passe', $bodyMail);
                $request->getSession()->getFlashBag()->add('notice', "Un mail a été envoyé à cette adresse avec un lien pour la réinitialisation.");
            }
        }
        else
        {
            return $this->render('security/forgotPassword.html.twig', [
                'form' => $form->createView(),
                'error' => $form->getErrors()
            ]);
        }

        return $this->render('security/forgotPassword.html.twig', [
            'form' => $form->createView()
        ]);
    }

    // si supérieur à 10min, retourne false
    private function isRequestInTime(\Datetime $passwordRequestedAt = null)
    {
        if ($passwordRequestedAt === null)
        {
            return false;        
        }
        
        $now = new \DateTime();
        $interval = $now->getTimestamp() - $passwordRequestedAt->getTimestamp();

        $daySeconds = 60 * 10;
        $response = $interval > $daySeconds ? false : $reponse = true;
        return $response;
    }

    /**
     * @Route("/{id}/{token}", name="resetting")
     */
    public function resetting(User $user, $token, Request $request, UserPasswordEncoderInterface $passwordEncoder)
    {
        // interdit l'accès à la page si:
        // le token associé au membre est null
        // le token enregistré en base et le token présent dans l'url ne sont pas égaux
        // le token date de plus de 10 minutes
        if ($user->getToken() === null || $token !== $user->getToken() || !$this->isRequestInTime($user->getPasswordRequestedAt()))
        {
            throw new AccessDeniedHttpException();
        }

        $form = $this->createForm(ResettingType::class, $user);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            $password = $passwordEncoder->encodePassword($user, $user->getPlainPassword());
            $user->setPassword($password);

            // réinitialisation du token à null pour qu'il ne soit plus réutilisable
            $user->setToken(null);
            $user->setPasswordRequestedAt(null);

            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            $request->getSession()->getFlashBag()->add('success', "Votre mot de passe a été modifié.");

            return $this->redirectToRoute('security_login_form');

        } 

        return $this->render('security/resetting.html.twig', [
            'form' => $form->createView()
        ]);
        
    }

}
