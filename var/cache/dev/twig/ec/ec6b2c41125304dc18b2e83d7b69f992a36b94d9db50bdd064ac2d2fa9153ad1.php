<?php

/* EquipmentBundle:Default:index.html.twig */
class __TwigTemplate_4e680eade0ab5fc7450d22a5efeed8fa6f5b9701863c0ae2f34af0893b1e9b74 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "EquipmentBundle:Default:index.html.twig", 1);
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
        $__internal_c8443a4ef6c91abf6b596037ef88cfd7ca0f34a8a02e940d6dbe717c5233b05f = $this->env->getExtension("native_profiler");
        $__internal_c8443a4ef6c91abf6b596037ef88cfd7ca0f34a8a02e940d6dbe717c5233b05f->enter($__internal_c8443a4ef6c91abf6b596037ef88cfd7ca0f34a8a02e940d6dbe717c5233b05f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EquipmentBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c8443a4ef6c91abf6b596037ef88cfd7ca0f34a8a02e940d6dbe717c5233b05f->leave($__internal_c8443a4ef6c91abf6b596037ef88cfd7ca0f34a8a02e940d6dbe717c5233b05f_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c6a124bbc7f95237aa746aec056b4567c2e01b247358514cbb07a92d36111d9e = $this->env->getExtension("native_profiler");
        $__internal_c6a124bbc7f95237aa746aec056b4567c2e01b247358514cbb07a92d36111d9e->enter($__internal_c6a124bbc7f95237aa746aec056b4567c2e01b247358514cbb07a92d36111d9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
            <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/equipment/css/main.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
";
        
        $__internal_c6a124bbc7f95237aa746aec056b4567c2e01b247358514cbb07a92d36111d9e->leave($__internal_c6a124bbc7f95237aa746aec056b4567c2e01b247358514cbb07a92d36111d9e_prof);

    }

    // line 7
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5fc6d38503220eeb12fef6f4786aa36f7791fd41c33ff3aa6c314a418c5e882e = $this->env->getExtension("native_profiler");
        $__internal_5fc6d38503220eeb12fef6f4786aa36f7791fd41c33ff3aa6c314a418c5e882e->enter($__internal_5fc6d38503220eeb12fef6f4786aa36f7791fd41c33ff3aa6c314a418c5e882e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 8
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
            <script src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/equipment/js/main.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_5fc6d38503220eeb12fef6f4786aa36f7791fd41c33ff3aa6c314a418c5e882e->leave($__internal_5fc6d38503220eeb12fef6f4786aa36f7791fd41c33ff3aa6c314a418c5e882e_prof);

    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        $__internal_7de87ca69be2d26d892ad507a37e00415b84bcdc14fdc10d80f49dffdf457901 = $this->env->getExtension("native_profiler");
        $__internal_7de87ca69be2d26d892ad507a37e00415b84bcdc14fdc10d80f49dffdf457901->enter($__internal_7de87ca69be2d26d892ad507a37e00415b84bcdc14fdc10d80f49dffdf457901_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "C-Node Equipment";
        
        $__internal_7de87ca69be2d26d892ad507a37e00415b84bcdc14fdc10d80f49dffdf457901->leave($__internal_7de87ca69be2d26d892ad507a37e00415b84bcdc14fdc10d80f49dffdf457901_prof);

    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        $__internal_d216850ba62fd4518c257946a11d6094b7cfbf45b8907b95da12d93b6d6ddcaa = $this->env->getExtension("native_profiler");
        $__internal_d216850ba62fd4518c257946a11d6094b7cfbf45b8907b95da12d93b6d6ddcaa->enter($__internal_d216850ba62fd4518c257946a11d6094b7cfbf45b8907b95da12d93b6d6ddcaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 15
        echo "    <div class=\"page-header\">
        <h1>Equipment</h1>
    </div>
   
      
    <a class=\"btn btn-primary\" href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("device_new");
        echo "\">Create a new device</a>
    
    <div class=\"row\">
      <div class=\"col-sm-6 col-md-4\" id=\"json_list\">
        
          
        <div class=\"thumbnail\" id=\"json_list_template\">
            <a href=\"/equipment/id/show\">
                <img data-holder-rendered=\"true\" src=\"data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMjAwIiBoZWlnaHQ9IjIwMCIgdmlld0JveD0iMCAwIDIwMCAyMDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzIwMHgyMDAKQ3JlYXRlZCB3aXRoIEhvbGRlci5qcyAyLjYuMC4KTGVhcm4gbW9yZSBhdCBodHRwOi8vaG9sZGVyanMuY29tCihjKSAyMDEyLTIwMTUgSXZhbiBNYWxvcGluc2t5IC0gaHR0cDovL2ltc2t5LmNvCi0tPjxkZWZzPjxzdHlsZSB0eXBlPSJ0ZXh0L2NzcyI+PCFbQ0RBVEFbI2hvbGRlcl8xNTYwYjJhNGI0MiB0ZXh0IHsgZmlsbDojQUFBQUFBO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjEwcHQgfSBdXT48L3N0eWxlPjwvZGVmcz48ZyBpZD0iaG9sZGVyXzE1NjBiMmE0YjQyIj48cmVjdCB3aWR0aD0iMjAwIiBoZWlnaHQ9IjIwMCIgZmlsbD0iI0VFRUVFRSIvPjxnPjx0ZXh0IHg9Ijc1LjUiIHk9IjEwNC41Ij4yMDB4MjAwPC90ZXh0PjwvZz48L2c+PC9zdmc+\" style=\"width: 200px; height: 200px;\" data-src=\"holder.js/200x200\" class=\"img-thumbnail\" alt=\"200x200\">
            </a>
            <div class=\"caption\">
                <h3>value1</h3>
          
                <div class=\"btn-group\" role=\"group\" aria-label=\"...\">
                    <a href=\"/equipment/id/show\" class=\"btn btn-info\" role=\"button\">Information</a>
                    <a href=\"/equipment/id/reservation\" class=\"btn btn-default\" role=\"button\">Reservation</a>
                </div>
               
            </div>
        </div>



  </div>
</div>
  
   
";
        
        $__internal_d216850ba62fd4518c257946a11d6094b7cfbf45b8907b95da12d93b6d6ddcaa->leave($__internal_d216850ba62fd4518c257946a11d6094b7cfbf45b8907b95da12d93b6d6ddcaa_prof);

    }

    public function getTemplateName()
    {
        return "EquipmentBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 20,  93 => 15,  87 => 14,  75 => 12,  66 => 9,  62 => 8,  56 => 7,  47 => 5,  43 => 4,  37 => 3,  11 => 1,);
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
/* {% block title %}C-Node Equipment{% endblock %}*/
/* */
/* {% block body %}*/
/*     <div class="page-header">*/
/*         <h1>Equipment</h1>*/
/*     </div>*/
/*    */
/*       */
/*     <a class="btn btn-primary" href="{{ path('device_new') }}">Create a new device</a>*/
/*     */
/*     <div class="row">*/
/*       <div class="col-sm-6 col-md-4" id="json_list">*/
/*         */
/*           */
/*         <div class="thumbnail" id="json_list_template">*/
/*             <a href="/equipment/id/show">*/
/*                 <img data-holder-rendered="true" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMjAwIiBoZWlnaHQ9IjIwMCIgdmlld0JveD0iMCAwIDIwMCAyMDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzIwMHgyMDAKQ3JlYXRlZCB3aXRoIEhvbGRlci5qcyAyLjYuMC4KTGVhcm4gbW9yZSBhdCBodHRwOi8vaG9sZGVyanMuY29tCihjKSAyMDEyLTIwMTUgSXZhbiBNYWxvcGluc2t5IC0gaHR0cDovL2ltc2t5LmNvCi0tPjxkZWZzPjxzdHlsZSB0eXBlPSJ0ZXh0L2NzcyI+PCFbQ0RBVEFbI2hvbGRlcl8xNTYwYjJhNGI0MiB0ZXh0IHsgZmlsbDojQUFBQUFBO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjEwcHQgfSBdXT48L3N0eWxlPjwvZGVmcz48ZyBpZD0iaG9sZGVyXzE1NjBiMmE0YjQyIj48cmVjdCB3aWR0aD0iMjAwIiBoZWlnaHQ9IjIwMCIgZmlsbD0iI0VFRUVFRSIvPjxnPjx0ZXh0IHg9Ijc1LjUiIHk9IjEwNC41Ij4yMDB4MjAwPC90ZXh0PjwvZz48L2c+PC9zdmc+" style="width: 200px; height: 200px;" data-src="holder.js/200x200" class="img-thumbnail" alt="200x200">*/
/*             </a>*/
/*             <div class="caption">*/
/*                 <h3>value1</h3>*/
/*           */
/*                 <div class="btn-group" role="group" aria-label="...">*/
/*                     <a href="/equipment/id/show" class="btn btn-info" role="button">Information</a>*/
/*                     <a href="/equipment/id/reservation" class="btn btn-default" role="button">Reservation</a>*/
/*                 </div>*/
/*                */
/*             </div>*/
/*         </div>*/
/* */
/* */
/* */
/*   </div>*/
/* </div>*/
/*   */
/*    */
/* {% endblock %}*/
/* */
/* */
/* */
