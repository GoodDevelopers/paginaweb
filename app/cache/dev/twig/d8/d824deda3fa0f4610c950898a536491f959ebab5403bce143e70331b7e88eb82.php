<?php

/* PaginasBundle:Default:index.html.twig */
class __TwigTemplate_6b1844fac35cff0f967649ab159612b0ce7ea22448628d27cb92941c290f5108 extends Twig_Template
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
        $__internal_8cc2de2c9775a63fabc2accd6bf758835ca6e592361c8b3976aba55470a439b2 = $this->env->getExtension("native_profiler");
        $__internal_8cc2de2c9775a63fabc2accd6bf758835ca6e592361c8b3976aba55470a439b2->enter($__internal_8cc2de2c9775a63fabc2accd6bf758835ca6e592361c8b3976aba55470a439b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PaginasBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8cc2de2c9775a63fabc2accd6bf758835ca6e592361c8b3976aba55470a439b2->leave($__internal_8cc2de2c9775a63fabc2accd6bf758835ca6e592361c8b3976aba55470a439b2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_62354fe4cfbc738691c3802ac5393fc6423e75195cc440dff3a46dc4bf23ba8b = $this->env->getExtension("native_profiler");
        $__internal_62354fe4cfbc738691c3802ac5393fc6423e75195cc440dff3a46dc4bf23ba8b->enter($__internal_62354fe4cfbc738691c3802ac5393fc6423e75195cc440dff3a46dc4bf23ba8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_62354fe4cfbc738691c3802ac5393fc6423e75195cc440dff3a46dc4bf23ba8b->leave($__internal_62354fe4cfbc738691c3802ac5393fc6423e75195cc440dff3a46dc4bf23ba8b_prof);

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
