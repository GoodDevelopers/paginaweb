<?php

/* PaginasBundle:Default:productos.html.twig */
class __TwigTemplate_6120fcf6d07caf91cb2039d6ae691a0d3180daa88e277b0b6f0da7d88063f194 extends Twig_Template
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
        $__internal_2c7ae57ced6e13881a2c6d3b61a62df75d9194f9600b8d00a6ceadb1eb9db464 = $this->env->getExtension("native_profiler");
        $__internal_2c7ae57ced6e13881a2c6d3b61a62df75d9194f9600b8d00a6ceadb1eb9db464->enter($__internal_2c7ae57ced6e13881a2c6d3b61a62df75d9194f9600b8d00a6ceadb1eb9db464_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PaginasBundle:Default:productos.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2c7ae57ced6e13881a2c6d3b61a62df75d9194f9600b8d00a6ceadb1eb9db464->leave($__internal_2c7ae57ced6e13881a2c6d3b61a62df75d9194f9600b8d00a6ceadb1eb9db464_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_61a89422397df88de533f7d4c2cba163918011ea55136733fa6757db64eb1650 = $this->env->getExtension("native_profiler");
        $__internal_61a89422397df88de533f7d4c2cba163918011ea55136733fa6757db64eb1650->enter($__internal_61a89422397df88de533f7d4c2cba163918011ea55136733fa6757db64eb1650_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo "    
";
        
        $__internal_61a89422397df88de533f7d4c2cba163918011ea55136733fa6757db64eb1650->leave($__internal_61a89422397df88de533f7d4c2cba163918011ea55136733fa6757db64eb1650_prof);

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
        return array (  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}    */
/* {% endblock %}*/
