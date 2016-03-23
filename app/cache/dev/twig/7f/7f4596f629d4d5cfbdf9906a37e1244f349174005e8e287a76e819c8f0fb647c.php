<?php

/* PaginasBundle:Default:clientes.html.twig */
class __TwigTemplate_f83daa95d8ae64a63cd30745587a46224a98452549e30b1f3888e9f8e9215451 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "PaginasBundle:Default:clientes.html.twig", 1);
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
        $__internal_e2c6957a15d69e13aa6c0c586027bb0f5feb2fbc24a499c1074bc16f7fe96179 = $this->env->getExtension("native_profiler");
        $__internal_e2c6957a15d69e13aa6c0c586027bb0f5feb2fbc24a499c1074bc16f7fe96179->enter($__internal_e2c6957a15d69e13aa6c0c586027bb0f5feb2fbc24a499c1074bc16f7fe96179_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PaginasBundle:Default:clientes.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e2c6957a15d69e13aa6c0c586027bb0f5feb2fbc24a499c1074bc16f7fe96179->leave($__internal_e2c6957a15d69e13aa6c0c586027bb0f5feb2fbc24a499c1074bc16f7fe96179_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_736a9249574132f62be5d673c24ffec463e4202ac1051d16313b5c0d599347c4 = $this->env->getExtension("native_profiler");
        $__internal_736a9249574132f62be5d673c24ffec463e4202ac1051d16313b5c0d599347c4->enter($__internal_736a9249574132f62be5d673c24ffec463e4202ac1051d16313b5c0d599347c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    Clientes
    <div class=\"container\">
        
        <div class=\"row\">
            
<!--            
            <div class=\"col-sm-6\">
                <h3 style=\"text-align: center\">Iniciar Sesion</h3>
                <form class=\"form-horizontal\">
                    <div class=\"form-group\">
                        <label for=\"inputEmail2\" class=\"col-sm-3 control-label\">Correo</label>
                        <div class=\"col-sm-9\">
                            <input type=\"email\" class=\"form-control\" id=\"inputEmail3\" placeholder=\"Correo electronico\">
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"inputPassword3\" class=\"col-sm-3 control-label\">Contraseña</label>
                        <div class=\"col-sm-9\">
                            <input type=\"password\" class=\"form-control\" id=\"inputPassword3\" placeholder=\"Password\">
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <div class=\"col-sm-offset-3 col-sm-9\">
                            <button type=\"submit\" class=\"btn btn-default\">Iniciar Sesion</button>
                        </div>
                    </div>
                </form>
            </div> 
-->
            <div class=\"col-sm-6\">
                <h3 style=\"text-align: center\">Crear Cuenta</h3>
                
            </div>



        </div>
    </div>
";
        
        $__internal_736a9249574132f62be5d673c24ffec463e4202ac1051d16313b5c0d599347c4->leave($__internal_736a9249574132f62be5d673c24ffec463e4202ac1051d16313b5c0d599347c4_prof);

    }

    public function getTemplateName()
    {
        return "PaginasBundle:Default:clientes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     Clientes*/
/*     <div class="container">*/
/*         */
/*         <div class="row">*/
/*             */
/* <!--            */
/*             <div class="col-sm-6">*/
/*                 <h3 style="text-align: center">Iniciar Sesion</h3>*/
/*                 <form class="form-horizontal">*/
/*                     <div class="form-group">*/
/*                         <label for="inputEmail2" class="col-sm-3 control-label">Correo</label>*/
/*                         <div class="col-sm-9">*/
/*                             <input type="email" class="form-control" id="inputEmail3" placeholder="Correo electronico">*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                         <label for="inputPassword3" class="col-sm-3 control-label">Contraseña</label>*/
/*                         <div class="col-sm-9">*/
/*                             <input type="password" class="form-control" id="inputPassword3" placeholder="Password">*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                         <div class="col-sm-offset-3 col-sm-9">*/
/*                             <button type="submit" class="btn btn-default">Iniciar Sesion</button>*/
/*                         </div>*/
/*                     </div>*/
/*                 </form>*/
/*             </div> */
/* -->*/
/*             <div class="col-sm-6">*/
/*                 <h3 style="text-align: center">Crear Cuenta</h3>*/
/*                 */
/*             </div>*/
/* */
/* */
/* */
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
