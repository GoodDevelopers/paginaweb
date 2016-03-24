<?php

/* LoginBundle:Default:formulario.html.twig */
class __TwigTemplate_da790323c4a41042100cf21dc526b407117606fa85927219133d40b5dc251f78 extends Twig_Template
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
        $__internal_c73c1494b4aa532dc5b9f4ecd363f7376063cf26531deb6ebb2f7fcd2fa8db01 = $this->env->getExtension("native_profiler");
        $__internal_c73c1494b4aa532dc5b9f4ecd363f7376063cf26531deb6ebb2f7fcd2fa8db01->enter($__internal_c73c1494b4aa532dc5b9f4ecd363f7376063cf26531deb6ebb2f7fcd2fa8db01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LoginBundle:Default:formulario.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c73c1494b4aa532dc5b9f4ecd363f7376063cf26531deb6ebb2f7fcd2fa8db01->leave($__internal_c73c1494b4aa532dc5b9f4ecd363f7376063cf26531deb6ebb2f7fcd2fa8db01_prof);

    }

    // line 3
    public function block_formulario($context, array $blocks = array())
    {
        $__internal_5b36af0eb6004ea04dc94ec7d983645a7e5e15f50638000f8349dce6fbeafe7c = $this->env->getExtension("native_profiler");
        $__internal_5b36af0eb6004ea04dc94ec7d983645a7e5e15f50638000f8349dce6fbeafe7c->enter($__internal_5b36af0eb6004ea04dc94ec7d983645a7e5e15f50638000f8349dce6fbeafe7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formulario"));

        // line 4
        echo "    
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
    
";
        
        $__internal_5b36af0eb6004ea04dc94ec7d983645a7e5e15f50638000f8349dce6fbeafe7c->leave($__internal_5b36af0eb6004ea04dc94ec7d983645a7e5e15f50638000f8349dce6fbeafe7c_prof);

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
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'PaginasBundle:Default:clientes.html.twig' %}*/
/* */
/* {% block formulario %}*/
/*     */
/*     <!--            */
/*                     <div class="col-sm-6">*/
/*                         <h3 style="text-align: center">Iniciar Sesion</h3>*/
/*                         <form class="form-horizontal">*/
/*                             <div class="form-group">*/
/*                                 <label for="inputEmail2" class="col-sm-3 control-label">Correo</label>*/
/*                                 <div class="col-sm-9">*/
/*                                     <input type="email" class="form-control" id="inputEmail3" placeholder="Correo electronico">*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="form-group">*/
/*                                 <label for="inputPassword3" class="col-sm-3 control-label">Contraseña</label>*/
/*                                 <div class="col-sm-9">*/
/*                                     <input type="password" class="form-control" id="inputPassword3" placeholder="Password">*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="form-group">*/
/*                                 <div class="col-sm-offset-3 col-sm-9">*/
/*                                     <button type="submit" class="btn btn-default">Iniciar Sesion</button>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </form>*/
/*                     </div> */
/*         -->*/
/*     */
/* {% endblock %}*/
