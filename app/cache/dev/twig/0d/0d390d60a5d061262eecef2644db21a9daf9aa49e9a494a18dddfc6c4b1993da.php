<?php

/* AppBundle:Leader:show/show-basic-info.html.twig */
class __TwigTemplate_1d47ace444f12898317c9c6d5c49972f89f91392e0c3ba7489d4cfed25fa11e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::modal-base.html.twig", "AppBundle:Leader:show/show-basic-info.html.twig", 1);
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
        $__internal_d2ae2c6aaec584a0fc299351d37e0b6c1b337226ab11c13241afa28d2e906fba = $this->env->getExtension("native_profiler");
        $__internal_d2ae2c6aaec584a0fc299351d37e0b6c1b337226ab11c13241afa28d2e906fba->enter($__internal_d2ae2c6aaec584a0fc299351d37e0b6c1b337226ab11c13241afa28d2e906fba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Leader:show/show-basic-info.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d2ae2c6aaec584a0fc299351d37e0b6c1b337226ab11c13241afa28d2e906fba->leave($__internal_d2ae2c6aaec584a0fc299351d37e0b6c1b337226ab11c13241afa28d2e906fba_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c80e50cb170ec0ea6ccfb150e60b79716ac2e5f71b0f789449ef4281d77bcf09 = $this->env->getExtension("native_profiler");
        $__internal_c80e50cb170ec0ea6ccfb150e60b79716ac2e5f71b0f789449ef4281d77bcf09->enter($__internal_c80e50cb170ec0ea6ccfb150e60b79716ac2e5f71b0f789449ef4281d77bcf09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "<div class=\"page-header\">
  <h4>员工详情</h4>
</div>
  <ul class=\"nav nav-tabs\">
    <li role=\"button\" class=\"active\"><a class=\"show-basic-info\" data-url=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_basic_show", array("id" => $this->getAttribute((isset($context["basic"]) ? $context["basic"] : $this->getContext($context, "basic")), "userId", array()))), "html", null, true);
        echo "\">基础信息</a></li>
    <li role=\"button\"><a class=\"show-family-info\"  data-url=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("leader_user_family_show", array("id" => $this->getAttribute((isset($context["basic"]) ? $context["basic"] : $this->getContext($context, "basic")), "userId", array()))), "html", null, true);
        echo "\">家庭信息</a></li>
    <li role=\"button\"><a class=\"show-learn-info\"  data-url=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("leader_user_learn_show", array("id" => $this->getAttribute((isset($context["basic"]) ? $context["basic"] : $this->getContext($context, "basic")), "userId", array()))), "html", null, true);
        echo "\">学历信息</a></li>
    <li role=\"button\"><a class=\"show-work-info\"  data-url=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("leader_user_work_show", array("id" => $this->getAttribute((isset($context["basic"]) ? $context["basic"] : $this->getContext($context, "basic")), "userId", array()))), "html", null, true);
        echo "\">工作信息</a></li>
    <li role=\"button\"><a class=\"show-other-info\"  data-url=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("leader_user_other_show", array("id" => $this->getAttribute((isset($context["basic"]) ? $context["basic"] : $this->getContext($context, "basic")), "userId", array()))), "html", null, true);
        echo "\">其他信息</a></li>
  </ul>
";
        
        $__internal_c80e50cb170ec0ea6ccfb150e60b79716ac2e5f71b0f789449ef4281d77bcf09->leave($__internal_c80e50cb170ec0ea6ccfb150e60b79716ac2e5f71b0f789449ef4281d77bcf09_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_d35bf852c9f661a36254089532261826b17fe4d02e47a80d11d62b9d33450e9b = $this->env->getExtension("native_profiler");
        $__internal_d35bf852c9f661a36254089532261826b17fe4d02e47a80d11d62b9d33450e9b->enter($__internal_d35bf852c9f661a36254089532261826b17fe4d02e47a80d11d62b9d33450e9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 17
        echo "  <table class=\"table table-bordered\">
    <tr>
      <td class=\"col-sm-3\">姓名：</td>
      <td>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["basic"]) ? $context["basic"] : $this->getContext($context, "basic")), "trueName", array()), "html", null, true);
        echo "</td>
    </tr>    
    <tr>
      <td>性别：</td>
      <td>";
        // line 24
        if (($this->getAttribute((isset($context["basic"]) ? $context["basic"] : $this->getContext($context, "basic")), "gender", array()) == "male")) {
            echo "男";
        } else {
            echo "女";
        }
        echo "</td>
    </tr>   
    <tr>
      <td>籍贯：</td>
      <td>";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["basic"]) ? $context["basic"] : $this->getContext($context, "basic")), "native", array()), "html", null, true);
        echo "</td>
    </tr>   
    <tr>
      <td>民族：</td>
      <td>";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["basic"]) ? $context["basic"] : $this->getContext($context, "basic")), "nation", array()), "html", null, true);
        echo "</td>
    </tr>   
    <tr>
      <td>身高：</td>
      <td>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["basic"]) ? $context["basic"] : $this->getContext($context, "basic")), "height", array()), "html", null, true);
        echo "</td>
    </tr>   
    <tr>
      <td>体重：</td>
      <td>";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["basic"]) ? $context["basic"] : $this->getContext($context, "basic")), "weight", array()), "html", null, true);
        echo "</td>
    </tr>   
    <tr>
      <td>血型：</td>
      <td>";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["basic"]) ? $context["basic"] : $this->getContext($context, "basic")), "blood", array()), "html", null, true);
        echo "</td>
    </tr>   
    <tr>
      <td>文化程度：</td>
      <td>";
        // line 48
        echo $this->env->getExtension('twig.app_extension')->getDictText("education", $this->getAttribute((isset($context["basic"]) ? $context["basic"] : $this->getContext($context, "basic")), "education", array()));
        echo "</td>
    </tr>
    <tr>
      <td>专业：</td>
      <td>";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["basic"]) ? $context["basic"] : $this->getContext($context, "basic")), "prefession", array()), "html", null, true);
        echo "</td>
    </tr>
    <tr>
      <td>婚否：</td>
      <td>";
        // line 56
        if (($this->getAttribute((isset($context["basic"]) ? $context["basic"] : $this->getContext($context, "basic")), "marriage", array()) == 0)) {
            echo "未婚";
        } else {
            echo "已婚";
        }
        echo "</td>
    </tr>
    <tr>
      <td>户口所在地：</td>
      <td>";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["basic"]) ? $context["basic"] : $this->getContext($context, "basic")), "residence", array()), "html", null, true);
        echo "</td>
    </tr>
    <tr>
      <td>家庭地址：</td>
      <td>";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["basic"]) ? $context["basic"] : $this->getContext($context, "basic")), "address", array()), "html", null, true);
        echo "</td>
    </tr>
    <tr>
      <td>邮编：</td>
      <td>";
        // line 68
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["basic"]) ? $context["basic"] : $this->getContext($context, "basic")), "postcode", array()), "html", null, true);
        echo "</td>
    </tr>
    <tr>
      <td>身份证号码：</td>
      <td>";
        // line 72
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["basic"]) ? $context["basic"] : $this->getContext($context, "basic")), "IDcard", array()), "html", null, true);
        echo "</td>
    </tr>
    <tr>
      <td>职称：</td>
      <td>";
        // line 76
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["basic"]) ? $context["basic"] : $this->getContext($context, "basic")), "professionTitle", array()), "html", null, true);
        echo "</td>
    </tr>
    <tr>
      <td>户口性质：</td>
      <td>";
        // line 80
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["basic"]) ? $context["basic"] : $this->getContext($context, "basic")), "householdType", array()), "html", null, true);
        echo "</td>
    </tr>
    <tr>
      <td>联系电话：</td>
      <td>";
        // line 84
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["basic"]) ? $context["basic"] : $this->getContext($context, "basic")), "phone", array()), "html", null, true);
        echo "</td>
    </tr>
    <tr>
      <td>档案存放地：</td>
      <td>";
        // line 88
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["basic"]) ? $context["basic"] : $this->getContext($context, "basic")), "recordPlace", array()), "html", null, true);
        echo "</td>
    </tr>
    <tr>
      <td>有无疾病史：</td>
      <td>";
        // line 92
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["basic"]) ? $context["basic"] : $this->getContext($context, "basic")), "hasSick", array()), "html", null, true);
        echo "</td>
    </tr>
    <tr>
      <td>希望服务年限：</td>
      <td>";
        // line 96
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["basic"]) ? $context["basic"] : $this->getContext($context, "basic")), "serviceTime", array()), "Y-m-d"), "html", null, true);
        echo "</td>
    </tr>
    <tr>
      <td>期望月薪：</td>
      <td>";
        // line 100
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["basic"]) ? $context["basic"] : $this->getContext($context, "basic")), "expectedSalary", array()), "html", null, true);
        echo "</td>
    </tr>
    <tr>
      <td>政治面貌：</td>
      <td>";
        // line 104
        echo $this->env->getExtension('twig.app_extension')->getDictText("politics", $this->getAttribute((isset($context["basic"]) ? $context["basic"] : $this->getContext($context, "basic")), "politics", array()));
        echo "</td>
    </tr>
    <tr>
      <td>预计到岗时间：</td>
      <td>";
        // line 108
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["basic"]) ? $context["basic"] : $this->getContext($context, "basic")), "joinTime", array()), "Y-m-d"), "html", null, true);
        echo "</td>
    </tr>
    <tr>
      <td>与原工作的劳动关系：</td>
      <td>";
        // line 112
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["basic"]) ? $context["basic"] : $this->getContext($context, "basic")), "formerLaborShip", array()), "html", null, true);
        echo "</td>
    </tr>
  </table>
