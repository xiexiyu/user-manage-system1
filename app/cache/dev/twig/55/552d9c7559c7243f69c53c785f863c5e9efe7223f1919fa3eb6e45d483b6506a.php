<?php

/* AppBundle::base.html.twig */
class __TwigTemplate_1754cda4806741225af877a235509eda75f4d0a18b4410b0037a2e27694e2acf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'content_title' => array($this, 'block_content_title'),
            'content_body' => array($this, 'block_content_body'),
            'scripts' => array($this, 'block_scripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_828d74ac1810cb35e4388f8e1dd8bde3c26d4a21798596142c029678978dcaee = $this->env->getExtension("native_profiler");
        $__internal_828d74ac1810cb35e4388f8e1dd8bde3c26d4a21798596142c029678978dcaee->enter($__internal_828d74ac1810cb35e4388f8e1dd8bde3c26d4a21798596142c029678978dcaee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle::base.html.twig"));

        // line 1
        $context["web_macro"] = $this->loadTemplate("AppBundle::macro.html.twig", "AppBundle::base.html.twig", 1);
        // line 2
        echo "<!DOCTYPE html>

";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('app_asset_helper')->script(array(0 => "assets/js/vendor.js", 1 => "assets/js/global.js")), "html", null, true);
        echo "
";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('app_asset_helper')->script(array(0 => "assets/js/jquery.validate.js")), "html", null, true);
        echo "
";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('app_asset_helper')->script(array(0 => "assets/js/messages_zh.js")), "html", null, true);
        echo "
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('app_asset_helper')->script(array(0 => "links/util/js/datepicker.js")), "html", null, true);
        echo "
";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('app_asset_helper')->script(array(0 => "links/user/js/datepicker.js")), "html", null, true);
        echo "
";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('app_asset_helper')->script(array(0 => "links/upload/js/upload.js")), "html", null, true);
        echo "

";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('app_asset_helper')->css("links/upload/css/upload.css"), "html", null, true);
        echo "
";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('app_asset_helper')->css("assets/css/vendor.css"), "html", null, true);
        echo "
";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('app_asset_helper')->css("links/user/css/main.css"), "html", null, true);
        echo "
";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('app_asset_helper')->css("links/util/css/datetimepicker.css"), "html", null, true);
        echo "

<html lang=\"zh\">
  <head>
    <meta charset=\"UTF-8\" />
    <meta content=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken((isset($context["default_csrf_token_id"]) ? $context["default_csrf_token_id"] : $this->getContext($context, "default_csrf_token_id"))), "html", null, true);
        echo "\" name=\"csrf-token\" />
    <meta name=\"renderer\" content=\"webkit\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>员工管理系统</title>
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    ";
        // line 24
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 29
        echo "  </head>
  <body class=\"hold-transition skin-green-light sidebar-mini\">
    <div class=\"wrapper\">
      <header class=\"main-header\">
        ";
        // line 33
        $this->loadTemplate("AppBundle:Layout:main-header.html.twig", "AppBundle::base.html.twig", 33)->display($context);
        // line 34
        echo "      </header>
      ";
        // line 35
        $this->displayBlock('body', $context, $blocks);
        // line 58
        echo "  </div>
  <div id=\"modal\" class=\"modal\" ></div>
  </body>
  ";
        // line 61
        $this->displayBlock('scripts', $context, $blocks);
        // line 66
        echo "  ";
        // line 67
        echo "</html>
