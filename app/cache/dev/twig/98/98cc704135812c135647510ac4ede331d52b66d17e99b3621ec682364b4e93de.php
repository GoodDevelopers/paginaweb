<?php

/* PaginasBundle:Default:historia.html.twig */
class __TwigTemplate_259295c2cfadca1e47d1d5fe999d78d7cad09323c33408a2cdecdb9e36b11dd1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "PaginasBundle:Default:historia.html.twig", 1);
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
        $__internal_c96f6513e7facac73cc12b7d10b66ae5db917c0a3ccebe9d5889f92ec232cfae = $this->env->getExtension("native_profiler");
        $__internal_c96f6513e7facac73cc12b7d10b66ae5db917c0a3ccebe9d5889f92ec232cfae->enter($__internal_c96f6513e7facac73cc12b7d10b66ae5db917c0a3ccebe9d5889f92ec232cfae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PaginasBundle:Default:historia.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c96f6513e7facac73cc12b7d10b66ae5db917c0a3ccebe9d5889f92ec232cfae->leave($__internal_c96f6513e7facac73cc12b7d10b66ae5db917c0a3ccebe9d5889f92ec232cfae_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0b15a958af6552c1b5ebf1c5805055a6273d104696d7090c027305ce9905d95c = $this->env->getExtension("native_profiler");
        $__internal_0b15a958af6552c1b5ebf1c5805055a6273d104696d7090c027305ce9905d95c->enter($__internal_0b15a958af6552c1b5ebf1c5805055a6273d104696d7090c027305ce9905d95c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"row\">
        <h2 class=\"roboto\">Historia</h2>
    </div>
    <div class=\"row\">
        <div class=\"col-sm-offset-1 col-sm-4 borde-caja\">
            <h3 class=\"roboto\">Misión</h3>
            <p class=\"roboto justificado\">
                Vivamus placerat lorem non odio viverra, semper congue sem placerat. Donec vehicula rutrum nunc nec varius. Cras in mi et magna varius posuere volutpat id metus. Fusce in posuere quam. Pellentesque imperdiet ornare magna. Pellentesque vestibulum blandit porttitor. Nam convallis arcu eget magna dapibus pulvinar.
            </p>
        </div>
        <div class=\"col-sm-offset-2 col-sm-4 borde-caja\">
            <h3 class=\"roboto\">Visión</h3>
            <p class=\"roboto justificado\">
                Vivamus placerat lorem non odio viverra, semper congue sem placerat. Donec vehicula rutrum nunc nec varius. Cras in mi et magna varius posuere volutpat id metus. Fusce in posuere quam. Pellentesque imperdiet ornare magna. Pellentesque vestibulum blandit porttitor. Nam convallis arcu eget magna dapibus pulvinar.
            </p>
        </div>
    </div>
";
        
        $__internal_0b15a958af6552c1b5ebf1c5805055a6273d104696d7090c027305ce9905d95c->leave($__internal_0b15a958af6552c1b5ebf1c5805055a6273d104696d7090c027305ce9905d95c_prof);

    }

    public function getTemplateName()
    {
        return "PaginasBundle:Default:historia.html.twig";
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
/*         <h2 class="roboto">Historia</h2>*/
/*     </div>*/
/*     <div class="row">*/
/*         <div class="col-sm-offset-1 col-sm-4 borde-caja">*/
/*             <h3 class="roboto">Misión</h3>*/
/*             <p class="roboto justificado">*/
/*                 Vivamus placerat lorem non odio viverra, semper congue sem placerat. Donec vehicula rutrum nunc nec varius. Cras in mi et magna varius posuere volutpat id metus. Fusce in posuere quam. Pellentesque imperdiet ornare magna. Pellentesque vestibulum blandit porttitor. Nam convallis arcu eget magna dapibus pulvinar.*/
/*             </p>*/
/*         </div>*/
/*         <div class="col-sm-offset-2 col-sm-4 borde-caja">*/
/*             <h3 class="roboto">Visión</h3>*/
/*             <p class="roboto justificado">*/
/*                 Vivamus placerat lorem non odio viverra, semper congue sem placerat. Donec vehicula rutrum nunc nec varius. Cras in mi et magna varius posuere volutpat id metus. Fusce in posuere quam. Pellentesque imperdiet ornare magna. Pellentesque vestibulum blandit porttitor. Nam convallis arcu eget magna dapibus pulvinar.*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
