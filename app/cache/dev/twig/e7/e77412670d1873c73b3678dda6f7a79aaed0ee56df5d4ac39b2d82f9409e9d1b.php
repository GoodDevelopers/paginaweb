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
        $__internal_6457e7ffa04d6fd85bac66f2eb723d20bbe5c133a68bb50588350d0a13f32394 = $this->env->getExtension("native_profiler");
        $__internal_6457e7ffa04d6fd85bac66f2eb723d20bbe5c133a68bb50588350d0a13f32394->enter($__internal_6457e7ffa04d6fd85bac66f2eb723d20bbe5c133a68bb50588350d0a13f32394_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LoginBundle:Default:formulario.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6457e7ffa04d6fd85bac66f2eb723d20bbe5c133a68bb50588350d0a13f32394->leave($__internal_6457e7ffa04d6fd85bac66f2eb723d20bbe5c133a68bb50588350d0a13f32394_prof);

    }

    // line 3
    public function block_formulario($context, array $blocks = array())
    {
        $__internal_2fb84c25c0c971aaccff0fb5bb0a138fbe790168ef997b7f7564379a4c85aad5 = $this->env->getExtension("native_profiler");
        $__internal_2fb84c25c0c971aaccff0fb5bb0a138fbe790168ef997b7f7564379a4c85aad5->enter($__internal_2fb84c25c0c971aaccff0fb5bb0a138fbe790168ef997b7f7564379a4c85aad5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formulario"));

        // line 4
        echo "    <div class=\"col-sm-6\">
        <h3>Iniciar Sesion</h3>
        <form class=\"form-horizontal\" method=\"POST\" action=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("login");
        echo "\">
            <div class=\"form-group\">
                <label for=\"inputEmail3\" class=\"col-sm-2 control-label\">Correo</label>
                <div class=\"col-sm-10\">
                    <input name=\"correo\" type=\"email\" class=\"form-control\" id=\"inputEmail3\" placeholder=\"Email\"/>
                </div>
            </div>

            <div class=\"form-group\">
                <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">Contraseña</label>
                <div class=\"col-sm-10\">
                    <input name=\"pass\" type=\"password\" class=\"form-control\" id=\"inputPassword3\" placeholder=\"Password\"/>
                </div>
            </div>

            <div class=\"form-group\">
                <div class=\"col-sm-offset-2 col-sm-10\">
                    <button type=\"submit\" class=\"btn btn-default\">Ingresar</button>
                </div>
            </div>
        </form>
    </div>
";
        
        $__internal_2fb84c25c0c971aaccff0fb5bb0a138fbe790168ef997b7f7564379a4c85aad5->leave($__internal_2fb84c25c0c971aaccff0fb5bb0a138fbe790168ef997b7f7564379a4c85aad5_prof);

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
        return array (  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'PaginasBundle:Default:clientes.html.twig' %}*/
/* */
/* {% block formulario %}*/
/*     <div class="col-sm-6">*/
/*         <h3>Iniciar Sesion</h3>*/
/*         <form class="form-horizontal" method="POST" action="{{path('login')}}">*/
/*             <div class="form-group">*/
/*                 <label for="inputEmail3" class="col-sm-2 control-label">Correo</label>*/
/*                 <div class="col-sm-10">*/
/*                     <input name="correo" type="email" class="form-control" id="inputEmail3" placeholder="Email"/>*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <div class="form-group">*/
/*                 <label for="inputPassword3" class="col-sm-2 control-label">Contraseña</label>*/
/*                 <div class="col-sm-10">*/
/*                     <input name="pass" type="password" class="form-control" id="inputPassword3" placeholder="Password"/>*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <div class="form-group">*/
/*                 <div class="col-sm-offset-2 col-sm-10">*/
/*                     <button type="submit" class="btn btn-default">Ingresar</button>*/
/*                 </div>*/
/*             </div>*/
/*         </form>*/
/*     </div>*/
/* {% endblock %}*/
