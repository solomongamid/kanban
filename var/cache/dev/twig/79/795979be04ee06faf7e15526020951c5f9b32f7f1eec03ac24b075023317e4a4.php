<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_40ada64b9199020408ec58dc9e724ef10470b7e015ab96d96cd9c558bdf3851f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_595dfa176bc92be79ff9164eee063164b0937c0c8b86e5a90263a221f611ca0a = $this->env->getExtension("native_profiler");
        $__internal_595dfa176bc92be79ff9164eee063164b0937c0c8b86e5a90263a221f611ca0a->enter($__internal_595dfa176bc92be79ff9164eee063164b0937c0c8b86e5a90263a221f611ca0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_595dfa176bc92be79ff9164eee063164b0937c0c8b86e5a90263a221f611ca0a->leave($__internal_595dfa176bc92be79ff9164eee063164b0937c0c8b86e5a90263a221f611ca0a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0365c3d09b20ee46152c58610c93ee93175722a26bd540d49d512ae182d942a8 = $this->env->getExtension("native_profiler");
        $__internal_0365c3d09b20ee46152c58610c93ee93175722a26bd540d49d512ae182d942a8->enter($__internal_0365c3d09b20ee46152c58610c93ee93175722a26bd540d49d512ae182d942a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_0365c3d09b20ee46152c58610c93ee93175722a26bd540d49d512ae182d942a8->leave($__internal_0365c3d09b20ee46152c58610c93ee93175722a26bd540d49d512ae182d942a8_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_663b22c252586e3f16bb3d542e2c6114b82eea70e36133f59b40d15eed51ba80 = $this->env->getExtension("native_profiler");
        $__internal_663b22c252586e3f16bb3d542e2c6114b82eea70e36133f59b40d15eed51ba80->enter($__internal_663b22c252586e3f16bb3d542e2c6114b82eea70e36133f59b40d15eed51ba80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_663b22c252586e3f16bb3d542e2c6114b82eea70e36133f59b40d15eed51ba80->leave($__internal_663b22c252586e3f16bb3d542e2c6114b82eea70e36133f59b40d15eed51ba80_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e440845e3edb30fa6650618dd3ae00623402a36ef96b180d1e2605022538d39e = $this->env->getExtension("native_profiler");
        $__internal_e440845e3edb30fa6650618dd3ae00623402a36ef96b180d1e2605022538d39e->enter($__internal_e440845e3edb30fa6650618dd3ae00623402a36ef96b180d1e2605022538d39e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_e440845e3edb30fa6650618dd3ae00623402a36ef96b180d1e2605022538d39e->leave($__internal_e440845e3edb30fa6650618dd3ae00623402a36ef96b180d1e2605022538d39e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
