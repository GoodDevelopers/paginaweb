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
        $__internal_b29cdad68182faf35b8b76918ba70cfabe9acb51c17d2a56395c2cab79136c50 = $this->env->getExtension("native_profiler");
        $__internal_b29cdad68182faf35b8b76918ba70cfabe9acb51c17d2a56395c2cab79136c50->enter($__internal_b29cdad68182faf35b8b76918ba70cfabe9acb51c17d2a56395c2cab79136c50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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

            <div align=\"center\">
                <img src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/chanfle/img/logo.jpg"), "html", null, true);
        echo "\" alt=\"LogoChanfle\" height=\"150\" width=\"150\"/>
            </div>

            <!-- Navegacion -->
            <nav class=\"navbar-default\">
                <div class=\"container\">                     
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
        // line 42
        echo $this->env->getExtension('routing')->getPath("index");
        echo "\">Inicio</a></li>
                            <li><a  href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("historia");
        echo "\">Historia</a></li>
                            <li><a  href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("productos");
        echo "\">Productos</a></li>
                            <li><a  href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("clientes");
        echo "\">Clientes</a></li>
                            <li><a  href=\"";
        // line 46
        echo $this->env->getExtension('routing')->getPath("contacto");
        echo "\">Contacto</a></li>
                        </ul>
                    </div>
                </div>
            </nav> <!-- Fin navegacion -->
            <br>

            <div class=\"container\">";
        // line 53
        $this->displayBlock('body', $context, $blocks);
        echo "</div>  

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
        
        $__internal_b29cdad68182faf35b8b76918ba70cfabe9acb51c17d2a56395c2cab79136c50->leave($__internal_b29cdad68182faf35b8b76918ba70cfabe9acb51c17d2a56395c2cab79136c50_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_08d757b1f56204c0c09c462d9ba71437712c9faefa530d971830bd58f17c3004 = $this->env->getExtension("native_profiler");
        $__internal_08d757b1f56204c0c09c462d9ba71437712c9faefa530d971830bd58f17c3004->enter($__internal_08d757b1f56204c0c09c462d9ba71437712c9faefa530d971830bd58f17c3004_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Chanfle Taqueria";
        
        $__internal_08d757b1f56204c0c09c462d9ba71437712c9faefa530d971830bd58f17c3004->leave($__internal_08d757b1f56204c0c09c462d9ba71437712c9faefa530d971830bd58f17c3004_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b5dc67b0ed1b735f9bafba696bb20f0fba080eb03eb9444fc5bcb1de35a0ecd5 = $this->env->getExtension("native_profiler");
        $__internal_b5dc67b0ed1b735f9bafba696bb20f0fba080eb03eb9444fc5bcb1de35a0ecd5->enter($__internal_b5dc67b0ed1b735f9bafba696bb20f0fba080eb03eb9444fc5bcb1de35a0ecd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_b5dc67b0ed1b735f9bafba696bb20f0fba080eb03eb9444fc5bcb1de35a0ecd5->leave($__internal_b5dc67b0ed1b735f9bafba696bb20f0fba080eb03eb9444fc5bcb1de35a0ecd5_prof);

    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_69facc64beaa8b4a6a47abf1274cb728125f6be077d57b6e2901f7b3ff565d6a = $this->env->getExtension("native_profiler");
        $__internal_69facc64beaa8b4a6a47abf1274cb728125f6be077d57b6e2901f7b3ff565d6a->enter($__internal_69facc64beaa8b4a6a47abf1274cb728125f6be077d57b6e2901f7b3ff565d6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 16
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/chanfle/js/jquery.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/chanfle/js/bootstrap.js"), "html", null, true);
        echo "\"></script>            
        ";
        
        $__internal_69facc64beaa8b4a6a47abf1274cb728125f6be077d57b6e2901f7b3ff565d6a->leave($__internal_69facc64beaa8b4a6a47abf1274cb728125f6be077d57b6e2901f7b3ff565d6a_prof);

    }

    // line 53
    public function block_body($context, array $blocks = array())
    {
        $__internal_b6bbfc713466839f261e48252994257149322024bba4d6ab4f444a895d4c5b68 = $this->env->getExtension("native_profiler");
        $__internal_b6bbfc713466839f261e48252994257149322024bba4d6ab4f444a895d4c5b68->enter($__internal_b6bbfc713466839f261e48252994257149322024bba4d6ab4f444a895d4c5b68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b6bbfc713466839f261e48252994257149322024bba4d6ab4f444a895d4c5b68->leave($__internal_b6bbfc713466839f261e48252994257149322024bba4d6ab4f444a895d4c5b68_prof);

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
        return array (  179 => 53,  170 => 17,  165 => 16,  159 => 15,  148 => 11,  144 => 10,  139 => 9,  133 => 8,  121 => 6,  107 => 57,  100 => 53,  90 => 46,  86 => 45,  82 => 44,  78 => 43,  74 => 42,  54 => 25,  46 => 19,  43 => 15,  41 => 8,  37 => 7,  33 => 6,  26 => 1,);
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
/* */
/*             <div align="center">*/
/*                 <img src="{{ asset('bundles/chanfle/img/logo.jpg') }}" alt="LogoChanfle" height="150" width="150"/>*/
/*             </div>*/
/* */
/*             <!-- Navegacion -->*/
/*             <nav class="navbar-default">*/
/*                 <div class="container">                     */
/*                     <div class="navbar-header">                            */
/*                         <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">*/
/*                             <!--<span class="sr-only">Toggle navigation</span>-->*/
/*                             <span class="icon-bar"></span>*/
/*                             <span class="icon-bar"></span>*/
/*                             <span class="icon-bar"></span>*/
/*                         </button>                           */
/*                     </div>*/
/* */
/*                     <div id="navbar" class="navbar-collapse collapse">*/
/*                         <ul class="nav nav-justified">*/
/*                             <li class="active"><a href="{{ path('index') }}">Inicio</a></li>*/
/*                             <li><a  href="{{ path('historia') }}">Historia</a></li>*/
/*                             <li><a  href="{{ path('productos') }}">Productos</a></li>*/
/*                             <li><a  href="{{ path('clientes') }}">Clientes</a></li>*/
/*                             <li><a  href="{{ path('contacto') }}">Contacto</a></li>*/
/*                         </ul>*/
/*                     </div>*/
/*                 </div>*/
/*             </nav> <!-- Fin navegacion -->*/
/*             <br>*/
/* */
/*             <div class="container">{% block body %}{% endblock %}</div>  */
/* */
/*             <footer class="footer">*/
/*                 <p>&copy; 2016 Chanfle Taqueria. Palmira (Colombia) | */
/*                     Desarrollado por: <a href="{{ path('acercade') }}">GD</a>*/
/*                 </p>*/
/*             </footer>*/
/*         </div> <!-- /Container -->*/
/*     </body>*/
/* </html>*/
/* */
