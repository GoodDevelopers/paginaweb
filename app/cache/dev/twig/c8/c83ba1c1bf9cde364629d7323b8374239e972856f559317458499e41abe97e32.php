<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_4eaf70d5a3b54a1d36ae5f03aaad7b650d23ab601d4e5972dc74f66b61e14ed5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1a6fc5a537d61224f487d48804183164942ea843d48076c8f48885b6c693a064 = $this->env->getExtension("native_profiler");
        $__internal_1a6fc5a537d61224f487d48804183164942ea843d48076c8f48885b6c693a064->enter($__internal_1a6fc5a537d61224f487d48804183164942ea843d48076c8f48885b6c693a064_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1a6fc5a537d61224f487d48804183164942ea843d48076c8f48885b6c693a064->leave($__internal_1a6fc5a537d61224f487d48804183164942ea843d48076c8f48885b6c693a064_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_270ee8a60a8716a05ffaefda0bf805d59772228bdfc5fc674bb9021f83010c9a = $this->env->getExtension("native_profiler");
        $__internal_270ee8a60a8716a05ffaefda0bf805d59772228bdfc5fc674bb9021f83010c9a->enter($__internal_270ee8a60a8716a05ffaefda0bf805d59772228bdfc5fc674bb9021f83010c9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_270ee8a60a8716a05ffaefda0bf805d59772228bdfc5fc674bb9021f83010c9a->leave($__internal_270ee8a60a8716a05ffaefda0bf805d59772228bdfc5fc674bb9021f83010c9a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_8733ae06363a8561c24023cf5d2c6d72d06f04a950beb786d4bd5d3f2bb5c254 = $this->env->getExtension("native_profiler");
        $__internal_8733ae06363a8561c24023cf5d2c6d72d06f04a950beb786d4bd5d3f2bb5c254->enter($__internal_8733ae06363a8561c24023cf5d2c6d72d06f04a950beb786d4bd5d3f2bb5c254_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_8733ae06363a8561c24023cf5d2c6d72d06f04a950beb786d4bd5d3f2bb5c254->leave($__internal_8733ae06363a8561c24023cf5d2c6d72d06f04a950beb786d4bd5d3f2bb5c254_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_668dc7f2f0e8ee1dbc95f822c24ec1c759762002620ad020f133faf94dfd8a22 = $this->env->getExtension("native_profiler");
        $__internal_668dc7f2f0e8ee1dbc95f822c24ec1c759762002620ad020f133faf94dfd8a22->enter($__internal_668dc7f2f0e8ee1dbc95f822c24ec1c759762002620ad020f133faf94dfd8a22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_668dc7f2f0e8ee1dbc95f822c24ec1c759762002620ad020f133faf94dfd8a22->leave($__internal_668dc7f2f0e8ee1dbc95f822c24ec1c759762002620ad020f133faf94dfd8a22_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
