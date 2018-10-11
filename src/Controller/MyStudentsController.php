<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\User;
use App\Entity\Teacher;
use App\Entity\Student;
use App\Entity\Classroom;

class MyStudentsController extends AbstractController
{

	/**
	* @Route("/mystudents", name="mystudents_manager")
	*/
	public function MyStudentsManager(Request $request, UserInterface $user)
	{
		$currentTeacher = $user->getTeacher();

		$classrooms = $currentTeacher->getClassrooms();

		$students = array();

		foreach($classrooms as $oneClassroom)
		{
			$students = $oneClassroom->getStudents();

			foreach($students as $oneStudent)
			{
				$eleves[] = $oneStudent;
			}
		}

		return $this->render('mystudents/myStudents.html.twig', array('classrooms' => $classrooms, 'students' => $eleves));
	}

}