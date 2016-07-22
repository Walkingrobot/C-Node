<?php

/* EquipmentBundle:Default:show.html.twig */
class __TwigTemplate_bb0a1b673f6de1d91000d5f1841902b89b4ebdec1c2495ff819d647ab16b4db2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "EquipmentBundle:Default:show.html.twig", 1);
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
        $__internal_d27037a262cc38a9b029e713198c5a9c7bd5ee6196de1c68db562dd519981985 = $this->env->getExtension("native_profiler");
        $__internal_d27037a262cc38a9b029e713198c5a9c7bd5ee6196de1c68db562dd519981985->enter($__internal_d27037a262cc38a9b029e713198c5a9c7bd5ee6196de1c68db562dd519981985_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EquipmentBundle:Default:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d27037a262cc38a9b029e713198c5a9c7bd5ee6196de1c68db562dd519981985->leave($__internal_d27037a262cc38a9b029e713198c5a9c7bd5ee6196de1c68db562dd519981985_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3e1c0caf223eae27f2b0645d326d4c37a266aea604f908e75fa8cf5090193d14 = $this->env->getExtension("native_profiler");
        $__internal_3e1c0caf223eae27f2b0645d326d4c37a266aea604f908e75fa8cf5090193d14->enter($__internal_3e1c0caf223eae27f2b0645d326d4c37a266aea604f908e75fa8cf5090193d14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
            <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/equipment/css/main.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
";
        
        $__internal_3e1c0caf223eae27f2b0645d326d4c37a266aea604f908e75fa8cf5090193d14->leave($__internal_3e1c0caf223eae27f2b0645d326d4c37a266aea604f908e75fa8cf5090193d14_prof);

    }

    // line 7
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_220d3bc7adb6b8e2e4d5455e88007170c348439c7ae2078ba092a08c7ad98f55 = $this->env->getExtension("native_profiler");
        $__internal_220d3bc7adb6b8e2e4d5455e88007170c348439c7ae2078ba092a08c7ad98f55->enter($__internal_220d3bc7adb6b8e2e4d5455e88007170c348439c7ae2078ba092a08c7ad98f55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 8
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
            <script src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/equipment/js/main.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_220d3bc7adb6b8e2e4d5455e88007170c348439c7ae2078ba092a08c7ad98f55->leave($__internal_220d3bc7adb6b8e2e4d5455e88007170c348439c7ae2078ba092a08c7ad98f55_prof);

    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        $__internal_f9071af3fd1965768238d0a12e5580b6f5649f71dbab517da75a952692a1b275 = $this->env->getExtension("native_profiler");
        $__internal_f9071af3fd1965768238d0a12e5580b6f5649f71dbab517da75a952692a1b275->enter($__internal_f9071af3fd1965768238d0a12e5580b6f5649f71dbab517da75a952692a1b275_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "C-Node - ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["device"]) ? $context["device"] : $this->getContext($context, "device")), "name", array()), "html", null, true);
        
        $__internal_f9071af3fd1965768238d0a12e5580b6f5649f71dbab517da75a952692a1b275->leave($__internal_f9071af3fd1965768238d0a12e5580b6f5649f71dbab517da75a952692a1b275_prof);

    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        $__internal_54bbb2ad30e10e2c5a9efed7a74031e3c7b6d87026bc26ef018746e01310eb75 = $this->env->getExtension("native_profiler");
        $__internal_54bbb2ad30e10e2c5a9efed7a74031e3c7b6d87026bc26ef018746e01310eb75->enter($__internal_54bbb2ad30e10e2c5a9efed7a74031e3c7b6d87026bc26ef018746e01310eb75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 15
        echo "    <div class=\"page-header\">
        <h1>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["device"]) ? $context["device"] : $this->getContext($context, "device")), "name", array()), "html", null, true);
        echo "</h1>
    </div>
    
    
    ";
        // line 20
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
        <a class=\"btn btn-primary\" href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("device_index");
        echo "\">Make a reservation</a>
    
        <div class=\"btn-group\" role=\"group\" aria-label=\"...\">
        <input class=\"btn btn-danger\" type=\"submit\" value=\"Delete\" />
        <a class=\"btn btn-primary\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("device_edit", array("id" => $this->getAttribute((isset($context["device"]) ? $context["device"] : $this->getContext($context, "device")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        <a class=\"btn btn-default\" href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("device_index");
        echo "\">Back to the list</a>
        </div>
        
        
    ";
        // line 30
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "

        <div class=\"well\">";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["device"]) ? $context["device"] : $this->getContext($context, "device")), "description", array()), "html", null, true);
        echo "l</div>
            
            <div class=\"alert alert-success\" role=\"alert\">Device is ready and free.</div>
            <div class=\"alert alert-info\" role=\"alert\">Device is currently being used.</div>
            <div class=\"alert alert-info\" role=\"alert\">No communication with device.</div>
            <div class=\"alert alert-warning\" role=\"alert\">Device is undergoing maintance.</div>
            <div class=\"alert alert-danger\" role=\"alert\">Emergency !</div>
           
            
  
            <tr>
                <th>Price calculator</th>
                <td>";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["device"]) ? $context["device"] : $this->getContext($context, "device")), "pricing", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Hourly_price</th>
                <td>";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["device"]) ? $context["device"] : $this->getContext($context, "device")), "hourlyprice", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Operator certification</th>
                <td>";
        // line 52
        if ($this->getAttribute((isset($context["device"]) ? $context["device"] : $this->getContext($context, "device")), "requireoperatorcertification", array())) {
            echo "Yes";
        } else {
            echo "No";
        }
        echo "</td>
            </tr>
            <tr>
                <th>Require operator_pre_check</th>
                <td>";
        // line 56
        if ($this->getAttribute((isset($context["device"]) ? $context["device"] : $this->getContext($context, "device")), "requireoperatorprecheck", array())) {
            echo "Yes";
        } else {
            echo "No";
        }
        echo "</td>
            </tr>
            <tr>
                <th>In_maintenance_mode</th>
                <td>";
        // line 60
        if ($this->getAttribute((isset($context["device"]) ? $context["device"] : $this->getContext($context, "device")), "inmaintenancemode", array())) {
            echo "Yes";
        } else {
            echo "No";
        }
        echo "</td>
            </tr>
     

  
