<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use AppBundle\Entity\User;

class RegisterController extends Controller
{
    function indexAction(Request $request){

    	$user = new User();

    	$user->setUsername($request->request->get('username'));


 $password = $this->get('security.password_encoder')->encodePassword($user, $request->request->get('password'));
        
        $user->setPassword($password);

    	$user->setEmailadd($request->request->get('email'));

    	$em = $this->getDoctrine()->getManager();

    	$checkUserName = $em->getRepository('AppBundle:User')->findBy(array(
    															'username'=>$user->getUsername()));	

    	$checkEmailadd = $em->getRepository('AppBundle:User')->findBy(array(
    															'emailadd'=>$user->getEmailadd()));

    	if($checkUserName || $checkEmailadd){

    		return $this->render('security/login.html.twig', array("message"=>"<p style='color: red'>Username/Email already exists!</p>",
    															"active"=>"register"));
    	}

	    $em->persist($user);

	    $em->flush();

    	return $this->render('security/login.html.twig', array("message"=>"<p style='color: green'>Registration Successful!</p>",
    														"active"=>"login"));
    }
}
