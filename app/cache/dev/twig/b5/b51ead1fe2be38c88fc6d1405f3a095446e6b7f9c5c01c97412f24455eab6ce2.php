<?php

/* PaginasBundle:Default:productos.html.twig */
class __TwigTemplate_40d5837fd31823ecff5dd726f41c39109ee95a7774ac7c538b252f805ee4e45f extends Twig_Template
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
        $__internal_65036bf56d6c2562a7d0cd06682f47fbea28d385974b144e0122f3b5b6e73dfc = $this->env->getExtension("native_profiler");
        $__internal_65036bf56d6c2562a7d0cd06682f47fbea28d385974b144e0122f3b5b6e73dfc->enter($__internal_65036bf56d6c2562a7d0cd06682f47fbea28d385974b144e0122f3b5b6e73dfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PaginasBundle:Default:productos.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_65036bf56d6c2562a7d0cd06682f47fbea28d385974b144e0122f3b5b6e73dfc->leave($__internal_65036bf56d6c2562a7d0cd06682f47fbea28d385974b144e0122f3b5b6e73dfc_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_62c92c5224b8c2a2f8f3345ec67687a4646de5804adb4b0642f58155ca6c3761 = $this->env->getExtension("native_profiler");
        $__internal_62c92c5224b8c2a2f8f3345ec67687a4646de5804adb4b0642f58155ca6c3761->enter($__internal_62c92c5224b8c2a2f8f3345ec67687a4646de5804adb4b0642f58155ca6c3761_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"row\">
        <h2 class=\"roboto\">Productos</h2>
    </div>
    <div class=\"row\">
        <div class=\"col-sm-6 col-md-4\">
            <div class=\"thumbnail\">
                <img src=\"https://media-cdn.tripadvisor.com/media/photo-s/02/f6/14/ca/carmelita-s-fish-taco.jpg\" alt=\"...\">
                <div class=\"caption\">
                    <h3>Nombre producto</h3>
                    <p>
                        Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
                    </p>
                </div>
            </div>
        </div>

        <div class=\"col-sm-6 col-md-4\">
            <div class=\"thumbnail\">
                <img src=\"https://media-cdn.tripadvisor.com/media/photo-s/02/f6/14/ca/carmelita-s-fish-taco.jpg\" alt=\"...\">
                <div class=\"caption\">
                    <h3>Nombre producto</h3>
                    <p>
                        Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
                    </p>
                </div>
            </div>
        </div>

        <div class=\"col-sm-6 col-md-4\">
            <div class=\"thumbnail\">
                <img src=\"https://media-cdn.tripadvisor.com/media/photo-s/02/f6/14/ca/carmelita-s-fish-taco.jpg\" alt=\"...\">
                <div class=\"caption\">
                    <h3>Nombre producto</h3>
                    <p>
                        Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
                    </p>
                </div>
            </div>
        </div>            
    </div>


";
        
        $__internal_62c92c5224b8c2a2f8f3345ec67687a4646de5804adb4b0642f58155ca6c3761->leave($__internal_62c92c5224b8c2a2f8f3345ec67687a4646de5804adb4b0642f58155ca6c3761_prof);

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
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <div class="row">*/
/*         <h2 class="roboto">Productos</h2>*/
/*     </div>*/
/*     <div class="row">*/
/*         <div class="col-sm-6 col-md-4">*/
/*             <div class="thumbnail">*/
/*                 <img src="https://media-cdn.tripadvisor.com/media/photo-s/02/f6/14/ca/carmelita-s-fish-taco.jpg" alt="...">*/
/*                 <div class="caption">*/
/*                     <h3>Nombre producto</h3>*/
/*                     <p>*/
/*                         Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.*/
/*                     </p>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="col-sm-6 col-md-4">*/
/*             <div class="thumbnail">*/
/*                 <img src="https://media-cdn.tripadvisor.com/media/photo-s/02/f6/14/ca/carmelita-s-fish-taco.jpg" alt="...">*/
/*                 <div class="caption">*/
/*                     <h3>Nombre producto</h3>*/
/*                     <p>*/
/*                         Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.*/
/*                     </p>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="col-sm-6 col-md-4">*/
/*             <div class="thumbnail">*/
/*                 <img src="https://media-cdn.tripadvisor.com/media/photo-s/02/f6/14/ca/carmelita-s-fish-taco.jpg" alt="...">*/
/*                 <div class="caption">*/
/*                     <h3>Nombre producto</h3>*/
/*                     <p>*/
/*                         Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.*/
/*                     </p>*/
/*                 </div>*/
/*             </div>*/
/*         </div>            */
/*     </div>*/
/* */
/* */
/* {% endblock %}*/
