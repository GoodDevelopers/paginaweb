<?php

/* PaginasBundle:Default:clientes.html.twig */
class __TwigTemplate_f83daa95d8ae64a63cd30745587a46224a98452549e30b1f3888e9f8e9215451 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "PaginasBundle:Default:clientes.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'formulario' => array($this, 'block_formulario'),
            'infocliente' => array($this, 'block_infocliente'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2f79d6c1dc7ef31b28ac13459137478566939d52e8911849ae9c468856b9bc79 = $this->env->getExtension("native_profiler");
        $__internal_2f79d6c1dc7ef31b28ac13459137478566939d52e8911849ae9c468856b9bc79->enter($__internal_2f79d6c1dc7ef31b28ac13459137478566939d52e8911849ae9c468856b9bc79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PaginasBundle:Default:clientes.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2f79d6c1dc7ef31b28ac13459137478566939d52e8911849ae9c468856b9bc79->leave($__internal_2f79d6c1dc7ef31b28ac13459137478566939d52e8911849ae9c468856b9bc79_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f1d047c9292e98eb50a1d75e07d049747b62e53b6c99d9d989cda90d057a4571 = $this->env->getExtension("native_profiler");
        $__internal_f1d047c9292e98eb50a1d75e07d049747b62e53b6c99d9d989cda90d057a4571->enter($__internal_f1d047c9292e98eb50a1d75e07d049747b62e53b6c99d9d989cda90d057a4571_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h2>Clientes</h2>

    <div class=\"container\">  

    ";
        // line 8
        $this->displayBlock('formulario', $context, $blocks);
        // line 9
        echo "    ";
        $this->displayBlock('infocliente', $context, $blocks);
        // line 10
        echo "


</div>

";
        
        $__internal_f1d047c9292e98eb50a1d75e07d049747b62e53b6c99d9d989cda90d057a4571->leave($__internal_f1d047c9292e98eb50a1d75e07d049747b62e53b6c99d9d989cda90d057a4571_prof);

    }

    // line 8
    public function block_formulario($context, array $blocks = array())
    {
        $__internal_169d140fa77a6962aa2fa64bddb555768832c1b2d7117e1dcf39276528de61cd = $this->env->getExtension("native_profiler");
        $__internal_169d140fa77a6962aa2fa64bddb555768832c1b2d7117e1dcf39276528de61cd->enter($__internal_169d140fa77a6962aa2fa64bddb555768832c1b2d7117e1dcf39276528de61cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formulario"));

        
        $__internal_169d140fa77a6962aa2fa64bddb555768832c1b2d7117e1dcf39276528de61cd->leave($__internal_169d140fa77a6962aa2fa64bddb555768832c1b2d7117e1dcf39276528de61cd_prof);

    }

    // line 9
    public function block_infocliente($context, array $blocks = array())
    {
        $__internal_55f808325385a1bab91c0cb66f716d062c787ade1d5954fd3b0a135500c888e4 = $this->env->getExtension("native_profiler");
        $__internal_55f808325385a1bab91c0cb66f716d062c787ade1d5954fd3b0a135500c888e4->enter($__internal_55f808325385a1bab91c0cb66f716d062c787ade1d5954fd3b0a135500c888e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "infocliente"));

        
        $__internal_55f808325385a1bab91c0cb66f716d062c787ade1d5954fd3b0a135500c888e4->leave($__internal_55f808325385a1bab91c0cb66f716d062c787ade1d5954fd3b0a135500c888e4_prof);

    }

    public function getTemplateName()
    {
        return "PaginasBundle:Default:clientes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 9,  65 => 8,  53 => 10,  50 => 9,  48 => 8,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h2>Clientes</h2>*/
/* */
/*     <div class="container">  */
/* */
/*     {% block formulario %}{% endblock %}*/
/*     {% block infocliente %}{% endblock %}*/
/* */
/* */
/* */
/* </div>*/
/* */
/* {% endblock %}*/
