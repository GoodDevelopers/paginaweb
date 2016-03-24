<?php

/* PaginasBundle:Default:productos.html.twig */
class __TwigTemplate_3cc97bc6e13cc924ea79d09b9467c64ccf85c424c4de585fd8d7fc9145a35dfc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "PaginasBundle:Default:productos.html.twig", 1);
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
        $__internal_e3348cc5ffbbac18c5df0b47a7d05361ce5be571f4cbdde1fab8096e78d2dbb8 = $this->env->getExtension("native_profiler");
        $__internal_e3348cc5ffbbac18c5df0b47a7d05361ce5be571f4cbdde1fab8096e78d2dbb8->enter($__internal_e3348cc5ffbbac18c5df0b47a7d05361ce5be571f4cbdde1fab8096e78d2dbb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PaginasBundle:Default:productos.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e3348cc5ffbbac18c5df0b47a7d05361ce5be571f4cbdde1fab8096e78d2dbb8->leave($__internal_e3348cc5ffbbac18c5df0b47a7d05361ce5be571f4cbdde1fab8096e78d2dbb8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4bedc54a09a4b14f51daf7c859f374dfb1966e08517d4e289bae3f10e09f9af8 = $this->env->getExtension("native_profiler");
        $__internal_4bedc54a09a4b14f51daf7c859f374dfb1966e08517d4e289bae3f10e09f9af8->enter($__internal_4bedc54a09a4b14f51daf7c859f374dfb1966e08517d4e289bae3f10e09f9af8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h2>Productos</h2>
";
        
        $__internal_4bedc54a09a4b14f51daf7c859f374dfb1966e08517d4e289bae3f10e09f9af8->leave($__internal_4bedc54a09a4b14f51daf7c859f374dfb1966e08517d4e289bae3f10e09f9af8_prof);

    }

    public function getTemplateName()
    {
        return "PaginasBundle:Default:productos.html.twig";
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
/*     <h2>Productos</h2>*/
/* {% endblock %}*/
