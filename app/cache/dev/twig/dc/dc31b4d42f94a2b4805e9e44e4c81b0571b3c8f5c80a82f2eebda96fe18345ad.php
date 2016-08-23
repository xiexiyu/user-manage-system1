<?php

/* AppBundle:User:add/user-work-info.html.twig */
class __TwigTemplate_e6df9c3e19b545edaff81c4a7b515c933774805ffba5e76e6f0f3a7e92344ca3 extends Twig_Template
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
        $__internal_fed73dea2779ebf34f8d7279b7b7e37139e4d16fb7b795df90e76630b41b2d01 = $this->env->getExtension("native_profiler");
        $__internal_fed73dea2779ebf34f8d7279b7b7e37139e4d16fb7b795df90e76630b41b2d01->enter($__internal_fed73dea2779ebf34f8d7279b7b7e37139e4d16fb7b795df90e76630b41b2d01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:User:add/user-work-info.html.twig"));

        // line 1
        echo "<div class=\"work-modal hidden\">
  <div>
    <div class=\"form-group\">
      <label class=\"col-sm-2 control-label\" for=\"startTime\">开始时间:</label>
      <div class=\"col-sm-2 controls\">
        <input class=\"workStartTime form-control time\" type=\"text\" name=\"work[1][startTime]\" placeholder=\"日期格式：年-月-日\" value=\"\">
      </div>
      <label class=\"col-sm-2 control-label\" for=\"endTime\">结束时间:</label>
      <div class=\"col-sm-3 controls\">
        <input class=\"workEndTime form-control time\" type=\"text\" name=\"work[1][endTime]\" placeholder=\"日期格式：年-月-日\" value=\"\">
      </div>
    </div>
    <div class=\"form-group\">
      <label class=\"col-sm-2 control-label\" for=\"company\">工作单位:</label>
      <div class=\"col-sm-2 controls\">
        <input class=\"workUnit form-control\" type=\"text\" name=\"work[1][company]\" value=\"\">
      </div>
      <label class=\"col-sm-2 control-label\" for=\"position\">岗位职务:</label>
      <div class=\"col-sm-3 controls\">
        <input class=\"workPosition form-control\" type=\"text\" name=\"work[1][position]\" value=\"\">
      </div>
    </div>
    <div class=\"form-group\">
      <label class=\"col-sm-2 control-label\" for=\"leaveReason\">离职原因:</label>
      <div class=\"col-sm-2 controls\">
        <input class=\"leaveReason form-control\" type=\"text\" name=\"work[1][leaveReason]\" value=\"\">
      </div>
    </div>
    <div class=\"form-group\">
      <div class=\"col-sm-2 col-sm-offset-8\">
        <button type=\"button\" id=\"delete-work-info\" class=\"btn btn-sm btn-danger delete-work-info hidden\">删除</button>
        <button type=\"button\" class=\"btn btn-sm btn-success add-work-info\">新增</button>
      </div>
    </div>
  </div>
</div>";
        
        $__internal_fed73dea2779ebf34f8d7279b7b7e37139e4d16fb7b795df90e76630b41b2d01->leave($__internal_fed73dea2779ebf34f8d7279b7b7e37139e4d16fb7b795df90e76630b41b2d01_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:User:add/user-work-info.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div class="work-modal hidden">*/
/*   <div>*/
/*     <div class="form-group">*/
/*       <label class="col-sm-2 control-label" for="startTime">开始时间:</label>*/
/*       <div class="col-sm-2 controls">*/
/*         <input class="workStartTime form-control time" type="text" name="work[1][startTime]" placeholder="日期格式：年-月-日" value="">*/
/*       </div>*/
/*       <label class="col-sm-2 control-label" for="endTime">结束时间:</label>*/
/*       <div class="col-sm-3 controls">*/
/*         <input class="workEndTime form-control time" type="text" name="work[1][endTime]" placeholder="日期格式：年-月-日" value="">*/
/*       </div>*/
/*     </div>*/
/*     <div class="form-group">*/
/*       <label class="col-sm-2 control-label" for="company">工作单位:</label>*/
/*       <div class="col-sm-2 controls">*/
/*         <input class="workUnit form-control" type="text" name="work[1][company]" value="">*/
/*       </div>*/
/*       <label class="col-sm-2 control-label" for="position">岗位职务:</label>*/
/*       <div class="col-sm-3 controls">*/
/*         <input class="workPosition form-control" type="text" name="work[1][position]" value="">*/
/*       </div>*/
/*     </div>*/
/*     <div class="form-group">*/
/*       <label class="col-sm-2 control-label" for="leaveReason">离职原因:</label>*/
/*       <div class="col-sm-2 controls">*/
/*         <input class="leaveReason form-control" type="text" name="work[1][leaveReason]" value="">*/
/*       </div>*/
/*     </div>*/
/*     <div class="form-group">*/
/*       <div class="col-sm-2 col-sm-offset-8">*/
/*         <button type="button" id="delete-work-info" class="btn btn-sm btn-danger delete-work-info hidden">删除</button>*/
/*         <button type="button" class="btn btn-sm btn-success add-work-info">新增</button>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
