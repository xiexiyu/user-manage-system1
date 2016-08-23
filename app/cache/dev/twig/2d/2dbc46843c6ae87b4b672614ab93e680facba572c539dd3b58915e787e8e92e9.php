<?php

/* AppBundle:User:add/user-family-info.html.twig */
class __TwigTemplate_ae42b2371e80d8e69e578b6637c97cfd861dbde48bd034d5b5c8de042453703f extends Twig_Template
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
        $__internal_ac3322745ec2959f14a39ab10597fde15c2d730552b932e7edcd658efa88f986 = $this->env->getExtension("native_profiler");
        $__internal_ac3322745ec2959f14a39ab10597fde15c2d730552b932e7edcd658efa88f986->enter($__internal_ac3322745ec2959f14a39ab10597fde15c2d730552b932e7edcd658efa88f986_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:User:add/user-family-info.html.twig"));

        // line 1
        echo "<div class=\"family-modal hidden\">
  <div>
    <div class=\"form-group\">
      <label class=\"col-sm-2 control-label\" for=\"member\">称谓:</label>
      <div class=\"col-sm-2 controls\">
        <input class=\"member form-control\" type=\"text\" name=\"family[1][member]\" value=\"\">
      </div>
      <label class=\"col-sm-2 control-label\" for=\"trueName\">姓名:</label>
      <div class=\"col-sm-3 controls\">
        <input class=\"familyName form-control\" type=\"text\" name=\"family[1][trueName]\" value=\"\">
      </div>
    </div>
    <div class=\"form-group\">
      <label class=\"col-sm-2 control-label\" for=\"age\">年龄:</label>
      <div class=\"col-sm-2 controls\">
        <input class=\"age form-control\" type=\"text\" name=\"family[1][age]\" value=\"\">
      </div>
      <label class=\"col-sm-2 control-label\" for=\"job\">工作单位及职务:</label>
      <div class=\"col-sm-3 controls\">
        <input class=\"job form-control\" type=\"text\" name=\"family[1][job]\" value=\"\">
      </div>
    </div>
    <div class=\"form-group\">
      <label class=\"col-sm-2 control-label\" for=\"phone\">联系电话:</label>
      <div class=\"col-sm-2 controls\">
        <input class=\"familyphone form-control\" type=\"text\" name=\"family[1][phone]\" value=\"\">
      </div>
    </div>
    <div class=\"form-group\">
      <div class=\"col-sm-2 col-sm-offset-8\">
        <button type=\"button\" id=\"delete-family-info\" class=\"btn btn-sm btn-danger delete-family-info hidden\">删除</button>
        <button type=\"button\" class=\"btn btn-sm btn-success add-family-info\">新增</button>
      </div>
    </div>
  </div>
</div>";
        
        $__internal_ac3322745ec2959f14a39ab10597fde15c2d730552b932e7edcd658efa88f986->leave($__internal_ac3322745ec2959f14a39ab10597fde15c2d730552b932e7edcd658efa88f986_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:User:add/user-family-info.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div class="family-modal hidden">*/
/*   <div>*/
/*     <div class="form-group">*/
/*       <label class="col-sm-2 control-label" for="member">称谓:</label>*/
/*       <div class="col-sm-2 controls">*/
/*         <input class="member form-control" type="text" name="family[1][member]" value="">*/
/*       </div>*/
/*       <label class="col-sm-2 control-label" for="trueName">姓名:</label>*/
/*       <div class="col-sm-3 controls">*/
/*         <input class="familyName form-control" type="text" name="family[1][trueName]" value="">*/
/*       </div>*/
/*     </div>*/
/*     <div class="form-group">*/
/*       <label class="col-sm-2 control-label" for="age">年龄:</label>*/
/*       <div class="col-sm-2 controls">*/
/*         <input class="age form-control" type="text" name="family[1][age]" value="">*/
/*       </div>*/
/*       <label class="col-sm-2 control-label" for="job">工作单位及职务:</label>*/
/*       <div class="col-sm-3 controls">*/
/*         <input class="job form-control" type="text" name="family[1][job]" value="">*/
/*       </div>*/
/*     </div>*/
/*     <div class="form-group">*/
/*       <label class="col-sm-2 control-label" for="phone">联系电话:</label>*/
/*       <div class="col-sm-2 controls">*/
/*         <input class="familyphone form-control" type="text" name="family[1][phone]" value="">*/
/*       </div>*/
/*     </div>*/
/*     <div class="form-group">*/
/*       <div class="col-sm-2 col-sm-offset-8">*/
/*         <button type="button" id="delete-family-info" class="btn btn-sm btn-danger delete-family-info hidden">删除</button>*/
/*         <button type="button" class="btn btn-sm btn-success add-family-info">新增</button>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
