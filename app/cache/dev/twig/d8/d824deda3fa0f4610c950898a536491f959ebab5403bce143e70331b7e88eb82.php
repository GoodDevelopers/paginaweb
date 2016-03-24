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
        $__internal_d8780aff58f735c0a215e3ccc7e00267387e0df9c65c14ed6609a243263bb3ed = $this->env->getExtension("native_profiler");
        $__internal_d8780aff58f735c0a215e3ccc7e00267387e0df9c65c14ed6609a243263bb3ed->enter($__internal_d8780aff58f735c0a215e3ccc7e00267387e0df9c65c14ed6609a243263bb3ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PaginasBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d8780aff58f735c0a215e3ccc7e00267387e0df9c65c14ed6609a243263bb3ed->leave($__internal_d8780aff58f735c0a215e3ccc7e00267387e0df9c65c14ed6609a243263bb3ed_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c05c0e20b1ce1ac893f1bd2718e59008eeb323c1f276415be05368e4ec104613 = $this->env->getExtension("native_profiler");
        $__internal_c05c0e20b1ce1ac893f1bd2718e59008eeb323c1f276415be05368e4ec104613->enter($__internal_c05c0e20b1ce1ac893f1bd2718e59008eeb323c1f276415be05368e4ec104613_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container-fluid\">
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
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/chanfle/img/logo.jpg"), "html", null, true);
        echo "\" height=\"100\" width=\"400\">
                </div>

                <div class=\"item\">
                    <img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/chanfle/img/logo.jpg"), "html", null, true);
        echo "\" height=\"100\" width=\"400\">
                </div>

                <div class=\"item\">
                    <img src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/chanfle/img/logo.jpg"), "html", null, true);
        echo "\" height=\"100\" width=\"400\">
                </div>

                <div class=\"item\">
                    <img src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/chanfle/img/logo.jpg"), "html", null, true);
        echo "\" height=\"100\" width=\"400\">
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
    </div>
";
        
        $__internal_c05c0e20b1ce1ac893f1bd2718e59008eeb323c1f276415be05368e4ec104613->leave($__internal_c05c0e20b1ce1ac893f1bd2718e59008eeb323c1f276415be05368e4ec104613_prof);

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
        return array (  76 => 29,  69 => 25,  62 => 21,  55 => 17,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <div class="container-fluid">*/
/*         <div id="myCarousel" class="carousel slide" data-ride="carousel">*/
/*             <!-- Indicadores -->*/
/*             <ol class="carousel-indicators">*/
/*                 <li data-target="#myCarousel" data-slide-to="0" class="active"></li>*/
/*                 <li data-target="#myCarousel" data-slide-to="1"></li>*/
/*                 <li data-target="#myCarousel" data-slide-to="2"></li>*/
/*                 <li data-target="#myCarousel" data-slide-to="3"></li>*/
/*             </ol>*/
/* */
/*             <!-- Imagenes -->*/
/*             <div class="carousel-inner" role="listbox">*/
/*                 <div class="item active">*/
/*                     <img src="{{ asset('bundles/chanfle/img/logo.jpg') }}" height="100" width="400">*/
/*                 </div>*/
/* */
/*                 <div class="item">*/
/*                     <img src="{{ asset('bundles/chanfle/img/logo.jpg') }}" height="100" width="400">*/
/*                 </div>*/
/* */
/*                 <div class="item">*/
/*                     <img src="{{ asset('bundles/chanfle/img/logo.jpg') }}" height="100" width="400">*/
/*                 </div>*/
/* */
/*                 <div class="item">*/
/*                     <img src="{{ asset('bundles/chanfle/img/logo.jpg') }}" height="100" width="400">*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <!-- Controles (iconos) -->*/
/*             <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">*/
/*                 <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>*/
/*                 <span class="sr-only">Previous</span>*/
/*             </a>*/
/*             <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">*/
/*                 <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>*/
/*                 <span class="sr-only">Next</span>*/
/*             </a>*/
/*         </div> <!-- /Carrusel -->     */
/*     </div>*/
/* {% endblock %}*/
