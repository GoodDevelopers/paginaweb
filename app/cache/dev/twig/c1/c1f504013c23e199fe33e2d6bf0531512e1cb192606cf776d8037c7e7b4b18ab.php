<?php

/* LoginBundle:Default:show.html.twig */
class __TwigTemplate_be65fe649a6e2c9f68ee550ee48ec7147d88a063664e32a5304efb45aaee0731 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "LoginBundle:Default:show.html.twig", 1);
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
        $__internal_465275a93838d469f7c6697bb290ff43c174a589b9e15f186b895f7b9f9a219d = $this->env->getExtension("native_profiler");
        $__internal_465275a93838d469f7c6697bb290ff43c174a589b9e15f186b895f7b9f9a219d->enter($__internal_465275a93838d469f7c6697bb290ff43c174a589b9e15f186b895f7b9f9a219d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LoginBundle:Default:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_465275a93838d469f7c6697bb290ff43c174a589b9e15f186b895f7b9f9a219d->leave($__internal_465275a93838d469f7c6697bb290ff43c174a589b9e15f186b895f7b9f9a219d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2df6528f7677c0c4c5f746abeb7f53e3aaa98a57c03887678868edfbf690694c = $this->env->getExtension("native_profiler");
        $__internal_2df6528f7677c0c4c5f746abeb7f53e3aaa98a57c03887678868edfbf690694c->enter($__internal_2df6528f7677c0c4c5f746abeb7f53e3aaa98a57c03887678868edfbf690694c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Cliente</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nombre</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")), "nombre", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Correo</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")), "correo", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Contrasena</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")), "contrasena", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("cliente_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cliente_edit", array("id" => $this->getAttribute((isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 35
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 37
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_2df6528f7677c0c4c5f746abeb7f53e3aaa98a57c03887678868edfbf690694c->leave($__internal_2df6528f7677c0c4c5f746abeb7f53e3aaa98a57c03887678868edfbf690694c_prof);

    }

    public function getTemplateName()
    {
        return "LoginBundle:Default:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 37,  91 => 35,  85 => 32,  79 => 29,  69 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
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
/*                 <th>Id</th>*/
/*                 <td>{{ cliente.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Nombre</th>*/
/*                 <td>{{ cliente.nombre }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Correo</th>*/
/*                 <td>{{ cliente.correo }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Contrasena</th>*/
/*                 <td>{{ cliente.contrasena }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('cliente_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('cliente_edit', { 'id': cliente.id }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
