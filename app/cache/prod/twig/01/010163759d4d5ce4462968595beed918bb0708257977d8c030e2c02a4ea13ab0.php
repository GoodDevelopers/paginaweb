<?php

/* PaginasBundle:Default:historia.html.twig */
class __TwigTemplate_24b9583f1fd045a57d4c46ea0eccf9212d9363d5c2f4dbdb03e7d6dfd10b0ed4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "PaginasBundle:Default:historia.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        echo "    
    <h3>Historia</h3>
    
";
    }

    public function getTemplateName()
    {
        return "PaginasBundle:Default:historia.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}    */
/*     <h3>Historia</h3>*/
/*     */
/* {% endblock %}*/
