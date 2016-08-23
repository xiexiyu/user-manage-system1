<?php

/* AppBundle:User:upload/uploadIDcard.html.twig */
class __TwigTemplate_5c5afe9acf7c9a4be67ee6a7a7fbfd3dfb0ae4ca48bd81841722c765d354334c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::base.html.twig", "AppBundle:User:upload/uploadIDcard.html.twig", 1);
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
        $__internal_5bbf213b2df73cfef77aad8883d608de4ba3c7201b42aff72dce4ce8c742ae82 = $this->env->getExtension("native_profiler");
        $__internal_5bbf213b2df73cfef77aad8883d608de4ba3c7201b42aff72dce4ce8c742ae82->enter($__internal_5bbf213b2df73cfef77aad8883d608de4ba3c7201b42aff72dce4ce8c742ae82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:User:upload/uploadIDcard.html.twig"));

        // line 2
        $context["nav"] = "upload_image";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5bbf213b2df73cfef77aad8883d608de4ba3c7201b42aff72dce4ce8c742ae82->leave($__internal_5bbf213b2df73cfef77aad8883d608de4ba3c7201b42aff72dce4ce8c742ae82_prof);

    }

    // line 3
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_4c57b5f3567a8124a1a4819f2a2b64293df1a4a525f076e411f22e4440d775ee = $this->env->getExtension("native_profiler");
        $__internal_4c57b5f3567a8124a1a4819f2a2b64293df1a4a525f076e411f22e4440d775ee->enter($__internal_4c57b5f3567a8124a1a4819f2a2b64293df1a4a525f076e411f22e4440d775ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        // line 4
        echo "
<ul class=\"nav nav-tabs\">
  <li role=\"presentation\"><a href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_upload_Profile", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
        echo "\">头像上传</a></li>
  <li role=\"presentation\" class=\"active\"><a href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_upload_IDcard", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
        echo "\">身份证图片上传</a></li>
  <li role=\"presentation\"><a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_upload_education", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
        echo "\">学历证书图片上传</a></li>
  <li role=\"presentation\"><a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_upload_rank", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
        echo "\">职称证书图片上传</a></li>
 </ul>
";
        
        $__internal_4c57b5f3567a8124a1a4819f2a2b64293df1a4a525f076e411f22e4440d775ee->leave($__internal_4c57b5f3567a8124a1a4819f2a2b64293df1a4a525f076e411f22e4440d775ee_prof);

    }

    // line 12
    public function block_content_body($context, array $blocks = array())
    {
        $__internal_052dc4b2b9edb95b787998e10a58709535e0aafdaf9c8717e20bd076eff66e97 = $this->env->getExtension("native_profiler");
        $__internal_052dc4b2b9edb95b787998e10a58709535e0aafdaf9c8717e20bd076eff66e97->enter($__internal_052dc4b2b9edb95b787998e10a58709535e0aafdaf9c8717e20bd076eff66e97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_body"));

        // line 13
        echo "<form id=\"pic-uploader\" enctype=\"multipart/form-data\">
    <div id=\"preview\">
       <img id=\"imghead\" width=100% height=100% border=0 src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl((isset($context["imagePath"]) ? $context["imagePath"] : $this->getContext($context, "imagePath"))), "html", null, true);
        echo "\">
    </div>
    <input id=\"fileInput\" type=\"file\" required onchange=\"previewImage(this)\" name=\"image\" accept=\"image/*\">
    <br>
    <br>
    <p>图片大小不得超过3M，格式为JPEG,JPG,PNG</p>
    <br>
    <button id=\"submit\" class=\"btn btn-success\" type=\"submit\" data-url=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_upload_IDcard", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
        echo "\">上传图片</button>
    ";
        // line 23
        if ((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "getIdCardImage", array(), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "getIdCardImage", array(), "method"))) : (""))) {
            // line 24
            echo "      <a href=\"";
            echo $this->env->getExtension('routing')->getPath("file_download", array("fileName" => "imgFrontIDcard"));
            echo "\" class=\"btn btn-success\">下载</a>
    ";
        }
        // line 26
        echo "    
</form>

";
        
        $__internal_052dc4b2b9edb95b787998e10a58709535e0aafdaf9c8717e20bd076eff66e97->leave($__internal_052dc4b2b9edb95b787998e10a58709535e0aafdaf9c8717e20bd076eff66e97_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:User:upload/uploadIDcard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 26,  96 => 24,  94 => 23,  90 => 22,  80 => 15,  76 => 13,  70 => 12,  60 => 9,  56 => 8,  52 => 7,  48 => 6,  44 => 4,  38 => 3,  31 => 1,  29 => 2,  11 => 1,);
    }
}
/* {% extends 'AppBundle::base.html.twig' %}*/
/* {% set nav = 'upload_image' %}*/
/* {% block content_title %}*/
/* */
/* <ul class="nav nav-tabs">*/
/*   <li role="presentation"><a href="{{path('user_upload_Profile',{id:id})}}">头像上传</a></li>*/
/*   <li role="presentation" class="active"><a href="{{path('user_upload_IDcard',{id:id})}}">身份证图片上传</a></li>*/
/*   <li role="presentation"><a href="{{path('user_upload_education',{id:id})}}">学历证书图片上传</a></li>*/
/*   <li role="presentation"><a href="{{path('user_upload_rank',{id:id})}}">职称证书图片上传</a></li>*/
/*  </ul>*/
/* {% endblock %}*/
/* {% block content_body %}*/
/* <form id="pic-uploader" enctype="multipart/form-data">*/
/*     <div id="preview">*/
/*        <img id="imghead" width=100% height=100% border=0 src="{{asset(imagePath)}}">*/
/*     </div>*/
/*     <input id="fileInput" type="file" required onchange="previewImage(this)" name="image" accept="image/*">*/
/*     <br>*/
/*     <br>*/
/*     <p>图片大小不得超过3M，格式为JPEG,JPG,PNG</p>*/
/*     <br>*/
/*     <button id="submit" class="btn btn-success" type="submit" data-url="{{ path('user_upload_IDcard',{id:id}) }}">上传图片</button>*/
/*     {% if app.user.getIdCardImage()|default() %}*/
/*       <a href="{{ path('file_download', {fileName:'imgFrontIDcard'}) }}" class="btn btn-success">下载</a>*/
/*     {% endif %}*/
/*     */
/* </form>*/
/* */
/* {% endblock %}*/
/* */
