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

    	$username = $request->request->get('username');
    	$password = $request->request->get('password');

    	$em = $this->getDoctrine()->getManager();

    	$user = $em->getRepository('AppBundle:User')->findBy(array('username'=>$username, 'password'=>md5($password)));

    	if($user){

    		return $this->redirectToRoute('home');
    	}

    	return $this->render('login/login.html.twig', array("message"=>"<p style='color: red'>Incorrect username/password combination!</p>",
    														"active"=>"login"));
    }
}
