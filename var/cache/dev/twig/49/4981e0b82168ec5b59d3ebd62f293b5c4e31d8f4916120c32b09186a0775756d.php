<?php

/* base.html.twig */
class __TwigTemplate_23bc5cffc7cd3189e0f39d5c5436edc9b286a77ffdbd35fd868e3ac65ad5f93d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'meta' => array($this, 'block_meta'),
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'link' => array($this, 'block_link'),
            'topnav' => array($this, 'block_topnav'),
            'sidenav' => array($this, 'block_sidenav'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_53f300a876ea75619e52d48272fde8f4cad1c2353cef2006baba89c7a305bb1e = $this->env->getExtension("native_profiler");
        $__internal_53f300a876ea75619e52d48272fde8f4cad1c2353cef2006baba89c7a305bb1e->enter($__internal_53f300a876ea75619e52d48272fde8f4cad1c2353cef2006baba89c7a305bb1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        ";
        // line 4
        $this->displayBlock('meta', $context, $blocks);
        // line 9
        echo "        <title>";
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "        ";
        $this->displayBlock('link', $context, $blocks);
        // line 18
        echo "    </head>
    <body>
        <div id=\"wrapper\">

        <!-- Navigation -->
        <nav class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-ex1-collapse\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"index.html\">C-Node</a>
            </div>
            ";
        // line 34
        $this->displayBlock('topnav', $context, $blocks);
        // line 72
        echo "            ";
        $this->displayBlock('sidenav', $context, $blocks);
        // line 105
        echo "        </nav>
        <div id=\"page-wrapper\">
            <div class=\"container-fluid\">
                   ";
        // line 108
        $this->displayBlock('body', $context, $blocks);
        // line 109
        echo "            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
        ";
        // line 113
        $this->displayBlock('footer', $context, $blocks);
        // line 114
        echo "    </div>
    <!-- /#wrapper -->
        ";
        // line 116
        $this->displayBlock('javascripts', $context, $blocks);
        // line 120
        echo "    </body>
</html>
";
        
        $__internal_53f300a876ea75619e52d48272fde8f4cad1c2353cef2006baba89c7a305bb1e->leave($__internal_53f300a876ea75619e52d48272fde8f4cad1c2353cef2006baba89c7a305bb1e_prof);

    }

    // line 4
    public function block_meta($context, array $blocks = array())
    {
        $__internal_ac0887c40e5401476163adf51d6d7f4ebd55ef50d3e100ad8626e458b9b02fbf = $this->env->getExtension("native_profiler");
        $__internal_ac0887c40e5401476163adf51d6d7f4ebd55ef50d3e100ad8626e458b9b02fbf->enter($__internal_ac0887c40e5401476163adf51d6d7f4ebd55ef50d3e100ad8626e458b9b02fbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta"));

        // line 5
        echo "        \t<meta charset=\"UTF-8\" />
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  \t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t";
        
        $__internal_ac0887c40e5401476163adf51d6d7f4ebd55ef50d3e100ad8626e458b9b02fbf->leave($__internal_ac0887c40e5401476163adf51d6d7f4ebd55ef50d3e100ad8626e458b9b02fbf_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_3976611234297ff8afbc1243e03de3cb8fd0bb09d3ad0cb532d9fb020fd9dca6 = $this->env->getExtension("native_profiler");
        $__internal_3976611234297ff8afbc1243e03de3cb8fd0bb09d3ad0cb532d9fb020fd9dca6->enter($__internal_3976611234297ff8afbc1243e03de3cb8fd0bb09d3ad0cb532d9fb020fd9dca6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "C-Node";
        
        $__internal_3976611234297ff8afbc1243e03de3cb8fd0bb09d3ad0cb532d9fb020fd9dca6->leave($__internal_3976611234297ff8afbc1243e03de3cb8fd0bb09d3ad0cb532d9fb020fd9dca6_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8e5b0e7e1b9cf7c183de49fada0185b1a77485b2d378e60572e7eeee577dbe96 = $this->env->getExtension("native_profiler");
        $__internal_8e5b0e7e1b9cf7c183de49fada0185b1a77485b2d378e60572e7eeee577dbe96->enter($__internal_8e5b0e7e1b9cf7c183de49fada0185b1a77485b2d378e60572e7eeee577dbe96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "\t\t<link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\" integrity=\"sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7\" crossorigin=\"anonymous\">
\t\t<link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css\" integrity=\"sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r\" crossorigin=\"anonymous\">
                <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css\">
\t";
        
        $__internal_8e5b0e7e1b9cf7c183de49fada0185b1a77485b2d378e60572e7eeee577dbe96->leave($__internal_8e5b0e7e1b9cf7c183de49fada0185b1a77485b2d378e60572e7eeee577dbe96_prof);

    }

    // line 15
    public function block_link($context, array $blocks = array())
    {
        $__internal_b3db47f278707f66d1d31e5ac031c9b5b62401dcfe7aa398b351b7087ef59715 = $this->env->getExtension("native_profiler");
        $__internal_b3db47f278707f66d1d31e5ac031c9b5b62401dcfe7aa398b351b7087ef59715->enter($__internal_b3db47f278707f66d1d31e5ac031c9b5b62401dcfe7aa398b351b7087ef59715_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "link"));

        // line 16
        echo "        \t<link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
\t";
        
        $__internal_b3db47f278707f66d1d31e5ac031c9b5b62401dcfe7aa398b351b7087ef59715->leave($__internal_b3db47f278707f66d1d31e5ac031c9b5b62401dcfe7aa398b351b7087ef59715_prof);

    }

    // line 34
    public function block_topnav($context, array $blocks = array())
    {
        $__internal_225ea38262ebfa460d5f0372631e01ee4bf13b15d20f0e16aac23afea97e9c9e = $this->env->getExtension("native_profiler");
        $__internal_225ea38262ebfa460d5f0372631e01ee4bf13b15d20f0e16aac23afea97e9c9e->enter($__internal_225ea38262ebfa460d5f0372631e01ee4bf13b15d20f0e16aac23afea97e9c9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "topnav"));

        // line 35
        echo "            <ul class=\"nav navbar-right top-nav\">
                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-bell\"></i> <b class=\"caret\"></b></a>
                    <ul class=\"dropdown-menu alert-dropdown\">
                        <li>
                            <a href=\"#\">Alert Name <span class=\"label label-default\">Alert Badge</span></a>
                        </li>
                 
                        <li>
                            <a href=\"#\">Alert Name <span class=\"label label-danger\">Alert Badge</span></a>
                        </li>
                        <li class=\"divider\"></li>
                        <li>
                            <a href=\"#\">View All</a>
                        </li>
                    </ul>
                </li>
                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-user\"></i> John Smith <b class=\"caret\"></b></a>
                    <ul class=\"dropdown-menu\">
                        <li>
                            <a href=\"#\"><i class=\"fa fa-fw fa-user\"></i> Profile</a>
                        </li>
                        <li>
                            <a href=\"#\"><i class=\"fa fa-fw fa-gear\"></i> Settings</a>
                        </li>
                        <li>
                            <a href=\"#\"><i class=\"fa fa-fw fa-eur\"></i> Credits</a>
                        </li>
                        <li class=\"divider\"></li>
                        <li>
                            <a href=\"#\"><i class=\"fa fa-fw fa-power-off\"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            ";
        
        $__internal_225ea38262ebfa460d5f0372631e01ee4bf13b15d20f0e16aac23afea97e9c9e->leave($__internal_225ea38262ebfa460d5f0372631e01ee4bf13b15d20f0e16aac23afea97e9c9e_prof);

    }

    // line 72
    public function block_sidenav($context, array $blocks = array())
    {
        $__internal_909d77b2efd05635f7b9251e87640adcd0f32306dc1b89b532429eac61e0945f = $this->env->getExtension("native_profiler");
        $__internal_909d77b2efd05635f7b9251e87640adcd0f32306dc1b89b532429eac61e0945f->enter($__internal_909d77b2efd05635f7b9251e87640adcd0f32306dc1b89b532429eac61e0945f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidenav"));

        // line 73
        echo "            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class=\"collapse navbar-collapse navbar-ex1-collapse\">
                <ul class=\"nav navbar-nav side-nav\">
                    <li>
                        <a href=\"/\"><i class=\"fa fa-fw fa-dashboard\"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href=\"/equipment\"><i class=\"fa fa-fw fa-cog\"></i> Equipment</a>
                    </li>
                    <li>
                        <a href=\"/equipment\"><i class=\"fa fa-fw fa-user\"></i> Users</a>
                    </li>
                    <li>
                        <a href=\"/equipment\"><i class=\"fa fa-fw fa-lock\"></i> Access control</a>
                    </li>
                   
                    <li>
                        <a href=\"javascript:;\" data-toggle=\"collapse\" data-target=\"#demo\"><i class=\"fa fa-fw fa-arrows-v\"></i> Dropdown <i class=\"fa fa-fw fa-caret-down\"></i></a>
                        <ul id=\"demo\" class=\"collapse\">
                            <li>
                                <a href=\"#\">Dropdown Item</a>
                            </li>
                            <li>
                                <a href=\"#\">Dropdown Item</a>
                            </li>
                        </ul>
                    </li>
             
                </ul>
            </div>
            <!-- /.navbar-collapse -->
            ";
        
        $__internal_909d77b2efd05635f7b9251e87640adcd0f32306dc1b89b532429eac61e0945f->leave($__internal_909d77b2efd05635f7b9251e87640adcd0f32306dc1b89b532429eac61e0945f_prof);

    }

    // line 108
    public function block_body($context, array $blocks = array())
    {
        $__internal_ca1cd033f30bf5a338d6f9ce1a40caae283585fde339b092ecf446e7b4451819 = $this->env->getExtension("native_profiler");
        $__internal_ca1cd033f30bf5a338d6f9ce1a40caae283585fde339b092ecf446e7b4451819->enter($__internal_ca1cd033f30bf5a338d6f9ce1a40caae283585fde339b092ecf446e7b4451819_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ca1cd033f30bf5a338d6f9ce1a40caae283585fde339b092ecf446e7b4451819->leave($__internal_ca1cd033f30bf5a338d6f9ce1a40caae283585fde339b092ecf446e7b4451819_prof);

    }

    // line 113
    public function block_footer($context, array $blocks = array())
    {
        $__internal_3d73c04488e5c7e64dea3bed4c2cd7bda3b9b1ef28907e9acf28f628e734b833 = $this->env->getExtension("native_profiler");
        $__internal_3d73c04488e5c7e64dea3bed4c2cd7bda3b9b1ef28907e9acf28f628e734b833->enter($__internal_3d73c04488e5c7e64dea3bed4c2cd7bda3b9b1ef28907e9acf28f628e734b833_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        echo "C-Node";
        
        $__internal_3d73c04488e5c7e64dea3bed4c2cd7bda3b9b1ef28907e9acf28f628e734b833->leave($__internal_3d73c04488e5c7e64dea3bed4c2cd7bda3b9b1ef28907e9acf28f628e734b833_prof);

    }

    // line 116
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b4afcac6bee91f09a88edb1a072529a2b3003151a10882ae76e64ed6965e13fa = $this->env->getExtension("native_profiler");
        $__internal_b4afcac6bee91f09a88edb1a072529a2b3003151a10882ae76e64ed6965e13fa->enter($__internal_b4afcac6bee91f09a88edb1a072529a2b3003151a10882ae76e64ed6965e13fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 117
        echo "\t\t<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
\t\t<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\" integrity=\"sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS\" crossorigin=\"anonymous\"></script>
\t";
        
        $__internal_b4afcac6bee91f09a88edb1a072529a2b3003151a10882ae76e64ed6965e13fa->leave($__internal_b4afcac6bee91f09a88edb1a072529a2b3003151a10882ae76e64ed6965e13fa_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  283 => 117,  277 => 116,  265 => 113,  254 => 108,  216 => 73,  210 => 72,  167 => 35,  161 => 34,  151 => 16,  145 => 15,  135 => 11,  129 => 10,  117 => 9,  107 => 5,  101 => 4,  92 => 120,  90 => 116,  86 => 114,  84 => 113,  78 => 109,  76 => 108,  71 => 105,  68 => 72,  66 => 34,  48 => 18,  45 => 15,  43 => 10,  38 => 9,  36 => 4,  31 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/*     <head>*/
/*         {% block meta %}*/
/*         	<meta charset="UTF-8" />*/
/* 		<meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*   		<meta name="viewport" content="width=device-width, initial-scale=1">*/
/* 	{% endblock %}*/
/*         <title>{% block title %}C-Node{% endblock %}</title>*/
/*         {% block stylesheets %}*/
/* 		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">*/
/* 		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">*/
/*                 <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">*/
/* 	{% endblock %}*/
/*         {% block link %}*/
/*         	<link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/* 	{% endblock %}*/
/*     </head>*/
/*     <body>*/
/*         <div id="wrapper">*/
/* */
/*         <!-- Navigation -->*/
/*         <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">*/
/*             <!-- Brand and toggle get grouped for better mobile display -->*/
/*             <div class="navbar-header">*/
/*                 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">*/
/*                     <span class="sr-only">Toggle navigation</span>*/
/*                     <span class="icon-bar"></span>*/
/*                     <span class="icon-bar"></span>*/
/*                     <span class="icon-bar"></span>*/
/*                 </button>*/
/*                 <a class="navbar-brand" href="index.html">C-Node</a>*/
/*             </div>*/
/*             {% block topnav %}*/
/*             <ul class="nav navbar-right top-nav">*/
/*                 <li class="dropdown">*/
/*                     <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>*/
/*                     <ul class="dropdown-menu alert-dropdown">*/
/*                         <li>*/
/*                             <a href="#">Alert Name <span class="label label-default">Alert Badge</span></a>*/
/*                         </li>*/
/*                  */
/*                         <li>*/
/*                             <a href="#">Alert Name <span class="label label-danger">Alert Badge</span></a>*/
/*                         </li>*/
/*                         <li class="divider"></li>*/
/*                         <li>*/
/*                             <a href="#">View All</a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </li>*/
/*                 <li class="dropdown">*/
/*                     <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> John Smith <b class="caret"></b></a>*/
/*                     <ul class="dropdown-menu">*/
/*                         <li>*/
/*                             <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="#"><i class="fa fa-fw fa-eur"></i> Credits</a>*/
/*                         </li>*/
/*                         <li class="divider"></li>*/
/*                         <li>*/
/*                             <a href="#"><i class="fa fa-fw fa-power-off"></i> Log Out</a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </li>*/
/*             </ul>*/
/*             {% endblock %}*/
/*             {% block sidenav %}*/
/*             <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->*/
/*             <div class="collapse navbar-collapse navbar-ex1-collapse">*/
/*                 <ul class="nav navbar-nav side-nav">*/
/*                     <li>*/
/*                         <a href="/"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="/equipment"><i class="fa fa-fw fa-cog"></i> Equipment</a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="/equipment"><i class="fa fa-fw fa-user"></i> Users</a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="/equipment"><i class="fa fa-fw fa-lock"></i> Access control</a>*/
/*                     </li>*/
/*                    */
/*                     <li>*/
/*                         <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Dropdown <i class="fa fa-fw fa-caret-down"></i></a>*/
/*                         <ul id="demo" class="collapse">*/
/*                             <li>*/
/*                                 <a href="#">Dropdown Item</a>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <a href="#">Dropdown Item</a>*/
/*                             </li>*/
/*                         </ul>*/
/*                     </li>*/
/*              */
/*                 </ul>*/
/*             </div>*/
/*             <!-- /.navbar-collapse -->*/
/*             {% endblock %}*/
/*         </nav>*/
/*         <div id="page-wrapper">*/
/*             <div class="container-fluid">*/
/*                    {% block body %}{% endblock %}*/
/*             </div>*/
/*             <!-- /.container-fluid -->*/
/*         </div>*/
/*         <!-- /#page-wrapper -->*/
/*         {% block footer %}C-Node{% endblock %}*/
/*     </div>*/
/*     <!-- /#wrapper -->*/
/*         {% block javascripts %}*/
/* 		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>*/
/* 		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>*/
/* 	{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
