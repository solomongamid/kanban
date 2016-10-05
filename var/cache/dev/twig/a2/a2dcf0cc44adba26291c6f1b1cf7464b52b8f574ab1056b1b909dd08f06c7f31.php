<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_a176431ed0f58127eba1ed5178bbe88165dcfd98a72c292810166077ed4c0b7e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2aca1d061c21ed871b76d36c476556e476ba6818a795794149b0f3bbcce736c4 = $this->env->getExtension("native_profiler");
        $__internal_2aca1d061c21ed871b76d36c476556e476ba6818a795794149b0f3bbcce736c4->enter($__internal_2aca1d061c21ed871b76d36c476556e476ba6818a795794149b0f3bbcce736c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2aca1d061c21ed871b76d36c476556e476ba6818a795794149b0f3bbcce736c4->leave($__internal_2aca1d061c21ed871b76d36c476556e476ba6818a795794149b0f3bbcce736c4_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_59166601b1241fceed7b5ed9b2895dea43ab10946bfdfd8975a6d10977c88f9b = $this->env->getExtension("native_profiler");
        $__internal_59166601b1241fceed7b5ed9b2895dea43ab10946bfdfd8975a6d10977c88f9b->enter($__internal_59166601b1241fceed7b5ed9b2895dea43ab10946bfdfd8975a6d10977c88f9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_59166601b1241fceed7b5ed9b2895dea43ab10946bfdfd8975a6d10977c88f9b->leave($__internal_59166601b1241fceed7b5ed9b2895dea43ab10946bfdfd8975a6d10977c88f9b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6cfe0dcdeb4c1b4773a19ffad8b878d564b5e26fecbc3690a3bdbe51e3dca878 = $this->env->getExtension("native_profiler");
        $__internal_6cfe0dcdeb4c1b4773a19ffad8b878d564b5e26fecbc3690a3bdbe51e3dca878->enter($__internal_6cfe0dcdeb4c1b4773a19ffad8b878d564b5e26fecbc3690a3bdbe51e3dca878_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_6cfe0dcdeb4c1b4773a19ffad8b878d564b5e26fecbc3690a3bdbe51e3dca878->leave($__internal_6cfe0dcdeb4c1b4773a19ffad8b878d564b5e26fecbc3690a3bdbe51e3dca878_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_08e73b34c3e9924c2ddac13a2849160bdd4a3ef34d96f08107cc00e204e67168 = $this->env->getExtension("native_profiler");
        $__internal_08e73b34c3e9924c2ddac13a2849160bdd4a3ef34d96f08107cc00e204e67168->enter($__internal_08e73b34c3e9924c2ddac13a2849160bdd4a3ef34d96f08107cc00e204e67168_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_08e73b34c3e9924c2ddac13a2849160bdd4a3ef34d96f08107cc00e204e67168->leave($__internal_08e73b34c3e9924c2ddac13a2849160bdd4a3ef34d96f08107cc00e204e67168_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
