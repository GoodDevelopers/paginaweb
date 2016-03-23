<?php

/* base.html.twig */
class __TwigTemplate_9e824140b5f22791b5100613c5ed4bf1beb1d65228bb4b155565006185f02402 extends Twig_Template
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
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "Chanfle Taqueria";
    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
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
    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        // line 14
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/chanfle/js/jquery.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/chanfle/js/bootstrap.js"), "html", null, true);
        echo "\"></script>            
        ";
    }

    // line 51
    public function block_body($context, array $blocks = array())
    {
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
        return array (  152 => 51,  146 => 15,  141 => 14,  138 => 13,  131 => 10,  126 => 9,  123 => 8,  117 => 6,  106 => 57,  97 => 51,  88 => 45,  84 => 44,  80 => 43,  76 => 42,  72 => 41,  52 => 24,  43 => 17,  40 => 13,  38 => 8,  34 => 7,  30 => 6,  23 => 1,);
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
