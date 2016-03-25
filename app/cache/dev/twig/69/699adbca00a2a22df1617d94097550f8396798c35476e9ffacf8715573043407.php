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
        $__internal_47b2438db2a0868a1accd97b578c460b4fee8db089b5ad33820f8bef0906cd33 = $this->env->getExtension("native_profiler");
        $__internal_47b2438db2a0868a1accd97b578c460b4fee8db089b5ad33820f8bef0906cd33->enter($__internal_47b2438db2a0868a1accd97b578c460b4fee8db089b5ad33820f8bef0906cd33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PaginasBundle:Default:productos.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_47b2438db2a0868a1accd97b578c460b4fee8db089b5ad33820f8bef0906cd33->leave($__internal_47b2438db2a0868a1accd97b578c460b4fee8db089b5ad33820f8bef0906cd33_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2131e95fad7107a9c11678b5c9d94fbb4ca8989370d3e547c99b4f60e3fda838 = $this->env->getExtension("native_profiler");
        $__internal_2131e95fad7107a9c11678b5c9d94fbb4ca8989370d3e547c99b4f60e3fda838->enter($__internal_2131e95fad7107a9c11678b5c9d94fbb4ca8989370d3e547c99b4f60e3fda838_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container-fluid\">
        <h2 class=\"\">Productos</h2>
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
        
        $__internal_2131e95fad7107a9c11678b5c9d94fbb4ca8989370d3e547c99b4f60e3fda838->leave($__internal_2131e95fad7107a9c11678b5c9d94fbb4ca8989370d3e547c99b4f60e3fda838_prof);

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
/*     <div class="container-fluid">*/
/*         <h2 class="">Productos</h2>*/
/*         <div class="row">*/
/*             <div class="col-sm-6 col-md-4">*/
/*                 <div class="thumbnail">*/
/*                     <img src="https://media-cdn.tripadvisor.com/media/photo-s/02/f6/14/ca/carmelita-s-fish-taco.jpg" alt="...">*/
/*                     <div class="caption">*/
/*                         <h3>Nombre producto</h3>*/
/*                         <p>*/
/*                             Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.*/
/*                         </p>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             */
/*             <div class="col-sm-6 col-md-4">*/
/*                 <div class="thumbnail">*/
/*                     <img src="https://media-cdn.tripadvisor.com/media/photo-s/02/f6/14/ca/carmelita-s-fish-taco.jpg" alt="...">*/
/*                     <div class="caption">*/
/*                         <h3>Nombre producto</h3>*/
/*                         <p>*/
/*                             Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.*/
/*                         </p>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             */
/*             <div class="col-sm-6 col-md-4">*/
/*                 <div class="thumbnail">*/
/*                     <img src="https://media-cdn.tripadvisor.com/media/photo-s/02/f6/14/ca/carmelita-s-fish-taco.jpg" alt="...">*/
/*                     <div class="caption">*/
/*                         <h3>Nombre producto</h3>*/
/*                         <p>*/
/*                             Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.*/
/*                         </p>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>            */
/*         </div>*/
/* */
/* */
/*     {% endblock %}*/
