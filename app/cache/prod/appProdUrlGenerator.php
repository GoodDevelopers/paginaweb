<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PaginasBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'historia' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PaginasBundle\\Controller\\DefaultController::historiaAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/historia/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'productos' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PaginasBundle\\Controller\\DefaultController::productosAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/productos/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'clientes' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PaginasBundle\\Controller\\DefaultController::clientesAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/clientes/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'contacto' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PaginasBundle\\Controller\\DefaultController::contactoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/contacto/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'acercade' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PaginasBundle\\Controller\\DefaultController::acercadeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/acercade/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
