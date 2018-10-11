<?php

// src/Controller/CoreController.php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\User;


class CoreController extends AbstractController
{
	/**
	* @Route("/", name="home")
	*/
	public function indexAction()
	{
		return $this->render('base.html.twig');
	}

}