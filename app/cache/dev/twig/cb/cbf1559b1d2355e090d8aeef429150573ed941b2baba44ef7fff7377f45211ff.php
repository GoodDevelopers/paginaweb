<?php

/* PaginasBundle:Default:index.html.twig */
class __TwigTemplate_5b0e9a002cc85f6a30435d7f7171622686e7925eb8d3cb6449c73b46df3a6123 extends Twig_Template
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
        $__internal_5b3455763d97ccc9c3214818a7a2459106da3eeef98fda66a7328479f2fe4ee2 = $this->env->getExtension("native_profiler");
        $__internal_5b3455763d97ccc9c3214818a7a2459106da3eeef98fda66a7328479f2fe4ee2->enter($__internal_5b3455763d97ccc9c3214818a7a2459106da3eeef98fda66a7328479f2fe4ee2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PaginasBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5b3455763d97ccc9c3214818a7a2459106da3eeef98fda66a7328479f2fe4ee2->leave($__internal_5b3455763d97ccc9c3214818a7a2459106da3eeef98fda66a7328479f2fe4ee2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_08cc9057fc656a3c3221e291743e5be22188b71c37f0b4710174a75462b28272 = $this->env->getExtension("native_profiler");
        $__internal_08cc9057fc656a3c3221e291743e5be22188b71c37f0b4710174a75462b28272->enter($__internal_08cc9057fc656a3c3221e291743e5be22188b71c37f0b4710174a75462b28272_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"row\">
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
        
        $__internal_08cc9057fc656a3c3221e291743e5be22188b71c37f0b4710174a75462b28272->leave($__internal_08cc9057fc656a3c3221e291743e5be22188b71c37f0b4710174a75462b28272_prof);

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
/*     <div class="row">*/
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
/*         </div> <!-- /Carrusel -->*/
/*     </div>*/
/* {% endblock %}*/
