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
        $__internal_fd425758a67cf9d826ec96401a0aeb2035f3eaabc837b5fdb887cec6598f98c1 = $this->env->getExtension("native_profiler");
        $__internal_fd425758a67cf9d826ec96401a0aeb2035f3eaabc837b5fdb887cec6598f98c1->enter($__internal_fd425758a67cf9d826ec96401a0aeb2035f3eaabc837b5fdb887cec6598f98c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PaginasBundle:Default:productos.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fd425758a67cf9d826ec96401a0aeb2035f3eaabc837b5fdb887cec6598f98c1->leave($__internal_fd425758a67cf9d826ec96401a0aeb2035f3eaabc837b5fdb887cec6598f98c1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3ac5966b3ee214583a61ac89cf432907d1a84b04b2f3da26267bb4d0a2dc7f95 = $this->env->getExtension("native_profiler");
        $__internal_3ac5966b3ee214583a61ac89cf432907d1a84b04b2f3da26267bb4d0a2dc7f95->enter($__internal_3ac5966b3ee214583a61ac89cf432907d1a84b04b2f3da26267bb4d0a2dc7f95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo "    
";
        
        $__internal_3ac5966b3ee214583a61ac89cf432907d1a84b04b2f3da26267bb4d0a2dc7f95->leave($__internal_3ac5966b3ee214583a61ac89cf432907d1a84b04b2f3da26267bb4d0a2dc7f95_prof);

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
