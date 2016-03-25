<?php

/* PaginasBundle:Default:clientes.html.twig */
class __TwigTemplate_f83daa95d8ae64a63cd30745587a46224a98452549e30b1f3888e9f8e9215451 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "PaginasBundle:Default:clientes.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'formulario' => array($this, 'block_formulario'),
            'infocliente' => array($this, 'block_infocliente'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7bea024e44a5326ad906beb662ceeaa1abf719742479136cdc14e5dc3a59fa65 = $this->env->getExtension("native_profiler");
        $__internal_7bea024e44a5326ad906beb662ceeaa1abf719742479136cdc14e5dc3a59fa65->enter($__internal_7bea024e44a5326ad906beb662ceeaa1abf719742479136cdc14e5dc3a59fa65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PaginasBundle:Default:clientes.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7bea024e44a5326ad906beb662ceeaa1abf719742479136cdc14e5dc3a59fa65->leave($__internal_7bea024e44a5326ad906beb662ceeaa1abf719742479136cdc14e5dc3a59fa65_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d891c924c98f664e7a02ecec597aa30e50b20b59c5a2e8b774bc195c67741fcb = $this->env->getExtension("native_profiler");
        $__internal_d891c924c98f664e7a02ecec597aa30e50b20b59c5a2e8b774bc195c67741fcb->enter($__internal_d891c924c98f664e7a02ecec597aa30e50b20b59c5a2e8b774bc195c67741fcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container-fluid\">
        <h2>Clientes</h2>
            ";
        // line 6
        $this->displayBlock('formulario', $context, $blocks);
        // line 7
        echo "            ";
        $this->displayBlock('infocliente', $context, $blocks);
        // line 8
        echo "    </div>
";
        
        $__internal_d891c924c98f664e7a02ecec597aa30e50b20b59c5a2e8b774bc195c67741fcb->leave($__internal_d891c924c98f664e7a02ecec597aa30e50b20b59c5a2e8b774bc195c67741fcb_prof);

    }

    // line 6
    public function block_formulario($context, array $blocks = array())
    {
        $__internal_5d228185efe170c299e4d19fc1f79ac63eca77a13df965ae07342bd0a83b716b = $this->env->getExtension("native_profiler");
        $__internal_5d228185efe170c299e4d19fc1f79ac63eca77a13df965ae07342bd0a83b716b->enter($__internal_5d228185efe170c299e4d19fc1f79ac63eca77a13df965ae07342bd0a83b716b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formulario"));

        
        $__internal_5d228185efe170c299e4d19fc1f79ac63eca77a13df965ae07342bd0a83b716b->leave($__internal_5d228185efe170c299e4d19fc1f79ac63eca77a13df965ae07342bd0a83b716b_prof);

    }

    // line 7
    public function block_infocliente($context, array $blocks = array())
    {
        $__internal_fecbd4b6dd4de718b1739184a389cb318842df39ed7af072a456d004b7b985ac = $this->env->getExtension("native_profiler");
        $__internal_fecbd4b6dd4de718b1739184a389cb318842df39ed7af072a456d004b7b985ac->enter($__internal_fecbd4b6dd4de718b1739184a389cb318842df39ed7af072a456d004b7b985ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "infocliente"));

        
        $__internal_fecbd4b6dd4de718b1739184a389cb318842df39ed7af072a456d004b7b985ac->leave($__internal_fecbd4b6dd4de718b1739184a389cb318842df39ed7af072a456d004b7b985ac_prof);

    }

    public function getTemplateName()
    {
        return "PaginasBundle:Default:clientes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 7,  59 => 6,  51 => 8,  48 => 7,  46 => 6,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <div class="container-fluid">*/
/*         <h2>Clientes</h2>*/
/*             {% block formulario %}{% endblock %}*/
/*             {% block infocliente %}{% endblock %}*/
/*     </div>*/
/* {% endblock %}*/
