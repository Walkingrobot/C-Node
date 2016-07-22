<?php

/* EquipmentBundle:Default:edit.html.twig */
class __TwigTemplate_f54ce7b8407e81316623ac140b5dd64220abbb92e16d630df5f780acc9aa97d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "EquipmentBundle:Default:edit.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_50908dc6efd24da284338eb9a0604cf5f15a8481f6ce67bbcaf9b4420e95cc42 = $this->env->getExtension("native_profiler");
        $__internal_50908dc6efd24da284338eb9a0604cf5f15a8481f6ce67bbcaf9b4420e95cc42->enter($__internal_50908dc6efd24da284338eb9a0604cf5f15a8481f6ce67bbcaf9b4420e95cc42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EquipmentBundle:Default:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_50908dc6efd24da284338eb9a0604cf5f15a8481f6ce67bbcaf9b4420e95cc42->leave($__internal_50908dc6efd24da284338eb9a0604cf5f15a8481f6ce67bbcaf9b4420e95cc42_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8e28027e9ed1df9bcac4ae084c8d719566d72781d7697ff1d59005375d4b01ee = $this->env->getExtension("native_profiler");
        $__internal_8e28027e9ed1df9bcac4ae084c8d719566d72781d7697ff1d59005375d4b01ee->enter($__internal_8e28027e9ed1df9bcac4ae084c8d719566d72781d7697ff1d59005375d4b01ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
            <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/user/css/main.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
";
        
        $__internal_8e28027e9ed1df9bcac4ae084c8d719566d72781d7697ff1d59005375d4b01ee->leave($__internal_8e28027e9ed1df9bcac4ae084c8d719566d72781d7697ff1d59005375d4b01ee_prof);

    }

    // line 7
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3a056c4d439807f86d186d98dff267abfd2b8a7d2ad264dde051cca7cc37ecde = $this->env->getExtension("native_profiler");
        $__internal_3a056c4d439807f86d186d98dff267abfd2b8a7d2ad264dde051cca7cc37ecde->enter($__internal_3a056c4d439807f86d186d98dff267abfd2b8a7d2ad264dde051cca7cc37ecde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 8
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
            <script src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_3a056c4d439807f86d186d98dff267abfd2b8a7d2ad264dde051cca7cc37ecde->leave($__internal_3a056c4d439807f86d186d98dff267abfd2b8a7d2ad264dde051cca7cc37ecde_prof);

    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        $__internal_6e949a7c3792feca95dee9466b4504dcfb3ea5437190b7f3169a8c11468ae3b4 = $this->env->getExtension("native_profiler");
        $__internal_6e949a7c3792feca95dee9466b4504dcfb3ea5437190b7f3169a8c11468ae3b4->enter($__internal_6e949a7c3792feca95dee9466b4504dcfb3ea5437190b7f3169a8c11468ae3b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "C-Node Equipment";
        
        $__internal_6e949a7c3792feca95dee9466b4504dcfb3ea5437190b7f3169a8c11468ae3b4->leave($__internal_6e949a7c3792feca95dee9466b4504dcfb3ea5437190b7f3169a8c11468ae3b4_prof);

    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        $__internal_f18c78d224d2fb4319afd1a3258dad99febc000f441b1f85196117799db3a806 = $this->env->getExtension("native_profiler");
        $__internal_f18c78d224d2fb4319afd1a3258dad99febc000f441b1f85196117799db3a806->enter($__internal_f18c78d224d2fb4319afd1a3258dad99febc000f441b1f85196117799db3a806_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 15
        echo "    <h1>Device edit</h1>

    ";
        // line 17
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 20
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("device_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 27
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input role=\"button\" type=\"submit\" value=\"Delete\">
            ";
        // line 29
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_f18c78d224d2fb4319afd1a3258dad99febc000f441b1f85196117799db3a806->leave($__internal_f18c78d224d2fb4319afd1a3258dad99febc000f441b1f85196117799db3a806_prof);

    }

    public function getTemplateName()
    {
        return "EquipmentBundle:Default:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 29,  119 => 27,  113 => 24,  106 => 20,  101 => 18,  97 => 17,  93 => 15,  87 => 14,  75 => 12,  66 => 9,  62 => 8,  56 => 7,  47 => 5,  43 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block stylesheets %}*/
/* {{ parent() }}*/
/*             <link href="{{ asset('bundles/user/css/main.css') }}" rel="stylesheet" />*/
/* {% endblock %}   */
/* {% block javascripts %}*/
/* {{ parent() }}*/
/*             <script src="{{ asset('js/main.js') }}"></script>*/
/* {% endblock %}*/
/* */
/* {% block title %}C-Node Equipment{% endblock %}*/
/* */
/* {% block body %}*/
/*     <h1>Device edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('device_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input role="button" type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
