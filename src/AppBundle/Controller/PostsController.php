<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use AppBundle\Entity\Post;

class PostsController extends Controller
{
   
    function allPostsAction(){

    	$posts = $this->getDoctrine()
        			->getRepository('AppBundle:Post')
        			->findAll();


    	return $this->render('home/home.html.twig', array("posts"=>$posts));
    }

    function postAction(Request $request){

    	$post = new Post();

    	$post->setUser($this->getUser());
    	$post->setTextPost($request->request->get('text_post'));

    	$em = $this->getDoctrine()->getManager();
        $em->persist($post);
        $em->flush();

        return $this->allPostsAction();
    }
}
