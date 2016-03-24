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
        $__internal_2ad433a3988ff2fd8c1089099230b9034f4f1812822b9620e42aae259821877a = $this->env->getExtension("native_profiler");
        $__internal_2ad433a3988ff2fd8c1089099230b9034f4f1812822b9620e42aae259821877a->enter($__internal_2ad433a3988ff2fd8c1089099230b9034f4f1812822b9620e42aae259821877a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PaginasBundle:Default:historia.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2ad433a3988ff2fd8c1089099230b9034f4f1812822b9620e42aae259821877a->leave($__internal_2ad433a3988ff2fd8c1089099230b9034f4f1812822b9620e42aae259821877a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_68463491cb6657e779c1ea2c11989c963fbb32087c2c1204fe52782e3df09080 = $this->env->getExtension("native_profiler");
        $__internal_68463491cb6657e779c1ea2c11989c963fbb32087c2c1204fe52782e3df09080->enter($__internal_68463491cb6657e779c1ea2c11989c963fbb32087c2c1204fe52782e3df09080_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h3>Historia</h3>

    <div>
        Mision
    </div>


";
        
        $__internal_68463491cb6657e779c1ea2c11989c963fbb32087c2c1204fe52782e3df09080->leave($__internal_68463491cb6657e779c1ea2c11989c963fbb32087c2c1204fe52782e3df09080_prof);

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
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h3>Historia</h3>*/
/* */
/*     <div>*/
/*         Mision*/
/*     </div>*/
/* */
/* */
/* {% endblock %}*/
