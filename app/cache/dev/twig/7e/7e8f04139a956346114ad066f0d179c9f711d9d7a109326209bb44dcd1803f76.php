<?php

/* base.html.twig */
class __TwigTemplate_82fa3829c86bddd88e840ca9f8c463722e64e761c077c57f1e15b0ca9d899480 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2f9e293a117d152d0d02ccb05cb75f566d8d2509e482bcdfe577890da3d15d77 = $this->env->getExtension("native_profiler");
        $__internal_2f9e293a117d152d0d02ccb05cb75f566d8d2509e482bcdfe577890da3d15d77->enter($__internal_2f9e293a117d152d0d02ccb05cb75f566d8d2509e482bcdfe577890da3d15d77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"es\">
    <head>
        <meta charset=\"UTF-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>        
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/chanfle/img/favicon.ico"), "html", null, true);
        echo "\" />        
        ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 17
        echo "    </head>

    <body>
        <div class=\"container\">
            <div class=\"masthead\">
                
                <div align=\"center\">
                    <img src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/chanfle/img/logo.jpg"), "html", null, true);
        echo "\" alt=\"LogoChanfle\" height=\"200\" width=\"200\"/>
                </div>

                <!-- Navegacion -->
                <nav class=\"navbar-default\">
                    <div class=\"container-fluid\">                        
                        <div class=\"navbar-header\">                            
                            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
                              <!--<span class=\"sr-only\">Toggle navigation</span>-->
                              <span class=\"icon-bar\"></span>
                              <span class=\"icon-bar\"></span>
                              <span class=\"icon-bar\"></span>
                            </button>                           
                        </div>
                        
                        <div id=\"navbar\" class=\"navbar-collapse collapse\">
                            <ul class=\"nav nav-justified\">
                                <li class=\"active\"><a href=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("index");
        echo "\">INICIO</a></li>
                                <li><a href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("historia");
        echo "\">HISTORIA</a></li>
                                <li><a href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("productos");
        echo "\">PRODUCTOS</a></li>
                                <li><a href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("clientes");
        echo "\">CLIENTES</a></li>
                                <li><a href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("contacto");
        echo "\">CONTACTO</a></li>
                            </ul>
                        </div>
                    </div>
                </nav> <!-- Fin navegacion -->
                        
                ";
        // line 51
        $this->displayBlock('body', $context, $blocks);
        echo "  
                
            </div> <!-- /masthead /Contenedor Nav y Carrusel --> 
            
            <footer class=\"footer\">
                <p>&copy; 2016 Chanfle Taqueria. Palmira (Colombia) | 
                    Desarrollado por: <a href=\"";
        // line 57
        echo $this->env->getExtension('routing')->getPath("acercade");
        echo "\">GD</a>
                </p>
            </footer>
        </div> <!-- /Container -->
    </body>
</html>
";
        
        $__internal_2f9e293a117d152d0d02ccb05cb75f566d8d2509e482bcdfe577890da3d15d77->leave($__internal_2f9e293a117d152d0d02ccb05cb75f566d8d2509e482bcdfe577890da3d15d77_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_cce957dd54c699978ababce6132e30976f447f35986fcf29d1bd72e7aac9457c = $this->env->getExtension("native_profiler");
        $__internal_cce957dd54c699978ababce6132e30976f447f35986fcf29d1bd72e7aac9457c->enter($__internal_cce957dd54c699978ababce6132e30976f447f35986fcf29d1bd72e7aac9457c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Chanfle Taqueria";
        
        $__internal_cce957dd54c699978ababce6132e30976f447f35986fcf29d1bd72e7aac9457c->leave($__internal_cce957dd54c699978ababce6132e30976f447f35986fcf29d1bd72e7aac9457c_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2afeb6885d28cdfa22eb4d273b021b8ef6387bc67023a11aa6518a9faca9841d = $this->env->getExtension("native_profiler");
        $__internal_2afeb6885d28cdfa22eb4d273b021b8ef6387bc67023a11aa6518a9faca9841d->enter($__internal_2afeb6885d28cdfa22eb4d273b021b8ef6387bc67023a11aa6518a9faca9841d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/chanfle/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />            
            <link href='";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/chanfle/css/estilos.css"), "html", null, true);
        echo "' rel='stylesheet' type='text/css'>
            <link href='https://fonts.googleapis.com/css?family=Cabin:500' rel='stylesheet' type='text/css'>
        ";
        
        $__internal_2afeb6885d28cdfa22eb4d273b021b8ef6387bc67023a11aa6518a9faca9841d->leave($__internal_2afeb6885d28cdfa22eb4d273b021b8ef6387bc67023a11aa6518a9faca9841d_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f7fd940e9557edc8ed4f9c905fca76f2e9422a7f5a1e57c3f53a8c322d495aa1 = $this->env->getExtension("native_profiler");
        $__internal_f7fd940e9557edc8ed4f9c905fca76f2e9422a7f5a1e57c3f53a8c322d495aa1->enter($__internal_f7fd940e9557edc8ed4f9c905fca76f2e9422a7f5a1e57c3f53a8c322d495aa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 14
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/chanfle/js/jquery.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/chanfle/js/bootstrap.js"), "html", null, true);
        echo "\"></script>            
        ";
        
        $__internal_f7fd940e9557edc8ed4f9c905fca76f2e9422a7f5a1e57c3f53a8c322d495aa1->leave($__internal_f7fd940e9557edc8ed4f9c905fca76f2e9422a7f5a1e57c3f53a8c322d495aa1_prof);

    }

    // line 51
    public function block_body($context, array $blocks = array())
    {
        $__internal_d25029bbd70ec0657a3f1daa6591f9387e393b48e36d92e80ab6f019716d6ac7 = $this->env->getExtension("native_profiler");
        $__internal_d25029bbd70ec0657a3f1daa6591f9387e393b48e36d92e80ab6f019716d6ac7->enter($__internal_d25029bbd70ec0657a3f1daa6591f9387e393b48e36d92e80ab6f019716d6ac7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d25029bbd70ec0657a3f1daa6591f9387e393b48e36d92e80ab6f019716d6ac7->leave($__internal_d25029bbd70ec0657a3f1daa6591f9387e393b48e36d92e80ab6f019716d6ac7_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 51,  167 => 15,  162 => 14,  156 => 13,  146 => 10,  141 => 9,  135 => 8,  123 => 6,  109 => 57,  100 => 51,  91 => 45,  87 => 44,  83 => 43,  79 => 42,  75 => 41,  55 => 24,  46 => 17,  43 => 13,  41 => 8,  37 => 7,  33 => 6,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="es">*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*         <title>{% block title %}Chanfle Taqueria{% endblock %}</title>        */
/*         <link rel="icon" type="image/x-icon" href="{{ asset('bundles/chanfle/img/favicon.ico') }}" />        */
/*         {% block stylesheets %}*/
/*             <link href="{{ asset('bundles/chanfle/css/bootstrap.css') }}" rel="stylesheet" />            */
/*             <link href='{{ asset('bundles/chanfle/css/estilos.css') }}' rel='stylesheet' type='text/css'>*/
/*             <link href='https://fonts.googleapis.com/css?family=Cabin:500' rel='stylesheet' type='text/css'>*/
/*         {% endblock %}*/
/*         {% block javascripts %}*/
/*             <script src="{{ asset('bundles/chanfle/js/jquery.js') }}"></script>*/
/*             <script src="{{ asset('bundles/chanfle/js/bootstrap.js') }}"></script>            */
/*         {% endblock %}*/
/*     </head>*/
/* */
/*     <body>*/
/*         <div class="container">*/
/*             <div class="masthead">*/
/*                 */
/*                 <div align="center">*/
/*                     <img src="{{ asset('bundles/chanfle/img/logo.jpg') }}" alt="LogoChanfle" height="200" width="200"/>*/
/*                 </div>*/
/* */
/*                 <!-- Navegacion -->*/
/*                 <nav class="navbar-default">*/
/*                     <div class="container-fluid">                        */
/*                         <div class="navbar-header">                            */
/*                             <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">*/
/*                               <!--<span class="sr-only">Toggle navigation</span>-->*/
/*                               <span class="icon-bar"></span>*/
/*                               <span class="icon-bar"></span>*/
/*                               <span class="icon-bar"></span>*/
/*                             </button>                           */
/*                         </div>*/
/*                         */
/*                         <div id="navbar" class="navbar-collapse collapse">*/
/*                             <ul class="nav nav-justified">*/
/*                                 <li class="active"><a href="{{ path('index') }}">INICIO</a></li>*/
/*                                 <li><a href="{{ path('historia') }}">HISTORIA</a></li>*/
/*                                 <li><a href="{{ path('productos') }}">PRODUCTOS</a></li>*/
/*                                 <li><a href="{{ path('clientes') }}">CLIENTES</a></li>*/
/*                                 <li><a href="{{ path('contacto') }}">CONTACTO</a></li>*/
/*                             </ul>*/
/*                         </div>*/
/*                     </div>*/
/*                 </nav> <!-- Fin navegacion -->*/
/*                         */
/*                 {% block body %}{% endblock %}  */
/*                 */
/*             </div> <!-- /masthead /Contenedor Nav y Carrusel --> */
/*             */
/*             <footer class="footer">*/
/*                 <p>&copy; 2016 Chanfle Taqueria. Palmira (Colombia) | */
/*                     Desarrollado por: <a href="{{ path('acercade') }}">GD</a>*/
/*                 </p>*/
/*             </footer>*/
/*         </div> <!-- /Container -->*/
/*     </body>*/
/* </html>*/
/* */
