<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use App\Entity\User;
use App\Entity\Teacher;
use App\Entity\Student;
use App\Entity\Classroom;
use App\Entity\RegisterUser;
use App\Form\RegisterUserType;
use App\Form\RegisterTeacherType;
use App\Form\RegisterStudentType;

class UserController extends AbstractController
{

	/**
	* @Route("/admin/user/manager", name="user_manager")
	*/
	public function userManager(Request $request)
	{
		$teachers = $this->getDoctrine()
			->getRepository(Teacher::class)
			->findAll();

		$students = $this->getDoctrine()
			->getRepository(Student::class)
			->findAll();

		return $this->render('admin/userManager.html.twig', array('teachers' => $teachers, 'students' => $students ));
	}


	/**
     * @Route("/admin/user/register/{usertype}", name="register_form")
     */
    public function registerForm(Request $request, UserPasswordEncoderInterface $passwordEncoder, $usertype)
    {

    	if($usertype == 'prof')
    	{
    		$form = $this->createForm(RegisterTeacherType::class);

    		$form->handleRequest($request);

	        if ($form->isSubmitted() && $form->isValid()) {

	            // Create User and get form submitted data
	            $user = $form->getData()->getTeacher();

	            // Encode the password (you could also do this via Doctrine listener)
	            $password = $passwordEncoder->encodePassword($user, $user->getPassword());
	            $user->setPassword($password);

	            // 4) save the User!
	            $entityManager = $this->getDoctrine()->getManager();
	            $entityManager->persist($user);
	            $entityManager->flush();

	            // ... do any other work - like sending them an email, etc
	            // maybe set a "flash" success message for the user

	            return $this->redirectToRoute('user_manager');
	        }

	        return $this->render(
	            'admin/registerTeacher.html.twig',
	            array('form' => $form->createView())
	        );

    	}
    	else if($usertype == 'eleve')
    	{
    		$form = $this->createForm(RegisterStudentType::class);

    		$form->handleRequest($request);

	        if ($form->isSubmitted() && $form->isValid()) {

	            // Create User and get form submitted data
	            $user = $form->getData()->getStudent();

	            // Encode the password (you could also do this via Doctrine listener)
	            $password = $passwordEncoder->encodePassword($user, $user->getPassword());
	            $user->setPassword($password);

	            // 4) save the User!
	            $entityManager = $this->getDoctrine()->getManager();
	            $entityManager->persist($user);
	            $entityManager->flush();

	            // ... do any other work - like sending them an email, etc
	            // maybe set a "flash" success message for the user

	            return $this->redirectToRoute('user_manager');
	        }
        

	        return $this->render(
	            'admin/registerStudent.html.twig',
	            array('form' => $form->createView())
	        );
    	}
    	else
    	{
    		return $this->redirectToRoute('user_manager');
    	}
    }


    /**
	* @Route("/admin/user/edit/{id}", name="edit_user")
	*/
	public function editUser($id, Request $request)
	{

		$user = $this->getDoctrine()
			->getRepository(User::class)
			->findOneBy(['id' => $id]);

		if($user) {

			// build and handle the form
	        $form = $this->createForm(RegisterUserType::class);
	        $form->handleRequest($request);

	        if ($form->isSubmitted() && $form->isValid()) {

	        	$entityManager = $this->getDoctrine()->getManager();

	            // Get classroom new data
	            $userData = $form->getData()->getUser();

	            $user->setFirstName($userData->getFirstName());
	            $user->setLastName($userData->getLastName());
	            $user->setEmail($userData->getEmail());
	            $user->setAddress($userData->getAddress());
	            $user->setCity($userData->getCity());
	            $user->setPostalCode($userData->getPostalCode());
	            $user->setbirthDate($userData->getBirthDate());
	            $user->setPhone($userData->getPhone());
	            $user->setRoles($userData->getRoles());
	          
	            $entityManager->flush();

	            return $this->redirectToRoute('user_manager');
        	}

	        return $this->render(
	            'admin/editTeacher.html.twig',
	            array('form' => $form->createView(), 'user' => $user)
	        );
		}
		else
		{
			return $this->redirectToRoute('user_manager');
		}
	}

	/**
	* @Route("/admin/user/disable/{id}", name="enableDisable_user")
	*/
	public function enableDisableUser($id, Request $request)
	{

		$user = $this->getDoctrine()
			->getRepository(User::class)
			->findOneBy(['id' => $id]);

		if(($user) && ($user->getIsActive() == true)) {
			$user->setIsActive(false);

			// 4) save the User!
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($user);
            $entityManager->flush();

			return $this->redirectToRoute('user_manager');
		}
		else if(($user) && ($user->getIsActive() == false))
		{
			$user->setIsActive(true);

			// 4) save the User!
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($user);
            $entityManager->flush();

			return $this->redirectToRoute('user_manager');
		}
		else
		{
			return $this->redirectToRoute('user_manager');
		}
	}

	/**
	* @Route("/admin/user/delete/{id}", name="delete_user")
	*/
	public function deleteUser($id)
	{
		$user = $this->getDoctrine()
			->getRepository(User::class)
			->findOneBy(['id' => $id]);

		$entityManager = $this->getDoctrine()->getManager();
		$entityManager->remove($user);
		$entityManager->flush();

		return $this->redirectToRoute('user_manager');
	}


}