<?php

/* KanbanBundle::layout.html.twig */
class __TwigTemplate_e754c8e0a6d80d71c0f3ac3c9d583fe3c29ada7d47531fb1e3b065791804f11b extends Twig_Template
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
        $__internal_4d23bfa711731ea981e6638cc866ca4f00ec4d94c0532a737170b49bccec6e90 = $this->env->getExtension("native_profiler");
        $__internal_4d23bfa711731ea981e6638cc866ca4f00ec4d94c0532a737170b49bccec6e90->enter($__internal_4d23bfa711731ea981e6638cc866ca4f00ec4d94c0532a737170b49bccec6e90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KanbanBundle::layout.html.twig"));

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
        // line 11
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />        
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    </head>
    <body>
        ";
        // line 16
        $this->displayBlock('body', $context, $blocks);
        // line 17
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 22
        echo "
    </body>
</html>
";
        
        $__internal_4d23bfa711731ea981e6638cc866ca4f00ec4d94c0532a737170b49bccec6e90->leave($__internal_4d23bfa711731ea981e6638cc866ca4f00ec4d94c0532a737170b49bccec6e90_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_fbd55806f3bf3785d7885df4b4a3eb75799d7b610fa1773114ab89404c96321b = $this->env->getExtension("native_profiler");
        $__internal_fbd55806f3bf3785d7885df4b4a3eb75799d7b610fa1773114ab89404c96321b->enter($__internal_fbd55806f3bf3785d7885df4b4a3eb75799d7b610fa1773114ab89404c96321b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_fbd55806f3bf3785d7885df4b4a3eb75799d7b610fa1773114ab89404c96321b->leave($__internal_fbd55806f3bf3785d7885df4b4a3eb75799d7b610fa1773114ab89404c96321b_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2c14f931652b09962678b4d686191ed0c3403a9d22721a62603acdc382863d6c = $this->env->getExtension("native_profiler");
        $__internal_2c14f931652b09962678b4d686191ed0c3403a9d22721a62603acdc382863d6c->enter($__internal_2c14f931652b09962678b4d686191ed0c3403a9d22721a62603acdc382863d6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "\t        ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "9b7ca13_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_9b7ca13_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/9b7ca13_part_1_dragula_1.css");
            // line 8
            echo "\t\t\t    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
\t\t\t";
            // asset "9b7ca13_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_9b7ca13_1") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/9b7ca13_part_1_test_2.css");
            echo "\t\t\t    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
\t\t\t";
        } else {
            // asset "9b7ca13"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_9b7ca13") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/9b7ca13.css");
            echo "\t\t\t    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
\t\t\t";
        }
        unset($context["asset_url"]);
        // line 10
        echo "\t\t";
        
        $__internal_2c14f931652b09962678b4d686191ed0c3403a9d22721a62603acdc382863d6c->leave($__internal_2c14f931652b09962678b4d686191ed0c3403a9d22721a62603acdc382863d6c_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_a8757c0c00d581c1202ad43c51c34fb9f95932f783a1a9d4033c12f6cf2cd7ee = $this->env->getExtension("native_profiler");
        $__internal_a8757c0c00d581c1202ad43c51c34fb9f95932f783a1a9d4033c12f6cf2cd7ee->enter($__internal_a8757c0c00d581c1202ad43c51c34fb9f95932f783a1a9d4033c12f6cf2cd7ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a8757c0c00d581c1202ad43c51c34fb9f95932f783a1a9d4033c12f6cf2cd7ee->leave($__internal_a8757c0c00d581c1202ad43c51c34fb9f95932f783a1a9d4033c12f6cf2cd7ee_prof);

    }

    // line 17
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_66ffccc847c692211107a9a3ab09de99a8456bfaa551808c1af59b70610878a5 = $this->env->getExtension("native_profiler");
        $__internal_66ffccc847c692211107a9a3ab09de99a8456bfaa551808c1af59b70610878a5->enter($__internal_66ffccc847c692211107a9a3ab09de99a8456bfaa551808c1af59b70610878a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 18
        echo "\t        ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "56f82b2_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_56f82b2_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/56f82b2_part_1_dragula_1.js");
            // line 19
            echo "\t\t\t    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
\t\t\t";
            // asset "56f82b2_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_56f82b2_1") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/56f82b2_part_1_test_2.js");
            echo "\t\t\t    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
\t\t\t";
        } else {
            // asset "56f82b2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_56f82b2") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/56f82b2.js");
            echo "\t\t\t    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
\t\t\t";
        }
        unset($context["asset_url"]);
        // line 21
        echo "\t\t";
        
        $__internal_66ffccc847c692211107a9a3ab09de99a8456bfaa551808c1af59b70610878a5->leave($__internal_66ffccc847c692211107a9a3ab09de99a8456bfaa551808c1af59b70610878a5_prof);

    }

    public function getTemplateName()
    {
        return "KanbanBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 21,  134 => 19,  129 => 18,  123 => 17,  112 => 16,  105 => 10,  85 => 8,  80 => 7,  74 => 6,  62 => 5,  52 => 22,  49 => 17,  47 => 16,  38 => 11,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*           {% block stylesheets %}*/
/* 	        {% stylesheets '@KanbanBundle/Resources/public/css/*' %}*/
/* 			    <link rel="stylesheet" href="{{ asset_url }}" />*/
/* 			{% endstylesheets %}*/
/* 		{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />        */
/*         <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>*/
/* 		<meta name="viewport" content="width=device-width, initial-scale=1">*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}*/
/* 	        {% javascripts '@KanbanBundle/Resources/public/js/*' %}*/
/* 			    <script src="{{ asset_url }}"></script>*/
/* 			{% endjavascripts %}*/
/* 		{% endblock %}*/
/* */
/*     </body>*/
/* </html>*/
/* */
