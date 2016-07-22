<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_dab381322673d38e3eb75b30192696c29c9a4248685af479a20d4b9d05f3d68c extends Twig_Template
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
        $__internal_fc8d8ff3d9aa27e008227a9ce9ff3830828cc396dbe8be17f71761653839a46b = $this->env->getExtension("native_profiler");
        $__internal_fc8d8ff3d9aa27e008227a9ce9ff3830828cc396dbe8be17f71761653839a46b->enter($__internal_fc8d8ff3d9aa27e008227a9ce9ff3830828cc396dbe8be17f71761653839a46b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fc8d8ff3d9aa27e008227a9ce9ff3830828cc396dbe8be17f71761653839a46b->leave($__internal_fc8d8ff3d9aa27e008227a9ce9ff3830828cc396dbe8be17f71761653839a46b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_bb41a2f031f301f018a661b8b8cc083dcb8d4372619b5882111f1b50de0dc14b = $this->env->getExtension("native_profiler");
        $__internal_bb41a2f031f301f018a661b8b8cc083dcb8d4372619b5882111f1b50de0dc14b->enter($__internal_bb41a2f031f301f018a661b8b8cc083dcb8d4372619b5882111f1b50de0dc14b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_bb41a2f031f301f018a661b8b8cc083dcb8d4372619b5882111f1b50de0dc14b->leave($__internal_bb41a2f031f301f018a661b8b8cc083dcb8d4372619b5882111f1b50de0dc14b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5e598d97e0cfa3ac6a01564293a9733c8547456dab3df0ca2832f9b0bcb9dffc = $this->env->getExtension("native_profiler");
        $__internal_5e598d97e0cfa3ac6a01564293a9733c8547456dab3df0ca2832f9b0bcb9dffc->enter($__internal_5e598d97e0cfa3ac6a01564293a9733c8547456dab3df0ca2832f9b0bcb9dffc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5e598d97e0cfa3ac6a01564293a9733c8547456dab3df0ca2832f9b0bcb9dffc->leave($__internal_5e598d97e0cfa3ac6a01564293a9733c8547456dab3df0ca2832f9b0bcb9dffc_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_074cdbbbf956ae288a20bf2d14fc483c43ac822332f06ae8469a3d6f44adc4d6 = $this->env->getExtension("native_profiler");
        $__internal_074cdbbbf956ae288a20bf2d14fc483c43ac822332f06ae8469a3d6f44adc4d6->enter($__internal_074cdbbbf956ae288a20bf2d14fc483c43ac822332f06ae8469a3d6f44adc4d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_074cdbbbf956ae288a20bf2d14fc483c43ac822332f06ae8469a3d6f44adc4d6->leave($__internal_074cdbbbf956ae288a20bf2d14fc483c43ac822332f06ae8469a3d6f44adc4d6_prof);

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
