<?php

/* AppBundle:User:upload/upload-images.html.twig */
class __TwigTemplate_c021e4a071d969570c701167d46b830da81c88274a5922632160cdda38d0c7ae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::base.html.twig", "AppBundle:User:upload/upload-images.html.twig", 1);
        $this->blocks = array(
            'content_title' => array($this, 'block_content_title'),
            'content_body' => array($this, 'block_content_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_df7a7ae66cf56646ee0a8231d845e3ea44e8584a959793c35ef4bc8dc1bc28ab = $this->env->getExtension("native_profiler");
        $__internal_df7a7ae66cf56646ee0a8231d845e3ea44e8584a959793c35ef4bc8dc1bc28ab->enter($__internal_df7a7ae66cf56646ee0a8231d845e3ea44e8584a959793c35ef4bc8dc1bc28ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:User:upload/upload-images.html.twig"));

        // line 3
        $context["nav"] = "upload_image";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_df7a7ae66cf56646ee0a8231d845e3ea44e8584a959793c35ef4bc8dc1bc28ab->leave($__internal_df7a7ae66cf56646ee0a8231d845e3ea44e8584a959793c35ef4bc8dc1bc28ab_prof);

    }

    // line 5
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_01db5031f5f20b96b64f2d9dda3060c1eae45adf895e6bf822e03a1e10729c2f = $this->env->getExtension("native_profiler");
        $__internal_01db5031f5f20b96b64f2d9dda3060c1eae45adf895e6bf822e03a1e10729c2f->enter($__internal_01db5031f5f20b96b64f2d9dda3060c1eae45adf895e6bf822e03a1e10729c2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        // line 6
        echo "<ul class=\"nav nav-tabs\">
  <li role=\"presentation\" ";
        // line 7
        if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "Profile")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_upload", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "type" => "Profile")), "html", null, true);
        echo "\">头像上传</a></li>
  <li role=\"presentation\" ";
        // line 8
        if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "FrontIDcard")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_upload", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "type" => "FrontIDcard")), "html", null, true);
        echo "\">身份证图片上传</a></li>
  <li role=\"presentation\" ";
        // line 9
        if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "Education")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_upload", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "type" => "Education")), "html", null, true);
        echo "\">学历证书图片上传</a></li>
  <li role=\"presentation\" ";
        // line 10
        if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "Rank")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_upload", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "type" => "Rank")), "html", null, true);
        echo "\">职称证书图片上传</a></li>
 </ul>
";
        
        $__internal_01db5031f5f20b96b64f2d9dda3060c1eae45adf895e6bf822e03a1e10729c2f->leave($__internal_01db5031f5f20b96b64f2d9dda3060c1eae45adf895e6bf822e03a1e10729c2f_prof);

    }

    // line 14
    public function block_content_body($context, array $blocks = array())
    {
        $__internal_7a596558230378315ba40516a984eaa4561f3e9f7e7eea4dd8a34d6424d0a8c1 = $this->env->getExtension("native_profiler");
        $__internal_7a596558230378315ba40516a984eaa4561f3e9f7e7eea4dd8a34d6424d0a8c1->enter($__internal_7a596558230378315ba40516a984eaa4561f3e9f7e7eea4dd8a34d6424d0a8c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_body"));

        // line 15
        echo "<form id=\"pic-uploader\" enctype=\"multipart/form-data\">
  <div id=\"preview\">
    <img id=\"imghead\" width=100% height=100% border=0 src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl((isset($context["imagePath"]) ? $context["imagePath"] : $this->getContext($context, "imagePath"))), "html", null, true);
        echo "\">
  </div>
  <input id=\"fileInput\" type=\"file\" required onchange=\"previewImage(this)\" name=\"image\" accept=\"image/*\">
  <br>
  <br>
  <p>图片大小不得超过3M，格式为JPEG,JPG,PNG</p>
  <br>
  <button id=\"submit\" class=\"btn btn-success\" type=\"button\" data-url=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_upload", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "type" => (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")))), "html", null, true);
        echo "\">上传图片</button>
  ";
        // line 25
        if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) != "Profile")) {
            // line 26
            echo "    ";
            if ((((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "getEducationImage", array(), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "getEducationImage", array(), "method"))) : ("")) || (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "getRankImage", array(), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "getRankImage", array(), "method"))) : (""))) || (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "getIDcardImage", array(), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "getIDcardImage", array(), "method"))) : ("")))) {
                // line 27
                echo "      <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("file_download", array("fileName" => ("img" . (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type"))))), "html", null, true);
                echo "\" class=\"btn btn-success\">下载</a>
    ";
            }
            // line 29
            echo "  ";
        }
        // line 30
        echo "</form>
";
        
        $__internal_7a596558230378315ba40516a984eaa4561f3e9f7e7eea4dd8a34d6424d0a8c1->leave($__internal_7a596558230378315ba40516a984eaa4561f3e9f7e7eea4dd8a34d6424d0a8c1_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:User:upload/upload-images.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 30,  120 => 29,  114 => 27,  111 => 26,  109 => 25,  105 => 24,  95 => 17,  91 => 15,  85 => 14,  71 => 10,  63 => 9,  55 => 8,  47 => 7,  44 => 6,  38 => 5,  31 => 1,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'AppBundle::base.html.twig' %}*/
/* */
/* {% set nav = 'upload_image' %}*/
/* */
/* {% block content_title %}*/
/* <ul class="nav nav-tabs">*/
/*   <li role="presentation" {% if type == 'Profile'%}class="active"{% endif %}><a href="{{path('user_upload',{id:id,type:'Profile'})}}">头像上传</a></li>*/
/*   <li role="presentation" {% if type == 'FrontIDcard'%}class="active"{% endif %}><a href="{{path('user_upload',{id:id,type:'FrontIDcard'})}}">身份证图片上传</a></li>*/
/*   <li role="presentation" {% if type == 'Education'%}class="active"{% endif %}><a href="{{path('user_upload',{id:id,type:'Education'})}}">学历证书图片上传</a></li>*/
/*   <li role="presentation" {% if type == 'Rank'%}class="active"{% endif %}><a href="{{path('user_upload',{id:id,type:'Rank'})}}">职称证书图片上传</a></li>*/
/*  </ul>*/
/* {% endblock %}*/
/* */
/* {% block content_body %}*/
/* <form id="pic-uploader" enctype="multipart/form-data">*/
/*   <div id="preview">*/
/*     <img id="imghead" width=100% height=100% border=0 src="{{asset(imagePath)}}">*/
/*   </div>*/
/*   <input id="fileInput" type="file" required onchange="previewImage(this)" name="image" accept="image/*">*/
/*   <br>*/
/*   <br>*/
/*   <p>图片大小不得超过3M，格式为JPEG,JPG,PNG</p>*/
/*   <br>*/
/*   <button id="submit" class="btn btn-success" type="button" data-url="{{ path('user_upload',{id:id,type:type}) }}">上传图片</button>*/
/*   {% if type != 'Profile' %}*/
/*     {% if app.user.getEducationImage()|default() or app.user.getRankImage()|default() or app.user.getIDcardImage()|default()%}*/
/*       <a href="{{ path('file_download', {fileName:'img' ~ type }) }}" class="btn btn-success">下载</a>*/
/*     {% endif %}*/
/*   {% endif %}*/
/* </form>*/
/* {% endblock %}*/
/* */
