<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_e978444796afc8bfa3bbb756bdb1596993958e0ee2d1f00a65d006da2167c499 extends Twig_Template
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
        $__internal_142bcd87e7dfa20f1c7a6c5f39d47cbf8bf2038b6b0b7141297dd26dd2b43c82 = $this->env->getExtension("native_profiler");
        $__internal_142bcd87e7dfa20f1c7a6c5f39d47cbf8bf2038b6b0b7141297dd26dd2b43c82->enter($__internal_142bcd87e7dfa20f1c7a6c5f39d47cbf8bf2038b6b0b7141297dd26dd2b43c82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_142bcd87e7dfa20f1c7a6c5f39d47cbf8bf2038b6b0b7141297dd26dd2b43c82->leave($__internal_142bcd87e7dfa20f1c7a6c5f39d47cbf8bf2038b6b0b7141297dd26dd2b43c82_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_59a597e52fa87c62c0651a629e9332378f77517beae16423bdea5438242db7ab = $this->env->getExtension("native_profiler");
        $__internal_59a597e52fa87c62c0651a629e9332378f77517beae16423bdea5438242db7ab->enter($__internal_59a597e52fa87c62c0651a629e9332378f77517beae16423bdea5438242db7ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_59a597e52fa87c62c0651a629e9332378f77517beae16423bdea5438242db7ab->leave($__internal_59a597e52fa87c62c0651a629e9332378f77517beae16423bdea5438242db7ab_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8b947c9f9eafaf6ca1e83307222c16b27ff554a6dcbd4b8044eb81a87d4c8282 = $this->env->getExtension("native_profiler");
        $__internal_8b947c9f9eafaf6ca1e83307222c16b27ff554a6dcbd4b8044eb81a87d4c8282->enter($__internal_8b947c9f9eafaf6ca1e83307222c16b27ff554a6dcbd4b8044eb81a87d4c8282_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8b947c9f9eafaf6ca1e83307222c16b27ff554a6dcbd4b8044eb81a87d4c8282->leave($__internal_8b947c9f9eafaf6ca1e83307222c16b27ff554a6dcbd4b8044eb81a87d4c8282_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_52455510077b8eaa7445e9fe1905de6f53223aad54d1d60ef2401611427be9f1 = $this->env->getExtension("native_profiler");
        $__internal_52455510077b8eaa7445e9fe1905de6f53223aad54d1d60ef2401611427be9f1->enter($__internal_52455510077b8eaa7445e9fe1905de6f53223aad54d1d60ef2401611427be9f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_52455510077b8eaa7445e9fe1905de6f53223aad54d1d60ef2401611427be9f1->leave($__internal_52455510077b8eaa7445e9fe1905de6f53223aad54d1d60ef2401611427be9f1_prof);

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
