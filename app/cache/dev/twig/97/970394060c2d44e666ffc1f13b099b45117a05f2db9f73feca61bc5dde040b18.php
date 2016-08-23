<?php

/* AppBundle:User:show/show-basic-info.html.twig */
class __TwigTemplate_ac4e570a450c520af5093ecc72d46bb8ab9b174db5b5b69a0a03676c9976753c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_799809b5d1a18617bef9bc3f9181b2c7d55225b509b44b201ddeb3943fec9b13 = $this->env->getExtension("native_profiler");
        $__internal_799809b5d1a18617bef9bc3f9181b2c7d55225b509b44b201ddeb3943fec9b13->enter($__internal_799809b5d1a18617bef9bc3f9181b2c7d55225b509b44b201ddeb3943fec9b13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:User:show/show-basic-info.html.twig"));

        // line 1
        echo "<table class=\"table table-bordered\">
  <tr>
    <td class=\"col-sm-3\">姓名：</td>
    <td>";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["basic"]) ? $context["basic"] : $this->getContext($context, "basic")), "trueName", array()), "html", null, true);
        echo "</td>
  </tr>    
  <tr>
    <td>性别：</td>
    <td>";
        // line 8
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
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["basic"]) ? $context["basic"] : $this->getContext($context, "basic")), "native", array()), "html", null, true);
        echo "</td>
  </tr>   
  <tr>
    <td>民族：</td>
    <td>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["basic"]) ? $context["basic"] : $this->getContext($context, "basic")), "nation", array()), "html", null, true);
        echo "</td>
  </tr>   
  <tr>
    <td>身高：</td>
    <td>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["basic"]) ? $context["basic"] : $this->getContext($context, "basic")), "height", array()), "html", null, true);
        echo "</td>
  </tr>   
  <tr>
    <td>体重：</td>
    <td>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["basic"]) ? $context["basic"] : $this->getContext($context, "basic")), "weight", array()), "html", null, true);
        echo "</td>
  </tr>   
  <tr>
    <td>血型：</td>
    <td>";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["basic"]) ? $context["basic"] : $this->getContext($context, "basic")), "blood", array()), "html", null, true);
        echo "</td>
  </tr>   
  <tr>
    <td>文化程度：</td>
    <td>";
        // line 32
        echo $this->env->getExtension('twig.app_extension')->getDictText("education", $this->getAttribute((isset($context["basic"]) ? $context["basic"] : $this->getContext($context, "basic")), "education", array()));
        echo "</td>
  </tr>
  <tr>
    <td>专业：</td>
    <td>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["basic"]) ? $context["basic"] : $this->getContext($context, "basic")), "prefession", array()), "html", null, true);
        echo "</td>
  </tr>
  <tr>
    <td>婚否：</td>
    <td>";
        // line 40
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
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["basic"]) ? $context["basic"] : $this->getContext($context, "basic")), "residence", array()), "html", null, true);
        echo "</td>
  </tr>
  <tr>
    <td>家庭地址：</td>
    <td>";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["basic"]) ? $context["basic"] : $this->getContext($context, "basic")), "address", array()), "html", null, true);
        echo "</td>
  </tr>
  <tr>
    <td>邮编：</td>
    <td>";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["basic"]) ? $context["basic"] : $this->getContext($context, "basic")), "postcode", array()), "html", null, true);
        echo "</td>
  </tr>
  <tr>
    <td>身份证号码：</td>
    <td>";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["basic"]) ? $context["basic"] : $this->getContext($context, "basic")), "Idcard", array()), "html", null, true);
        echo "</td>
  </tr>
  <tr>
    <td>职级：</td>
    <td>";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["basic"]) ? $context["basic"] : $this->getContext($context, "basic")), "rank", array()), "html", null, true);
        echo "</td>
  </tr>
  <tr>
    <td>职称：</td>
    <td>";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["basic"]) ? $context["basic"] : $this->getContext($context, "basic")), "professionTitle", array()), "html", null, true);
        echo "</td>
  </tr>
  <tr>
    <td>户口性质：</td>
    <td>";
        // line 68
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["basic"]) ? $context["basic"] : $this->getContext($context, "basic")), "householdType", array()), "html", null, true);
        echo "</td>
  </tr>
  <tr>
    <td>联系电话：</td>
    <td>";
        // line 72
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["basic"]) ? $context["basic"] : $this->getContext($context, "basic")), "phone", array()), "html", null, true);
        echo "</td>
  </tr>
  <tr>
    <td>档案存放地：</td>
    <td>";
        // line 76
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["basic"]) ? $context["basic"] : $this->getContext($context, "basic")), "recordPlace", array()), "html", null, true);
        echo "</td>
  </tr>
  <tr>
    <td>政治面貌：</td>
    <td>";
        // line 80
        echo $this->env->getExtension('twig.app_extension')->getDictText("politics", $this->getAttribute((isset($context["basic"]) ? $context["basic"] : $this->getContext($context, "basic")), "politics", array()));
        echo "</td>
  </tr>
  <tr>
    <td>预计到岗时间：</td>
    <td>";
        // line 84
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["basic"]) ? $context["basic"] : $this->getContext($context, "basic")), "joinTime", array()), "Y-m-d"), "html", null, true);
        echo "</td>
  </tr>
  <tr>
    <td>与原工作的劳动关系：</td>
    <td>";
        // line 88
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["basic"]) ? $context["basic"] : $this->getContext($context, "basic")), "formerLaborShip", array()), "html", null, true);
        echo "</td>
  </tr>
