<?php

/* LoginBundle:Default:new.html.twig */
class __TwigTemplate_0aace41f60fcc414e72775f706dc69091c2b65b80cee2fe37833757ef797a140 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "LoginBundle:Default:new.html.twig", 1);
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
        $__internal_b1719310f792f7eabfbd0aef44ba36f50ba33fea06b43dfa82eb239ff94fe10d = $this->env->getExtension("native_profiler");
        $__internal_b1719310f792f7eabfbd0aef44ba36f50ba33fea06b43dfa82eb239ff94fe10d->enter($__internal_b1719310f792f7eabfbd0aef44ba36f50ba33fea06b43dfa82eb239ff94fe10d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LoginBundle:Default:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b1719310f792f7eabfbd0aef44ba36f50ba33fea06b43dfa82eb239ff94fe10d->leave($__internal_b1719310f792f7eabfbd0aef44ba36f50ba33fea06b43dfa82eb239ff94fe10d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9510a4ebcec5012d10ab930cb66133910aa890014fe996dc69fef1094a62a442 = $this->env->getExtension("native_profiler");
        $__internal_9510a4ebcec5012d10ab930cb66133910aa890014fe996dc69fef1094a62a442->enter($__internal_9510a4ebcec5012d10ab930cb66133910aa890014fe996dc69fef1094a62a442_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_9510a4ebcec5012d10ab930cb66133910aa890014fe996dc69fef1094a62a442->leave($__internal_9510a4ebcec5012d10ab930cb66133910aa890014fe996dc69fef1094a62a442_prof);

    }

    public function getTemplateName()
    {
        return "LoginBundle:Default:new.html.twig";
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
