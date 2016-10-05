<?php

/* KanbanBundle:Default:index.html.twig */
class __TwigTemplate_6c0b266b4d5f2d3625f6d34a94007eafaeccde04a4710aa05331bb6cd3b239bd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("KanbanBundle::layout.html.twig", "KanbanBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "KanbanBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1201d6af4d12f2c4903d5f0a37b6ca26f49a75f040218b4a52c62abbdd80ea94 = $this->env->getExtension("native_profiler");
        $__internal_1201d6af4d12f2c4903d5f0a37b6ca26f49a75f040218b4a52c62abbdd80ea94->enter($__internal_1201d6af4d12f2c4903d5f0a37b6ca26f49a75f040218b4a52c62abbdd80ea94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KanbanBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1201d6af4d12f2c4903d5f0a37b6ca26f49a75f040218b4a52c62abbdd80ea94->leave($__internal_1201d6af4d12f2c4903d5f0a37b6ca26f49a75f040218b4a52c62abbdd80ea94_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ab385cad076f4a89b9bc03dd7fcab2386050a6922d4c96e31ab2c747c1a938da = $this->env->getExtension("native_profiler");
        $__internal_ab385cad076f4a89b9bc03dd7fcab2386050a6922d4c96e31ab2c747c1a938da->enter($__internal_ab385cad076f4a89b9bc03dd7fcab2386050a6922d4c96e31ab2c747c1a938da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ab385cad076f4a89b9bc03dd7fcab2386050a6922d4c96e31ab2c747c1a938da->leave($__internal_ab385cad076f4a89b9bc03dd7fcab2386050a6922d4c96e31ab2c747c1a938da_prof);

    }

    public function getTemplateName()
    {
        return "KanbanBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'KanbanBundle::layout.html.twig' %}*/
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
/* */
