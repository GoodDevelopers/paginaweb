<?php

/* LoginBundle:Default:formulario.html.twig */
class __TwigTemplate_81224f54ffc7ea1cabd064b8ccf622b879606636faa3352f4e3dc964cb5a96b3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PaginasBundle:Default:clientes.html.twig", "LoginBundle:Default:formulario.html.twig", 1);
        $this->blocks = array(
            'formulario' => array($this, 'block_formulario'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PaginasBundle:Default:clientes.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_88d5770bb253107a080ff4ffdb435dd5d73517c621351440e0812a7d1cea62ee = $this->env->getExtension("native_profiler");
        $__internal_88d5770bb253107a080ff4ffdb435dd5d73517c621351440e0812a7d1cea62ee->enter($__internal_88d5770bb253107a080ff4ffdb435dd5d73517c621351440e0812a7d1cea62ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LoginBundle:Default:formulario.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_88d5770bb253107a080ff4ffdb435dd5d73517c621351440e0812a7d1cea62ee->leave($__internal_88d5770bb253107a080ff4ffdb435dd5d73517c621351440e0812a7d1cea62ee_prof);

    }

    // line 3
    public function block_formulario($context, array $blocks = array())
    {
        $__internal_906fbb6f08efed0b806828a8862f9fac74c50b1c0a0a4fc836747512976a83ed = $this->env->getExtension("native_profiler");
        $__internal_906fbb6f08efed0b806828a8862f9fac74c50b1c0a0a4fc836747512976a83ed->enter($__internal_906fbb6f08efed0b806828a8862f9fac74c50b1c0a0a4fc836747512976a83ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formulario"));

        // line 4
        echo "    <div class=\"col-sm-2\"></div>
    <div class=\"col-sm-8\">
        <form class=\"form-horizontal\" method=\"POST\" action=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("login");
        echo "\">
            <div class=\"form-group\">
                <h3 style=\"margin-bottom: 0px;\">Iniciar Sesion</h3>
            </div>
            <div class=\"form-group\">
                <label for=\"inputEmail3\" class=\"control-label\">Correo</label>
                ";
        // line 13
        echo "                <input name=\"correo\" type=\"email\" class=\"form-control\" id=\"inputEmail3\" placeholder=\"Email\"/>
                ";
        // line 15
        echo "            </div>

            <div class=\"form-group\">
                <label for=\"inputPassword3\" class=\"control-label\">Contraseña</label>
                ";
        // line 20
        echo "                <input name=\"pass\" type=\"password\" class=\"form-control\" id=\"inputPassword3\" placeholder=\"Password\"/>
                ";
        // line 22
        echo "            </div>

            <div class=\"form-group text-center\">
                ";
        // line 26
        echo "                <button type=\"submit\" class=\"btn btn-lg btn-success\"><span class=\"glyphicon glyphicon-log-in\"></span> Ingresar</button>
                ";
        // line 28
        echo "            </div>
        </form>
    </div>
    <div class=\"col-sm-2\"></div>
";
        
        $__internal_906fbb6f08efed0b806828a8862f9fac74c50b1c0a0a4fc836747512976a83ed->leave($__internal_906fbb6f08efed0b806828a8862f9fac74c50b1c0a0a4fc836747512976a83ed_prof);

    }

    public function getTemplateName()
    {
        return "LoginBundle:Default:formulario.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 28,  70 => 26,  65 => 22,  62 => 20,  56 => 15,  53 => 13,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'PaginasBundle:Default:clientes.html.twig' %}*/
/* */
/* {% block formulario %}*/
/*     <div class="col-sm-2"></div>*/
/*     <div class="col-sm-8">*/
/*         <form class="form-horizontal" method="POST" action="{{path('login')}}">*/
/*             <div class="form-group">*/
/*                 <h3 style="margin-bottom: 0px;">Iniciar Sesion</h3>*/
/*             </div>*/
/*             <div class="form-group">*/
/*                 <label for="inputEmail3" class="control-label">Correo</label>*/
/*                 {#                <div class="col-sm-10">#}*/
/*                 <input name="correo" type="email" class="form-control" id="inputEmail3" placeholder="Email"/>*/
/*                 {#                </div>#}*/
/*             </div>*/
/* */
/*             <div class="form-group">*/
/*                 <label for="inputPassword3" class="control-label">Contraseña</label>*/
/*                 {#                <div class="col-sm-10">#}*/
/*                 <input name="pass" type="password" class="form-control" id="inputPassword3" placeholder="Password"/>*/
/*                 {#                </div>#}*/
/*             </div>*/
/* */
/*             <div class="form-group text-center">*/
/*                 {#                <div class="col-sm-offset-2 col-sm-10">#}*/
/*                 <button type="submit" class="btn btn-lg btn-success"><span class="glyphicon glyphicon-log-in"></span> Ingresar</button>*/
/*                 {#                </div>#}*/
/*             </div>*/
/*         </form>*/
/*     </div>*/
/*     <div class="col-sm-2"></div>*/
/* {% endblock %}*/
