<?php

/* LoginBundle:Default:infocliente.html.twig */
class __TwigTemplate_00b0bfeb8fd253e2edd14eaca948dc4d7b7d2f54d3d362b1a656fd92086a9769 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PaginasBundle:Default:clientes.html.twig", "LoginBundle:Default:infocliente.html.twig", 1);
        $this->blocks = array(
            'infocliente' => array($this, 'block_infocliente'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PaginasBundle:Default:clientes.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8df362445866784f11fdf62fbafc84393af6c31037adc428e15652ad879fdb2e = $this->env->getExtension("native_profiler");
        $__internal_8df362445866784f11fdf62fbafc84393af6c31037adc428e15652ad879fdb2e->enter($__internal_8df362445866784f11fdf62fbafc84393af6c31037adc428e15652ad879fdb2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LoginBundle:Default:infocliente.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8df362445866784f11fdf62fbafc84393af6c31037adc428e15652ad879fdb2e->leave($__internal_8df362445866784f11fdf62fbafc84393af6c31037adc428e15652ad879fdb2e_prof);

    }

    // line 3
    public function block_infocliente($context, array $blocks = array())
    {
        $__internal_b05f9d45dd24c49a28271a762545caf3483313e797a3d1b9b2d4f4c685c1f139 = $this->env->getExtension("native_profiler");
        $__internal_b05f9d45dd24c49a28271a762545caf3483313e797a3d1b9b2d4f4c685c1f139->enter($__internal_b05f9d45dd24c49a28271a762545caf3483313e797a3d1b9b2d4f4c685c1f139_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "infocliente"));

        // line 4
        echo "Aqui la info
";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")), "id", array()), "html", null, true);
        echo "
";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")), "nombre", array()), "html", null, true);
        echo "
";
        
        $__internal_b05f9d45dd24c49a28271a762545caf3483313e797a3d1b9b2d4f4c685c1f139->leave($__internal_b05f9d45dd24c49a28271a762545caf3483313e797a3d1b9b2d4f4c685c1f139_prof);

    }

    public function getTemplateName()
    {
        return "LoginBundle:Default:infocliente.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'PaginasBundle:Default:clientes.html.twig' %}*/
/* */
/* {% block infocliente %}*/
/* Aqui la info*/
/* {{cliente.id}}*/
/* {{cliente.nombre}}*/
/* {% endblock %}*/
