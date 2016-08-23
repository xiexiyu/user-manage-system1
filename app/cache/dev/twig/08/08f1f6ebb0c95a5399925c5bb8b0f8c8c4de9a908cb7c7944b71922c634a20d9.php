<?php

/* AppBundle:User:show/show-learn-info.html.twig */
class __TwigTemplate_b4acfe1e79bba18d0bce065a70e930cfdd03aa4c190579084f8a5b303a8e3bb5 extends Twig_Template
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
        $__internal_390f8709263d1e92681a3b057f4e1f63ccc206470ce30e4cfbacfc617bf1f480 = $this->env->getExtension("native_profiler");
        $__internal_390f8709263d1e92681a3b057f4e1f63ccc206470ce30e4cfbacfc617bf1f480->enter($__internal_390f8709263d1e92681a3b057f4e1f63ccc206470ce30e4cfbacfc617bf1f480_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:User:show/show-learn-info.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["eduExperiences"]) ? $context["eduExperiences"] : $this->getContext($context, "eduExperiences")));
        foreach ($context['_seq'] as $context["_key"] => $context["eduExperience"]) {
            // line 2
            echo "  <table class=\"table table-bordered\">
    <tr>
      <td class=\"col-sm-3\">开始时间：</td>
      <td>";
            // line 5
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["eduExperience"], "startTime", array()), "Y-m-d"), "html", null, true);
            echo "</td>
    </tr>
    <tr>
      <td>结束时间：</td>
      <td>";
            // line 9
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["eduExperience"], "endTime", array()), "Y-m-d"), "html", null, true);
            echo "</td>
    </tr>
    <tr>
      <td>院校名称：</td>
      <td>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["eduExperience"], "schoolName", array()), "html", null, true);
            echo "</td>
    </tr>
    <tr>
      <td>所学专业：</td>
      <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["eduExperience"], "profession", array()), "html", null, true);
            echo "</td>
    </tr>
    <tr>
      <td>担任职务：</td>
      <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["eduExperience"], "position", array()), "html", null, true);
            echo "</td>
    </tr>
  </table>
  <hr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['eduExperience'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_390f8709263d1e92681a3b057f4e1f63ccc206470ce30e4cfbacfc617bf1f480->leave($__internal_390f8709263d1e92681a3b057f4e1f63ccc206470ce30e4cfbacfc617bf1f480_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:User:show/show-learn-info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 21,  52 => 17,  45 => 13,  38 => 9,  31 => 5,  26 => 2,  22 => 1,);
    }
}
/* {% for eduExperience in eduExperiences%}*/
/*   <table class="table table-bordered">*/
/*     <tr>*/
/*       <td class="col-sm-3">开始时间：</td>*/
/*       <td>{{eduExperience.startTime|date('Y-m-d')}}</td>*/
/*     </tr>*/
/*     <tr>*/
/*       <td>结束时间：</td>*/
/*       <td>{{eduExperience.endTime|date('Y-m-d')}}</td>*/
/*     </tr>*/
/*     <tr>*/
/*       <td>院校名称：</td>*/
/*       <td>{{eduExperience.schoolName}}</td>*/
/*     </tr>*/
/*     <tr>*/
/*       <td>所学专业：</td>*/
/*       <td>{{eduExperience.profession}}</td>*/
/*     </tr>*/
/*     <tr>*/
/*       <td>担任职务：</td>*/
/*       <td>{{eduExperience.position}}</td>*/
/*     </tr>*/
/*   </table>*/
/*   <hr>*/
/* {% endfor %}*/
