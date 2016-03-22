<?php

/* cliente/index.html.twig */
class __TwigTemplate_249f749da5a024af057ade4c8d3ae2a2677f02b61695798a525f7c96b48393e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "cliente/index.html.twig", 1);
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
        $__internal_aeb1e7732f7ddea7bdf98d6eb8d8fb57e769ef3d7cbcf63fc7123208c9e2d9d6 = $this->env->getExtension("native_profiler");
        $__internal_aeb1e7732f7ddea7bdf98d6eb8d8fb57e769ef3d7cbcf63fc7123208c9e2d9d6->enter($__internal_aeb1e7732f7ddea7bdf98d6eb8d8fb57e769ef3d7cbcf63fc7123208c9e2d9d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "cliente/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aeb1e7732f7ddea7bdf98d6eb8d8fb57e769ef3d7cbcf63fc7123208c9e2d9d6->leave($__internal_aeb1e7732f7ddea7bdf98d6eb8d8fb57e769ef3d7cbcf63fc7123208c9e2d9d6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b7f19bfebe6c3d15813a50e2959201f9e291c8bf12b06bcfffd62694b3897b8e = $this->env->getExtension("native_profiler");
        $__internal_b7f19bfebe6c3d15813a50e2959201f9e291c8bf12b06bcfffd62694b3897b8e->enter($__internal_b7f19bfebe6c3d15813a50e2959201f9e291c8bf12b06bcfffd62694b3897b8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Cliente list</h1>

    <table>
        <thead>
            <tr>
                <th>Nuip_cliente</th>
                <th>Nombre_cliente</th>
                <th>Puntos</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["clientes"]) ? $context["clientes"] : $this->getContext($context, "clientes")));
        foreach ($context['_seq'] as $context["_key"] => $context["cliente"]) {
            // line 17
            echo "            <tr>
                <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cliente_show", array("id" => $this->getAttribute($context["cliente"], "nuip_cliente", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["cliente"], "nuipcliente", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["cliente"], "nombrecliente", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["cliente"], "puntos", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cliente_show", array("id" => $this->getAttribute($context["cliente"], "nuip_cliente", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cliente'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "        </tbody>
    </table>

    
";
        
        $__internal_b7f19bfebe6c3d15813a50e2959201f9e291c8bf12b06bcfffd62694b3897b8e->leave($__internal_b7f19bfebe6c3d15813a50e2959201f9e291c8bf12b06bcfffd62694b3897b8e_prof);

    }

    public function getTemplateName()
    {
        return "cliente/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 30,  78 => 24,  71 => 20,  67 => 19,  61 => 18,  58 => 17,  54 => 16,  40 => 4,  34 => 3,  11 => 1,);
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
/*                 <th>Nuip_cliente</th>*/
/*                 <th>Nombre_cliente</th>*/
/*                 <th>Puntos</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for cliente in clientes %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('cliente_show', { 'id': cliente.nuip_cliente }) }}">{{ cliente.nuipcliente }}</a></td>*/
/*                 <td>{{ cliente.nombrecliente }}</td>*/
/*                 <td>{{ cliente.puntos }}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('cliente_show', { 'id': cliente.nuip_cliente }) }}">show</a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     */
/* {% endblock %}*/
/* */
