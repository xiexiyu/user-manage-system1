<?php

/* AppBundle:User:upload/uploadEducation.html.twig */
class __TwigTemplate_42a5a5eb7dbeca31f091be5ee9180f58ec37168ed41a768c31e8d3a01ed475de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::base.html.twig", "AppBundle:User:upload/uploadEducation.html.twig", 1);
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
        $__internal_eb79737b231ce8c6ec4ad5910eea72edbe27f3b8d30903564795e7c33064546a = $this->env->getExtension("native_profiler");
        $__internal_eb79737b231ce8c6ec4ad5910eea72edbe27f3b8d30903564795e7c33064546a->enter($__internal_eb79737b231ce8c6ec4ad5910eea72edbe27f3b8d30903564795e7c33064546a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:User:upload/uploadEducation.html.twig"));

        // line 2
        $context["nav"] = "upload_image";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eb79737b231ce8c6ec4ad5910eea72edbe27f3b8d30903564795e7c33064546a->leave($__internal_eb79737b231ce8c6ec4ad5910eea72edbe27f3b8d30903564795e7c33064546a_prof);

    }

    // line 3
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_ed15be48df3ac768b66505ea7b2f888db6073b6fe9ff53377c6ebd727dc8c3d1 = $this->env->getExtension("native_profiler");
        $__internal_ed15be48df3ac768b66505ea7b2f888db6073b6fe9ff53377c6ebd727dc8c3d1->enter($__internal_ed15be48df3ac768b66505ea7b2f888db6073b6fe9ff53377c6ebd727dc8c3d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        // line 4
        echo "<ul class=\"nav nav-tabs\">
  <li role=\"presentation\"><a href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_upload_Profile", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
        echo "\">头像上传</a></li>
  <li role=\"presentation\"><a href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_upload_IDcard", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
        echo "\">身份证图片上传</a></li>
  <li role=\"presentation\" class=\"active\"><a href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_upload_education", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
        echo "\">学历证书图片上传</a></li>
  <li role=\"presentation\"><a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_upload_rank", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
        echo "\">职称证书图片上传</a></li>
 </ul>
";
        
        $__internal_ed15be48df3ac768b66505ea7b2f888db6073b6fe9ff53377c6ebd727dc8c3d1->leave($__internal_ed15be48df3ac768b66505ea7b2f888db6073b6fe9ff53377c6ebd727dc8c3d1_prof);

    }

    // line 11
    public function block_content_body($context, array $blocks = array())
    {
        $__internal_8e2708effa8e47c368dcbbb44dba3bd75e6cc6c4d47bf35ee641e547c4cbbe4b = $this->env->getExtension("native_profiler");
        $__internal_8e2708effa8e47c368dcbbb44dba3bd75e6cc6c4d47bf35ee641e547c4cbbe4b->enter($__internal_8e2708effa8e47c368dcbbb44dba3bd75e6cc6c4d47bf35ee641e547c4cbbe4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_body"));

        // line 12
        echo "<form id=\"pic-uploader\" enctype=\"multipart/form-data\">
\t<div id=\"preview\">
    <img id=\"imghead\" width=100% height=100% border=0 src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl((isset($context["imagePath"]) ? $context["imagePath"] : $this->getContext($context, "imagePath"))), "html", null, true);
        echo "\">
\t</div>
\t<input id=\"fileInput\" type=\"file\" required onchange=\"previewImage(this)\" name=\"image\" accept=\"image/*\">
\t<br>
\t<br>
\t<p>图片大小不得超过3M，格式为JPEG,JPG,PNG</p>
\t<br>
\t<button id=\"submit\" class=\"btn btn-success\" type=\"button\" data-url=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_upload_education", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
        echo "\">上传图片</button>
  ";
        // line 22
        if ((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "getEducationImage", array(), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "getEducationImage", array(), "method"))) : (""))) {
            // line 23
            echo "    <a href=\"";
            echo $this->env->getExtension('routing')->getPath("file_download", array("fileName" => "imgEducation"));
            echo "\" class=\"btn btn-success\">下载</a>
  ";
        }
        // line 25
        echo "</form>
";
        
        $__internal_8e2708effa8e47c368dcbbb44dba3bd75e6cc6c4d47bf35ee641e547c4cbbe4b->leave($__internal_8e2708effa8e47c368dcbbb44dba3bd75e6cc6c4d47bf35ee641e547c4cbbe4b_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:User:upload/uploadEducation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 25,  95 => 23,  93 => 22,  89 => 21,  79 => 14,  75 => 12,  69 => 11,  59 => 8,  55 => 7,  51 => 6,  47 => 5,  44 => 4,  38 => 3,  31 => 1,  29 => 2,  11 => 1,);
    }
}
/* {% extends 'AppBundle::base.html.twig' %}*/
/* {% set nav = 'upload_image' %}*/
/* {% block content_title %}*/
/* <ul class="nav nav-tabs">*/
/*   <li role="presentation"><a href="{{path('user_upload_Profile',{id:id})}}">头像上传</a></li>*/
/*   <li role="presentation"><a href="{{path('user_upload_IDcard',{id:id})}}">身份证图片上传</a></li>*/
/*   <li role="presentation" class="active"><a href="{{path('user_upload_education',{id:id})}}">学历证书图片上传</a></li>*/
/*   <li role="presentation"><a href="{{path('user_upload_rank',{id:id})}}">职称证书图片上传</a></li>*/
/*  </ul>*/
/* {% endblock %}*/
/* {% block content_body %}*/
/* <form id="pic-uploader" enctype="multipart/form-data">*/
/* 	<div id="preview">*/
/*     <img id="imghead" width=100% height=100% border=0 src="{{asset(imagePath)}}">*/
/* 	</div>*/
/* 	<input id="fileInput" type="file" required onchange="previewImage(this)" name="image" accept="image/*">*/
/* 	<br>*/
/* 	<br>*/
/* 	<p>图片大小不得超过3M，格式为JPEG,JPG,PNG</p>*/
/* 	<br>*/
/* 	<button id="submit" class="btn btn-success" type="button" data-url="{{ path('user_upload_education',{id:id}) }}">上传图片</button>*/
/*   {% if app.user.getEducationImage()|default() %}*/
/*     <a href="{{ path('file_download', {fileName:'imgEducation'}) }}" class="btn btn-success">下载</a>*/
/*   {% endif %}*/
/* </form>*/
/* {% endblock %}*/
/* */
