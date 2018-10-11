<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use App\Entity\User;
use App\Entity\Student;
use App\Entity\Classroom;
use App\Form\RegisterStudentType;

class StudentController extends AbstractController
{

    /**
	* @Route("/admin/student/edit/{id}", name="edit_student")
	*/
	public function editStudent($id, Request $request)
	{
	
		$student = $this->getDoctrine()
			->getRepository(Student::class)
			->findOneBy(['id' => $id]);

		$user = $student->getUser();

		if($student && $user) {

			// build and handle the form
	        $form = $this->createForm(RegisterStudentType::class);
	        $form->handleRequest($request);

	        if ($form->isSubmitted() && $form->isValid()) {

	        	$entityManager = $this->getDoctrine()->getManager();

	            // Get classroom new data
	            $userData = $form->getData()->getStudent();

	            $student->getUser()->setFirstName($userData->getFirstName());
	            $student->getUser()->setLastName($userData->getLastName());
	            $student->getUser()->setEmail($userData->getEmail());
	            $student->getUser()->setAddress($userData->getAddress());
	            $student->getUser()->setCity($userData->getCity());
	            $student->getUser()->setPostalCode($userData->getPostalCode());
	            $student->getUser()->setbirthDate($userData->getBirthDate());
	            $student->getUser()->setPhone($userData->getPhone());
	            $student->getUser()->setRoles(['ROLE_U']);

	            $student->setClassroom($userData->getStudent()->getClassroom());
	          
	            $entityManager->flush();

	            return $this->redirectToRoute('user_manager');
        	}

	        return $this->render(
	            'admin/editStudent.html.twig',
	            array('form' => $form->createView(), 'student' => $student, 'user' => $user)
	        );
		}
		else
		{
			return $this->redirectToRoute('user_manager');
		}
	}
}