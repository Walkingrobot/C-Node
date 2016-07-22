<?php

/* EquipmentBundle:Default:new.html.twig */
class __TwigTemplate_dcbbaff4703bb746bc3d21783d3257f9eaf64917d8888f2b28a2fc5962fd1da5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "EquipmentBundle:Default:new.html.twig", 1);
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
        $__internal_9f34f645d229b2365a473d4af890ff5306f63e233f7aeab3efdf0ad54393c47b = $this->env->getExtension("native_profiler");
        $__internal_9f34f645d229b2365a473d4af890ff5306f63e233f7aeab3efdf0ad54393c47b->enter($__internal_9f34f645d229b2365a473d4af890ff5306f63e233f7aeab3efdf0ad54393c47b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EquipmentBundle:Default:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9f34f645d229b2365a473d4af890ff5306f63e233f7aeab3efdf0ad54393c47b->leave($__internal_9f34f645d229b2365a473d4af890ff5306f63e233f7aeab3efdf0ad54393c47b_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3051351bd77ca49fe3a7a9c103f41d0bea888ad599830ca6c3d03cb52b70304d = $this->env->getExtension("native_profiler");
        $__internal_3051351bd77ca49fe3a7a9c103f41d0bea888ad599830ca6c3d03cb52b70304d->enter($__internal_3051351bd77ca49fe3a7a9c103f41d0bea888ad599830ca6c3d03cb52b70304d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
            <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/user/css/main.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
";
        
        $__internal_3051351bd77ca49fe3a7a9c103f41d0bea888ad599830ca6c3d03cb52b70304d->leave($__internal_3051351bd77ca49fe3a7a9c103f41d0bea888ad599830ca6c3d03cb52b70304d_prof);

    }

    // line 7
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7e88aa1a1df340791626b5d1dd50010f8153360e0e96bcccb94eea9df70e3316 = $this->env->getExtension("native_profiler");
        $__internal_7e88aa1a1df340791626b5d1dd50010f8153360e0e96bcccb94eea9df70e3316->enter($__internal_7e88aa1a1df340791626b5d1dd50010f8153360e0e96bcccb94eea9df70e3316_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 8
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
            <script src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/user/js/main.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_7e88aa1a1df340791626b5d1dd50010f8153360e0e96bcccb94eea9df70e3316->leave($__internal_7e88aa1a1df340791626b5d1dd50010f8153360e0e96bcccb94eea9df70e3316_prof);

    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        $__internal_b3f63246575acb04a046de8cd37279343e963ae29f48aabfcc07d797a6d52da1 = $this->env->getExtension("native_profiler");
        $__internal_b3f63246575acb04a046de8cd37279343e963ae29f48aabfcc07d797a6d52da1->enter($__internal_b3f63246575acb04a046de8cd37279343e963ae29f48aabfcc07d797a6d52da1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "C-Node Equipment";
        
        $__internal_b3f63246575acb04a046de8cd37279343e963ae29f48aabfcc07d797a6d52da1->leave($__internal_b3f63246575acb04a046de8cd37279343e963ae29f48aabfcc07d797a6d52da1_prof);

    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        $__internal_3e0424957d0d0cf00bb326b6edf4865f9acd7bbfbe9806b3851810dc9326046b = $this->env->getExtension("native_profiler");
        $__internal_3e0424957d0d0cf00bb326b6edf4865f9acd7bbfbe9806b3851810dc9326046b->enter($__internal_3e0424957d0d0cf00bb326b6edf4865f9acd7bbfbe9806b3851810dc9326046b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 15
        echo "    <div class=\"page-header\">
        <h1>Create a new device</h1>
    </div>
        
    ";
        // line 19
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <div class=\"btn-group\" role=\"group\" aria-label=\"...\">
        <input class=\"btn btn-success\" type=\"submit\" value=\"Create\" />
        <a class=\"btn btn-default\" href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("device_index");
        echo "\">Back to the list</a>
        </div>
    ";
        // line 25
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

";
        
        $__internal_3e0424957d0d0cf00bb326b6edf4865f9acd7bbfbe9806b3851810dc9326046b->leave($__internal_3e0424957d0d0cf00bb326b6edf4865f9acd7bbfbe9806b3851810dc9326046b_prof);

    }

    public function getTemplateName()
    {
        return "EquipmentBundle:Default:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 25,  109 => 23,  103 => 20,  99 => 19,  93 => 15,  87 => 14,  75 => 12,  66 => 9,  62 => 8,  56 => 7,  47 => 5,  43 => 4,  37 => 3,  11 => 1,);
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
/*             <script src="{{ asset('bundles/user/js/main.js') }}"></script>*/
/* {% endblock %}*/
/* */
/* {% block title %}C-Node Equipment{% endblock %}*/
/* */
/* {% block body %}*/
/*     <div class="page-header">*/
/*         <h1>Create a new device</h1>*/
/*     </div>*/
/*         */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <div class="btn-group" role="group" aria-label="...">*/
/*         <input class="btn btn-success" type="submit" value="Create" />*/
/*         <a class="btn btn-default" href="{{ path('device_index') }}">Back to the list</a>*/
/*         </div>*/
/*     {{ form_end(form) }}*/
/* */
/* {% endblock %}*/
/* */
/* */
/* */
