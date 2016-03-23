<?php

/* PaginasBundle:Default:contacto.html.twig */
class __TwigTemplate_18ba9bf4a6c74e3519925a6f90d37a5c2a188c8aa2deb5e5d3167df3f6a74ce6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "PaginasBundle:Default:contacto.html.twig", 1);
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
        $__internal_3892fea98a0760d0085b43ecef84586332d1a3b9c4334c35933fdd78f667a0d5 = $this->env->getExtension("native_profiler");
        $__internal_3892fea98a0760d0085b43ecef84586332d1a3b9c4334c35933fdd78f667a0d5->enter($__internal_3892fea98a0760d0085b43ecef84586332d1a3b9c4334c35933fdd78f667a0d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PaginasBundle:Default:contacto.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3892fea98a0760d0085b43ecef84586332d1a3b9c4334c35933fdd78f667a0d5->leave($__internal_3892fea98a0760d0085b43ecef84586332d1a3b9c4334c35933fdd78f667a0d5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7c1ef7de2177407ce79508291f7f7c7daee995d3f39c6859399bd64d776fb21c = $this->env->getExtension("native_profiler");
        $__internal_7c1ef7de2177407ce79508291f7f7c7daee995d3f39c6859399bd64d776fb21c->enter($__internal_7c1ef7de2177407ce79508291f7f7c7daee995d3f39c6859399bd64d776fb21c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container\">
        <h3>Contacto</h3>

        <div class=\"row\">
            <div class=\"col-xs-6 col-sm-1\">
                <div class=\"embed-responsive embed-responsive-4by3\">
                    <img class=\"embed-responsive-item\" 
                         src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/chanfle/img/logofb.jpg"), "html", null, true);
        echo "\">
                </div>
            </div>
            <div class=\"col-xs-12 col-sm-6\">
                <div class=\"embed-responsive embed-responsive-4by3\">
                    <iframe class=\"embed-responsive-item\" src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1580.3566737589604!2d-76.31114438814384!3d3.5298134872196125!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3a04f0978bab47%3A0xc9a05095ddf5b56c!2sChanfle+Taquer%C3%ADa!5e0!3m2!1ses-419!2sco!4v1458579641316\"></iframe>
                </div>
            </div>            


        </div> <!-- /fila -->

    </div> <!-- /container -->

";
        
        $__internal_7c1ef7de2177407ce79508291f7f7c7daee995d3f39c6859399bd64d776fb21c->leave($__internal_7c1ef7de2177407ce79508291f7f7c7daee995d3f39c6859399bd64d776fb21c_prof);

    }

    public function getTemplateName()
    {
        return "PaginasBundle:Default:contacto.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 11,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <div class="container">*/
/*         <h3>Contacto</h3>*/
/* */
/*         <div class="row">*/
/*             <div class="col-xs-6 col-sm-1">*/
/*                 <div class="embed-responsive embed-responsive-4by3">*/
/*                     <img class="embed-responsive-item" */
/*                          src="{{ asset('bundles/chanfle/img/logofb.jpg') }}">*/
/*                 </div>*/
/*             </div>*/
/*             <div class="col-xs-12 col-sm-6">*/
/*                 <div class="embed-responsive embed-responsive-4by3">*/
/*                     <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1580.3566737589604!2d-76.31114438814384!3d3.5298134872196125!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3a04f0978bab47%3A0xc9a05095ddf5b56c!2sChanfle+Taquer%C3%ADa!5e0!3m2!1ses-419!2sco!4v1458579641316"></iframe>*/
/*                 </div>*/
/*             </div>            */
/* */
/* */
/*         </div> <!-- /fila -->*/
/* */
/*     </div> <!-- /container -->*/
/* */
/* {% endblock %}*/
