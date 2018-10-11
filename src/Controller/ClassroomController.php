<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\User;
use App\Entity\Teacher;
use App\Entity\Student;
use App\Entity\Classroom;
use App\Entity\RegisterClassroom;
use App\Form\RegisterClassroomType;

class ClassroomController extends AbstractController
{

	/**
	* @Route("/admin/classroom/manager", name="classroom_manager")
	*/
	public function classroomManager(Request $request)
	{
		$classrooms = $this->getDoctrine()
			->getRepository(Classroom::class)
			->findAll();

		return $this->render('admin/classroomManager.html.twig', array('classrooms' => $classrooms));
	}

	/**
     * @Route("/admin/classroom/register", name="register_classroom")
     */
    public function registerClassroom(Request $request)
    {
    	$teachers = $this->getDoctrine()
			->getRepository(Teacher::class)
			->findAll();

		$students = $this->getDoctrine()
			->getRepository(Student::class)
			->findAll();

        // build and handle the form
        
        $form = $this->createForm(RegisterClassroomType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            // Create classroom and get form submitted data
            $classroom = $form->getData(); 

            // 4) save the classroom!
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($classroom);
            $entityManager->flush();

            return $this->redirectToRoute('classroom_manager');
        }
        

        return $this->render(
            'admin/registerClassroom.html.twig', array('form' => $form->createView(), 'teachers' => $teachers, 'students' => $students)
        );
    }

    /**
	* @Route("/admin/classroom/edit/{id}", name="edit_classroom")
	*/
	public function editClassroom($id, Request $request)
	{

		$entityManager = $this->getDoctrine()->getManager();
		$classroom = $entityManager->getRepository(Classroom::class)->find($id);

		if($classroom) {

			 $form = $this->createForm(RegisterClassroomType::class, $classroom);
        	 $form->handleRequest($request);

			if ($form->isSubmitted() && $form->isValid()) {

	            // Get classroom new data
	            $data = $form->getData();

	            $entityManager->flush();

	            return $this->redirectToRoute('classroom_manager');
        	}

	        return $this->render(
	            'admin/editClassroom.html.twig',
	            array('form' => $form->createView(), 'classroom' => $classroom)
	        );
		}
		else
		{
			return $this->redirectToRoute('classroom_manager');
		}
	}

    /**
	* @Route("/admin/classroom/delete/{id}", name="delete_classroom")
	*/
	public function deleteClassroom($id)
	{
		$classroom = $this->getDoctrine()
			->getRepository(classroom::class)
			->findOneBy(['id' => $id]);

		/*
		$classroomTeachers = $classroom->getTeachers();

		if($classroomTeachers)
		{
			foreach($classroomTeachers as $oneTeacher)
			{
				$classroom->removeTeacher($oneTeacher);
			}
		}

		$classroomStudents = $classroom->getStudents();

		if($classroomStudents)
		{
			foreach($classroomStudents as $oneStudent)
			{
				$classroom->removeStudent($oneStudent);
			}
		}
		*/
		$entityManager = $this->getDoctrine()->getManager();
		$entityManager->remove($classroom);
		$entityManager->flush();

		return $this->redirectToRoute('classroom_manager');
	}

}