<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LoginController extends Controller
{
	/**
     * @Route("/login", name="indexpage")
     */
    function indexAction(){

    	return $this->render('login/login.html.twig');
    }
}
