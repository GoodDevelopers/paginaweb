<?php

namespace LoginBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use LoginBundle\Entity\Cliente;

/**
 * Cliente controller.
 *
 * @Route("/cliente")
 */
class ClienteController extends Controller
{
    /**
     *
     * @Route("/", name="ini")
     * @Method("GET")
     */
    public function formularioAction()
    {
        return $this->render('LoginBundle:Default:formulario.html.twig');
    }
    
    
    
    
//    /**
//     * Lists all Cliente entities.
//     *
//     * @Route("/todos-clientes", name="cliente_index")
//     * @Method("GET")
//     */
//    public function indexAction()
//    {
//        $em = $this->getDoctrine()->getManager();
//
//        $clientes = $em->getRepository('LoginBundle:Cliente')->findAll();
//
//        return $this->render('LoginBundle:Default:all.html.twig', array(
//            'clientes' => $clientes,
//        ));
//    }
//
//    /**
//     * Creates a new Cliente entity.
//     *
//     * @Route("/new", name="cliente_new")
//     * @Method({"GET", "POST"})
//     */
//    public function newAction(Request $request)
//    {
//        $cliente = new Cliente();
//        $form = $this->createForm('LoginBundle\Form\ClienteType', $cliente);
//        $form->handleRequest($request);
//
//        if ($form->isSubmitted() && $form->isValid()) {
//            $em = $this->getDoctrine()->getManager();
//            $em->persist($cliente);
//            $em->flush();
//
//            return $this->redirectToRoute('clientes');
//        }
//
//        return $this->render('LoginBundle:Default:new.html.twig', array(
//            'cliente' => $cliente,
//            'form' => $form->createView(),
//        ));
//    }
//
//    /**
//     * Finds and displays a Cliente entity.
//     *
//     * @Route("/{id}", name="cliente_show")
//     * @Method("GET")
//     */
//    public function showAction(Cliente $cliente)
//    {
//        $deleteForm = $this->createDeleteForm($cliente);
//
//        return $this->render('LoginBundle:Default:show.html.twig', array(
//            'cliente' => $cliente,
//            'delete_form' => $deleteForm->createView(),
//        ));
//    }
//
//    /**
//     * Displays a form to edit an existing Cliente entity.
//     *
//     * @Route("/{id}/edit", name="cliente_edit")
//     * @Method({"GET", "POST"})
//     */
//    public function editAction(Request $request, Cliente $cliente)
//    {
//        $deleteForm = $this->createDeleteForm($cliente);
//        $editForm = $this->createForm('LoginBundle\Form\ClienteType', $cliente);
//        $editForm->handleRequest($request);
//
//        if ($editForm->isSubmitted() && $editForm->isValid()) {
//            $em = $this->getDoctrine()->getManager();
//            $em->persist($cliente);
//            $em->flush();
//
//            return $this->redirectToRoute('cliente_edit', array('id' => $cliente->getId()));
//        }
//
//        return $this->render('LoginBundle:Default:edit.html.twig', array(
//            'cliente' => $cliente,
//            'edit_form' => $editForm->createView(),
//            'delete_form' => $deleteForm->createView(),
//        ));
//    }
//
//    /**
//     * Deletes a Cliente entity.
//     *
//     * @Route("/{id}", name="cliente_delete")
//     * @Method("DELETE")
//     */
//    public function deleteAction(Request $request, Cliente $cliente)
//    {
//        $form = $this->createDeleteForm($cliente);
//        $form->handleRequest($request);
//
//        if ($form->isSubmitted() && $form->isValid()) {
//            $em = $this->getDoctrine()->getManager();
//            $em->remove($cliente);
//            $em->flush();
//        }
//
//        return $this->redirectToRoute('cliente_index');
//    }
//
//    /**
//     * Creates a form to delete a Cliente entity.
//     *
//     * @param Cliente $cliente The Cliente entity
//     *
//     * @return \Symfony\Component\Form\Form The form
//     */
//    private function createDeleteForm(Cliente $cliente)
//    {
//        return $this->createFormBuilder()
//            ->setAction($this->generateUrl('cliente_delete', array('id' => $cliente->getId())))
//            ->setMethod('DELETE')
//            ->getForm()
//        ;
//    }
    
}
