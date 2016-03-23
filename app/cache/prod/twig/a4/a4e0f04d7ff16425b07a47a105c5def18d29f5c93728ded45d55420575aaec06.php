<?php

/* PaginasBundle:Default:historia.html.twig */
class __TwigTemplate_477e2e684e2f18b6acc49581fa41bd36d723b9845be3e19ebde734e2d8b09b2d extends Twig_Template
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
        $__internal_8e355d46767d362e424b3c2b150fc4ac8655a0c39370d884bf337176e66f9f9c = $this->env->getExtension("native_profiler");
        $__internal_8e355d46767d362e424b3c2b150fc4ac8655a0c39370d884bf337176e66f9f9c->enter($__internal_8e355d46767d362e424b3c2b150fc4ac8655a0c39370d884bf337176e66f9f9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PaginasBundle:Default:historia.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8e355d46767d362e424b3c2b150fc4ac8655a0c39370d884bf337176e66f9f9c->leave($__internal_8e355d46767d362e424b3c2b150fc4ac8655a0c39370d884bf337176e66f9f9c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2e39a9957adb34d49c168bcdc770d95090e888e0eec3718275a238c75ed844d9 = $this->env->getExtension("native_profiler");
        $__internal_2e39a9957adb34d49c168bcdc770d95090e888e0eec3718275a238c75ed844d9->enter($__internal_2e39a9957adb34d49c168bcdc770d95090e888e0eec3718275a238c75ed844d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo "    
    <h3>Historia</h3>
    
";
        
        $__internal_2e39a9957adb34d49c168bcdc770d95090e888e0eec3718275a238c75ed844d9->leave($__internal_2e39a9957adb34d49c168bcdc770d95090e888e0eec3718275a238c75ed844d9_prof);

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
        return array (  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}    */
/*     <h3>Historia</h3>*/
/*     */
/* {% endblock %}*/
