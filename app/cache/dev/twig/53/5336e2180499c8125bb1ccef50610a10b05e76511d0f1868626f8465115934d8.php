<?php

/* PaginasBundle:Default:historia.html.twig */
class __TwigTemplate_ca876ad223f3958310225b04b58efda5115c937ddcaf09afea04b213aa7ae4b2 extends Twig_Template
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
        $__internal_61527001705c08ffd6d0d5ecdd0fa9a59073bb3a3d710f81208b47b691624cff = $this->env->getExtension("native_profiler");
        $__internal_61527001705c08ffd6d0d5ecdd0fa9a59073bb3a3d710f81208b47b691624cff->enter($__internal_61527001705c08ffd6d0d5ecdd0fa9a59073bb3a3d710f81208b47b691624cff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PaginasBundle:Default:historia.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_61527001705c08ffd6d0d5ecdd0fa9a59073bb3a3d710f81208b47b691624cff->leave($__internal_61527001705c08ffd6d0d5ecdd0fa9a59073bb3a3d710f81208b47b691624cff_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_33dd736134d0327626c863b35331b759e45e659bf1f22015ef87803337dafc25 = $this->env->getExtension("native_profiler");
        $__internal_33dd736134d0327626c863b35331b759e45e659bf1f22015ef87803337dafc25->enter($__internal_33dd736134d0327626c863b35331b759e45e659bf1f22015ef87803337dafc25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container-fluid\">
        <h2 class=\"roboto\">Historia</h2>

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
        
        $__internal_33dd736134d0327626c863b35331b759e45e659bf1f22015ef87803337dafc25->leave($__internal_33dd736134d0327626c863b35331b759e45e659bf1f22015ef87803337dafc25_prof);

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
/*     <div class="container-fluid">*/
/*         <h2 class="roboto">Historia</h2>*/
/* */
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
