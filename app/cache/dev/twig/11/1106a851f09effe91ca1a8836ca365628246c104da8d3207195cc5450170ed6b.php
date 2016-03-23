<?php

/* cliente/new.html.twig */
class __TwigTemplate_f0462489344f11ed2e1368ecb9a8a4cae542cf2abbd4bf67088756924a8b060d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "cliente/new.html.twig", 1);
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
        $__internal_e24a0701a984bba26c0f8dde15bc22ecda7d16dcc9e769f14f8c269732ae198e = $this->env->getExtension("native_profiler");
        $__internal_e24a0701a984bba26c0f8dde15bc22ecda7d16dcc9e769f14f8c269732ae198e->enter($__internal_e24a0701a984bba26c0f8dde15bc22ecda7d16dcc9e769f14f8c269732ae198e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "cliente/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e24a0701a984bba26c0f8dde15bc22ecda7d16dcc9e769f14f8c269732ae198e->leave($__internal_e24a0701a984bba26c0f8dde15bc22ecda7d16dcc9e769f14f8c269732ae198e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_124c8b6f4afa71d3aa6b3581d6239b52d30bd68e5d5f6a547d114e34f86e840c = $this->env->getExtension("native_profiler");
        $__internal_124c8b6f4afa71d3aa6b3581d6239b52d30bd68e5d5f6a547d114e34f86e840c->enter($__internal_124c8b6f4afa71d3aa6b3581d6239b52d30bd68e5d5f6a547d114e34f86e840c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Cliente creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("cliente_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_124c8b6f4afa71d3aa6b3581d6239b52d30bd68e5d5f6a547d114e34f86e840c->leave($__internal_124c8b6f4afa71d3aa6b3581d6239b52d30bd68e5d5f6a547d114e34f86e840c_prof);

    }

    public function getTemplateName()
    {
        return "cliente/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Cliente creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('cliente_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
