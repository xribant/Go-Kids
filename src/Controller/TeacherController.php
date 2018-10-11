<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use App\Entity\User;
use App\Entity\Teacher;
use App\Entity\Classroom;
use App\Form\RegisterTeacherType;

class TeacherController extends AbstractController
{

    /**
	* @Route("/admin/teacher/edit/{id}", name="edit_teacher")
	*/
	public function editTeacher($id, Request $request)
	{
	
		$teacher = $this->getDoctrine()
			->getRepository(Teacher::class)
			->findOneBy(['id' => $id]);

		$user = $teacher->getUser();

		$classroomsIDs = [];

		foreach($teacher->getClassrooms() as $oneClassroom)
		{
			$classroomsIDs[] = $oneClassroom->getId();
		}

		if($teacher && $user) {

			// build and handle the form
	        $form = $this->createForm(RegisterTeacherType::class);
	        $form->handleRequest($request);

	        if ($form->isSubmitted() && $form->isValid()) {

	        	$entityManager = $this->getDoctrine()->getManager();

	            // Get classroom new data
	            $userData = $form->getData()->getTeacher();

	            $teacher->getUser()->setFirstName($userData->getFirstName());
	            $teacher->getUser()->setLastName($userData->getLastName());
	            $teacher->getUser()->setEmail($userData->getEmail());
	            $teacher->getUser()->setAddress($userData->getAddress());
	            $teacher->getUser()->setCity($userData->getCity());
	            $teacher->getUser()->setPostalCode($userData->getPostalCode());
	            $teacher->getUser()->setbirthDate($userData->getBirthDate());
	            $teacher->getUser()->setPhone($userData->getPhone());
	            $teacher->getUser()->setRoles($userData->getRoles());

	            foreach($teacher->getClassrooms() as $oneClassroom)
	            {
	            	$teacher->removeClassroom($oneClassroom);
	            }

	            foreach($userData->getTeacher()->getClassrooms() as $oneClassroom)
	            {
	            	$teacher->addClassroom($oneClassroom);
	            }
	          
	            $entityManager->flush();

	            return $this->redirectToRoute('user_manager');
        	}

	        return $this->render(
	            'admin/editTeacher.html.twig',
	            array('form' => $form->createView(), 'teacher' => $teacher, 'user' => $user, 'ids' => $classroomsIDs)
	        );
		}
		else
		{
			return $this->redirectToRoute('user_manager');
		}
	}
}