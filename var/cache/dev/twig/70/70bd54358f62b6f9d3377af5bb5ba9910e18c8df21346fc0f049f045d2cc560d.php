<?php

/* base.html.twig */
class __TwigTemplate_b7f33e278cb9731b2d55219ada430c5ddbd27d8597b97f1a8e886e9e32858096 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3d29ffece60e82e77490f9815f4ac92b0f3fdf66b33da343983e1957ea0495ae = $this->env->getExtension("native_profiler");
        $__internal_3d29ffece60e82e77490f9815f4ac92b0f3fdf66b33da343983e1957ea0495ae->enter($__internal_3d29ffece60e82e77490f9815f4ac92b0f3fdf66b33da343983e1957ea0495ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <link  href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/kanban.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link  href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/js/kanban.js"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link  href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/js/bootstrap.min.js"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        



        
    </head>
    <body>
        ";
        // line 18
        $this->displayBlock('body', $context, $blocks);
        // line 19
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 22
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/js/kanban.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    </body>
</html>
";
        
        $__internal_3d29ffece60e82e77490f9815f4ac92b0f3fdf66b33da343983e1957ea0495ae->leave($__internal_3d29ffece60e82e77490f9815f4ac92b0f3fdf66b33da343983e1957ea0495ae_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_2d599438ba1169429fd4c1377091aab156e61a3144c829c519429f178e075a44 = $this->env->getExtension("native_profiler");
        $__internal_2d599438ba1169429fd4c1377091aab156e61a3144c829c519429f178e075a44->enter($__internal_2d599438ba1169429fd4c1377091aab156e61a3144c829c519429f178e075a44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_2d599438ba1169429fd4c1377091aab156e61a3144c829c519429f178e075a44->leave($__internal_2d599438ba1169429fd4c1377091aab156e61a3144c829c519429f178e075a44_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_db54ec8bdf9c48147169eaeae57254ac9f245dcada1d0a674e84296da0b3814a = $this->env->getExtension("native_profiler");
        $__internal_db54ec8bdf9c48147169eaeae57254ac9f245dcada1d0a674e84296da0b3814a->enter($__internal_db54ec8bdf9c48147169eaeae57254ac9f245dcada1d0a674e84296da0b3814a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_db54ec8bdf9c48147169eaeae57254ac9f245dcada1d0a674e84296da0b3814a->leave($__internal_db54ec8bdf9c48147169eaeae57254ac9f245dcada1d0a674e84296da0b3814a_prof);

    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        $__internal_4afeff6e7058a5a66f133d650e39b4b9f44349840bc5101edd275a53be7eb9bc = $this->env->getExtension("native_profiler");
        $__internal_4afeff6e7058a5a66f133d650e39b4b9f44349840bc5101edd275a53be7eb9bc->enter($__internal_4afeff6e7058a5a66f133d650e39b4b9f44349840bc5101edd275a53be7eb9bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_4afeff6e7058a5a66f133d650e39b4b9f44349840bc5101edd275a53be7eb9bc->leave($__internal_4afeff6e7058a5a66f133d650e39b4b9f44349840bc5101edd275a53be7eb9bc_prof);

    }

    // line 19
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_96fce2a991fb3d960d81d3d86b93d7d107c10c1a943183551e6a798456f1ac05 = $this->env->getExtension("native_profiler");
        $__internal_96fce2a991fb3d960d81d3d86b93d7d107c10c1a943183551e6a798456f1ac05->enter($__internal_96fce2a991fb3d960d81d3d86b93d7d107c10c1a943183551e6a798456f1ac05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 20
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/js/kanban.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        ";
        
        $__internal_96fce2a991fb3d960d81d3d86b93d7d107c10c1a943183551e6a798456f1ac05->leave($__internal_96fce2a991fb3d960d81d3d86b93d7d107c10c1a943183551e6a798456f1ac05_prof);

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
        return array (  119 => 20,  113 => 19,  102 => 18,  91 => 6,  79 => 5,  67 => 22,  64 => 19,  62 => 18,  51 => 10,  47 => 9,  43 => 8,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*         <link  href="{{ asset('bundles/framework/css/kanban.css') }}" rel="stylesheet">*/
/*         <link  href="{{ asset('bundles/framework/js/kanban.js') }}" rel="stylesheet">*/
/*         <link  href="{{ asset('bundles/framework/js/bootstrap.min.js') }}" rel="stylesheet">*/
/*         */
/* */
/* */
/* */
/*         */
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}*/
/*             <script src="{{ asset('bundles/framework/js/kanban.js') }}" type="text/javascript"></script>*/
/*         {% endblock %}*/
/*         <script src="{{ asset('bundles/framework/js/kanban.js') }}" type="text/javascript"></script>*/
/*     </body>*/
/* </html>*/
/* */
