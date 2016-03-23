<?php

/* LoginBundle:Default:all.html.twig */
class __TwigTemplate_888f0ba3b028dfd25ebc7d3d6dde36bee3effba2a6f64263fdf3a426a044a321 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "LoginBundle:Default:all.html.twig", 1);
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
        $__internal_0d6243852e1be6890989ddd38360c674085cb6f8b40ee3e39d7d79677cc5cd4d = $this->env->getExtension("native_profiler");
        $__internal_0d6243852e1be6890989ddd38360c674085cb6f8b40ee3e39d7d79677cc5cd4d->enter($__internal_0d6243852e1be6890989ddd38360c674085cb6f8b40ee3e39d7d79677cc5cd4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LoginBundle:Default:all.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0d6243852e1be6890989ddd38360c674085cb6f8b40ee3e39d7d79677cc5cd4d->leave($__internal_0d6243852e1be6890989ddd38360c674085cb6f8b40ee3e39d7d79677cc5cd4d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5c7d461c95bbf245829d42d6efc43cd209ef730a5ca39a1a750e21033cb220df = $this->env->getExtension("native_profiler");
        $__internal_5c7d461c95bbf245829d42d6efc43cd209ef730a5ca39a1a750e21033cb220df->enter($__internal_5c7d461c95bbf245829d42d6efc43cd209ef730a5ca39a1a750e21033cb220df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Cliente list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Contrasena</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["clientes"]) ? $context["clientes"] : $this->getContext($context, "clientes")));
        foreach ($context['_seq'] as $context["_key"] => $context["cliente"]) {
            // line 18
            echo "            <tr>
                <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cliente_show", array("id" => $this->getAttribute($context["cliente"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["cliente"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["cliente"], "nombre", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["cliente"], "correo", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["cliente"], "contrasena", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cliente_show", array("id" => $this->getAttribute($context["cliente"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cliente_edit", array("id" => $this->getAttribute($context["cliente"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cliente'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("cliente_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_5c7d461c95bbf245829d42d6efc43cd209ef730a5ca39a1a750e21033cb220df->leave($__internal_5c7d461c95bbf245829d42d6efc43cd209ef730a5ca39a1a750e21033cb220df_prof);

    }

    public function getTemplateName()
    {
        return "LoginBundle:Default:all.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 40,  101 => 35,  89 => 29,  83 => 26,  76 => 22,  72 => 21,  68 => 20,  62 => 19,  59 => 18,  55 => 17,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Cliente list</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Nombre</th>*/
/*                 <th>Correo</th>*/
/*                 <th>Contrasena</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for cliente in clientes %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('cliente_show', { 'id': cliente.id }) }}">{{ cliente.id }}</a></td>*/
/*                 <td>{{ cliente.nombre }}</td>*/
/*                 <td>{{ cliente.correo }}</td>*/
/*                 <td>{{ cliente.contrasena }}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('cliente_show', { 'id': cliente.id }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('cliente_edit', { 'id': cliente.id }) }}">edit</a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('cliente_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