";
        
        $__internal_828d74ac1810cb35e4388f8e1dd8bde3c26d4a21798596142c029678978dcaee->leave($__internal_828d74ac1810cb35e4388f8e1dd8bde3c26d4a21798596142c029678978dcaee_prof);

    }

    // line 24
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_44215f549255e5a72e9ddff94b6ad61ac8e769f305ac9036942cc4c4d2529d43 = $this->env->getExtension("native_profiler");
        $__internal_44215f549255e5a72e9ddff94b6ad61ac8e769f305ac9036942cc4c4d2529d43->enter($__internal_44215f549255e5a72e9ddff94b6ad61ac8e769f305ac9036942cc4c4d2529d43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 25
        echo "      ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('app_asset_helper')->css());
        foreach ($context['_seq'] as $context["_key"] => $context["path"]) {
            // line 26
            echo "        <link href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($context["path"]), "html", null, true);
            echo "\" rel=\"stylesheet\" />
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['path'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "    ";
        
        $__internal_44215f549255e5a72e9ddff94b6ad61ac8e769f305ac9036942cc4c4d2529d43->leave($__internal_44215f549255e5a72e9ddff94b6ad61ac8e769f305ac9036942cc4c4d2529d43_prof);

    }

    // line 35
    public function block_body($context, array $blocks = array())
    {
        $__internal_7b13b879a98cccf4ec65f17f5d39019d13c84b3bea296ce909a93973fb457885 = $this->env->getExtension("native_profiler");
        $__internal_7b13b879a98cccf4ec65f17f5d39019d13c84b3bea296ce909a93973fb457885->enter($__internal_7b13b879a98cccf4ec65f17f5d39019d13c84b3bea296ce909a93973fb457885_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 36
        echo "      <aside class=\"main-sidebar\">
        <section class=\"sidebar\">
          ";
        // line 38
        $this->loadTemplate("AppBundle:Layout:main-sidebar.html.twig", "AppBundle::base.html.twig", 38)->display($context);
        // line 39
        echo "        </section>
      </aside>
      <div class=\"content-wrapper\">
        <section class=\"content-header\">
        ";
        // line 43
        $this->displayBlock('content_title', $context, $blocks);
        // line 45
        echo "        </section>
        <section class=\"content\">
        <div class=\"box\">
          <div class=\"box-header with-border\">
            ";
        // line 49
        $this->displayBlock('content_body', $context, $blocks);
        // line 51
        echo "          </div>
        </div>
        </section>
      </div>
    <footer class=\"main-footer\"></footer>
    <div class=\"control-sidebar-bg\"></div>
    ";
        
        $__internal_7b13b879a98cccf4ec65f17f5d39019d13c84b3bea296ce909a93973fb457885->leave($__internal_7b13b879a98cccf4ec65f17f5d39019d13c84b3bea296ce909a93973fb457885_prof);

    }

    // line 43
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_35a8d03911b7abdcdd3b9e41ae3ee414b78199e0e94da88a8a801a7fbd82bb94 = $this->env->getExtension("native_profiler");
        $__internal_35a8d03911b7abdcdd3b9e41ae3ee414b78199e0e94da88a8a801a7fbd82bb94->enter($__internal_35a8d03911b7abdcdd3b9e41ae3ee414b78199e0e94da88a8a801a7fbd82bb94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        // line 44
        echo "        ";
        
        $__internal_35a8d03911b7abdcdd3b9e41ae3ee414b78199e0e94da88a8a801a7fbd82bb94->leave($__internal_35a8d03911b7abdcdd3b9e41ae3ee414b78199e0e94da88a8a801a7fbd82bb94_prof);

    }

    // line 49
    public function block_content_body($context, array $blocks = array())
    {
        $__internal_a993a8da39b283773bf02208f3b2d9dc892b9b59df1b46f9751bf689c6d01df4 = $this->env->getExtension("native_profiler");
        $__internal_a993a8da39b283773bf02208f3b2d9dc892b9b59df1b46f9751bf689c6d01df4->enter($__internal_a993a8da39b283773bf02208f3b2d9dc892b9b59df1b46f9751bf689c6d01df4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_body"));

        // line 50
        echo "            ";
        
        $__internal_a993a8da39b283773bf02208f3b2d9dc892b9b59df1b46f9751bf689c6d01df4->leave($__internal_a993a8da39b283773bf02208f3b2d9dc892b9b59df1b46f9751bf689c6d01df4_prof);

    }

    // line 61
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_73a287766dad3ba68a389acfb3f913060ec853651c99a907880ef9451e2910ce = $this->env->getExtension("native_profiler");
        $__internal_73a287766dad3ba68a389acfb3f913060ec853651c99a907880ef9451e2910ce->enter($__internal_73a287766dad3ba68a389acfb3f913060ec853651c99a907880ef9451e2910ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 62
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('app_asset_helper')->script());
        foreach ($context['_seq'] as $context["_key"] => $context["path"]) {
            // line 63
            echo "      <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($context["path"]), "html", null, true);
            echo "\"></script>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['path'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "  ";
        
        $__internal_73a287766dad3ba68a389acfb3f913060ec853651c99a907880ef9451e2910ce->leave($__internal_73a287766dad3ba68a389acfb3f913060ec853651c99a907880ef9451e2910ce_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  235 => 65,  226 => 63,  221 => 62,  215 => 61,  208 => 50,  202 => 49,  195 => 44,  189 => 43,  176 => 51,  174 => 49,  168 => 45,  166 => 43,  160 => 39,  158 => 38,  154 => 36,  148 => 35,  141 => 28,  132 => 26,  127 => 25,  121 => 24,  113 => 67,  111 => 66,  109 => 61,  104 => 58,  102 => 35,  99 => 34,  97 => 33,  91 => 29,  89 => 24,  85 => 23,  78 => 19,  70 => 14,  66 => 13,  62 => 12,  58 => 11,  53 => 9,  49 => 8,  45 => 7,  41 => 6,  37 => 5,  33 => 4,  29 => 2,  27 => 1,);
    }
}
/* {% import "AppBundle::macro.html.twig" as web_macro %}*/
/* <!DOCTYPE html>*/
/* */
/* {{ script(['assets/js/vendor.js', 'assets/js/global.js']) }}*/
/* {{ script(['assets/js/jquery.validate.js']) }}*/
/* {{ script(['assets/js/messages_zh.js']) }}*/
/* {{ script(['links/util/js/datepicker.js']) }}*/
/* {{ script(['links/user/js/datepicker.js']) }}*/
/* {{ script(['links/upload/js/upload.js']) }}*/
/* */
/* {{ css('links/upload/css/upload.css') }}*/
/* {{ css('assets/css/vendor.css') }}*/
/* {{ css('links/user/css/main.css') }}*/
/* {{ css('links/util/css/datetimepicker.css') }}*/
/* */
/* <html lang="zh">*/
/*   <head>*/
/*     <meta charset="UTF-8" />*/
/*     <meta content="{{ csrf_token(default_csrf_token_id) }}" name="csrf-token" />*/
/*     <meta name="renderer" content="webkit">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     <title>员工管理系统</title>*/
/*     <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     {% block stylesheets %}*/
/*       {% for path in css() %}*/
/*         <link href="{{ asset(path) }}" rel="stylesheet" />*/
/*       {% endfor %}*/
/*     {% endblock %}*/
/*   </head>*/
/*   <body class="hold-transition skin-green-light sidebar-mini">*/
/*     <div class="wrapper">*/
/*       <header class="main-header">*/
/*         {% include 'AppBundle:Layout:main-header.html.twig' %}*/
/*       </header>*/
/*       {% block body %}*/
/*       <aside class="main-sidebar">*/
/*         <section class="sidebar">*/
/*           {% include 'AppBundle:Layout:main-sidebar.html.twig' %}*/
/*         </section>*/
/*       </aside>*/
/*       <div class="content-wrapper">*/
/*         <section class="content-header">*/
/*         {% block content_title %}*/
/*         {% endblock %}*/
/*         </section>*/
/*         <section class="content">*/
/*         <div class="box">*/
/*           <div class="box-header with-border">*/
/*             {% block content_body %}*/
/*             {% endblock %}*/
/*           </div>*/
/*         </div>*/
/*         </section>*/
/*       </div>*/
/*     <footer class="main-footer"></footer>*/
/*     <div class="control-sidebar-bg"></div>*/
/*     {% endblock %}*/
/*   </div>*/
/*   <div id="modal" class="modal" ></div>*/
/*   </body>*/
/*   {% block scripts %}*/
/*     {% for path in script()  %}*/
/*       <script src="{{ asset(path) }}"></script>*/
/*     {% endfor %}*/
/*   {% endblock %}*/
/*   {# {% include 'AppBundle:Layout:load-js.html.twig' %} #}*/
/* </html>*/
/* */
