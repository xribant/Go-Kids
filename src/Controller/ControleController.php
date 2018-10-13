<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Controle;
use App\Entity\Classroom;
use App\Form\AddControleType;
use App\Entity\User;


class ControleController extends AbstractController
{
	/**
	* @Route("/controles/new", name="new_controle")
	*/
	public function addControle(Request $request, UserInterface $user)
	{
		$form = $this->createForm(AddControleType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

        	$controle = $form->getData();
        	$classrooms = $controle->getClassrooms();

        	$controle->setCreationDate(new \DateTime(date('Y-m-d H:i:s')));
        	$controle->setOpen(true);
        	$controle->setTeacher($user->getTeacher());

        	$entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($controle);
            $entityManager->flush();

            return $this->redirectToRoute('pending_controles');
            
        }
		return $this->render('controles/addControle.html.twig', ['form' => $form->createView()]);
	}

	/**
	* @Route("/controles/pending", name="pending_controles")
	*/
	public function controlesManager(Request $request)
	{
		$pendingControles = $this->getDoctrine()
			->getRepository(Controle::class)
			->findBy(['open' => true]);

		return $this->render('controles/pendingControles.html.twig', ['controles' => $pendingControles]);
	}

}