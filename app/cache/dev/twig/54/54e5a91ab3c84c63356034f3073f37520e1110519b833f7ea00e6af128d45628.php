<?php

/* PaginasBundle:Default:acercade.html.twig */
class __TwigTemplate_e22c8b9e08ad04cc24c6f83922b72426c9f94d7febb6b1ad995d82c881ea4cb9 extends Twig_Template
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
        $__internal_fac962508dc04a7454a9f56973ffd22b4d6a38c116e6cba167fd4030f24ec228 = $this->env->getExtension("native_profiler");
        $__internal_fac962508dc04a7454a9f56973ffd22b4d6a38c116e6cba167fd4030f24ec228->enter($__internal_fac962508dc04a7454a9f56973ffd22b4d6a38c116e6cba167fd4030f24ec228_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PaginasBundle:Default:acercade.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fac962508dc04a7454a9f56973ffd22b4d6a38c116e6cba167fd4030f24ec228->leave($__internal_fac962508dc04a7454a9f56973ffd22b4d6a38c116e6cba167fd4030f24ec228_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e673aba8bc07768e7d437bf5771240e54a13e8a40b95e7ea2eddf98552999b2c = $this->env->getExtension("native_profiler");
        $__internal_e673aba8bc07768e7d437bf5771240e54a13e8a40b95e7ea2eddf98552999b2c->enter($__internal_e673aba8bc07768e7d437bf5771240e54a13e8a40b95e7ea2eddf98552999b2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo "    
";
        
        $__internal_e673aba8bc07768e7d437bf5771240e54a13e8a40b95e7ea2eddf98552999b2c->leave($__internal_e673aba8bc07768e7d437bf5771240e54a13e8a40b95e7ea2eddf98552999b2c_prof);

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
        return array (  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}    */
/* {% endblock %}*/
