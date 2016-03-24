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
        $__internal_78ae5a0a0657d26ddd0c4ce76c4aa7044555fe914171dd97ea1e3b808f4a3b4c = $this->env->getExtension("native_profiler");
        $__internal_78ae5a0a0657d26ddd0c4ce76c4aa7044555fe914171dd97ea1e3b808f4a3b4c->enter($__internal_78ae5a0a0657d26ddd0c4ce76c4aa7044555fe914171dd97ea1e3b808f4a3b4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LoginBundle:Default:formulario.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_78ae5a0a0657d26ddd0c4ce76c4aa7044555fe914171dd97ea1e3b808f4a3b4c->leave($__internal_78ae5a0a0657d26ddd0c4ce76c4aa7044555fe914171dd97ea1e3b808f4a3b4c_prof);

    }

    // line 3
    public function block_formulario($context, array $blocks = array())
    {
        $__internal_55635604a5ce7bafba964597e7adcc6e3fecee439fcf63c975a3fe720a6f6fb1 = $this->env->getExtension("native_profiler");
        $__internal_55635604a5ce7bafba964597e7adcc6e3fecee439fcf63c975a3fe720a6f6fb1->enter($__internal_55635604a5ce7bafba964597e7adcc6e3fecee439fcf63c975a3fe720a6f6fb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formulario"));

        // line 4
        echo "
    <form class=\"form-horizontal\" method=\"POST\" action=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("login");
        echo "\">
        <div class=\"form-group\">
            <label for=\"inputEmail3\" class=\"col-sm-2 control-label\">Email</label>
            <div class=\"col-sm-10\">
                <input name=\"correo\" type=\"email\" class=\"form-control\" id=\"inputEmail3\" placeholder=\"Email\"/>
            </div>
        </div>
        
        <div class=\"form-group\">
            <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">Password</label>
            <div class=\"col-sm-10\">
                <input name=\"pass\" type=\"password\" class=\"form-control\" id=\"inputPassword3\" placeholder=\"Password\"/>
            </div>
        </div>
                
        <div class=\"form-group\">
            <div class=\"col-sm-offset-2 col-sm-10\">
                <button type=\"submit\" class=\"btn btn-default\">Sign in</button>
            </div>
        </div>
    </form>



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
        
        $__internal_55635604a5ce7bafba964597e7adcc6e3fecee439fcf63c975a3fe720a6f6fb1->leave($__internal_55635604a5ce7bafba964597e7adcc6e3fecee439fcf63c975a3fe720a6f6fb1_prof);

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
        return array (  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'PaginasBundle:Default:clientes.html.twig' %}*/
/* */
/* {% block formulario %}*/
/* */
/*     <form class="form-horizontal" method="POST" action="{{path('login')}}">*/
/*         <div class="form-group">*/
/*             <label for="inputEmail3" class="col-sm-2 control-label">Email</label>*/
/*             <div class="col-sm-10">*/
/*                 <input name="correo" type="email" class="form-control" id="inputEmail3" placeholder="Email"/>*/
/*             </div>*/
/*         </div>*/
/*         */
/*         <div class="form-group">*/
/*             <label for="inputPassword3" class="col-sm-2 control-label">Password</label>*/
/*             <div class="col-sm-10">*/
/*                 <input name="pass" type="password" class="form-control" id="inputPassword3" placeholder="Password"/>*/
/*             </div>*/
/*         </div>*/
/*                 */
/*         <div class="form-group">*/
/*             <div class="col-sm-offset-2 col-sm-10">*/
/*                 <button type="submit" class="btn btn-default">Sign in</button>*/
/*             </div>*/
/*         </div>*/
/*     </form>*/
/* */
/* */
/* */
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
/*     -->*/
/* */
/* {% endblock %}*/
