<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_310f31633b68cc6a213f49dd319263f1175e43b95bdfbef827a42b914379d51c extends Twig_Template
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
        $__internal_c317982d870db5a2cf91829b85d5dcf174692dde1f4a5f7458e06e25ac796e19 = $this->env->getExtension("native_profiler");
        $__internal_c317982d870db5a2cf91829b85d5dcf174692dde1f4a5f7458e06e25ac796e19->enter($__internal_c317982d870db5a2cf91829b85d5dcf174692dde1f4a5f7458e06e25ac796e19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c317982d870db5a2cf91829b85d5dcf174692dde1f4a5f7458e06e25ac796e19->leave($__internal_c317982d870db5a2cf91829b85d5dcf174692dde1f4a5f7458e06e25ac796e19_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9c5af7259aed628fec0c1d74b4c2d16dfbf33542b3f8e8c3ebd69938a0f32306 = $this->env->getExtension("native_profiler");
        $__internal_9c5af7259aed628fec0c1d74b4c2d16dfbf33542b3f8e8c3ebd69938a0f32306->enter($__internal_9c5af7259aed628fec0c1d74b4c2d16dfbf33542b3f8e8c3ebd69938a0f32306_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_9c5af7259aed628fec0c1d74b4c2d16dfbf33542b3f8e8c3ebd69938a0f32306->leave($__internal_9c5af7259aed628fec0c1d74b4c2d16dfbf33542b3f8e8c3ebd69938a0f32306_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_8b64b1b88421a20a276532069f58bb658f4631845c4a5faaae13091bc88dc156 = $this->env->getExtension("native_profiler");
        $__internal_8b64b1b88421a20a276532069f58bb658f4631845c4a5faaae13091bc88dc156->enter($__internal_8b64b1b88421a20a276532069f58bb658f4631845c4a5faaae13091bc88dc156_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_8b64b1b88421a20a276532069f58bb658f4631845c4a5faaae13091bc88dc156->leave($__internal_8b64b1b88421a20a276532069f58bb658f4631845c4a5faaae13091bc88dc156_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_0549a88a95c215041ef5ea1a7066d708fd3fa9c37255c9b94ef799ffedc66e8f = $this->env->getExtension("native_profiler");
        $__internal_0549a88a95c215041ef5ea1a7066d708fd3fa9c37255c9b94ef799ffedc66e8f->enter($__internal_0549a88a95c215041ef5ea1a7066d708fd3fa9c37255c9b94ef799ffedc66e8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_0549a88a95c215041ef5ea1a7066d708fd3fa9c37255c9b94ef799ffedc66e8f->leave($__internal_0549a88a95c215041ef5ea1a7066d708fd3fa9c37255c9b94ef799ffedc66e8f_prof);

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
