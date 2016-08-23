<?php

/* AppBundle:User:show/show-other-info.html.twig */
class __TwigTemplate_207fdd32d182165cd9acc592576f8d0e02091b5b7d00242c14e28a27ed97f6d7 extends Twig_Template
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
        $__internal_2cb9e0074b8dde8611fd8024d9a9fc8b1d30584ed98606f0636d69e321201040 = $this->env->getExtension("native_profiler");
        $__internal_2cb9e0074b8dde8611fd8024d9a9fc8b1d30584ed98606f0636d69e321201040->enter($__internal_2cb9e0074b8dde8611fd8024d9a9fc8b1d30584ed98606f0636d69e321201040_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:User:show/show-other-info.html.twig"));

        // line 1
        echo "<table class=\"table table-bordered\">
  <tr>
    <td class=\"col-sm-3\">所受培训及所具有证书：</td>
    <td>";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["otherInfo"]) ? $context["otherInfo"] : $this->getContext($context, "otherInfo")), "reward", array()), "html", null, true);
        echo "</td>
  </tr>
  <tr>
    <td>自我评价：</td>
    <td>";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["otherInfo"]) ? $context["otherInfo"] : $this->getContext($context, "otherInfo")), "selfAssessment", array()), "html", null, true);
        echo "</td>
  </tr>
</table>";
        
        $__internal_2cb9e0074b8dde8611fd8024d9a9fc8b1d30584ed98606f0636d69e321201040->leave($__internal_2cb9e0074b8dde8611fd8024d9a9fc8b1d30584ed98606f0636d69e321201040_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:User:show/show-other-info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 8,  27 => 4,  22 => 1,);
    }
}
/* <table class="table table-bordered">*/
/*   <tr>*/
/*     <td class="col-sm-3">所受培训及所具有证书：</td>*/
/*     <td>{{otherInfo.reward}}</td>*/
/*   </tr>*/
/*   <tr>*/
/*     <td>自我评价：</td>*/
/*     <td>{{otherInfo.selfAssessment}}</td>*/
/*   </tr>*/
/* </table>*/
