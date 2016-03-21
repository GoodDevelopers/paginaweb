<?php

namespace PaginasBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="index")
     */
    public function indexAction()
    {
        return $this->render('PaginasBundle:Default:index.html.twig');
    }
    
    /**
     * @Route("/historia", name="historia")
     */
    public function historiaAction()
    {
        return $this->render('PaginasBundle:Default:historia.html.twig');
    }
    
    /**
     * @Route("/contacto", name="contacto")
     */
    public function contactoAction()
    {
        return $this->render('PaginasBundle:Default:contacto.html.twig');
    }
}
