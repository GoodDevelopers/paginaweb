<?php

/* PaginasBundle:Default:contacto.html.twig */
class __TwigTemplate_0f38846dd954443672ff19b9bccad49dc26e3bbeef40491b907fd8e3b688ebd7 extends Twig_Template
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
        $__internal_69badf3740da716ef620ba4e41db0e27bb6f6c80f118f9b11b8bbaf8ccf9c2c9 = $this->env->getExtension("native_profiler");
        $__internal_69badf3740da716ef620ba4e41db0e27bb6f6c80f118f9b11b8bbaf8ccf9c2c9->enter($__internal_69badf3740da716ef620ba4e41db0e27bb6f6c80f118f9b11b8bbaf8ccf9c2c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PaginasBundle:Default:contacto.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_69badf3740da716ef620ba4e41db0e27bb6f6c80f118f9b11b8bbaf8ccf9c2c9->leave($__internal_69badf3740da716ef620ba4e41db0e27bb6f6c80f118f9b11b8bbaf8ccf9c2c9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d6ff78e8ddfef27b8121c46ad883581d52f113c023d068fd31d55f0be798ca5b = $this->env->getExtension("native_profiler");
        $__internal_d6ff78e8ddfef27b8121c46ad883581d52f113c023d068fd31d55f0be798ca5b->enter($__internal_d6ff78e8ddfef27b8121c46ad883581d52f113c023d068fd31d55f0be798ca5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container-fluid\">
        <h2>Contacto</h2>

        <h3>Ubicacion</h3>
        <div class=\"row\">            
            <div class=\"col-xs-12 col-sm-6\">
                <div class=\"embed-responsive embed-responsive-4by3\">
                    <iframe class=\"embed-responsive-item\" src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1580.3566737589604!2d-76.31114438814384!3d3.5298134872196125!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3a04f0978bab47%3A0xc9a05095ddf5b56c!2sChanfle+Taquer%C3%ADa!5e0!3m2!1ses-419!2sco!4v1458579641316\"></iframe>
                </div>
            </div>          

        </div> 
    </div> <!-- /fila -->
";
        
        $__internal_d6ff78e8ddfef27b8121c46ad883581d52f113c023d068fd31d55f0be798ca5b->leave($__internal_d6ff78e8ddfef27b8121c46ad883581d52f113c023d068fd31d55f0be798ca5b_prof);

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
/*     <div class="container-fluid">*/
/*         <h2>Contacto</h2>*/
/* */
/*         <h3>Ubicacion</h3>*/
/*         <div class="row">            */
/*             <div class="col-xs-12 col-sm-6">*/
/*                 <div class="embed-responsive embed-responsive-4by3">*/
/*                     <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1580.3566737589604!2d-76.31114438814384!3d3.5298134872196125!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3a04f0978bab47%3A0xc9a05095ddf5b56c!2sChanfle+Taquer%C3%ADa!5e0!3m2!1ses-419!2sco!4v1458579641316"></iframe>*/
/*                 </div>*/
/*             </div>          */
/* */
/*         </div> */
/*     </div> <!-- /fila -->*/
/* {% endblock %}*/
