<?php

/* AppBundle:User:show/show-family-info.html.twig */
class __TwigTemplate_7049894a9f1bdcea3bab49f303a4f028d2416cf22380736c392b7b896abf6613 extends Twig_Template
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
        $__internal_956e767136a44bb4cdd3cee042285ac3e93a2f9a66e7c1863d1ed6438854e3ba = $this->env->getExtension("native_profiler");
        $__internal_956e767136a44bb4cdd3cee042285ac3e93a2f9a66e7c1863d1ed6438854e3ba->enter($__internal_956e767136a44bb4cdd3cee042285ac3e93a2f9a66e7c1863d1ed6438854e3ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:User:show/show-family-info.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["familyMembers"]) ? $context["familyMembers"] : $this->getContext($context, "familyMembers")));
        foreach ($context['_seq'] as $context["_key"] => $context["familyMember"]) {
            // line 2
            echo "  <table class=\"table table-bordered\">
    <tr>
      <td class=\"col-sm-3\">称谓：</td>
      <td>";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute($context["familyMember"], "member", array()), "html", null, true);
            echo "</td>
    </tr>
    <tr>
      <td>姓名：</td>
      <td>";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["familyMember"], "trueName", array()), "html", null, true);
            echo "</td>
    </tr>
    <tr>
      <td>年龄：</td>
      <td>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["familyMember"], "age", array()), "html", null, true);
            echo "</td>
    </tr>
    <tr>
      <td>联系电话：</td>
      <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["familyMember"], "phone", array()), "html", null, true);
            echo "</td>
    </tr>
    <tr>
      <td>工作单位及职务：</td>
      <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["familyMember"], "job", array()), "html", null, true);
            echo "</td>
    </tr>
  </table>
  <hr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['familyMember'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_956e767136a44bb4cdd3cee042285ac3e93a2f9a66e7c1863d1ed6438854e3ba->leave($__internal_956e767136a44bb4cdd3cee042285ac3e93a2f9a66e7c1863d1ed6438854e3ba_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:User:show/show-family-info.html.twig";
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
/* {% for familyMember in familyMembers%}*/
/*   <table class="table table-bordered">*/
/*     <tr>*/
/*       <td class="col-sm-3">称谓：</td>*/
/*       <td>{{familyMember.member}}</td>*/
/*     </tr>*/
/*     <tr>*/
/*       <td>姓名：</td>*/
/*       <td>{{familyMember.trueName}}</td>*/
/*     </tr>*/
/*     <tr>*/
/*       <td>年龄：</td>*/
/*       <td>{{familyMember.age}}</td>*/
/*     </tr>*/
/*     <tr>*/
/*       <td>联系电话：</td>*/
/*       <td>{{familyMember.phone}}</td>*/
/*     </tr>*/
/*     <tr>*/
/*       <td>工作单位及职务：</td>*/
/*       <td>{{familyMember.job}}</td>*/
/*     </tr>*/
/*   </table>*/
/*   <hr>*/
/* {% endfor %}*/
