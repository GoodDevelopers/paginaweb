<?php

/* PaginasBundle:Default:contacto.html.twig */
class __TwigTemplate_1f4311c4ee20cbf5f16a87afb4ba7a01169622254e928187a7423a8429fed385 extends Twig_Template
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
        $__internal_46516e064dddabea6a36564e41fcfcb8823bbabfcc6b595a01d8d7e5f2c2140c = $this->env->getExtension("native_profiler");
        $__internal_46516e064dddabea6a36564e41fcfcb8823bbabfcc6b595a01d8d7e5f2c2140c->enter($__internal_46516e064dddabea6a36564e41fcfcb8823bbabfcc6b595a01d8d7e5f2c2140c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PaginasBundle:Default:contacto.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_46516e064dddabea6a36564e41fcfcb8823bbabfcc6b595a01d8d7e5f2c2140c->leave($__internal_46516e064dddabea6a36564e41fcfcb8823bbabfcc6b595a01d8d7e5f2c2140c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8ae0c5e7d60b1769c770b0ca068c66e20619b15dc32e2054baf5e97082ec7497 = $this->env->getExtension("native_profiler");
        $__internal_8ae0c5e7d60b1769c770b0ca068c66e20619b15dc32e2054baf5e97082ec7497->enter($__internal_8ae0c5e7d60b1769c770b0ca068c66e20619b15dc32e2054baf5e97082ec7497_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"row\">
        <h2 class=\"roboto\">Contacto</h2>
    </div>

    <div class=\"row\">            
        <h3>Ubicacion</h3>
        <div class=\"col-xs-12 col-sm-6\">
            <div class=\"embed-responsive embed-responsive-4by3\">
                <iframe class=\"embed-responsive-item\" src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1580.3566737589604!2d-76.31114438814384!3d3.5298134872196125!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3a04f0978bab47%3A0xc9a05095ddf5b56c!2sChanfle+Taquer%C3%ADa!5e0!3m2!1ses-419!2sco!4v1458579641316\"></iframe>
            </div>
        </div>          

    </div> 
";
        
        $__internal_8ae0c5e7d60b1769c770b0ca068c66e20619b15dc32e2054baf5e97082ec7497->leave($__internal_8ae0c5e7d60b1769c770b0ca068c66e20619b15dc32e2054baf5e97082ec7497_prof);

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
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <div class="row">*/
/*         <h2 class="roboto">Contacto</h2>*/
/*     </div>*/
/* */
/*     <div class="row">            */
/*         <h3>Ubicacion</h3>*/
/*         <div class="col-xs-12 col-sm-6">*/
/*             <div class="embed-responsive embed-responsive-4by3">*/
/*                 <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1580.3566737589604!2d-76.31114438814384!3d3.5298134872196125!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3a04f0978bab47%3A0xc9a05095ddf5b56c!2sChanfle+Taquer%C3%ADa!5e0!3m2!1ses-419!2sco!4v1458579641316"></iframe>*/
/*             </div>*/
/*         </div>          */
/* */
/*     </div> */
/* {% endblock %}*/
