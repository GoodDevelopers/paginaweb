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
        $__internal_2d09b732e67714c8d737e412b569c5dc96b2de6702ecd6a85b52912951bc65cc = $this->env->getExtension("native_profiler");
        $__internal_2d09b732e67714c8d737e412b569c5dc96b2de6702ecd6a85b52912951bc65cc->enter($__internal_2d09b732e67714c8d737e412b569c5dc96b2de6702ecd6a85b52912951bc65cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PaginasBundle:Default:clientes.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2d09b732e67714c8d737e412b569c5dc96b2de6702ecd6a85b52912951bc65cc->leave($__internal_2d09b732e67714c8d737e412b569c5dc96b2de6702ecd6a85b52912951bc65cc_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_067b16beaaea987c63578e1b99f7c212d2f987d5b85b888f29a28c5232b6529f = $this->env->getExtension("native_profiler");
        $__internal_067b16beaaea987c63578e1b99f7c212d2f987d5b85b888f29a28c5232b6529f->enter($__internal_067b16beaaea987c63578e1b99f7c212d2f987d5b85b888f29a28c5232b6529f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    Clientes
    <div class=\"container\">
        
        <div class=\"row\">
            
            
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

            <div class=\"col-sm-6\">
                <h3 style=\"text-align: center\">Crear Cuenta</h3>
            </div>



        </div>
    </div>
";
        
        $__internal_067b16beaaea987c63578e1b99f7c212d2f987d5b85b888f29a28c5232b6529f->leave($__internal_067b16beaaea987c63578e1b99f7c212d2f987d5b85b888f29a28c5232b6529f_prof);

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
/*             */
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
/*             </div>*/
/* */
/*             <div class="col-sm-6">*/
/*                 <h3 style="text-align: center">Crear Cuenta</h3>*/
/*             </div>*/
/* */
/* */
/* */
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
