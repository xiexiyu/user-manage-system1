<?php

/* AppBundle:User:upload/uploadProfile.html.twig */
class __TwigTemplate_c4f2a041cd3cf1d5b59108328a5472330d2ee07f721e900a032f778ba9788f15 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::base.html.twig", "AppBundle:User:upload/uploadProfile.html.twig", 1);
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
        $__internal_ce2f248b77489925f2835b6519cdcc5a124fc366215010a2d9113e75c9bfbebf = $this->env->getExtension("native_profiler");
        $__internal_ce2f248b77489925f2835b6519cdcc5a124fc366215010a2d9113e75c9bfbebf->enter($__internal_ce2f248b77489925f2835b6519cdcc5a124fc366215010a2d9113e75c9bfbebf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:User:upload/uploadProfile.html.twig"));

        // line 2
        $context["nav"] = "upload_image";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ce2f248b77489925f2835b6519cdcc5a124fc366215010a2d9113e75c9bfbebf->leave($__internal_ce2f248b77489925f2835b6519cdcc5a124fc366215010a2d9113e75c9bfbebf_prof);

    }

    // line 3
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_295d0633471c303a08439f8091b73602ec09672c76e76555e5817be6e20d7004 = $this->env->getExtension("native_profiler");
        $__internal_295d0633471c303a08439f8091b73602ec09672c76e76555e5817be6e20d7004->enter($__internal_295d0633471c303a08439f8091b73602ec09672c76e76555e5817be6e20d7004_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        // line 4
        echo "<ul class=\"nav nav-tabs\">
  <li role=\"presentation\" class=\"active\"><a href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_upload_Profile", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
        echo "\">头像上传</a></li>
  <li role=\"presentation\"><a href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_upload_IDcard", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
        echo "\">身份证图片上传</a></li>
  <li role=\"presentation\"><a href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_upload_education", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
        echo "\">学历证书图片上传</a></li>
  <li role=\"presentation\"><a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_upload_rank", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
        echo "\">职称证书图片上传</a></li>
 </ul>
";
        
        $__internal_295d0633471c303a08439f8091b73602ec09672c76e76555e5817be6e20d7004->leave($__internal_295d0633471c303a08439f8091b73602ec09672c76e76555e5817be6e20d7004_prof);

    }

    // line 11
    public function block_content_body($context, array $blocks = array())
    {
        $__internal_16ea5d86b42cbc66cfd1d799174a75b2549bca78e291740e59283c6049b489ff = $this->env->getExtension("native_profiler");
        $__internal_16ea5d86b42cbc66cfd1d799174a75b2549bca78e291740e59283c6049b489ff->enter($__internal_16ea5d86b42cbc66cfd1d799174a75b2549bca78e291740e59283c6049b489ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_body"));

        // line 12
        echo "<form id=\"pic-uploader\" enctype=\"multipart/form-data\">
    <div id=\"preview\">
      <img id=\"imghead\" width=100% height=100% border=0 src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl((isset($context["imagePath"]) ? $context["imagePath"] : $this->getContext($context, "imagePath"))), "html", null, true);
        echo "\">
    </div>
    <input id=\"fileInput\" type=\"file\" required onchange=\"previewImage(this)\" name=\"image\" accept=\"image/*\">
    <br>
    <br>
    <p>图片大小不得超过3M，格式为JPEG,JPG,PNG</p>
    <br>
    <button id=\"submit\" class=\"btn btn-success\" type=\"button\" data-url=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_upload_Profile", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
        echo "\">上传图片</button>
</form>
";
        
        $__internal_16ea5d86b42cbc66cfd1d799174a75b2549bca78e291740e59283c6049b489ff->leave($__internal_16ea5d86b42cbc66cfd1d799174a75b2549bca78e291740e59283c6049b489ff_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:User:upload/uploadProfile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  79 => 14,  75 => 12,  69 => 11,  59 => 8,  55 => 7,  51 => 6,  47 => 5,  44 => 4,  38 => 3,  31 => 1,  29 => 2,  11 => 1,);
    }
}
/* {% extends 'AppBundle::base.html.twig' %}*/
/* {% set nav = 'upload_image' %}*/
/* {% block content_title %}*/
/* <ul class="nav nav-tabs">*/
/*   <li role="presentation" class="active"><a href="{{path('user_upload_Profile',{id:id})}}">头像上传</a></li>*/
/*   <li role="presentation"><a href="{{path('user_upload_IDcard',{id:id})}}">身份证图片上传</a></li>*/
/*   <li role="presentation"><a href="{{path('user_upload_education',{id:id})}}">学历证书图片上传</a></li>*/
/*   <li role="presentation"><a href="{{path('user_upload_rank',{id:id})}}">职称证书图片上传</a></li>*/
/*  </ul>*/
/* {% endblock %}*/
/* {% block content_body %}*/
/* <form id="pic-uploader" enctype="multipart/form-data">*/
/*     <div id="preview">*/
/*       <img id="imghead" width=100% height=100% border=0 src="{{asset(imagePath)}}">*/
/*     </div>*/
/*     <input id="fileInput" type="file" required onchange="previewImage(this)" name="image" accept="image/*">*/
/*     <br>*/
/*     <br>*/
/*     <p>图片大小不得超过3M，格式为JPEG,JPG,PNG</p>*/
/*     <br>*/
/*     <button id="submit" class="btn btn-success" type="button" data-url="{{ path('user_upload_Profile',{id:id}) }}">上传图片</button>*/
/* </form>*/
/* {% endblock %}*/
/* */
