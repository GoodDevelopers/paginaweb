<?php

/* cliente/show.html.twig */
class __TwigTemplate_c4f84d36ea880f5bcbf7413605c9455f2cf8365bd2dc6c0fd6c0dbf34216cbf2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "cliente/show.html.twig", 1);
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
        $__internal_e6e5cc6cf89c17723f76060b711754551c60b9929ad91aef013199074dbc04fa = $this->env->getExtension("native_profiler");
        $__internal_e6e5cc6cf89c17723f76060b711754551c60b9929ad91aef013199074dbc04fa->enter($__internal_e6e5cc6cf89c17723f76060b711754551c60b9929ad91aef013199074dbc04fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "cliente/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e6e5cc6cf89c17723f76060b711754551c60b9929ad91aef013199074dbc04fa->leave($__internal_e6e5cc6cf89c17723f76060b711754551c60b9929ad91aef013199074dbc04fa_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e68731eaeb95f0f105010526679e831001cd77eab9aeecc0610db1098bc4ec7b = $this->env->getExtension("native_profiler");
        $__internal_e68731eaeb95f0f105010526679e831001cd77eab9aeecc0610db1098bc4ec7b->enter($__internal_e68731eaeb95f0f105010526679e831001cd77eab9aeecc0610db1098bc4ec7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Cliente</h1>

    <table>
        <tbody>
            <tr>
                <th>Nuip_cliente</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")), "nuipcliente", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nombre_cliente</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")), "nombrecliente", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Puntos</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")), "puntos", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("cliente_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_e68731eaeb95f0f105010526679e831001cd77eab9aeecc0610db1098bc4ec7b->leave($__internal_e68731eaeb95f0f105010526679e831001cd77eab9aeecc0610db1098bc4ec7b_prof);

    }

    public function getTemplateName()
    {
        return "cliente/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 25,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Cliente</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Nuip_cliente</th>*/
/*                 <td>{{ cliente.nuipcliente }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Nombre_cliente</th>*/
/*                 <td>{{ cliente.nombrecliente }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Puntos</th>*/
/*                 <td>{{ cliente.puntos }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('cliente_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
