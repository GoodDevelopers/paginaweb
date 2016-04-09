<?php

/* PaginasBundle:Default:clientes.html.twig */
class __TwigTemplate_7a4bc5501261af90ecc2df309e48e50c8f4d422e3ac9a408be9aec5fa2cec70f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "PaginasBundle:Default:clientes.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'formulario' => array($this, 'block_formulario'),
            'infocliente' => array($this, 'block_infocliente'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fbf71c7aaf475e1faaf1ac80c9c0e9fad90e4326a80865288aba9b2b9aed43f7 = $this->env->getExtension("native_profiler");
        $__internal_fbf71c7aaf475e1faaf1ac80c9c0e9fad90e4326a80865288aba9b2b9aed43f7->enter($__internal_fbf71c7aaf475e1faaf1ac80c9c0e9fad90e4326a80865288aba9b2b9aed43f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PaginasBundle:Default:clientes.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fbf71c7aaf475e1faaf1ac80c9c0e9fad90e4326a80865288aba9b2b9aed43f7->leave($__internal_fbf71c7aaf475e1faaf1ac80c9c0e9fad90e4326a80865288aba9b2b9aed43f7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8ee1f11e821cb171118b0a9c1efbaae9c76d0ace489ecb3e929136c455be394e = $this->env->getExtension("native_profiler");
        $__internal_8ee1f11e821cb171118b0a9c1efbaae9c76d0ace489ecb3e929136c455be394e->enter($__internal_8ee1f11e821cb171118b0a9c1efbaae9c76d0ace489ecb3e929136c455be394e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"row\">
        <h2>Clientes</h2>
        <div class=\"col-sm-6\">
            <div class=\"col-sm-12\" style=\"border: #F5871F outset; border-radius: 10px;\">
                ";
        // line 8
        $this->displayBlock('formulario', $context, $blocks);
        // line 10
        echo "                ";
        $this->displayBlock('infocliente', $context, $blocks);
        // line 12
        echo "            </div>
        </div>
        <div class=\"col-sm-6\">
            <div class=\"col-sm-12\" style=\"border: #F5871F outset; border-radius: 10px;\">
                <div class=\"col-sm-2\"></div>
                <div class=\"col-sm-8\">
                    <form class=\"form-horizontal\" method=\"POST\" action=\"\">
                        <div class=\"form-group\">
                            <h3 style=\"margin-bottom: 0px;\">Registrar</h3>
                        </div>
                        <div class=\"form-group\">
                            <label for=\"nuip\" class=\"control-label\">No. de identificacion</label>
                            <input name=\"nuip\" type=\"text\" class=\"form-control\" placeholder=\"Numero de identificacion\"/>
                        </div>
                        <div class=\"form-group\">
                            <label for=\"nombre\" class=\"control-label\">Nombre y apellidos</label>
                            <input name=\"nombre\" type=\"text\" class=\"form-control\" placeholder=\"Nombre y apellidos completos\"/>
                        </div>
                        <div class=\"form-group\">
                            <label for=\"fechaNacimiento\" class=\"control-label\">Fecha de nacimiento</label>
                            <input name=\"fechaNacimiento\" type=\"date\" class=\"form-control\" placeholder=\"Fecha de nacimiento\"/>
                        </div>
                        <div class=\"form-group\">
                            <label for=\"email\" class=\"control-label\">Email</label>
                            <input name=\"email\" type=\"email\" class=\"form-control\" placeholder=\"Correo personal\"/>
                        </div>
                        <div class=\"form-group text-center\">
                            <button class=\"btn btn-lg btn-success\" type=\"submit\"><span class=\"glyphicon glyphicon-floppy-saved\"></span> Registrar</button>
                        </div>
                    </form>
                </div>
                <div class=\"col-sm-2\"></div>
            </div>
        </div>
    </div>
";
        
        $__internal_8ee1f11e821cb171118b0a9c1efbaae9c76d0ace489ecb3e929136c455be394e->leave($__internal_8ee1f11e821cb171118b0a9c1efbaae9c76d0ace489ecb3e929136c455be394e_prof);

    }

    // line 8
    public function block_formulario($context, array $blocks = array())
    {
        $__internal_ed61672ec6be66875fe806aa0e354ac0fde8437d5bce974c0d8312798153b5bb = $this->env->getExtension("native_profiler");
        $__internal_ed61672ec6be66875fe806aa0e354ac0fde8437d5bce974c0d8312798153b5bb->enter($__internal_ed61672ec6be66875fe806aa0e354ac0fde8437d5bce974c0d8312798153b5bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formulario"));

        // line 9
        echo "                ";
        
        $__internal_ed61672ec6be66875fe806aa0e354ac0fde8437d5bce974c0d8312798153b5bb->leave($__internal_ed61672ec6be66875fe806aa0e354ac0fde8437d5bce974c0d8312798153b5bb_prof);

    }

    // line 10
    public function block_infocliente($context, array $blocks = array())
    {
        $__internal_fa2874902cb694b8fd3eecebd91109ef211211f1e7af2c8439b037ab1b8cab20 = $this->env->getExtension("native_profiler");
        $__internal_fa2874902cb694b8fd3eecebd91109ef211211f1e7af2c8439b037ab1b8cab20->enter($__internal_fa2874902cb694b8fd3eecebd91109ef211211f1e7af2c8439b037ab1b8cab20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "infocliente"));

        // line 11
        echo "                ";
        
        $__internal_fa2874902cb694b8fd3eecebd91109ef211211f1e7af2c8439b037ab1b8cab20->leave($__internal_fa2874902cb694b8fd3eecebd91109ef211211f1e7af2c8439b037ab1b8cab20_prof);

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
        return array (  114 => 11,  108 => 10,  101 => 9,  95 => 8,  53 => 12,  50 => 10,  48 => 8,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <div class="row">*/
/*         <h2>Clientes</h2>*/
/*         <div class="col-sm-6">*/
/*             <div class="col-sm-12" style="border: #F5871F outset; border-radius: 10px;">*/
/*                 {% block formulario %}*/
/*                 {% endblock %}*/
/*                 {% block infocliente %}*/
/*                 {% endblock %}*/
/*             </div>*/
/*         </div>*/
/*         <div class="col-sm-6">*/
/*             <div class="col-sm-12" style="border: #F5871F outset; border-radius: 10px;">*/
/*                 <div class="col-sm-2"></div>*/
/*                 <div class="col-sm-8">*/
/*                     <form class="form-horizontal" method="POST" action="">*/
/*                         <div class="form-group">*/
/*                             <h3 style="margin-bottom: 0px;">Registrar</h3>*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <label for="nuip" class="control-label">No. de identificacion</label>*/
/*                             <input name="nuip" type="text" class="form-control" placeholder="Numero de identificacion"/>*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <label for="nombre" class="control-label">Nombre y apellidos</label>*/
/*                             <input name="nombre" type="text" class="form-control" placeholder="Nombre y apellidos completos"/>*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <label for="fechaNacimiento" class="control-label">Fecha de nacimiento</label>*/
/*                             <input name="fechaNacimiento" type="date" class="form-control" placeholder="Fecha de nacimiento"/>*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <label for="email" class="control-label">Email</label>*/
/*                             <input name="email" type="email" class="form-control" placeholder="Correo personal"/>*/
/*                         </div>*/
/*                         <div class="form-group text-center">*/
/*                             <button class="btn btn-lg btn-success" type="submit"><span class="glyphicon glyphicon-floppy-saved"></span> Registrar</button>*/
/*                         </div>*/
/*                     </form>*/
/*                 </div>*/
/*                 <div class="col-sm-2"></div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
