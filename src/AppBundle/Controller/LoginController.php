<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LoginController extends Controller
{
    function indexAction(){

    	return $this->render('login/login.html.twig', array("active"=>"login"));
    }

    function submitAction(Request $request){

    	die("hello");
    }
}
