<?php

/* AppBundle:User:show/certificate.html.twig */
class __TwigTemplate_5a64631d3b023d444814581849a7145f3022fc474fbb92696943d9a7892c6238 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::modal-base.html.twig", "AppBundle:User:show/certificate.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle::modal-base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d75e220c0b133ea4f7e1000f8cb1d0e4cb93a3b58c08c6ba534abaaf85e9f4fa = $this->env->getExtension("native_profiler");
        $__internal_d75e220c0b133ea4f7e1000f8cb1d0e4cb93a3b58c08c6ba534abaaf85e9f4fa->enter($__internal_d75e220c0b133ea4f7e1000f8cb1d0e4cb93a3b58c08c6ba534abaaf85e9f4fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:User:show/certificate.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d75e220c0b133ea4f7e1000f8cb1d0e4cb93a3b58c08c6ba534abaaf85e9f4fa->leave($__internal_d75e220c0b133ea4f7e1000f8cb1d0e4cb93a3b58c08c6ba534abaaf85e9f4fa_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7cd5b42098b3ec10a9f65cc104914a676967140b60f32d287c41879d2e564c12 = $this->env->getExtension("native_profiler");
        $__internal_7cd5b42098b3ec10a9f65cc104914a676967140b60f32d287c41879d2e564c12->enter($__internal_7cd5b42098b3ec10a9f65cc104914a676967140b60f32d287c41879d2e564c12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "档案照片（";
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "trueName", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "trueName", array()), "html", null, true);
        } else {
            // line 5
            echo "  ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "number", array()), "html", null, true);
        }
        echo ")
";
        
        $__internal_7cd5b42098b3ec10a9f65cc104914a676967140b60f32d287c41879d2e564c12->leave($__internal_7cd5b42098b3ec10a9f65cc104914a676967140b60f32d287c41879d2e564c12_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_b61c492d1daf8cfdd3602a5efd23eba28da43eea528425abc9a1625400d7f7a3 = $this->env->getExtension("native_profiler");
        $__internal_b61c492d1daf8cfdd3602a5efd23eba28da43eea528425abc9a1625400d7f7a3->enter($__internal_b61c492d1daf8cfdd3602a5efd23eba28da43eea528425abc9a1625400d7f7a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "  ";
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "isAdmin", array(), "method")) {
            // line 10
            echo "  <ul class=\"nav nav-tabs\" style=\"margin-bottom:20px;\">
    <li role=\"button\" ";
            // line 11
            if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "idcard")) {
                echo " class=\"active\"";
            }
            echo "><a class=\"show-idcard-img js-certificate-btn\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_certificate", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()), "type" => "idcard")), "html", null, true);
            echo "\">身份证图片</a></li>
    <li role=\"button\" ";
            // line 12
            if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "education")) {
                echo " class=\"active\"";
            }
            echo "><a class=\"show-education-img js-certificate-btn\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_certificate", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()), "type" => "education")), "html", null, true);
            echo "\">学历证书图片</a></li>
    <li role=\"button\" ";
            // line 13
            if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "rank")) {
                echo " class=\"active\"";
            }
            echo "><a class=\"show-rank-img js-certificate-btn\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_certificate", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()), "type" => "rank")), "html", null, true);
            echo "\">职称证书图片</a></li>
  </ul>
  ";
        }
        // line 16
        echo "
  ";
        // line 17
        if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "idcard")) {
            // line 18
            echo "    ";
            if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "imgFrontIDcard", array()) == "")) {
                // line 19
                echo "      <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/avatar.png"), "html", null, true);
                echo "\" class=\"certificate-img\">
    ";
            } else {
                // line 21
                echo "      <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "imgFrontIDcard", array())), "html", null, true);
                echo "\" class=\"certificate-img\">
    ";
            }
            // line 23
            echo "  ";
        }
        // line 24
        echo "  ";
        if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "education")) {
            // line 25
            echo "    ";
            if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "imgEducation", array()) == "")) {
                // line 26
                echo "      <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/avatar.png"), "html", null, true);
                echo "\" class=\"certificate-img\">
    ";
            } else {
                // line 28
                echo "      <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "imgEducation", array())), "html", null, true);
                echo "\" class=\"certificate-img\">
    ";
            }
            // line 30
            echo "  ";
        }
        // line 31
        echo "  ";
        if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "rank")) {
            // line 32
            echo "    ";
            if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "imgRank", array()) == "")) {
                // line 33
                echo "      <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/avatar.png"), "html", null, true);
                echo "\" class=\"certificate-img\">
    ";
            } else {
                // line 35
                echo "      <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "imgRank", array())), "html", null, true);
                echo "\" class=\"certificate-img\">
    ";
            }
            // line 37
            echo "  ";
        }
        // line 38
        echo " 
  
  
