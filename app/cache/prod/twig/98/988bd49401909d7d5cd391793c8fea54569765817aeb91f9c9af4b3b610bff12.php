<?php

/* base.html.twig */
class __TwigTemplate_4a0e74df999d3ee3b5931f83e7a73252c2ced84f75dd276fd8e655c90cbaf01c extends Twig_Template
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
        $__internal_2557f0ff58738af922b6c92d7da061cf258f19e2e3ad88d30790db71955721bd = $this->env->getExtension("native_profiler");
        $__internal_2557f0ff58738af922b6c92d7da061cf258f19e2e3ad88d30790db71955721bd->enter($__internal_2557f0ff58738af922b6c92d7da061cf258f19e2e3ad88d30790db71955721bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_2557f0ff58738af922b6c92d7da061cf258f19e2e3ad88d30790db71955721bd->leave($__internal_2557f0ff58738af922b6c92d7da061cf258f19e2e3ad88d30790db71955721bd_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_b7ac22c58323dec4441492720d47573d17c761e0e405507227f9a82d99133456 = $this->env->getExtension("native_profiler");
        $__internal_b7ac22c58323dec4441492720d47573d17c761e0e405507227f9a82d99133456->enter($__internal_b7ac22c58323dec4441492720d47573d17c761e0e405507227f9a82d99133456_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Chanfle Taqueria";
        
        $__internal_b7ac22c58323dec4441492720d47573d17c761e0e405507227f9a82d99133456->leave($__internal_b7ac22c58323dec4441492720d47573d17c761e0e405507227f9a82d99133456_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e43975b16806b3390b7a3b473d6dce7a991efd7e5da0ac5d34d9780fe5908e9e = $this->env->getExtension("native_profiler");
        $__internal_e43975b16806b3390b7a3b473d6dce7a991efd7e5da0ac5d34d9780fe5908e9e->enter($__internal_e43975b16806b3390b7a3b473d6dce7a991efd7e5da0ac5d34d9780fe5908e9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_e43975b16806b3390b7a3b473d6dce7a991efd7e5da0ac5d34d9780fe5908e9e->leave($__internal_e43975b16806b3390b7a3b473d6dce7a991efd7e5da0ac5d34d9780fe5908e9e_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1973d5b2444c1bcc13ad2f4f527a5b91967affb20d9a2ccebdf0537089680548 = $this->env->getExtension("native_profiler");
        $__internal_1973d5b2444c1bcc13ad2f4f527a5b91967affb20d9a2ccebdf0537089680548->enter($__internal_1973d5b2444c1bcc13ad2f4f527a5b91967affb20d9a2ccebdf0537089680548_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 14
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/chanfle/js/jquery.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/chanfle/js/bootstrap.js"), "html", null, true);
        echo "\"></script>            
        ";
        
        $__internal_1973d5b2444c1bcc13ad2f4f527a5b91967affb20d9a2ccebdf0537089680548->leave($__internal_1973d5b2444c1bcc13ad2f4f527a5b91967affb20d9a2ccebdf0537089680548_prof);

    }

    // line 51
    public function block_body($context, array $blocks = array())
    {
        $__internal_6d2c83115b4b50c8f1917b6f58e9079ff93a2d458771bcfff89610e0d21c184c = $this->env->getExtension("native_profiler");
        $__internal_6d2c83115b4b50c8f1917b6f58e9079ff93a2d458771bcfff89610e0d21c184c->enter($__internal_6d2c83115b4b50c8f1917b6f58e9079ff93a2d458771bcfff89610e0d21c184c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6d2c83115b4b50c8f1917b6f58e9079ff93a2d458771bcfff89610e0d21c184c->leave($__internal_6d2c83115b4b50c8f1917b6f58e9079ff93a2d458771bcfff89610e0d21c184c_prof);

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
