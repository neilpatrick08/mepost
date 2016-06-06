<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SecurityController extends Controller
{
    function loginAction(){

    	$authenticationUtils = $this->get('security.authentication_utils');

	    // get the login error if there is one
	    $error = $authenticationUtils->getLastAuthenticationError();

	    $message = "";
	    if($error){
	    	$message = "<p style='color: red'>Incorrect username/password combination!</p>";
	    }

    	return $this->render('security/login.html.twig', array("message"=>$message,
    														"active"=>"login"));
    }

}
