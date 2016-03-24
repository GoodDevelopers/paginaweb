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
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8f3e25d757cfc3f1a358e81fd68add20547ec0b33e2b20a6ca63ab0a2e1ade11 = $this->env->getExtension("native_profiler");
        $__internal_8f3e25d757cfc3f1a358e81fd68add20547ec0b33e2b20a6ca63ab0a2e1ade11->enter($__internal_8f3e25d757cfc3f1a358e81fd68add20547ec0b33e2b20a6ca63ab0a2e1ade11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PaginasBundle:Default:clientes.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8f3e25d757cfc3f1a358e81fd68add20547ec0b33e2b20a6ca63ab0a2e1ade11->leave($__internal_8f3e25d757cfc3f1a358e81fd68add20547ec0b33e2b20a6ca63ab0a2e1ade11_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0ace8f4b71bb10ea10db4f4b81b19acee63790262271a795ce229bd3ce681d17 = $this->env->getExtension("native_profiler");
        $__internal_0ace8f4b71bb10ea10db4f4b81b19acee63790262271a795ce229bd3ce681d17->enter($__internal_0ace8f4b71bb10ea10db4f4b81b19acee63790262271a795ce229bd3ce681d17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h2>Clientes</h2>

    <div class=\"container\">  

    ";
        // line 8
        $this->displayBlock('formulario', $context, $blocks);
        // line 9
        echo "


</div>

";
        
        $__internal_0ace8f4b71bb10ea10db4f4b81b19acee63790262271a795ce229bd3ce681d17->leave($__internal_0ace8f4b71bb10ea10db4f4b81b19acee63790262271a795ce229bd3ce681d17_prof);

    }

    // line 8
    public function block_formulario($context, array $blocks = array())
    {
        $__internal_4bd7ab206c4a64d3acfc4e633d9dc62f3a57a0915e49344f753b8f6e32ca9d30 = $this->env->getExtension("native_profiler");
        $__internal_4bd7ab206c4a64d3acfc4e633d9dc62f3a57a0915e49344f753b8f6e32ca9d30->enter($__internal_4bd7ab206c4a64d3acfc4e633d9dc62f3a57a0915e49344f753b8f6e32ca9d30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formulario"));

        
        $__internal_4bd7ab206c4a64d3acfc4e633d9dc62f3a57a0915e49344f753b8f6e32ca9d30->leave($__internal_4bd7ab206c4a64d3acfc4e633d9dc62f3a57a0915e49344f753b8f6e32ca9d30_prof);

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
        return array (  61 => 8,  49 => 9,  47 => 8,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h2>Clientes</h2>*/
/* */
/*     <div class="container">  */
/* */
/*     {% block formulario %}{% endblock %}*/
/* */
/* */
/* */
/* </div>*/
/* */
/* {% endblock %}*/
