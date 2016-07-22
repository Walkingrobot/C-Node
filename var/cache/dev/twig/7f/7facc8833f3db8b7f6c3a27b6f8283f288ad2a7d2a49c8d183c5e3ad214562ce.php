<?php

/* UserBundle:Default:index.html.twig */
class __TwigTemplate_b6e9cf50a57a596cd6d43743edeffb671839150aa3bae8e35d7d44b4343f1604 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "UserBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_39c09a9225a857024a8504fd218e64f3ff6998921e2e4af5bee2bb0fb761feac = $this->env->getExtension("native_profiler");
        $__internal_39c09a9225a857024a8504fd218e64f3ff6998921e2e4af5bee2bb0fb761feac->enter($__internal_39c09a9225a857024a8504fd218e64f3ff6998921e2e4af5bee2bb0fb761feac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_39c09a9225a857024a8504fd218e64f3ff6998921e2e4af5bee2bb0fb761feac->leave($__internal_39c09a9225a857024a8504fd218e64f3ff6998921e2e4af5bee2bb0fb761feac_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_534fa514d2fac346bea186bb3a9c8b25bd02ebf2eedf22059cde0edb41e09fd5 = $this->env->getExtension("native_profiler");
        $__internal_534fa514d2fac346bea186bb3a9c8b25bd02ebf2eedf22059cde0edb41e09fd5->enter($__internal_534fa514d2fac346bea186bb3a9c8b25bd02ebf2eedf22059cde0edb41e09fd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "C-Node Dashboard";
        
        $__internal_534fa514d2fac346bea186bb3a9c8b25bd02ebf2eedf22059cde0edb41e09fd5->leave($__internal_534fa514d2fac346bea186bb3a9c8b25bd02ebf2eedf22059cde0edb41e09fd5_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_33b6e40987d4558a0fc007b86309eaf1138e220909736b88eda2bce523b933dd = $this->env->getExtension("native_profiler");
        $__internal_33b6e40987d4558a0fc007b86309eaf1138e220909736b88eda2bce523b933dd->enter($__internal_33b6e40987d4558a0fc007b86309eaf1138e220909736b88eda2bce523b933dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
            <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/user/css/main.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
";
        
        $__internal_33b6e40987d4558a0fc007b86309eaf1138e220909736b88eda2bce523b933dd->leave($__internal_33b6e40987d4558a0fc007b86309eaf1138e220909736b88eda2bce523b933dd_prof);

    }

    // line 9
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_56a84354e78726a63bfddc26e27f6ad482757f1798e9f186d92a6c20895457f2 = $this->env->getExtension("native_profiler");
        $__internal_56a84354e78726a63bfddc26e27f6ad482757f1798e9f186d92a6c20895457f2->enter($__internal_56a84354e78726a63bfddc26e27f6ad482757f1798e9f186d92a6c20895457f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 10
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
            <script src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_56a84354e78726a63bfddc26e27f6ad482757f1798e9f186d92a6c20895457f2->leave($__internal_56a84354e78726a63bfddc26e27f6ad482757f1798e9f186d92a6c20895457f2_prof);

    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        $__internal_de3e3e72ca847b805f5e6ee66cb75eb7f87aefdc2ae8fd2c466e1f49caf8ee51 = $this->env->getExtension("native_profiler");
        $__internal_de3e3e72ca847b805f5e6ee66cb75eb7f87aefdc2ae8fd2c466e1f49caf8ee51->enter($__internal_de3e3e72ca847b805f5e6ee66cb75eb7f87aefdc2ae8fd2c466e1f49caf8ee51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 15
        echo "  <div class=\"jumbotron\">
                    <h1>Your Dashboard</h1>
                    <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
                    <p><a href=\"#\" class=\"btn btn-primary btn-lg\" role=\"button\">Learn more &raquo;</a>
                    </p>
                </div>
";
        
        $__internal_de3e3e72ca847b805f5e6ee66cb75eb7f87aefdc2ae8fd2c466e1f49caf8ee51->leave($__internal_de3e3e72ca847b805f5e6ee66cb75eb7f87aefdc2ae8fd2c466e1f49caf8ee51_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 15,  87 => 14,  78 => 11,  74 => 10,  68 => 9,  59 => 7,  55 => 6,  49 => 5,  37 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block title %}C-Node Dashboard{% endblock %}*/
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
/* {% block body %}*/
/*   <div class="jumbotron">*/
/*                     <h1>Your Dashboard</h1>*/
/*                     <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>*/
/*                     <p><a href="#" class="btn btn-primary btn-lg" role="button">Learn more &raquo;</a>*/
/*                     </p>*/
/*                 </div>*/
/* {% endblock %}*/
/* */
