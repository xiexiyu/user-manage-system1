<?php

/* AppBundle:User:edit/edit-user.html.twig */
class __TwigTemplate_5024e7a143df83fea357f26ca476fbf87f2b93b71595d908dfaa194e4222ff74 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::base.html.twig", "AppBundle:User:edit/edit-user.html.twig", 1);
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
        $__internal_36eddc4a12ed17df5ad235fd691eacdb700cf2918ca79783bbc6478d30c66267 = $this->env->getExtension("native_profiler");
        $__internal_36eddc4a12ed17df5ad235fd691eacdb700cf2918ca79783bbc6478d30c66267->enter($__internal_36eddc4a12ed17df5ad235fd691eacdb700cf2918ca79783bbc6478d30c66267_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:User:edit/edit-user.html.twig"));

        // line 2
        $context["nav"] = $this->getAttribute((isset($context["extraInfo"]) ? $context["extraInfo"] : $this->getContext($context, "extraInfo")), "nav", array());
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_36eddc4a12ed17df5ad235fd691eacdb700cf2918ca79783bbc6478d30c66267->leave($__internal_36eddc4a12ed17df5ad235fd691eacdb700cf2918ca79783bbc6478d30c66267_prof);

    }

    // line 4
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_243bce1251b8d565efbd7793f0ef3b929951a7e167f6ce0fae95ca4f5a107ef5 = $this->env->getExtension("native_profiler");
        $__internal_243bce1251b8d565efbd7793f0ef3b929951a7e167f6ce0fae95ca4f5a107ef5->enter($__internal_243bce1251b8d565efbd7793f0ef3b929951a7e167f6ce0fae95ca4f5a107ef5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        echo " <h4>编辑信息</h4>";
        
        $__internal_243bce1251b8d565efbd7793f0ef3b929951a7e167f6ce0fae95ca4f5a107ef5->leave($__internal_243bce1251b8d565efbd7793f0ef3b929951a7e167f6ce0fae95ca4f5a107ef5_prof);

    }

    // line 5
    public function block_content_body($context, array $blocks = array())
    {
        $__internal_735be9c09f639cea3963dee60b3a84afcb04dfdc1c38e9f38a8957f3170e170f = $this->env->getExtension("native_profiler");
        $__internal_735be9c09f639cea3963dee60b3a84afcb04dfdc1c38e9f38a8957f3170e170f->enter($__internal_735be9c09f639cea3963dee60b3a84afcb04dfdc1c38e9f38a8957f3170e170f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_body"));

        // line 6
        echo "
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('app_asset_helper')->script(array(0 => "links/user/js/edit-user.js")), "html", null, true);
        echo "
<form id=\"edit-user-form\" class=\"form-horizontal\" method=\"post\" action=\"";
        // line 8
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "isAdmin", array(), "method")) {
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_edit", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_edit_person", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
        }
        echo "\">
  <div class=\"edit-user-body\">
    <legend class=\"text-primary\">基本信息</legend>
    ";
        // line 11
        $this->loadTemplate("AppBundle:User:edit/user-basic-info.html.twig", "AppBundle:User:edit/edit-user.html.twig", 11)->display($context);
        // line 12
        echo "
    <legend class=\"text-primary\">
      家庭状况
    </legend>
    <div class=\"family\">
      ";
        // line 17
        $this->loadTemplate("AppBundle:User:add/user-family-info.html.twig", "AppBundle:User:edit/edit-user.html.twig", 17)->display($context);
        // line 18
        echo "      ";
        $this->loadTemplate("AppBundle:User:edit/user-family-info.html.twig", "AppBundle:User:edit/edit-user.html.twig", 18)->display($context);
        // line 19
        echo "    </div>

    <legend class=\"text-primary\">
      学习经历
    </legend>
    <div class=\"learn\">
      ";
        // line 25
        $this->loadTemplate("AppBundle:User:add/user-learn-info.html.twig", "AppBundle:User:edit/edit-user.html.twig", 25)->display($context);
        // line 26
        echo "      ";
        $this->loadTemplate("AppBundle:User:edit/user-learn-info.html.twig", "AppBundle:User:edit/edit-user.html.twig", 26)->display($context);
        // line 27
        echo "    </div>

    <legend class=\"text-primary\">
      工作履历
    </legend>
    <div class=\"work\">
      ";
        // line 33
        $this->loadTemplate("AppBundle:User:add/user-work-info.html.twig", "AppBundle:User:edit/edit-user.html.twig", 33)->display($context);
        // line 34
        echo "      ";
        $this->loadTemplate("AppBundle:User:edit/user-work-info.html.twig", "AppBundle:User:edit/edit-user.html.twig", 34)->display($context);
        // line 35
        echo "    </div>

    <legend class=\"text-primary\">其他信息</legend>
    ";
        // line 38
        $this->loadTemplate("AppBundle:User:edit/user-other-info.html.twig", "AppBundle:User:edit/edit-user.html.twig", 38)->display($context);
        // line 39
        echo "  </div>
  <div class=\"footer btn-footer col-sm-offset-8\">
    ";
        // line 41
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "isAdmin", array(), "method")) {
            // line 42
            echo "      <a href=\"";
            echo $this->env->getExtension('routing')->getPath("admin_user_present_list");
            echo "\" class=\"btn btn-default\">取消</a>
    ";
        } else {
            // line 44
            echo "      <a href=\"";
            echo $this->env->getExtension('routing')->getPath("user_present_list");
            echo "\" class=\"btn btn-default\">取消</a>
    ";
        }
        // line 46
        echo "    ";
        echo $this->env->getExtension('app_asset_helper')->rendorFormCsrfToken();
        echo "
    <button class=\"btn btn-primary\" type=\"submit\">保存</button>
  </div>
