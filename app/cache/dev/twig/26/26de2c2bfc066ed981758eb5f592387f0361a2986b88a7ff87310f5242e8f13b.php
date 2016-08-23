<?php

/* AppBundle:User:import.html.twig */
class __TwigTemplate_1a4b088af2de2d3fd4c011036add2acb93bb52c860ee3ebdb45b74970798d045 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::modal-base.html.twig", "AppBundle:User:import.html.twig", 1);
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
        $__internal_4a5cd0fb045658bb6bbd8ef7cf9166a7bfa18845bd073a20bef6619b013647bd = $this->env->getExtension("native_profiler");
        $__internal_4a5cd0fb045658bb6bbd8ef7cf9166a7bfa18845bd073a20bef6619b013647bd->enter($__internal_4a5cd0fb045658bb6bbd8ef7cf9166a7bfa18845bd073a20bef6619b013647bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:User:import.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4a5cd0fb045658bb6bbd8ef7cf9166a7bfa18845bd073a20bef6619b013647bd->leave($__internal_4a5cd0fb045658bb6bbd8ef7cf9166a7bfa18845bd073a20bef6619b013647bd_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_380e9f736d77dfee5c224684f70087c3bbc81fe8cf2cf74907cd9343f34f7587 = $this->env->getExtension("native_profiler");
        $__internal_380e9f736d77dfee5c224684f70087c3bbc81fe8cf2cf74907cd9343f34f7587->enter($__internal_380e9f736d77dfee5c224684f70087c3bbc81fe8cf2cf74907cd9343f34f7587_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "导入员工";
        
        $__internal_380e9f736d77dfee5c224684f70087c3bbc81fe8cf2cf74907cd9343f34f7587->leave($__internal_380e9f736d77dfee5c224684f70087c3bbc81fe8cf2cf74907cd9343f34f7587_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_1b06ab49e7e3a9d5af5af1df3f6ca6ebf5101f6ff2a8aae629d9988bf9009452 = $this->env->getExtension("native_profiler");
        $__internal_1b06ab49e7e3a9d5af5af1df3f6ca6ebf5101f6ff2a8aae629d9988bf9009452->enter($__internal_1b06ab49e7e3a9d5af5af1df3f6ca6ebf5101f6ff2a8aae629d9988bf9009452_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<form method=\"post\" enctype=\"multipart/form-data\" class=\"import form-horizontal\" action=\"";
        echo $this->env->getExtension('routing')->getPath("admin_user_import");
        echo "\">
  <div class=\"form-group\" id=\"teachers-form-group\">
    <label class=\"col-md-3 col-md-offset-1\">
      选择要导入的文件
    </label>
    <div class=\"col-md-8 controls\">
      <div class=\"uploader blue\">
        <input  type=\"file\" name=\"file_stu\" id=\"import\"/>
      </div>
      <a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("import.xls"), "html", null, true);
        echo "\">点击下载示例说明文件</a>
      <br>
      ";
        // line 16
        echo $this->env->getExtension('app_asset_helper')->rendorFormCsrfToken();
        echo "
    </div>
  </div>
  <div class=\"modal-footer\">
    <button class=\"btn btn-primary col-md-offset-6\" type=\"submit\">导入</button>
    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">关闭</button>
  </div>
</form>
";
        
        $__internal_1b06ab49e7e3a9d5af5af1df3f6ca6ebf5101f6ff2a8aae629d9988bf9009452->leave($__internal_1b06ab49e7e3a9d5af5af1df3f6ca6ebf5101f6ff2a8aae629d9988bf9009452_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:User:import.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 16,  66 => 14,  53 => 5,  47 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'AppBundle::modal-base.html.twig' %}*/
/* */
/* {% block title %}导入员工{% endblock %}*/
/* {% block body %}*/
/* <form method="post" enctype="multipart/form-data" class="import form-horizontal" action="{{ path('admin_user_import')}}">*/
/*   <div class="form-group" id="teachers-form-group">*/
/*     <label class="col-md-3 col-md-offset-1">*/
/*       选择要导入的文件*/
/*     </label>*/
/*     <div class="col-md-8 controls">*/
/*       <div class="uploader blue">*/
/*         <input  type="file" name="file_stu" id="import"/>*/
/*       </div>*/
/*       <a href="{{ asset('import.xls') }}">点击下载示例说明文件</a>*/
/*       <br>*/
/*       {{ form_csrf_token() }}*/
/*     </div>*/
/*   </div>*/
/*   <div class="modal-footer">*/
/*     <button class="btn btn-primary col-md-offset-6" type="submit">导入</button>*/
/*     <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>*/
/*   </div>*/
/* </form>*/
/* {% endblock %}*/
