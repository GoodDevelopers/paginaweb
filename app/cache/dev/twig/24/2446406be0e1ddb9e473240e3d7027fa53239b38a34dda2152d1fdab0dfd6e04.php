<?php

/* PaginasBundle:Default:acercade.html.twig */
class __TwigTemplate_427cd4f229e8c537019d9c92214692fa57e7d253f3d7623832f33dbafc1847c0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "PaginasBundle:Default:acercade.html.twig", 1);
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
        $__internal_1dea983aca1d529161b32db2c1cc1ea8d4a5b289788c91e67e7ef701fd3b19d8 = $this->env->getExtension("native_profiler");
        $__internal_1dea983aca1d529161b32db2c1cc1ea8d4a5b289788c91e67e7ef701fd3b19d8->enter($__internal_1dea983aca1d529161b32db2c1cc1ea8d4a5b289788c91e67e7ef701fd3b19d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PaginasBundle:Default:acercade.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1dea983aca1d529161b32db2c1cc1ea8d4a5b289788c91e67e7ef701fd3b19d8->leave($__internal_1dea983aca1d529161b32db2c1cc1ea8d4a5b289788c91e67e7ef701fd3b19d8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_064859dbe1cbc8186dabab2264fe358876b6e4f8237497bda3173578e35bf899 = $this->env->getExtension("native_profiler");
        $__internal_064859dbe1cbc8186dabab2264fe358876b6e4f8237497bda3173578e35bf899->enter($__internal_064859dbe1cbc8186dabab2264fe358876b6e4f8237497bda3173578e35bf899_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"row\">
        <h2>Desarrollado por:</h2>
    </div>
";
        
        $__internal_064859dbe1cbc8186dabab2264fe358876b6e4f8237497bda3173578e35bf899->leave($__internal_064859dbe1cbc8186dabab2264fe358876b6e4f8237497bda3173578e35bf899_prof);

    }

    public function getTemplateName()
    {
        return "PaginasBundle:Default:acercade.html.twig";
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
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <div class="row">*/
/*         <h2>Desarrollado por:</h2>*/
/*     </div>*/
/* {% endblock %}*/
