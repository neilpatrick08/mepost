<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class HomeController extends Controller
{
    public function aboutAction(){

    	return $this->render('home/about.html.twig');
    }

    public function contactAction(){

    	return $this->render('home/contact.html.twig');
    }
}