";
        
        $__internal_b61c492d1daf8cfdd3602a5efd23eba28da43eea528425abc9a1625400d7f7a3->leave($__internal_b61c492d1daf8cfdd3602a5efd23eba28da43eea528425abc9a1625400d7f7a3_prof);

    }

    // line 43
    public function block_footer($context, array $blocks = array())
    {
        $__internal_6b5144f5be19fbe052bb5cf520b1c45255e319b64e008a042ac2b81a4f647744 = $this->env->getExtension("native_profiler");
        $__internal_6b5144f5be19fbe052bb5cf520b1c45255e319b64e008a042ac2b81a4f647744->enter($__internal_6b5144f5be19fbe052bb5cf520b1c45255e319b64e008a042ac2b81a4f647744_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 44
        echo "  ";
        if ((((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "idcard") && ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "imgFrontIDcard", array()) != ""))) {
            // line 45
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_file_download", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()), "fileName" => "imgFrontIDcard")), "html", null, true);
            echo "\" class=\"btn btn-success\">下载</a>
  ";
        } elseif (((        // line 46
(isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "education") && ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "imgEducation", array()) != ""))) {
            // line 47
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_file_download", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()), "fileName" => "imgEducation")), "html", null, true);
            echo "\" class=\"btn btn-success\">下载</a>
  ";
        } elseif (((        // line 48
(isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "rank") && ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "imgRank", array()) != ""))) {
            // line 49
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_file_download", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()), "fileName" => "imgRank")), "html", null, true);
            echo "\" class=\"btn btn-success\">下载</a>
  ";
        }
        // line 51
        echo "
";
        
        $__internal_6b5144f5be19fbe052bb5cf520b1c45255e319b64e008a042ac2b81a4f647744->leave($__internal_6b5144f5be19fbe052bb5cf520b1c45255e319b64e008a042ac2b81a4f647744_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:User:show/certificate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 51,  194 => 49,  192 => 48,  187 => 47,  185 => 46,  180 => 45,  177 => 44,  171 => 43,  161 => 38,  158 => 37,  152 => 35,  146 => 33,  143 => 32,  140 => 31,  137 => 30,  131 => 28,  125 => 26,  122 => 25,  119 => 24,  116 => 23,  110 => 21,  104 => 19,  101 => 18,  99 => 17,  96 => 16,  86 => 13,  78 => 12,  70 => 11,  67 => 10,  64 => 9,  58 => 8,  47 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'AppBundle::modal-base.html.twig' %}*/
/* */
/* {% block title %}*/
/* 档案照片（{% if user.trueName %}{{user.trueName}}{% else %}*/
/*   {{user.number}}{% endif %})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*   {% if app.user.isAdmin() %}*/
/*   <ul class="nav nav-tabs" style="margin-bottom:20px;">*/
/*     <li role="button" {% if type == 'idcard' %} class="active"{% endif %}><a class="show-idcard-img js-certificate-btn" data-url="{{ path('admin_user_certificate',{id:user.id,type:'idcard'}) }}">身份证图片</a></li>*/
/*     <li role="button" {% if type == 'education' %} class="active"{% endif %}><a class="show-education-img js-certificate-btn" data-url="{{ path('admin_user_certificate',{id:user.id,type:'education'}) }}">学历证书图片</a></li>*/
/*     <li role="button" {% if type == 'rank' %} class="active"{% endif %}><a class="show-rank-img js-certificate-btn" data-url="{{ path('admin_user_certificate',{id:user.id,type:'rank'}) }}">职称证书图片</a></li>*/
/*   </ul>*/
/*   {% endif %}*/
/* */
/*   {% if type == 'idcard' %}*/
/*     {% if user.imgFrontIDcard == '' %}*/
/*       <img src="{{ asset('assets/avatar.png')}}" class="certificate-img">*/
/*     {% else %}*/
/*       <img src="{{ asset(user.imgFrontIDcard) }}" class="certificate-img">*/
/*     {% endif %}*/
/*   {% endif %}*/
/*   {% if type == 'education' %}*/
/*     {% if user.imgEducation == '' %}*/
/*       <img src="{{ asset('assets/avatar.png')}}" class="certificate-img">*/
/*     {% else %}*/
/*       <img src="{{ asset(user.imgEducation) }}" class="certificate-img">*/
/*     {% endif %}*/
/*   {% endif %}*/
/*   {% if type == 'rank' %}*/
/*     {% if user.imgRank == '' %}*/
/*       <img src="{{ asset('assets/avatar.png')}}" class="certificate-img">*/
/*     {% else %}*/
/*       <img src="{{ asset(user.imgRank) }}" class="certificate-img">*/
/*     {% endif %}*/
/*   {% endif %}*/
/*  */
/*   */
/*   */
/* {% endblock %}*/
/* */
/* {% block footer %}*/
/*   {% if type == 'idcard' and user.imgFrontIDcard != '' %}*/
/*     <a href="{{ path('admin_file_download',{id:user.id,fileName:'imgFrontIDcard'}) }}" class="btn btn-success">下载</a>*/
/*   {% elseif type == 'education' and user.imgEducation != '' %}*/
/*     <a href="{{ path('admin_file_download',{id:user.id,fileName:'imgEducation'}) }}" class="btn btn-success">下载</a>*/
/*   {% elseif type == 'rank' and user.imgRank != '' %}*/
/*     <a href="{{ path('admin_file_download',{id:user.id,fileName:'imgRank'}) }}" class="btn btn-success">下载</a>*/
/*   {% endif %}*/
/* */
/* {% endblock %}*/
