<?php

/* default/index.html.twig */
class __TwigTemplate_a650f1894358f455209de390b9bbd5ff2918840038b7478a887abb534e04ec38 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2e807b62182966cb70730fd958474a1f957b1266d94f6f1dfa0d8dbfbd619496 = $this->env->getExtension("native_profiler");
        $__internal_2e807b62182966cb70730fd958474a1f957b1266d94f6f1dfa0d8dbfbd619496->enter($__internal_2e807b62182966cb70730fd958474a1f957b1266d94f6f1dfa0d8dbfbd619496_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2e807b62182966cb70730fd958474a1f957b1266d94f6f1dfa0d8dbfbd619496->leave($__internal_2e807b62182966cb70730fd958474a1f957b1266d94f6f1dfa0d8dbfbd619496_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a501e5cd32dc8093e0eb4fafc73600ba5513abbfcce33e899b0a3485beb2d632 = $this->env->getExtension("native_profiler");
        $__internal_a501e5cd32dc8093e0eb4fafc73600ba5513abbfcce33e899b0a3485beb2d632->enter($__internal_a501e5cd32dc8093e0eb4fafc73600ba5513abbfcce33e899b0a3485beb2d632_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <section class=\"section\">
    <h1>Kanban Drag and Drop Interface Layout</h1>
    <h4>Inspired by <a href=\"https://trello.com/
    \">Trello</a>, and <a href=\"http://www.google.com/keep/\">Google Keep</a>, <a href=\"http://blog.invisionapp.com/design-project-management-tool/\">Invision</a> and <a href=\"https://twitter.com/aaronstump\">@aaronstump</a></h4>
</section>

<div class=\"drag-container\">
    <ul class=\"drag-list\">
        <li class=\"drag-column drag-column-on-hold\">
            <span class=\"drag-column-header\">
                <h2>On Hold</h2>
                <svg class=\"drag-header-more\" data-target=\"options1\" fill=\"#FFFFFF\" height=\"24\" viewBox=\"0 0 24 24\" width=\"24\"><path d=\"M0 0h24v24H0z\" fill=\"none\"/><path d=\"M12 8c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm0 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z\"/</svg>
            </span>
                
            <div class=\"drag-options\" id=\"options1\"></div>
            
            <ul class=\"drag-inner-list\" id=\"1\">
                <li class=\"drag-item\"></li>
                <li class=\"drag-item\"></li>
            </ul>
        </li>
        <li class=\"drag-column drag-column-in-progress\">
            <span class=\"drag-column-header\">
                <h2>In Progress</h2>
                <svg class=\"drag-header-more\" data-target=\"options2\" fill=\"#FFFFFF\" height=\"24\" viewBox=\"0 0 24 24\" width=\"24\"><path d=\"M0 0h24v24H0z\" fill=\"none\"/><path d=\"M12 8c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm0 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z\"/</svg>
            </span>
            <div class=\"drag-options\" id=\"options2\"></div>
            <ul class=\"drag-inner-list\" id=\"2\">
                <li class=\"drag-item\"></li>
                <li class=\"drag-item\"></li>
                <li class=\"drag-item\"></li>
            </ul>
        </li>
        <li class=\"drag-column drag-column-needs-review\">
            <span class=\"drag-column-header\">
                <h2>Needs Review</h2>
                <svg data-target=\"options3\" class=\"drag-header-more\" fill=\"#FFFFFF\" height=\"24\" viewBox=\"0 0 24 24\" width=\"24\"><path d=\"M0 0h24v24H0z\" fill=\"none\"/><path d=\"M12 8c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm0 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z\"/</svg>
            </span>
            <div class=\"drag-options\" id=\"options3\"></div>
            <ul class=\"drag-inner-list\" id=\"3\">
                <li class=\"drag-item\"></li>
                <li class=\"drag-item\"></li>
                <li class=\"drag-item\"></li>
                <li class=\"drag-item\"></li>
            </ul>
        </li>
        <li class=\"drag-column drag-column-approved\">
            <span class=\"drag-column-header\">
                <h2>Approved</h2>
                <svg data-target=\"options4\" class=\"drag-header-more\" fill=\"#FFFFFF\" height=\"24\" viewBox=\"0 0 24 24\" width=\"24\"><path d=\"M0 0h24v24H0z\" fill=\"none\"/><path d=\"M12 8c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm0 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z\"/</svg>
            </span>
            <div class=\"drag-options\" id=\"options4\"></div>
            <ul class=\"drag-inner-list\" id=\"4\">
                <li class=\"drag-item\"></li>
                <li class=\"drag-item\"></li>
            </ul>
        </li>
    </ul>
</div>

<section class=\"section\">
    <a href=\"https://github.com/bevacqua/dragula\">Drag and drop functionality by <strong>bevacqua/dragula</strong></a>
</section>

";
        
        $__internal_a501e5cd32dc8093e0eb4fafc73600ba5513abbfcce33e899b0a3485beb2d632->leave($__internal_a501e5cd32dc8093e0eb4fafc73600ba5513abbfcce33e899b0a3485beb2d632_prof);

    }

    // line 70
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_68a29bffa79fb188098ab582af358485630c0577f7c7b7f454607696a6012e6f = $this->env->getExtension("native_profiler");
        $__internal_68a29bffa79fb188098ab582af358485630c0577f7c7b7f454607696a6012e6f->enter($__internal_68a29bffa79fb188098ab582af358485630c0577f7c7b7f454607696a6012e6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 71
        echo "<style>

</style>
";
        
        $__internal_68a29bffa79fb188098ab582af358485630c0577f7c7b7f454607696a6012e6f->leave($__internal_68a29bffa79fb188098ab582af358485630c0577f7c7b7f454607696a6012e6f_prof);

    }

    // line 78
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b7908dd46de2b727ad85c64901e769791476c83674470c838a71d2e353b46bbd = $this->env->getExtension("native_profiler");
        $__internal_b7908dd46de2b727ad85c64901e769791476c83674470c838a71d2e353b46bbd->enter($__internal_b7908dd46de2b727ad85c64901e769791476c83674470c838a71d2e353b46bbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 79
        echo "    ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
        } else {
            // asset "1b37284"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1b37284") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/1b37284.js");
            // line 80
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/kanban.js"), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
        // line 82
        echo "    ";
        
        $__internal_b7908dd46de2b727ad85c64901e769791476c83674470c838a71d2e353b46bbd->leave($__internal_b7908dd46de2b727ad85c64901e769791476c83674470c838a71d2e353b46bbd_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 82,  141 => 80,  135 => 79,  129 => 78,  119 => 71,  113 => 70,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <section class="section">*/
/*     <h1>Kanban Drag and Drop Interface Layout</h1>*/
/*     <h4>Inspired by <a href="https://trello.com/*/
/*     ">Trello</a>, and <a href="http://www.google.com/keep/">Google Keep</a>, <a href="http://blog.invisionapp.com/design-project-management-tool/">Invision</a> and <a href="https://twitter.com/aaronstump">@aaronstump</a></h4>*/
/* </section>*/
/* */
/* <div class="drag-container">*/
/*     <ul class="drag-list">*/
/*         <li class="drag-column drag-column-on-hold">*/
/*             <span class="drag-column-header">*/
/*                 <h2>On Hold</h2>*/
/*                 <svg class="drag-header-more" data-target="options1" fill="#FFFFFF" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 8c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm0 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"/</svg>*/
/*             </span>*/
/*                 */
/*             <div class="drag-options" id="options1"></div>*/
/*             */
/*             <ul class="drag-inner-list" id="1">*/
/*                 <li class="drag-item"></li>*/
/*                 <li class="drag-item"></li>*/
/*             </ul>*/
/*         </li>*/
/*         <li class="drag-column drag-column-in-progress">*/
/*             <span class="drag-column-header">*/
/*                 <h2>In Progress</h2>*/
/*                 <svg class="drag-header-more" data-target="options2" fill="#FFFFFF" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 8c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm0 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"/</svg>*/
/*             </span>*/
/*             <div class="drag-options" id="options2"></div>*/
/*             <ul class="drag-inner-list" id="2">*/
/*                 <li class="drag-item"></li>*/
/*                 <li class="drag-item"></li>*/
/*                 <li class="drag-item"></li>*/
/*             </ul>*/
/*         </li>*/
/*         <li class="drag-column drag-column-needs-review">*/
/*             <span class="drag-column-header">*/
/*                 <h2>Needs Review</h2>*/
/*                 <svg data-target="options3" class="drag-header-more" fill="#FFFFFF" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 8c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm0 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"/</svg>*/
/*             </span>*/
/*             <div class="drag-options" id="options3"></div>*/
/*             <ul class="drag-inner-list" id="3">*/
/*                 <li class="drag-item"></li>*/
/*                 <li class="drag-item"></li>*/
/*                 <li class="drag-item"></li>*/
/*                 <li class="drag-item"></li>*/
/*             </ul>*/
/*         </li>*/
/*         <li class="drag-column drag-column-approved">*/
/*             <span class="drag-column-header">*/
/*                 <h2>Approved</h2>*/
/*                 <svg data-target="options4" class="drag-header-more" fill="#FFFFFF" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 8c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm0 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"/</svg>*/
/*             </span>*/
/*             <div class="drag-options" id="options4"></div>*/
/*             <ul class="drag-inner-list" id="4">*/
/*                 <li class="drag-item"></li>*/
/*                 <li class="drag-item"></li>*/
/*             </ul>*/
/*         </li>*/
/*     </ul>*/
/* </div>*/
/* */
/* <section class="section">*/
/*     <a href="https://github.com/bevacqua/dragula">Drag and drop functionality by <strong>bevacqua/dragula</strong></a>*/
/* </section>*/
/* */
/* {% endblock %}*/
/* */
/* {% block stylesheets %}*/
/* <style>*/
/* */
/* </style>*/
/* {% endblock %}*/
/* */
/* */
/* */
/*     {% block javascripts %}*/
/*     {% javascripts %}*/
/*         <script src="{{ asset('bundles/framework/kanban.js') }}"></script>*/
/*     {% endjavascripts %}*/
/*     {% endblock %}*/
/* */
