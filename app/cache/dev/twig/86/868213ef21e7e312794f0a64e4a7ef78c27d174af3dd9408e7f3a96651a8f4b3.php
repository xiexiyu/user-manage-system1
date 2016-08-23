<?php

/* AppBundle:Department:edit-modal.html.twig */
class __TwigTemplate_afae1c0aa78a7e609ea313283d48d41478495c889f122390133b4c98f9cc9f46 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::modal-base.html.twig", "AppBundle:Department:edit-modal.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle::modal-base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bca27a550b57e087cf877e3fca25805f2df5b7bfe2995ae429ae3e587912d35e = $this->env->getExtension("native_profiler");
        $__internal_bca27a550b57e087cf877e3fca25805f2df5b7bfe2995ae429ae3e587912d35e->enter($__internal_bca27a550b57e087cf877e3fca25805f2df5b7bfe2995ae429ae3e587912d35e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Department:edit-modal.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bca27a550b57e087cf877e3fca25805f2df5b7bfe2995ae429ae3e587912d35e->leave($__internal_bca27a550b57e087cf877e3fca25805f2df5b7bfe2995ae429ae3e587912d35e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_72b7a3143dfba02e10d08b3897f36c83def02e866f73dea2db2865b23893051c = $this->env->getExtension("native_profiler");
        $__internal_72b7a3143dfba02e10d08b3897f36c83def02e866f73dea2db2865b23893051c->enter($__internal_72b7a3143dfba02e10d08b3897f36c83def02e866f73dea2db2865b23893051c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "编辑部门信息";
        
        $__internal_72b7a3143dfba02e10d08b3897f36c83def02e866f73dea2db2865b23893051c->leave($__internal_72b7a3143dfba02e10d08b3897f36c83def02e866f73dea2db2865b23893051c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_40aef4d514d426ca76822cc538860e09fa71145c876472e4dd0c48cec92e773d = $this->env->getExtension("native_profiler");
        $__internal_40aef4d514d426ca76822cc538860e09fa71145c876472e4dd0c48cec92e773d->enter($__internal_40aef4d514d426ca76822cc538860e09fa71145c876472e4dd0c48cec92e773d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
<form class=\"form-horizontal\">
  <div class=\"form-group\">
    <label for=\"js-edit-department-name\" class=\"col-sm-2 control-label\">部门名称</label>
    <div class=\"col-sm-8\">
      <input type=\"text\" class=\"form-control\" id=\"js-edit-department-name\" name=\"name\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["department"]) ? $context["department"] : $this->getContext($context, "department")), "name", array()), "html", null, true);
        echo "\">
    </div>
  </div>
</form>
";
        
        $__internal_40aef4d514d426ca76822cc538860e09fa71145c876472e4dd0c48cec92e773d->leave($__internal_40aef4d514d426ca76822cc538860e09fa71145c876472e4dd0c48cec92e773d_prof);

    }

    // line 17
    public function block_footer($context, array $blocks = array())
    {
        $__internal_2b000f118feefeb1a7b8b18f03b9ddcf94b88daae5bb7dc246d9685fc9915217 = $this->env->getExtension("native_profiler");
        $__internal_2b000f118feefeb1a7b8b18f03b9ddcf94b88daae5bb7dc246d9685fc9915217->enter($__internal_2b000f118feefeb1a7b8b18f03b9ddcf94b88daae5bb7dc246d9685fc9915217_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 18
        echo "  <button type=\"button\" class=\"btn btn-primary edit-department\" data-url=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_edit_department", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
        echo "\">保存</button>
  <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">关闭</button>
";
        
        $__internal_2b000f118feefeb1a7b8b18f03b9ddcf94b88daae5bb7dc246d9685fc9915217->leave($__internal_2b000f118feefeb1a7b8b18f03b9ddcf94b88daae5bb7dc246d9685fc9915217_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Department:edit-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 18,  73 => 17,  61 => 11,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'AppBundle::modal-base.html.twig' %}*/
/* */
/* {% block title %}编辑部门信息{% endblock %}*/
/* */
/* {% block body %}*/
/* */
/* <form class="form-horizontal">*/
/*   <div class="form-group">*/
/*     <label for="js-edit-department-name" class="col-sm-2 control-label">部门名称</label>*/
/*     <div class="col-sm-8">*/
/*       <input type="text" class="form-control" id="js-edit-department-name" name="name" value="{{department.name}}">*/
/*     </div>*/
/*   </div>*/
/* </form>*/
/* {% endblock %}*/
/* */
/* {% block footer %}*/
/*   <button type="button" class="btn btn-primary edit-department" data-url="{{path('admin_edit_department', {id:id})}}">保存</button>*/
/*   <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>*/
/* {% endblock %}*/
