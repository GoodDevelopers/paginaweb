<?php

/* PaginasBundle:Default:index.html.twig */
class __TwigTemplate_bcd63d03c9e5c5d636e871edee05bb7552c5f9d7151b9b530224b0790a272caf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "PaginasBundle:Default:index.html.twig", 1);
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
        $__internal_578fadf82251137212f6604977bbafa9452bbb01e211e85a802df84cc69320f7 = $this->env->getExtension("native_profiler");
        $__internal_578fadf82251137212f6604977bbafa9452bbb01e211e85a802df84cc69320f7->enter($__internal_578fadf82251137212f6604977bbafa9452bbb01e211e85a802df84cc69320f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PaginasBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_578fadf82251137212f6604977bbafa9452bbb01e211e85a802df84cc69320f7->leave($__internal_578fadf82251137212f6604977bbafa9452bbb01e211e85a802df84cc69320f7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_da20d88f20d3125da328110ff7b119e7aa40ca20d9edb9070250e330475bfb55 = $this->env->getExtension("native_profiler");
        $__internal_da20d88f20d3125da328110ff7b119e7aa40ca20d9edb9070250e330475bfb55->enter($__internal_da20d88f20d3125da328110ff7b119e7aa40ca20d9edb9070250e330475bfb55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo "\t\t
        <div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\">
          <!-- Indicadores -->
          <ol class=\"carousel-indicators\">
                <li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"></li>
                <li data-target=\"#myCarousel\" data-slide-to=\"1\"></li>
                <li data-target=\"#myCarousel\" data-slide-to=\"2\"></li>
                <li data-target=\"#myCarousel\" data-slide-to=\"3\"></li>
          </ol>

          <!-- Imagenes -->
          <div class=\"carousel-inner\" role=\"listbox\">
                <div class=\"item active\">
                  <img src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/chanfle/img/logo.jpg"), "html", null, true);
        echo "\" alt=\"Chania\">
                </div>

                <div class=\"item\">
                  <img src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/chanfle/img/logo.jpg"), "html", null, true);
        echo "\" alt=\"Chania\">
                </div>

                <div class=\"item\">
                  <img src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/chanfle/img/logo.jpg"), "html", null, true);
        echo "\" alt=\"Flower\">
                </div>

                <div class=\"item\">
                  <img src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/chanfle/img/logo.jpg"), "html", null, true);
        echo "\" alt=\"Flower\">
                </div>
          </div>

          <!-- Controles (iconos) -->
          <a class=\"left carousel-control\" href=\"#myCarousel\" role=\"button\" data-slide=\"prev\">
                <span class=\"glyphicon glyphicon-chevron-left\" aria-hidden=\"true\"></span>
                <span class=\"sr-only\">Previous</span>
          </a>
          <a class=\"right carousel-control\" href=\"#myCarousel\" role=\"button\" data-slide=\"next\">
                <span class=\"glyphicon glyphicon-chevron-right\" aria-hidden=\"true\"></span>
                <span class=\"sr-only\">Next</span>
          </a>
        </div> <!-- /Carrusel -->     
";
        
        $__internal_da20d88f20d3125da328110ff7b119e7aa40ca20d9edb9070250e330475bfb55->leave($__internal_da20d88f20d3125da328110ff7b119e7aa40ca20d9edb9070250e330475bfb55_prof);

    }

    public function getTemplateName()
    {
        return "PaginasBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 28,  68 => 24,  61 => 20,  54 => 16,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}		*/
/*         <div id="myCarousel" class="carousel slide" data-ride="carousel">*/
/*           <!-- Indicadores -->*/
/*           <ol class="carousel-indicators">*/
/*                 <li data-target="#myCarousel" data-slide-to="0" class="active"></li>*/
/*                 <li data-target="#myCarousel" data-slide-to="1"></li>*/
/*                 <li data-target="#myCarousel" data-slide-to="2"></li>*/
/*                 <li data-target="#myCarousel" data-slide-to="3"></li>*/
/*           </ol>*/
/* */
/*           <!-- Imagenes -->*/
/*           <div class="carousel-inner" role="listbox">*/
/*                 <div class="item active">*/
/*                   <img src="{{ asset('bundles/chanfle/img/logo.jpg') }}" alt="Chania">*/
/*                 </div>*/
/* */
/*                 <div class="item">*/
/*                   <img src="{{ asset('bundles/chanfle/img/logo.jpg') }}" alt="Chania">*/
/*                 </div>*/
/* */
/*                 <div class="item">*/
/*                   <img src="{{ asset('bundles/chanfle/img/logo.jpg') }}" alt="Flower">*/
/*                 </div>*/
/* */
/*                 <div class="item">*/
/*                   <img src="{{ asset('bundles/chanfle/img/logo.jpg') }}" alt="Flower">*/
/*                 </div>*/
/*           </div>*/
/* */
/*           <!-- Controles (iconos) -->*/
/*           <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">*/
/*                 <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>*/
/*                 <span class="sr-only">Previous</span>*/
/*           </a>*/
/*           <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">*/
/*                 <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>*/
/*                 <span class="sr-only">Next</span>*/
/*           </a>*/
/*         </div> <!-- /Carrusel -->     */
/* {% endblock %}*/
