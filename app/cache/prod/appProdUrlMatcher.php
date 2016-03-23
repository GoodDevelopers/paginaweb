<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // index
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'index');
            }

            return array (  '_controller' => 'PaginasBundle\\Controller\\DefaultController::indexAction',  '_route' => 'index',);
        }

        // historia
        if (rtrim($pathinfo, '/') === '/historia') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'historia');
            }

            return array (  '_controller' => 'PaginasBundle\\Controller\\DefaultController::historiaAction',  '_route' => 'historia',);
        }

        // productos
        if (rtrim($pathinfo, '/') === '/productos') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'productos');
            }

            return array (  '_controller' => 'PaginasBundle\\Controller\\DefaultController::productosAction',  '_route' => 'productos',);
        }

        if (0 === strpos($pathinfo, '/c')) {
            // clientes
            if (rtrim($pathinfo, '/') === '/clientes') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'clientes');
                }

                return array (  '_controller' => 'PaginasBundle\\Controller\\DefaultController::clientesAction',  '_route' => 'clientes',);
            }

            // contacto
            if (rtrim($pathinfo, '/') === '/contacto') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'contacto');
                }

                return array (  '_controller' => 'PaginasBundle\\Controller\\DefaultController::contactoAction',  '_route' => 'contacto',);
            }

        }

        // acercade
        if (rtrim($pathinfo, '/') === '/acercade') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'acercade');
            }

            return array (  '_controller' => 'PaginasBundle\\Controller\\DefaultController::acercadeAction',  '_route' => 'acercade',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
