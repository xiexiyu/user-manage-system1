<?php

/* AppBundle:User:show/show-user-info.html.twig */
class __TwigTemplate_2a19daeaa662a3b1be50bde80a4953081f45f85237ec92a6e33305399355e8c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::modal-base.html.twig", "AppBundle:User:show/show-user-info.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle::modal-base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3d86d367eae143afb12cfa3ab40a885ea52e190111ce6707cabae6013850e7f5 = $this->env->getExtension("native_profiler");
        $__internal_3d86d367eae143afb12cfa3ab40a885ea52e190111ce6707cabae6013850e7f5->enter($__internal_3d86d367eae143afb12cfa3ab40a885ea52e190111ce6707cabae6013850e7f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:User:show/show-user-info.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3d86d367eae143afb12cfa3ab40a885ea52e190111ce6707cabae6013850e7f5->leave($__internal_3d86d367eae143afb12cfa3ab40a885ea52e190111ce6707cabae6013850e7f5_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_16d12b0909d165bdcde87a9c3956267c7ccccca5a409f7acbb1ef0c0266212ed = $this->env->getExtension("native_profiler");
        $__internal_16d12b0909d165bdcde87a9c3956267c7ccccca5a409f7acbb1ef0c0266212ed->enter($__internal_16d12b0909d165bdcde87a9c3956267c7ccccca5a409f7acbb1ef0c0266212ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "员工详情";
        
        $__internal_16d12b0909d165bdcde87a9c3956267c7ccccca5a409f7acbb1ef0c0266212ed->leave($__internal_16d12b0909d165bdcde87a9c3956267c7ccccca5a409f7acbb1ef0c0266212ed_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_9caa5325c224f34bfcd3e4015da8e3eba4cd8a68f428e4119aa26919d77f9b9e = $this->env->getExtension("native_profiler");
        $__internal_9caa5325c224f34bfcd3e4015da8e3eba4cd8a68f428e4119aa26919d77f9b9e->enter($__internal_9caa5325c224f34bfcd3e4015da8e3eba4cd8a68f428e4119aa26919d77f9b9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "isAdmin", array(), "method")) {
            // line 6
            echo "  <ul class=\"nav nav-tabs\" role=\"tablist\" style=\"margin-bottom:20px;\">
    <li ";
            // line 7
            if (((isset($context["tab"]) ? $context["tab"] : $this->getContext($context, "tab")) == "basic")) {
                echo "class=\"active\"";
            }
            echo "><a href=\"#basic-info-panel\" data-toggle=\"tab\">基本信息</a></li>
    <li ";
            // line 8
            if (((isset($context["tab"]) ? $context["tab"] : $this->getContext($context, "tab")) == "family")) {
                echo "class=\"active\"";
            }
            echo "><a href=\"#family-info-panel\" data-toggle=\"tab\">家庭信息</a></li>
    <li ";
            // line 9
            if (((isset($context["tab"]) ? $context["tab"] : $this->getContext($context, "tab")) == "learn")) {
                echo "class=\"active\"";
            }
            echo "><a href=\"#learn-info-panel\" data-toggle=\"tab\">学历信息</a></li>
    <li ";
            // line 10
            if (((isset($context["tab"]) ? $context["tab"] : $this->getContext($context, "tab")) == "work")) {
                echo "class=\"active\"";
            }
            echo "><a href=\"#work-info-panel\" data-toggle=\"tab\">工作信息</a></li>
    <li ";
            // line 11
            if (((isset($context["tab"]) ? $context["tab"] : $this->getContext($context, "tab")) == "other")) {
                echo "class=\"active\"";
            }
            echo "><a href=\"#other-info-panel\" data-toggle=\"tab\">其他信息</a></li>
  </ul>
";
        }
        // line 14
        echo "<div class=\"tab-content\">
  <div class=\"tab-pane ";
        // line 15
        if (((isset($context["tab"]) ? $context["tab"] : $this->getContext($context, "tab")) == "basic")) {
            echo "active";
        }
        echo "\" id=\"basic-info-panel\">
    ";
        // line 16
        $this->loadTemplate("AppBundle:User:show/show-basic-info.html.twig", "AppBundle:User:show/show-user-info.html.twig", 16)->display($context);
        // line 17
        echo "  </div>
    <div class=\"tab-pane ";
        // line 18
        if (((isset($context["tab"]) ? $context["tab"] : $this->getContext($context, "tab")) == "family")) {
            echo "active";
        }
        echo "\" id=\"family-info-panel\">
    ";
        // line 19
        $this->loadTemplate("AppBundle:User:show/show-family-info.html.twig", "AppBundle:User:show/show-user-info.html.twig", 19)->display($context);
        // line 20
        echo "  </div>

  <div class=\"tab-pane ";
        // line 22
        if (((isset($context["tab"]) ? $context["tab"] : $this->getContext($context, "tab")) == "learn")) {
            echo "active";
        }
        echo "\" id=\"learn-info-panel\">
    ";
        // line 23
        $this->loadTemplate("AppBundle:User:show/show-learn-info.html.twig", "AppBundle:User:show/show-user-info.html.twig", 23)->display($context);
        // line 24
        echo "  </div>

  <div class=\"tab-pane ";
        // line 26
        if (((isset($context["tab"]) ? $context["tab"] : $this->getContext($context, "tab")) == "work")) {
            echo "active";
        }
        echo "\" id=\"work-info-panel\">
    ";
        // line 27
        $this->loadTemplate("AppBundle:User:show/show-work-info.html.twig", "AppBundle:User:show/show-user-info.html.twig", 27)->display($context);
        // line 28
        echo "  </div>

  <div class=\"tab-pane ";
        // line 30
        if (((isset($context["tab"]) ? $context["tab"] : $this->getContext($context, "tab")) == "other")) {
            echo "active";
        }
        echo "\" id=\"other-info-panel\">
    ";
        // line 31
        $this->loadTemplate("AppBundle:User:show/show-other-info.html.twig", "AppBundle:User:show/show-user-info.html.twig", 31)->display($context);
        // line 32
        echo "  </div>
</div>
";
        
        $__internal_9caa5325c224f34bfcd3e4015da8e3eba4cd8a68f428e4119aa26919d77f9b9e->leave($__internal_9caa5325c224f34bfcd3e4015da8e3eba4cd8a68f428e4119aa26919d77f9b9e_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:User:show/show-user-info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 32,  146 => 31,  140 => 30,  136 => 28,  134 => 27,  128 => 26,  124 => 24,  122 => 23,  116 => 22,  112 => 20,  110 => 19,  104 => 18,  101 => 17,  99 => 16,  93 => 15,  90 => 14,  82 => 11,  76 => 10,  70 => 9,  64 => 8,  58 => 7,  55 => 6,  53 => 5,  47 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'AppBundle::modal-base.html.twig' %}*/
/* */
/* {% block title %}员工详情{% endblock %}*/
/* {% block body %}*/
/* {% if app.user.isAdmin() %}*/
/*   <ul class="nav nav-tabs" role="tablist" style="margin-bottom:20px;">*/
/*     <li {% if tab == 'basic' %}class="active"{% endif %}><a href="#basic-info-panel" data-toggle="tab">基本信息</a></li>*/
/*     <li {% if tab == 'family' %}class="active"{% endif %}><a href="#family-info-panel" data-toggle="tab">家庭信息</a></li>*/
/*     <li {% if tab == 'learn' %}class="active"{% endif %}><a href="#learn-info-panel" data-toggle="tab">学历信息</a></li>*/
/*     <li {% if tab == 'work' %}class="active"{% endif %}><a href="#work-info-panel" data-toggle="tab">工作信息</a></li>*/
/*     <li {% if tab == 'other' %}class="active"{% endif %}><a href="#other-info-panel" data-toggle="tab">其他信息</a></li>*/
/*   </ul>*/
/* {% endif %}*/
/* <div class="tab-content">*/
/*   <div class="tab-pane {% if tab == 'basic' %}active{% endif %}" id="basic-info-panel">*/
/*     {% include 'AppBundle:User:show/show-basic-info.html.twig' %}*/
/*   </div>*/
/*     <div class="tab-pane {% if tab == 'family' %}active{% endif %}" id="family-info-panel">*/
/*     {% include 'AppBundle:User:show/show-family-info.html.twig' %}*/
/*   </div>*/
/* */
/*   <div class="tab-pane {% if tab == 'learn' %}active{% endif %}" id="learn-info-panel">*/
/*     {% include 'AppBundle:User:show/show-learn-info.html.twig' %}*/
/*   </div>*/
/* */
/*   <div class="tab-pane {% if tab == 'work' %}active{% endif %}" id="work-info-panel">*/
/*     {% include 'AppBundle:User:show/show-work-info.html.twig' %}*/
/*   </div>*/
/* */
/*   <div class="tab-pane {% if tab == 'other' %}active{% endif %}" id="other-info-panel">*/
/*     {% include 'AppBundle:User:show/show-other-info.html.twig' %}*/
/*   </div>*/
/* </div>*/
/* {% endblock %}*/
/* */
