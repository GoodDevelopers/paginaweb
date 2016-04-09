<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_fcc30b928c7dbce2ead3047e6e198a413a87b61ab3e8e46cc02cab63be0c4cec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f4e82930f08b28bae9a2b2a253a8c535310a7ab21a9f2f8373e4a7e687b550a6 = $this->env->getExtension("native_profiler");
        $__internal_f4e82930f08b28bae9a2b2a253a8c535310a7ab21a9f2f8373e4a7e687b550a6->enter($__internal_f4e82930f08b28bae9a2b2a253a8c535310a7ab21a9f2f8373e4a7e687b550a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f4e82930f08b28bae9a2b2a253a8c535310a7ab21a9f2f8373e4a7e687b550a6->leave($__internal_f4e82930f08b28bae9a2b2a253a8c535310a7ab21a9f2f8373e4a7e687b550a6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_67dc5bcd7b5bb1fb98984f9c526e39b661b9cb8675903ac03419ced181f52626 = $this->env->getExtension("native_profiler");
        $__internal_67dc5bcd7b5bb1fb98984f9c526e39b661b9cb8675903ac03419ced181f52626->enter($__internal_67dc5bcd7b5bb1fb98984f9c526e39b661b9cb8675903ac03419ced181f52626_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_67dc5bcd7b5bb1fb98984f9c526e39b661b9cb8675903ac03419ced181f52626->leave($__internal_67dc5bcd7b5bb1fb98984f9c526e39b661b9cb8675903ac03419ced181f52626_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_50a3fc8f490b8b689988d5454fb75b825cbc9df17715b91d52fa667116fd3728 = $this->env->getExtension("native_profiler");
        $__internal_50a3fc8f490b8b689988d5454fb75b825cbc9df17715b91d52fa667116fd3728->enter($__internal_50a3fc8f490b8b689988d5454fb75b825cbc9df17715b91d52fa667116fd3728_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_50a3fc8f490b8b689988d5454fb75b825cbc9df17715b91d52fa667116fd3728->leave($__internal_50a3fc8f490b8b689988d5454fb75b825cbc9df17715b91d52fa667116fd3728_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_67d1ccedfc351a983c9a6383caddeff2c958d873245f81d3a0bd12417a1699f2 = $this->env->getExtension("native_profiler");
        $__internal_67d1ccedfc351a983c9a6383caddeff2c958d873245f81d3a0bd12417a1699f2->enter($__internal_67d1ccedfc351a983c9a6383caddeff2c958d873245f81d3a0bd12417a1699f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_67d1ccedfc351a983c9a6383caddeff2c958d873245f81d3a0bd12417a1699f2->leave($__internal_67d1ccedfc351a983c9a6383caddeff2c958d873245f81d3a0bd12417a1699f2_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