</form>
";
        
        $__internal_735be9c09f639cea3963dee60b3a84afcb04dfdc1c38e9f38a8957f3170e170f->leave($__internal_735be9c09f639cea3963dee60b3a84afcb04dfdc1c38e9f38a8957f3170e170f_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:User:edit/edit-user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 46,  132 => 44,  126 => 42,  124 => 41,  120 => 39,  118 => 38,  113 => 35,  110 => 34,  108 => 33,  100 => 27,  97 => 26,  95 => 25,  87 => 19,  84 => 18,  82 => 17,  75 => 12,  73 => 11,  63 => 8,  59 => 7,  56 => 6,  50 => 5,  38 => 4,  31 => 1,  29 => 2,  11 => 1,);
    }
}
/* {% extends 'AppBundle::base.html.twig' %}*/
/* {% set nav = extraInfo.nav %}*/
/* */
/* {% block content_title %} <h4>编辑信息</h4>{% endblock %}*/
/* {% block content_body %}*/
/* */
/* {{ script(['links/user/js/edit-user.js']) }}*/
/* <form id="edit-user-form" class="form-horizontal" method="post" action="{% if app.user.isAdmin() %}{{ path('admin_user_edit',{id:user.id}) }}{% else %}{{ path('user_edit_person',{id:user.id}) }}{% endif %}">*/
/*   <div class="edit-user-body">*/
/*     <legend class="text-primary">基本信息</legend>*/
/*     {% include 'AppBundle:User:edit/user-basic-info.html.twig' %}*/
/* */
/*     <legend class="text-primary">*/
/*       家庭状况*/
/*     </legend>*/
/*     <div class="family">*/
/*       {% include 'AppBundle:User:add/user-family-info.html.twig' %}*/
/*       {% include 'AppBundle:User:edit/user-family-info.html.twig' %}*/
/*     </div>*/
/* */
/*     <legend class="text-primary">*/
/*       学习经历*/
/*     </legend>*/
/*     <div class="learn">*/
/*       {% include 'AppBundle:User:add/user-learn-info.html.twig' %}*/
/*       {% include 'AppBundle:User:edit/user-learn-info.html.twig' %}*/
/*     </div>*/
/* */
/*     <legend class="text-primary">*/
/*       工作履历*/
/*     </legend>*/
/*     <div class="work">*/
/*       {% include 'AppBundle:User:add/user-work-info.html.twig' %}*/
/*       {% include 'AppBundle:User:edit/user-work-info.html.twig' %}*/
/*     </div>*/
/* */
/*     <legend class="text-primary">其他信息</legend>*/
/*     {% include 'AppBundle:User:edit/user-other-info.html.twig' %}*/
/*   </div>*/
/*   <div class="footer btn-footer col-sm-offset-8">*/
/*     {% if app.user.isAdmin() %}*/
/*       <a href="{{ path('admin_user_present_list') }}" class="btn btn-default">取消</a>*/
/*     {% else %}*/
/*       <a href="{{ path('user_present_list') }}" class="btn btn-default">取消</a>*/
/*     {% endif %}*/
/*     {{ form_csrf_token() }}*/
/*     <button class="btn btn-primary" type="submit">保存</button>*/
/*   </div>*/
/* </form>*/
/* {% endblock %}*/
/* */
/* */
/* */
