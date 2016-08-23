<?php

/* AppBundle:User:show/show-work-info.html.twig */
class __TwigTemplate_fe39387a1e53042b60312d5d9572f3c0953f46ac43e18553316ebbef264371a2 extends Twig_Template
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
        $__internal_e9d7d1794d508540b82ece606585f5f5f2e9c9687934c917a3786b03490c7103 = $this->env->getExtension("native_profiler");
        $__internal_e9d7d1794d508540b82ece606585f5f5f2e9c9687934c917a3786b03490c7103->enter($__internal_e9d7d1794d508540b82ece606585f5f5f2e9c9687934c917a3786b03490c7103_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:User:show/show-work-info.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["workInfos"]) ? $context["workInfos"] : $this->getContext($context, "workInfos")));
        foreach ($context['_seq'] as $context["_key"] => $context["workInfo"]) {
            // line 2
            echo "  <table class=\"table table-bordered\">
    <tr>
      <td class=\"col-sm-3\">开始时间：</td>
      <td>";
            // line 5
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["workInfo"], "startTime", array()), "Y-m-d"), "html", null, true);
            echo "</td>
    </tr>
    <tr>
      <td>结束时间：</td>
      <td>";
            // line 9
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["workInfo"], "endTime", array()), "Y-m-d"), "html", null, true);
            echo "</td>
    </tr>
    <tr>
      <td>工作单位：</td>
      <td>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["workInfo"], "company", array()), "html", null, true);
            echo "</td>
    </tr>
    <tr>
      <td>岗位职务：</td>
      <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["workInfo"], "position", array()), "html", null, true);
            echo "</td>
    </tr>
    <tr>
      <td>离职原因：</td>
      <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["workInfo"], "leaveReason", array()), "html", null, true);
            echo "</td>
    </tr>
  </table>
  <hr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['workInfo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_e9d7d1794d508540b82ece606585f5f5f2e9c9687934c917a3786b03490c7103->leave($__internal_e9d7d1794d508540b82ece606585f5f5f2e9c9687934c917a3786b03490c7103_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:User:show/show-work-info.html.twig";
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
/* {% for workInfo in workInfos%}*/
/*   <table class="table table-bordered">*/
/*     <tr>*/
/*       <td class="col-sm-3">开始时间：</td>*/
/*       <td>{{workInfo.startTime|date('Y-m-d')}}</td>*/
/*     </tr>*/
/*     <tr>*/
/*       <td>结束时间：</td>*/
/*       <td>{{workInfo.endTime|date('Y-m-d')}}</td>*/
/*     </tr>*/
/*     <tr>*/
/*       <td>工作单位：</td>*/
/*       <td>{{workInfo.company}}</td>*/
/*     </tr>*/
/*     <tr>*/
/*       <td>岗位职务：</td>*/
/*       <td>{{workInfo.position}}</td>*/
/*     </tr>*/
/*     <tr>*/
/*       <td>离职原因：</td>*/
/*       <td>{{workInfo.leaveReason}}</td>*/
/*     </tr>*/
/*   </table>*/
/*   <hr>*/
/* {% endfor %}*/
