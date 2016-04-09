<?php

/* base.html.twig */
class __TwigTemplate_d3990a6b3a401ecc0639b61953e92e60144d65bbe96d33072331142971e250eb extends Twig_Template
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
        $__internal_eef5f7f412587311d5b35f0eeb7e921196f5f8e64ae23806bdce765f6214f44a = $this->env->getExtension("native_profiler");
        $__internal_eef5f7f412587311d5b35f0eeb7e921196f5f8e64ae23806bdce765f6214f44a->enter($__internal_eef5f7f412587311d5b35f0eeb7e921196f5f8e64ae23806bdce765f6214f44a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 15
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 19
        echo "    </head>

    <body>
        <div class=\"container animated bounce roboto\">
            <div class=\"row\">
                <div align=\"center\">
                    <img src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/chanfle/img/logo.png"), "html", null, true);
        echo "\" alt=\"LogoChanfle\" height=\"200\" width=\"200\"/>
                </div>
            </div>

            <div class=\"row\">
                <!-- Navegacion -->
                <nav class=\"navbar navbar-default\">
                    <div class=\"container-fluid\">                     
                        <div class=\"navbar-header\">                            
                            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
                                <!--<span class=\"sr-only\">Toggle navigation</span>-->
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                            </button>                           
                        </div>

                        <div id=\"navbar\" class=\"collapse navbar-collapse\">
                            <ul class=\"nav nav-justified\">
                                <li class=\"active\"><a href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("index");
        echo "\"><span class=\"glyphicon glyphicon-home\"></span> Inicio</a></li>
                                <li><a  href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("historia");
        echo "\"><span class=\"glyphicon glyphicon-header\"></span> Historia</a></li>
                                <li><a  href=\"";
        // line 46
        echo $this->env->getExtension('routing')->getPath("productos");
        echo "\"><span class=\"glyphicon glyphicon-cutlery\"></span> Productos</a></li>
                                <li><a  href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("clientes");
        echo "\"><span class=\"glyphicon glyphicon-user\"></span> Clientes</a></li>
                                <li><a  href=\"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("contacto");
        echo "\"><span class=\"glyphicon glyphicon-map-marker\"></span> Contacto</a></li>
                            </ul>
                        </div>
                    </div>
                </nav> <!-- Fin navegacion -->
            </div>
        </div> <!-- /Container -->
        <br>

        <div class=\"container\" style=\"padding-left: 45px; padding-right: 45px;\">
            ";
        // line 58
        $this->displayBlock('body', $context, $blocks);
        // line 60
        echo "
            <div class=\"row\">
                <footer class=\"footer\">
                    <p>&copy; 2016 Chanfle Taqueria. Palmira (Colombia) | 
                        Desarrollado por: <a href=\"";
        // line 64
        echo $this->env->getExtension('routing')->getPath("acercade");
        echo "\">GD</a>
                    </p>
                </footer>
            </div>
        </div>  

    </body>
</html>
";
        
        $__internal_eef5f7f412587311d5b35f0eeb7e921196f5f8e64ae23806bdce765f6214f44a->leave($__internal_eef5f7f412587311d5b35f0eeb7e921196f5f8e64ae23806bdce765f6214f44a_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_ecb222f2cfc1c5edf9a5914bb4924b0ddf9a121cc3fe8813ef2275868a6f7686 = $this->env->getExtension("native_profiler");
        $__internal_ecb222f2cfc1c5edf9a5914bb4924b0ddf9a121cc3fe8813ef2275868a6f7686->enter($__internal_ecb222f2cfc1c5edf9a5914bb4924b0ddf9a121cc3fe8813ef2275868a6f7686_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Chanfle Taqueria";
        
        $__internal_ecb222f2cfc1c5edf9a5914bb4924b0ddf9a121cc3fe8813ef2275868a6f7686->leave($__internal_ecb222f2cfc1c5edf9a5914bb4924b0ddf9a121cc3fe8813ef2275868a6f7686_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e5c0e1fa798bf18fed6945b091e468ecd310719d1a1964c9bd5e8dedf8059603 = $this->env->getExtension("native_profiler");
        $__internal_e5c0e1fa798bf18fed6945b091e468ecd310719d1a1964c9bd5e8dedf8059603->enter($__internal_e5c0e1fa798bf18fed6945b091e468ecd310719d1a1964c9bd5e8dedf8059603_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/chanfle/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />            
            <link href='";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/chanfle/css/estilos.css"), "html", null, true);
        echo "' rel='stylesheet' type='text/css'>
            <link href='";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/chanfle/css/animate.css"), "html", null, true);
        echo "' rel='stylesheet' type='text/css'>
            <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
            <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
        ";
        
        $__internal_e5c0e1fa798bf18fed6945b091e468ecd310719d1a1964c9bd5e8dedf8059603->leave($__internal_e5c0e1fa798bf18fed6945b091e468ecd310719d1a1964c9bd5e8dedf8059603_prof);

    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4b2eb271e6dc833796277c90722835efd4aceb61086d704770c787216914a74f = $this->env->getExtension("native_profiler");
        $__internal_4b2eb271e6dc833796277c90722835efd4aceb61086d704770c787216914a74f->enter($__internal_4b2eb271e6dc833796277c90722835efd4aceb61086d704770c787216914a74f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 16
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/chanfle/js/jquery.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/chanfle/js/bootstrap.js"), "html", null, true);
        echo "\"></script>            
        ";
        
        $__internal_4b2eb271e6dc833796277c90722835efd4aceb61086d704770c787216914a74f->leave($__internal_4b2eb271e6dc833796277c90722835efd4aceb61086d704770c787216914a74f_prof);

    }

    // line 58
    public function block_body($context, array $blocks = array())
    {
        $__internal_500a5f28d719c5ada78d8dae7edd20a1d83b776b6b8b7ffbc88bb5df6d434041 = $this->env->getExtension("native_profiler");
        $__internal_500a5f28d719c5ada78d8dae7edd20a1d83b776b6b8b7ffbc88bb5df6d434041->enter($__internal_500a5f28d719c5ada78d8dae7edd20a1d83b776b6b8b7ffbc88bb5df6d434041_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 59
        echo "            ";
        
        $__internal_500a5f28d719c5ada78d8dae7edd20a1d83b776b6b8b7ffbc88bb5df6d434041->leave($__internal_500a5f28d719c5ada78d8dae7edd20a1d83b776b6b8b7ffbc88bb5df6d434041_prof);

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
        return array (  193 => 59,  187 => 58,  178 => 17,  173 => 16,  167 => 15,  156 => 11,  152 => 10,  147 => 9,  141 => 8,  129 => 6,  113 => 64,  107 => 60,  105 => 58,  92 => 48,  88 => 47,  84 => 46,  80 => 45,  76 => 44,  54 => 25,  46 => 19,  43 => 15,  41 => 8,  37 => 7,  33 => 6,  26 => 1,);
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
/*             <link href='{{ asset('bundles/chanfle/css/animate.css') }}' rel='stylesheet' type='text/css'>*/
/*             <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>*/
/*             <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>*/
/*         {% endblock %}*/
/*         {% block javascripts %}*/
/*             <script src="{{ asset('bundles/chanfle/js/jquery.js') }}"></script>*/
/*             <script src="{{ asset('bundles/chanfle/js/bootstrap.js') }}"></script>            */
/*         {% endblock %}*/
/*     </head>*/
/* */
/*     <body>*/
/*         <div class="container animated bounce roboto">*/
/*             <div class="row">*/
/*                 <div align="center">*/
/*                     <img src="{{ asset('bundles/chanfle/img/logo.png') }}" alt="LogoChanfle" height="200" width="200"/>*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <div class="row">*/
/*                 <!-- Navegacion -->*/
/*                 <nav class="navbar navbar-default">*/
/*                     <div class="container-fluid">                     */
/*                         <div class="navbar-header">                            */
/*                             <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">*/
/*                                 <!--<span class="sr-only">Toggle navigation</span>-->*/
/*                                 <span class="icon-bar"></span>*/
/*                                 <span class="icon-bar"></span>*/
/*                                 <span class="icon-bar"></span>*/
/*                             </button>                           */
/*                         </div>*/
/* */
/*                         <div id="navbar" class="collapse navbar-collapse">*/
/*                             <ul class="nav nav-justified">*/
/*                                 <li class="active"><a href="{{ path('index') }}"><span class="glyphicon glyphicon-home"></span> Inicio</a></li>*/
/*                                 <li><a  href="{{ path('historia') }}"><span class="glyphicon glyphicon-header"></span> Historia</a></li>*/
/*                                 <li><a  href="{{ path('productos') }}"><span class="glyphicon glyphicon-cutlery"></span> Productos</a></li>*/
/*                                 <li><a  href="{{ path('clientes') }}"><span class="glyphicon glyphicon-user"></span> Clientes</a></li>*/
/*                                 <li><a  href="{{ path('contacto') }}"><span class="glyphicon glyphicon-map-marker"></span> Contacto</a></li>*/
/*                             </ul>*/
/*                         </div>*/
/*                     </div>*/
/*                 </nav> <!-- Fin navegacion -->*/
/*             </div>*/
/*         </div> <!-- /Container -->*/
/*         <br>*/
/* */
/*         <div class="container" style="padding-left: 45px; padding-right: 45px;">*/
/*             {% block body %}*/
/*             {% endblock %}*/
/* */
/*             <div class="row">*/
/*                 <footer class="footer">*/
/*                     <p>&copy; 2016 Chanfle Taqueria. Palmira (Colombia) | */
/*                         Desarrollado por: <a href="{{ path('acercade') }}">GD</a>*/
/*                     </p>*/
/*                 </footer>*/
/*             </div>*/
/*         </div>  */
/* */
/*     </body>*/
/* </html>*/
/* */
