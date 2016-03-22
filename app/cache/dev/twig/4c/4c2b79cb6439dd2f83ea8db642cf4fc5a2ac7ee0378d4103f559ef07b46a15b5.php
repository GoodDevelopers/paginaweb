<?php

/* PaginasBundle:Default:formulario.html.twig */
class __TwigTemplate_241748aa5c2ea87e2478c1eeffae0ebc4bf3f587f2597d1656ec7ded65f6441d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PaginasBundle:clientes.html.twig", "PaginasBundle:Default:formulario.html.twig", 1);
        $this->blocks = array(
            'formulario' => array($this, 'block_formulario'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PaginasBundle:clientes.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_813b6e347b7cda8195522396b27cdb1d9230099fa777815742132deb371776b1 = $this->env->getExtension("native_profiler");
        $__internal_813b6e347b7cda8195522396b27cdb1d9230099fa777815742132deb371776b1->enter($__internal_813b6e347b7cda8195522396b27cdb1d9230099fa777815742132deb371776b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PaginasBundle:Default:formulario.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_813b6e347b7cda8195522396b27cdb1d9230099fa777815742132deb371776b1->leave($__internal_813b6e347b7cda8195522396b27cdb1d9230099fa777815742132deb371776b1_prof);

    }

    // line 3
    public function block_formulario($context, array $blocks = array())
    {
        $__internal_753949651a6343d45a2cbb199c1620496502bcba6a6f2e0056deaf8d8943cc8c = $this->env->getExtension("native_profiler");
        $__internal_753949651a6343d45a2cbb199c1620496502bcba6a6f2e0056deaf8d8943cc8c->enter($__internal_753949651a6343d45a2cbb199c1620496502bcba6a6f2e0056deaf8d8943cc8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formulario"));

        // line 4
        echo "    Formulario
";
        
        $__internal_753949651a6343d45a2cbb199c1620496502bcba6a6f2e0056deaf8d8943cc8c->leave($__internal_753949651a6343d45a2cbb199c1620496502bcba6a6f2e0056deaf8d8943cc8c_prof);

    }

    public function getTemplateName()
    {
        return "PaginasBundle:Default:formulario.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'PaginasBundle:clientes.html.twig' %}*/
/* */
/* {% block formulario %}*/
/*     Formulario*/
/* {% endblock %}*/
/*     */
/* */