</table>
";
        
        $__internal_799809b5d1a18617bef9bc3f9181b2c7d55225b509b44b201ddeb3943fec9b13->leave($__internal_799809b5d1a18617bef9bc3f9181b2c7d55225b509b44b201ddeb3943fec9b13_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:User:show/show-basic-info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 88,  175 => 84,  168 => 80,  161 => 76,  154 => 72,  147 => 68,  140 => 64,  133 => 60,  126 => 56,  119 => 52,  112 => 48,  105 => 44,  94 => 40,  87 => 36,  80 => 32,  73 => 28,  66 => 24,  59 => 20,  52 => 16,  45 => 12,  34 => 8,  27 => 4,  22 => 1,);
    }
}
/* <table class="table table-bordered">*/
/*   <tr>*/
/*     <td class="col-sm-3">姓名：</td>*/
/*     <td>{{basic.trueName}}</td>*/
/*   </tr>    */
/*   <tr>*/
/*     <td>性别：</td>*/
/*     <td>{% if basic.gender == 'male' %}男{% else %}女{% endif %}</td>*/
/*   </tr>   */
/*   <tr>*/
/*     <td>籍贯：</td>*/
/*     <td>{{basic.native}}</td>*/
/*   </tr>   */
/*   <tr>*/
/*     <td>民族：</td>*/
/*     <td>{{basic.nation}}</td>*/
/*   </tr>   */
/*   <tr>*/
/*     <td>身高：</td>*/
/*     <td>{{basic.height}}</td>*/
/*   </tr>   */
/*   <tr>*/
/*     <td>体重：</td>*/
/*     <td>{{basic.weight}}</td>*/
/*   </tr>   */
/*   <tr>*/
/*     <td>血型：</td>*/
/*     <td>{{basic.blood}}</td>*/
/*   </tr>   */
/*   <tr>*/
/*     <td>文化程度：</td>*/
/*     <td>{{ dict_text('education', basic.education) }}</td>*/
/*   </tr>*/
/*   <tr>*/
/*     <td>专业：</td>*/
/*     <td>{{basic.prefession}}</td>*/
/*   </tr>*/
/*   <tr>*/
/*     <td>婚否：</td>*/
/*     <td>{% if basic.marriage == 0 %}未婚{% else %}已婚{% endif %}</td>*/
/*   </tr>*/
/*   <tr>*/
/*     <td>户口所在地：</td>*/
/*     <td>{{basic.residence}}</td>*/
/*   </tr>*/
/*   <tr>*/
/*     <td>家庭地址：</td>*/
/*     <td>{{basic.address}}</td>*/
/*   </tr>*/
/*   <tr>*/
/*     <td>邮编：</td>*/
/*     <td>{{basic.postcode}}</td>*/
/*   </tr>*/
/*   <tr>*/
/*     <td>身份证号码：</td>*/
/*     <td>{{basic.Idcard}}</td>*/
/*   </tr>*/
/*   <tr>*/
/*     <td>职级：</td>*/
/*     <td>{{basic.rank}}</td>*/
/*   </tr>*/
/*   <tr>*/
/*     <td>职称：</td>*/
/*     <td>{{basic.professionTitle}}</td>*/
/*   </tr>*/
/*   <tr>*/
/*     <td>户口性质：</td>*/
/*     <td>{{basic.householdType}}</td>*/
/*   </tr>*/
/*   <tr>*/
/*     <td>联系电话：</td>*/
/*     <td>{{basic.phone}}</td>*/
/*   </tr>*/
/*   <tr>*/
/*     <td>档案存放地：</td>*/
/*     <td>{{basic.recordPlace}}</td>*/
/*   </tr>*/
/*   <tr>*/
/*     <td>政治面貌：</td>*/
/*     <td>{{ dict_text('politics', basic.politics) }}</td>*/
/*   </tr>*/
/*   <tr>*/
/*     <td>预计到岗时间：</td>*/
/*     <td>{{basic.joinTime|date('Y-m-d')}}</td>*/
/*   </tr>*/
/*   <tr>*/
/*     <td>与原工作的劳动关系：</td>*/
/*     <td>{{basic.formerLaborShip}}</td>*/
/*   </tr>*/
/* </table>*/
/* */
