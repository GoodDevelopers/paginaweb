<?php

/* PaginasBundle:Default:historia.html.twig */
class __TwigTemplate_ca876ad223f3958310225b04b58efda5115c937ddcaf09afea04b213aa7ae4b2 extends Twig_Template
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
        $__internal_9603c9f069d426805543e816c2c18ba98acb85a1e719e37d957eb8d49cc4e7ba = $this->env->getExtension("native_profiler");
        $__internal_9603c9f069d426805543e816c2c18ba98acb85a1e719e37d957eb8d49cc4e7ba->enter($__internal_9603c9f069d426805543e816c2c18ba98acb85a1e719e37d957eb8d49cc4e7ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PaginasBundle:Default:historia.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9603c9f069d426805543e816c2c18ba98acb85a1e719e37d957eb8d49cc4e7ba->leave($__internal_9603c9f069d426805543e816c2c18ba98acb85a1e719e37d957eb8d49cc4e7ba_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5e729dd9643a8c060f56702d828165b4a1f63394bda55a8ae23c7fd4ea81f336 = $this->env->getExtension("native_profiler");
        $__internal_5e729dd9643a8c060f56702d828165b4a1f63394bda55a8ae23c7fd4ea81f336->enter($__internal_5e729dd9643a8c060f56702d828165b4a1f63394bda55a8ae23c7fd4ea81f336_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo "    
    <h3>Historia</h3>
    
";
        
        $__internal_5e729dd9643a8c060f56702d828165b4a1f63394bda55a8ae23c7fd4ea81f336->leave($__internal_5e729dd9643a8c060f56702d828165b4a1f63394bda55a8ae23c7fd4ea81f336_prof);

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
        return array (  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}    */
/*     <h3>Historia</h3>*/
/*     */
/* {% endblock %}*/