";
        
        $__internal_d35bf852c9f661a36254089532261826b17fe4d02e47a80d11d62b9d33450e9b->leave($__internal_d35bf852c9f661a36254089532261826b17fe4d02e47a80d11d62b9d33450e9b_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Leader:show/show-basic-info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  253 => 112,  246 => 108,  239 => 104,  232 => 100,  225 => 96,  218 => 92,  211 => 88,  204 => 84,  197 => 80,  190 => 76,  183 => 72,  176 => 68,  169 => 64,  162 => 60,  151 => 56,  144 => 52,  137 => 48,  130 => 44,  123 => 40,  116 => 36,  109 => 32,  102 => 28,  91 => 24,  84 => 20,  79 => 17,  73 => 16,  63 => 12,  59 => 11,  55 => 10,  51 => 9,  47 => 8,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'AppBundle::modal-base.html.twig' %}*/
/* */
/* {% block title %}*/
/* <div class="page-header">*/
/*   <h4>员工详情</h4>*/
/* </div>*/
/*   <ul class="nav nav-tabs">*/
/*     <li role="button" class="active"><a class="show-basic-info" data-url="{{path('user_basic_show',{id:basic.userId})}}">基础信息</a></li>*/
/*     <li role="button"><a class="show-family-info"  data-url="{{path('leader_user_family_show',{id:basic.userId})}}">家庭信息</a></li>*/
/*     <li role="button"><a class="show-learn-info"  data-url="{{path('leader_user_learn_show',{id:basic.userId})}}">学历信息</a></li>*/
/*     <li role="button"><a class="show-work-info"  data-url="{{path('leader_user_work_show',{id:basic.userId})}}">工作信息</a></li>*/
/*     <li role="button"><a class="show-other-info"  data-url="{{path('leader_user_other_show',{id:basic.userId})}}">其他信息</a></li>*/
/*   </ul>*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*   <table class="table table-bordered">*/
/*     <tr>*/
/*       <td class="col-sm-3">姓名：</td>*/
/*       <td>{{basic.trueName}}</td>*/
/*     </tr>    */
/*     <tr>*/
/*       <td>性别：</td>*/
/*       <td>{% if basic.gender == 'male' %}男{% else %}女{% endif %}</td>*/
/*     </tr>   */
/*     <tr>*/
/*       <td>籍贯：</td>*/
/*       <td>{{basic.native}}</td>*/
/*     </tr>   */
/*     <tr>*/
/*       <td>民族：</td>*/
/*       <td>{{basic.nation}}</td>*/
/*     </tr>   */
/*     <tr>*/
/*       <td>身高：</td>*/
/*       <td>{{basic.height}}</td>*/
/*     </tr>   */
/*     <tr>*/
/*       <td>体重：</td>*/
/*       <td>{{basic.weight}}</td>*/
/*     </tr>   */
/*     <tr>*/
/*       <td>血型：</td>*/
/*       <td>{{basic.blood}}</td>*/
/*     </tr>   */
/*     <tr>*/
/*       <td>文化程度：</td>*/
/*       <td>{{ dict_text('education', basic.education) }}</td>*/
/*     </tr>*/
/*     <tr>*/
/*       <td>专业：</td>*/
/*       <td>{{basic.prefession}}</td>*/
/*     </tr>*/
/*     <tr>*/
/*       <td>婚否：</td>*/
/*       <td>{% if basic.marriage == 0 %}未婚{% else %}已婚{% endif %}</td>*/
/*     </tr>*/
/*     <tr>*/
/*       <td>户口所在地：</td>*/
/*       <td>{{basic.residence}}</td>*/
/*     </tr>*/
/*     <tr>*/
/*       <td>家庭地址：</td>*/
/*       <td>{{basic.address}}</td>*/
/*     </tr>*/
/*     <tr>*/
/*       <td>邮编：</td>*/
/*       <td>{{basic.postcode}}</td>*/
/*     </tr>*/
/*     <tr>*/
/*       <td>身份证号码：</td>*/
/*       <td>{{basic.IDcard}}</td>*/
/*     </tr>*/
/*     <tr>*/
/*       <td>职称：</td>*/
/*       <td>{{basic.professionTitle}}</td>*/
/*     </tr>*/
/*     <tr>*/
/*       <td>户口性质：</td>*/
/*       <td>{{basic.householdType}}</td>*/
/*     </tr>*/
/*     <tr>*/
/*       <td>联系电话：</td>*/
/*       <td>{{basic.phone}}</td>*/
/*     </tr>*/
/*     <tr>*/
/*       <td>档案存放地：</td>*/
/*       <td>{{basic.recordPlace}}</td>*/
/*     </tr>*/
/*     <tr>*/
/*       <td>有无疾病史：</td>*/
/*       <td>{{basic.hasSick}}</td>*/
/*     </tr>*/
/*     <tr>*/
/*       <td>希望服务年限：</td>*/
/*       <td>{{basic.serviceTime|date('Y-m-d')}}</td>*/
/*     </tr>*/
/*     <tr>*/
/*       <td>期望月薪：</td>*/
/*       <td>{{basic.expectedSalary}}</td>*/
/*     </tr>*/
/*     <tr>*/
/*       <td>政治面貌：</td>*/
/*       <td>{{ dict_text('politics', basic.politics) }}</td>*/
/*     </tr>*/
/*     <tr>*/
/*       <td>预计到岗时间：</td>*/
/*       <td>{{basic.joinTime|date('Y-m-d')}}</td>*/
/*     </tr>*/
/*     <tr>*/
/*       <td>与原工作的劳动关系：</td>*/
/*       <td>{{basic.formerLaborShip}}</td>*/
/*     </tr>*/
/*   </table>*/
/* {% endblock %}*/
