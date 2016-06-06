<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use AppBundle\Entity\Post;

class PostsController extends Controller
{
   
    function allPostsAction($username=''){

    	$filter = array();

    	if($username != ''){

    		$user = $this->getDoctrine()
        			->getRepository('AppBundle:User')
        			->findBy(array("username"=>$username));

        	if($user)
    			$filter = array("userId"=> $user[0]->getId());
    	}

    	$posts = $this->getDoctrine()
        			->getRepository('AppBundle:Post')
        			->findBy($filter, array('postDateTime' => 'DESC'));

        $lastpost = '';
        foreach($posts as $post){

        	if($post->getUser()->getUsername()==$this->getUser()->getUsername()){
        		$lastpost = $post;
        		break;
        	}
        }

    	return $this->render('home/home.html.twig', array("posts"=>$posts, "lastpost"=>$lastpost));
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


    function deletePostAction($postId){

    	$post = $this->getDoctrine()
        			->getRepository('AppBundle:Post')
        			->findBy(array("id"=>$postId));

    	if(!empty($post[0]) && $post[0]->getUser()->getId() == $this->getUser()->getId()){

	    	$em = $this->getDoctrine()->getEntityManager();
		    $em->remove($post[0]);
		    $em->flush();
		}

	    return $this->allPostsAction();
    }

}
