<?php

namespace PaginasBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

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
    public function clientesAction(Request $request)
    {
        $session = $request->getSession();
        if ($session->has("id")) {
            return $this->redirectToRoute("infocliente");
        }
        return $this->render('LoginBundle:Default:formulario.html.twig');
    }
    
    /**
     * @Route("/login/", name="login")
     */
    public function loginAction(Request $request) {
        if ($request->getMethod() == "POST") {
            $correo = $request->get("correo");
            $pass = $request->get("pass");

            $user = $this->getDoctrine()->getRepository('LoginBundle:Cliente')
                    ->findOneBy(array("correo" => $correo,
                                        "contrasena" => $pass));
            
            if ($user) {
                $session = $request->getSession();
                $session->set("id", $user->getId());
                $session->set("nombre", $user->getNombre());
                return $this->redirectToRoute("infocliente");
//                return $this->render('LoginBundle:Default:infocliente.html.twig',array("id"=>$session->get("nombre")));
            } else {
                return $this->redirectToRoute("clientes");
//               meterle un getFlashBag
            }
        }
        return $this->render('LoginBundle:Default:formulario.html.twig');
    }
    
    /**
     * @Route("/infocliente/", name="infocliente")
     */
    public function infoclienteAction(Request $request){
        $session = $request->getSession();
        if ($session->has("id")) {
//            $cliente = new \LoginBundle\Entity\Cliente;
            $cliente = $this->getDoctrine()->getRepository('LoginBundle:Cliente')->find($session->get("id"));            
            return $this->render('LoginBundle:Default:infocliente.html.twig', array("cliente"=>$cliente));
        } else {
            return $this->render('LoginBundle:Default:formulario.html.twig');
        }
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
