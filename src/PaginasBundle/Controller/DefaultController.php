<?php

namespace PaginasBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

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
     * @Route("/historia/", name="historia")
     */
    public function historiaAction()
    {
        return $this->render('PaginasBundle:Default:historia.html.twig');
    }
    
    /**
     * @Route("/productos/", name="productos")
     */
    public function productosAction()
    {
        return $this->render('PaginasBundle:Default:productos.html.twig');
    }
    
    /**
     * @Route("/clientes/", name="clientes")
     */
    public function clientesAction()
    {
        return $this->render('PaginasBundle:Default:clientes.html.twig');
    }
    
    /**
     * @Route("/contacto/", name="contacto")
     */
    public function contactoAction()
    {
        return $this->render('PaginasBundle:Default:contacto.html.twig');
    }
    
    /**
     * @Route("/acercade/", name="acercade")
     */
    public function acercadeAction()
    {
        return $this->render('PaginasBundle:Default:acercade.html.twig');
    }
    
    
   
}
