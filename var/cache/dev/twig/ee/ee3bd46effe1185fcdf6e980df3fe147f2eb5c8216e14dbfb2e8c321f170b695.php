<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_6ca7d8829ff20557d7eb54ac8b9b7a3a1465402cea8e59270331032f7bacf033 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_62225666e7a74a7f815d8c3c6c18145b6ef9e9da98ef312d222b237792a50962 = $this->env->getExtension("native_profiler");
        $__internal_62225666e7a74a7f815d8c3c6c18145b6ef9e9da98ef312d222b237792a50962->enter($__internal_62225666e7a74a7f815d8c3c6c18145b6ef9e9da98ef312d222b237792a50962_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_62225666e7a74a7f815d8c3c6c18145b6ef9e9da98ef312d222b237792a50962->leave($__internal_62225666e7a74a7f815d8c3c6c18145b6ef9e9da98ef312d222b237792a50962_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5585992e9d76254088c1f80534e40f0f101b90d57d13c6651afeb43cbebc77a8 = $this->env->getExtension("native_profiler");
        $__internal_5585992e9d76254088c1f80534e40f0f101b90d57d13c6651afeb43cbebc77a8->enter($__internal_5585992e9d76254088c1f80534e40f0f101b90d57d13c6651afeb43cbebc77a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_5585992e9d76254088c1f80534e40f0f101b90d57d13c6651afeb43cbebc77a8->leave($__internal_5585992e9d76254088c1f80534e40f0f101b90d57d13c6651afeb43cbebc77a8_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b83aeab49b8d49d42a2da2eee5148a6f73eee4e43786ae23a7541368f59a2987 = $this->env->getExtension("native_profiler");
        $__internal_b83aeab49b8d49d42a2da2eee5148a6f73eee4e43786ae23a7541368f59a2987->enter($__internal_b83aeab49b8d49d42a2da2eee5148a6f73eee4e43786ae23a7541368f59a2987_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b83aeab49b8d49d42a2da2eee5148a6f73eee4e43786ae23a7541368f59a2987->leave($__internal_b83aeab49b8d49d42a2da2eee5148a6f73eee4e43786ae23a7541368f59a2987_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_887fbde16467b035a0aefbf28281ad52e1d30a7108552d73ea2eeeb014dbbacc = $this->env->getExtension("native_profiler");
        $__internal_887fbde16467b035a0aefbf28281ad52e1d30a7108552d73ea2eeeb014dbbacc->enter($__internal_887fbde16467b035a0aefbf28281ad52e1d30a7108552d73ea2eeeb014dbbacc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_887fbde16467b035a0aefbf28281ad52e1d30a7108552d73ea2eeeb014dbbacc->leave($__internal_887fbde16467b035a0aefbf28281ad52e1d30a7108552d73ea2eeeb014dbbacc_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