";
        
        $__internal_54bbb2ad30e10e2c5a9efed7a74031e3c7b6d87026bc26ef018746e01310eb75->leave($__internal_54bbb2ad30e10e2c5a9efed7a74031e3c7b6d87026bc26ef018746e01310eb75_prof);

    }

    public function getTemplateName()
    {
        return "EquipmentBundle:Default:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 60,  171 => 56,  160 => 52,  153 => 48,  146 => 44,  131 => 32,  126 => 30,  119 => 26,  115 => 25,  108 => 21,  104 => 20,  97 => 16,  94 => 15,  88 => 14,  75 => 12,  66 => 9,  62 => 8,  56 => 7,  47 => 5,  43 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block stylesheets %}*/
/* {{ parent() }}*/
/*             <link href="{{ asset('bundles/equipment/css/main.css') }}" rel="stylesheet" />*/
/* {% endblock %}   */
/* {% block javascripts %}*/
/* {{ parent() }}*/
/*             <script src="{{ asset('bundles/equipment/js/main.js') }}"></script>*/
/* {% endblock %}*/
/* */
/* {% block title %}C-Node - {{ device.name }}{% endblock %}*/
/* */
/* {% block body %}*/
/*     <div class="page-header">*/
/*         <h1>{{ device.name }}</h1>*/
/*     </div>*/
/*     */
/*     */
/*     {{ form_start(delete_form) }}*/
/*         <a class="btn btn-primary" href="{{ path('device_index') }}">Make a reservation</a>*/
/*     */
/*         <div class="btn-group" role="group" aria-label="...">*/
/*         <input class="btn btn-danger" type="submit" value="Delete" />*/
/*         <a class="btn btn-primary" href="{{ path('device_edit', { 'id': device.id }) }}">Edit</a>*/
/*         <a class="btn btn-default" href="{{ path('device_index') }}">Back to the list</a>*/
/*         </div>*/
/*         */
/*         */
/*     {{ form_end(delete_form) }}*/
/* */
/*         <div class="well">{{ device.description }}l</div>*/
/*             */
/*             <div class="alert alert-success" role="alert">Device is ready and free.</div>*/
/*             <div class="alert alert-info" role="alert">Device is currently being used.</div>*/
/*             <div class="alert alert-info" role="alert">No communication with device.</div>*/
/*             <div class="alert alert-warning" role="alert">Device is undergoing maintance.</div>*/
/*             <div class="alert alert-danger" role="alert">Emergency !</div>*/
/*            */
/*             */
/*   */
/*             <tr>*/
/*                 <th>Price calculator</th>*/
/*                 <td>{{ device.pricing }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Hourly_price</th>*/
/*                 <td>{{ device.hourlyprice }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Operator certification</th>*/
/*                 <td>{% if device.requireoperatorcertification %}Yes{% else %}No{% endif %}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Require operator_pre_check</th>*/
/*                 <td>{% if device.requireoperatorprecheck %}Yes{% else %}No{% endif %}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>In_maintenance_mode</th>*/
/*                 <td>{% if device.inmaintenancemode %}Yes{% else %}No{% endif %}</td>*/
/*             </tr>*/
/*      */
/* */
/*   */
/* {% endblock %}*/
/* */
