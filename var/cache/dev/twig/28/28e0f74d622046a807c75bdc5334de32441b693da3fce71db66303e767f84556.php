<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_5254777f01d8ef280a498d84e60ee90fc25862796321bdf1f1385a7d8b6b9d50 extends Twig_Template
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
        $__internal_c7a668caae7ef03574ad206bded91f09b9c13b4495e4dd9f2cc64c4ef166d56f = $this->env->getExtension("native_profiler");
        $__internal_c7a668caae7ef03574ad206bded91f09b9c13b4495e4dd9f2cc64c4ef166d56f->enter($__internal_c7a668caae7ef03574ad206bded91f09b9c13b4495e4dd9f2cc64c4ef166d56f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c7a668caae7ef03574ad206bded91f09b9c13b4495e4dd9f2cc64c4ef166d56f->leave($__internal_c7a668caae7ef03574ad206bded91f09b9c13b4495e4dd9f2cc64c4ef166d56f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_30e03e67be0d464744ea1a2bbc62dcd0a331372f1cf5f2712ffa142d03c7fea8 = $this->env->getExtension("native_profiler");
        $__internal_30e03e67be0d464744ea1a2bbc62dcd0a331372f1cf5f2712ffa142d03c7fea8->enter($__internal_30e03e67be0d464744ea1a2bbc62dcd0a331372f1cf5f2712ffa142d03c7fea8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_30e03e67be0d464744ea1a2bbc62dcd0a331372f1cf5f2712ffa142d03c7fea8->leave($__internal_30e03e67be0d464744ea1a2bbc62dcd0a331372f1cf5f2712ffa142d03c7fea8_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6c31c0a7edc60c3908597e12d6fa94dc4b475672a1a53616a1f11b6506536531 = $this->env->getExtension("native_profiler");
        $__internal_6c31c0a7edc60c3908597e12d6fa94dc4b475672a1a53616a1f11b6506536531->enter($__internal_6c31c0a7edc60c3908597e12d6fa94dc4b475672a1a53616a1f11b6506536531_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_6c31c0a7edc60c3908597e12d6fa94dc4b475672a1a53616a1f11b6506536531->leave($__internal_6c31c0a7edc60c3908597e12d6fa94dc4b475672a1a53616a1f11b6506536531_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_bf539c2e2c16b2d12611fb1579ea45af4556f64fd55cf98bbfccede4ed4cee10 = $this->env->getExtension("native_profiler");
        $__internal_bf539c2e2c16b2d12611fb1579ea45af4556f64fd55cf98bbfccede4ed4cee10->enter($__internal_bf539c2e2c16b2d12611fb1579ea45af4556f64fd55cf98bbfccede4ed4cee10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_bf539c2e2c16b2d12611fb1579ea45af4556f64fd55cf98bbfccede4ed4cee10->leave($__internal_bf539c2e2c16b2d12611fb1579ea45af4556f64fd55cf98bbfccede4ed4cee10_prof);

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
