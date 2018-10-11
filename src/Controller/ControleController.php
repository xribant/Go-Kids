<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Controle;
use App\Form\AddControleType;
use App\Entity\User;


class ControleController extends AbstractController
{
	/**
	* @Route("/controles/new", name="new_controle")
	*/
	public function addControle()
	{

	}

	/**
	* @Route("/controles/pending", name="pending_controles")
	*/
	public function controlesManager(Request $request)
	{
		$pendingControles = $this->getDoctrine()
			->getRepository(Controle::class)
			->findBy(['open' => true]);

		return $this->render('mycontroles/pendingControles.html.twig', ['controles' => $pendingControles]);
	}

}