<?php

// src/Controller/DCController.php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Domaine;
use App\Entity\Competence;
use App\Form\RegisterDomaineType;
use App\Form\RegisterCompetenceType;

class DCController extends AbstractController
{

	/**
	* @Route("/admin/DC/manager", name="dc_manager")
	*/
	public function DCManager(Request $request)
	{
		$domaines = $this->getDoctrine()
			->getRepository(Domaine::class)
			->findAll();

		return $this->render('admin/DCManager.html.twig', array('domaines' => $domaines));
	}

	/**
	* @Route("/admin/DC/domaine/register", name="register_domaine")
	*/
	public function registerDomaine(Request $request)
	{
		// build and handle the form
        
        $form = $this->createForm(RegisterDomaineType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            // Create domaine and get form submitted data

            $domaine = new Domaine();
            $domaine = $form->getData(); 

            // 4) save the domaine!
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($domaine);
            $entityManager->flush();

            return $this->redirectToRoute('dc_manager');
        }
        

        return $this->render(
            'admin/registerDomaine.html.twig', array('form' => $form->createView())
        );
	}

	/**
	* @Route("/admin/DC/competence/register", name="register_competence")
	*/
	public function registerCompetence(Request $request)
	{
		// build and handle the form
        
        $form = $this->createForm(RegisterCompetenceType::class);
        $form->handleRequest($request);

        $entityManager = $this->getDoctrine()->getManager();

        if ($form->isSubmitted() && $form->isValid()) {

            // Create competence and get form submitted data

            $competence = new Competence();
            $competence = $form->getData(); 

            $domaine = $competence->getDomaine();
            $domaine->addCompetence($competence);

            // 4) save the competence!
            $entityManager->persist($competence);
            $entityManager->flush();

            return $this->redirectToRoute('dc_manager');
        }
        

        return $this->render(
            'admin/registerCompetence.html.twig', array('form' => $form->createView())
        );
	}

	/**
	* @Route("/admin/domaine/edit/{id}", name="edit_domaine")
	*/
	public function editDomaine($id, Request $request)
	{

		$entityManager = $this->getDoctrine()->getManager();
		$domaine = $entityManager->getRepository(Domaine::class)->find($id);

		if($domaine) {

			 $form = $this->createForm(RegisterDomaineType::class, $domaine);
        	 $form->handleRequest($request);

			if ($form->isSubmitted() && $form->isValid()) {

	            // Get domaine new data
	            $data = $form->getData();

	            $entityManager->flush();

	            return $this->redirectToRoute('dc_manager');
        	}

	        return $this->render(
	            'admin/editDomaine.html.twig',
	            array('form' => $form->createView(), 'domaine' => $domaine)
	        );
		}
		else
		{
			return $this->redirectToRoute('dc_manager');
		}
	}

	/**
	* @Route("/admin/competence/edit/{id}", name="edit_competence")
	*/
	public function editCompetence($id, Request $request)
	{

		$entityManager = $this->getDoctrine()->getManager();
		$competence = $entityManager->getRepository(Competence::class)->find($id);

		if($competence) {

			 $form = $this->createForm(RegisterCompetenceType::class, $competence);
        	 $form->handleRequest($request);

			if ($form->isSubmitted() && $form->isValid()) {

	            // Get domaine new data
	            $data = $form->getData();

	            $entityManager->flush();

	            return $this->redirectToRoute('dc_manager');
        	}

	        return $this->render(
	            'admin/editCompetence.html.twig',
	            array('form' => $form->createView(), 'competence' => $competence)
	        );
		}
		else
		{
			return $this->redirectToRoute('dc_manager');
		}
	}

    /**
	* @Route("/admin/domaine/delete/{id}", name="delete_domaine")
	*/
	public function deleteDomaine($id)
	{
		$entityManager = $this->getDoctrine()->getManager();
		$domaine = $entityManager->getRepository(Domaine::class)->find($id);

		$entityManager->remove($domaine);
		$entityManager->flush();

		return $this->redirectToRoute('dc_manager');
	}

	/**
	* @Route("/admin/competence/delete/{id}", name="delete_competence")
	*/
	public function deleteCompetence($id)
	{
		$entityManager = $this->getDoctrine()->getManager();
		$competence = $entityManager->getRepository(Competence::class)->find($id);

		$entityManager->remove($competence);
		$entityManager->flush();

		return $this->redirectToRoute('dc_manager');
	}

}