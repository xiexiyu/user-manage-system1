<?php

/* AppBundle:User:add/user-basic-info.html.twig */
class __TwigTemplate_88e372a9032fa51a771fa22d22e01e7ab6f1094f7f31fef54c7bbcad750add76 extends Twig_Template
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
        $__internal_403bf67c997f3759af0a3e6973a9e5613dc3f28dbe4a4c38b8fc8ff25f383834 = $this->env->getExtension("native_profiler");
        $__internal_403bf67c997f3759af0a3e6973a9e5613dc3f28dbe4a4c38b8fc8ff25f383834->enter($__internal_403bf67c997f3759af0a3e6973a9e5613dc3f28dbe4a4c38b8fc8ff25f383834_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:User:add/user-basic-info.html.twig"));

        // line 1
        echo "<div class=\"form-group\">
  <label class=\"col-sm-2 control-label\" for=\"number\">员工工号:</label>
  <div class=\"col-sm-2 controls\">
    <input id=\"number\" class=\"form-control\" type=\"text\" name=\"basic[number]\" value=\"\">
  </div>
  <label class=\"col-sm-2 control-label\" for=\"trueName\">姓  名:</label>
  <div class=\"col-sm-3 controls\">
    <input id=\"trueName\" class=\"form-control\" type=\"text\" name=\"basic[trueName]\" value=\"\">
  </div>
</div>

<div class=\"form-group\">
  <label class=\"col-sm-2 control-label\" for=\"department\">所属部门:</label>
  <div class=\"col-sm-2 controls\" id=\"department\">
    <select class=\"form-control\"  name=\"basic[departmentId]\">
      ";
        // line 16
        echo $this->env->getExtension('twig.html_extension')->selectOptions((isset($context["departmentsChoices"]) ? $context["departmentsChoices"] : $this->getContext($context, "departmentsChoices")));
        echo "
    </select>
  </div>
  <label class=\"col-sm-2 control-label\" for=\"rank\">职 级:</label>
  <div class=\"col-sm-3 controls\">
    <input id=\"rank\" class=\"form-control\" type=\"text\" name=\"basic[rank]\" value=\"\">
  </div>
</div>

<div class=\"form-group\">
  <label class=\"col-sm-2 control-label\" for=\"phone\">手 机:</label>
  <div class=\"col-sm-2 controls\">
    <input id=\"phone\" class=\"form-control\" type=\"text\" name=\"basic[phone]\" value=\"\">
  </div>

  <label class=\"col-sm-2 control-label\" for=\"email\">邮 箱:</label>
  <div class=\"col-sm-3 controls\">
    <input id=\"email\" class=\"form-control\" type=\"text\" name=\"basic[email]\" value=\"\">
  </div>
</div>

<div class=\"form-group\">
  <label class=\"col-sm-2 control-label\">性 别:</label>
    <div class=\"radio col-sm-2\">
      <label>
        <input type=\"radio\" id=\"gender\" name=\"basic[gender]\" value=\"male\" checked>男
      </label>
      <label>
        <input type=\"radio\" id=\"gender\" name=\"basic[gender]\" value=\"female\">女
      </label>
    </div>

  <label class=\"col-sm-2 control-label\">出生日期:</label>
  <div class=\"col-sm-3 controls\">
    <input type=\"text\" id=\"bornTime\" class=\"form-control time\" name=\"basic[bornTime]\" placeholder=\"日期格式：年-月-日\" value=\"\"/>
  </div>
</div>

<div class=\"form-group\">
  <label class=\"col-sm-2 control-label\" for=\"nation\">民 族:</label>
  <div class=\"col-sm-2 controls\">
    <input id=\"nation\" class=\"form-control\" type=\"text\" name=\"basic[nation]\" value=\"\">
  </div>
  <label class=\"col-sm-2 control-label\" for=\"native\">籍 贯:</label>
  <div class=\"col-sm-3 controls\">
    <textarea id=\"native\" style=\"resize:vertical\" class=\"form-control\" type=\"text\" name=\"basic[native]\" value=\"\"></textarea>
  </div>
</div>

<div class=\"form-group\">
  <label class=\"col-sm-2 control-label\" for=\"height\">身 高:</label>
  <div class=\"col-sm-2 controls\">
    <input id=\"height\" class=\"form-control\" type=\"text\" name=\"basic[height]\" value=\"\">
  </div>
  <label class=\"col-sm-2 control-label\" for=\"weight\">体 重:</label>
  <div class=\"col-sm-3 controls\">
    <input id=\"weight\" class=\"form-control\" type=\"text\" name=\"basic[weight]\" value=\"\">
  </div>
</div>

<div class=\"form-group\">
  <label class=\"col-sm-2 control-label\" for=\"blood\">血 型:</label>
  <div class=\"col-sm-2 controls\">
    <select class=\"form-control\"  name=\"basic[blood]\" >
      ";
        // line 80
        echo $this->env->getExtension('twig.html_extension')->selectOptions($this->env->getExtension('twig.app_extension')->getDict("blood"));
        echo "
    </select>
  </div>
  <label class=\"col-sm-2 control-label\" for=\"education\">文化程度:</label>
  <div class=\"col-sm-3 controls\" id=\"education\">
    <select class=\"form-control\"  name=\"basic[education]\">
      ";
        // line 86
        echo $this->env->getExtension('twig.html_extension')->selectOptions($this->env->getExtension('twig.app_extension')->getDict("education"));
        echo "
    </select>
  </div>
</div>

<div class=\"form-group\">
  <label class=\"col-sm-2 control-label\" for=\"prefession\">专业:</label>
  <div class=\"col-sm-2 controls\">
    <input id=\"prefession\" class=\"form-control\" type=\"text\" name=\"basic[prefession]\" value=\"\"}>
  </div>
  <label class=\"col-sm-2 control-label\" for=\"marriage\">婚姻:</label>
  <div class=\"col-sm-3 controls\">
    <select class=\"form-control\"  name=\"basic[marriage]\">
      ";
        // line 99
        echo $this->env->getExtension('twig.html_extension')->selectOptions($this->env->getExtension('twig.app_extension')->getDict("marriage"));
        echo "
    </select>
  </div>
</div>

<div class=\"form-group\">
  <label class=\"col-sm-2 control-label\" for=\"address\">家庭住址:</label>
  <div class=\"col-sm-2 controls\">
    <textarea id=\"address\" style=\"resize:vertical\" class=\"form-control\" type=\"text\" name=\"basic[address]\" value=\"\"></textarea>
  </div>
  <label class=\"col-sm-2 control-label\" for=\"postcode\">邮编:</label>
  <div class=\"col-sm-3 controls\">
    <input id=\"postcode\" class=\"form-control\" type=\"text\" name=\"basic[postcode]\" value=\"\">
  </div>
</div>

<div class=\"form-group\">
  
  <label class=\"col-sm-2 control-label\" for=\"professionTitle\">职 称:</label>
  <div class=\"col-sm-2 controls\">
    <input id=\"professionTitle\" class=\"form-control\" type=\"text\" name=\"basic[professionTitle]\" value=\"\">
  </div>
  <label class=\"col-sm-2 control-label\" for=\"Idcard\">身份证:</label>
  <div class=\"col-sm-3 controls\">
    <input id=\"Idcard\" class=\"form-control\" type=\"text\" name=\"basic[Idcard]\" value=\"\">
  </div>
</div>

<div class=\"form-group\">
  <label class=\"col-sm-2 control-label\" for=\"householdType\">户口性质:</label>
  <div class=\"col-sm-2 controls\">
    <input id=\"householdType\" class=\"form-control\" type=\"text\" name=\"basic[householdType]\" value=\"\">
  </div>
  <label class=\"col-sm-2 control-label\" for=\"residence\">户口所在地:</label>
  <div class=\"col-sm-3 controls\">
    <input id=\"residence\" class=\"form-control\" type=\"text\" name=\"basic[residence]\" value=\"\">
  </div>
</div>

<div class=\"form-group\">
  <label class=\"col-sm-2 control-label\" for=\"recordPlace\">档案存放地:</label>
  <div class=\"col-sm-2 controls\">
    <input id=\"recordPlace\" class=\"form-control\" type=\"text\" name=\"basic[recordPlace]\" value=\"\">
  </div>
  <label class=\"col-sm-2 control-label\" for=\"formerLaborShip\">与原工作的劳动关系:</label>
  <div class=\"col-sm-3 controls\">
    <input id=\"formerLaborShip\" class=\"form-control\" type=\"text\" name=\"basic[formerLaborShip]\" value=\"\">
  </div>
</div>

<div class=\"form-group\">
  <label class=\"col-sm-2 control-label\">入职时间:</label>
  <div class=\"col-sm-2 controls\">
      <input type=\"text\" id=\"joinTime\" class=\"form-control time\" name=\"basic[joinTime]\" placeholder=\"日期格式：年-月-日\"/>
  </div>
  <label class=\"col-sm-2 control-label\" for=\"politics\">政治面貌:</label>
  <div class=\"col-sm-3 controls\">
    <select class=\"form-control\" name=\"basic[politics]\">
      ";
        // line 157
        echo $this->env->getExtension('twig.html_extension')->selectOptions($this->env->getExtension('twig.app_extension')->getDict("politics"));
        echo "
    </select>
  </div>
</div>
";
        
        $__internal_403bf67c997f3759af0a3e6973a9e5613dc3f28dbe4a4c38b8fc8ff25f383834->leave($__internal_403bf67c997f3759af0a3e6973a9e5613dc3f28dbe4a4c38b8fc8ff25f383834_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:User:add/user-basic-info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 157,  131 => 99,  115 => 86,  106 => 80,  39 => 16,  22 => 1,);
    }
}
/* <div class="form-group">*/
/*   <label class="col-sm-2 control-label" for="number">员工工号:</label>*/
/*   <div class="col-sm-2 controls">*/
/*     <input id="number" class="form-control" type="text" name="basic[number]" value="">*/
/*   </div>*/
/*   <label class="col-sm-2 control-label" for="trueName">姓  名:</label>*/
/*   <div class="col-sm-3 controls">*/
/*     <input id="trueName" class="form-control" type="text" name="basic[trueName]" value="">*/
/*   </div>*/
/* </div>*/
/* */
/* <div class="form-group">*/
/*   <label class="col-sm-2 control-label" for="department">所属部门:</label>*/
/*   <div class="col-sm-2 controls" id="department">*/
/*     <select class="form-control"  name="basic[departmentId]">*/
/*       {{ select_options(departmentsChoices) }}*/
/*     </select>*/
/*   </div>*/
/*   <label class="col-sm-2 control-label" for="rank">职 级:</label>*/
/*   <div class="col-sm-3 controls">*/
/*     <input id="rank" class="form-control" type="text" name="basic[rank]" value="">*/
/*   </div>*/
/* </div>*/
/* */
/* <div class="form-group">*/
/*   <label class="col-sm-2 control-label" for="phone">手 机:</label>*/
/*   <div class="col-sm-2 controls">*/
/*     <input id="phone" class="form-control" type="text" name="basic[phone]" value="">*/
/*   </div>*/
/* */
/*   <label class="col-sm-2 control-label" for="email">邮 箱:</label>*/
/*   <div class="col-sm-3 controls">*/
/*     <input id="email" class="form-control" type="text" name="basic[email]" value="">*/
/*   </div>*/
/* </div>*/
/* */
/* <div class="form-group">*/
/*   <label class="col-sm-2 control-label">性 别:</label>*/
/*     <div class="radio col-sm-2">*/
/*       <label>*/
/*         <input type="radio" id="gender" name="basic[gender]" value="male" checked>男*/
/*       </label>*/
/*       <label>*/
/*         <input type="radio" id="gender" name="basic[gender]" value="female">女*/
/*       </label>*/
/*     </div>*/
/* */
/*   <label class="col-sm-2 control-label">出生日期:</label>*/
/*   <div class="col-sm-3 controls">*/
/*     <input type="text" id="bornTime" class="form-control time" name="basic[bornTime]" placeholder="日期格式：年-月-日" value=""/>*/
/*   </div>*/
/* </div>*/
/* */
/* <div class="form-group">*/
/*   <label class="col-sm-2 control-label" for="nation">民 族:</label>*/
/*   <div class="col-sm-2 controls">*/
/*     <input id="nation" class="form-control" type="text" name="basic[nation]" value="">*/
/*   </div>*/
/*   <label class="col-sm-2 control-label" for="native">籍 贯:</label>*/
/*   <div class="col-sm-3 controls">*/
/*     <textarea id="native" style="resize:vertical" class="form-control" type="text" name="basic[native]" value=""></textarea>*/
/*   </div>*/
/* </div>*/
/* */
/* <div class="form-group">*/
/*   <label class="col-sm-2 control-label" for="height">身 高:</label>*/
/*   <div class="col-sm-2 controls">*/
/*     <input id="height" class="form-control" type="text" name="basic[height]" value="">*/
/*   </div>*/
/*   <label class="col-sm-2 control-label" for="weight">体 重:</label>*/
/*   <div class="col-sm-3 controls">*/
/*     <input id="weight" class="form-control" type="text" name="basic[weight]" value="">*/
/*   </div>*/
/* </div>*/
/* */
/* <div class="form-group">*/
/*   <label class="col-sm-2 control-label" for="blood">血 型:</label>*/
/*   <div class="col-sm-2 controls">*/
/*     <select class="form-control"  name="basic[blood]" >*/
/*       {{ select_options(dict('blood')) }}*/
/*     </select>*/
/*   </div>*/
/*   <label class="col-sm-2 control-label" for="education">文化程度:</label>*/
/*   <div class="col-sm-3 controls" id="education">*/
/*     <select class="form-control"  name="basic[education]">*/
/*       {{ select_options(dict('education')) }}*/
/*     </select>*/
/*   </div>*/
/* </div>*/
/* */
/* <div class="form-group">*/
/*   <label class="col-sm-2 control-label" for="prefession">专业:</label>*/
/*   <div class="col-sm-2 controls">*/
/*     <input id="prefession" class="form-control" type="text" name="basic[prefession]" value=""}>*/
/*   </div>*/
/*   <label class="col-sm-2 control-label" for="marriage">婚姻:</label>*/
/*   <div class="col-sm-3 controls">*/
/*     <select class="form-control"  name="basic[marriage]">*/
/*       {{ select_options(dict('marriage')) }}*/
/*     </select>*/
/*   </div>*/
/* </div>*/
/* */
/* <div class="form-group">*/
/*   <label class="col-sm-2 control-label" for="address">家庭住址:</label>*/
/*   <div class="col-sm-2 controls">*/
/*     <textarea id="address" style="resize:vertical" class="form-control" type="text" name="basic[address]" value=""></textarea>*/
/*   </div>*/
/*   <label class="col-sm-2 control-label" for="postcode">邮编:</label>*/
/*   <div class="col-sm-3 controls">*/
/*     <input id="postcode" class="form-control" type="text" name="basic[postcode]" value="">*/
/*   </div>*/
/* </div>*/
/* */
/* <div class="form-group">*/
/*   */
/*   <label class="col-sm-2 control-label" for="professionTitle">职 称:</label>*/
/*   <div class="col-sm-2 controls">*/
/*     <input id="professionTitle" class="form-control" type="text" name="basic[professionTitle]" value="">*/
/*   </div>*/
/*   <label class="col-sm-2 control-label" for="Idcard">身份证:</label>*/
/*   <div class="col-sm-3 controls">*/
/*     <input id="Idcard" class="form-control" type="text" name="basic[Idcard]" value="">*/
/*   </div>*/
/* </div>*/
/* */
/* <div class="form-group">*/
/*   <label class="col-sm-2 control-label" for="householdType">户口性质:</label>*/
/*   <div class="col-sm-2 controls">*/
/*     <input id="householdType" class="form-control" type="text" name="basic[householdType]" value="">*/
/*   </div>*/
/*   <label class="col-sm-2 control-label" for="residence">户口所在地:</label>*/
/*   <div class="col-sm-3 controls">*/
/*     <input id="residence" class="form-control" type="text" name="basic[residence]" value="">*/
/*   </div>*/
/* </div>*/
/* */
/* <div class="form-group">*/
/*   <label class="col-sm-2 control-label" for="recordPlace">档案存放地:</label>*/
/*   <div class="col-sm-2 controls">*/
/*     <input id="recordPlace" class="form-control" type="text" name="basic[recordPlace]" value="">*/
/*   </div>*/
/*   <label class="col-sm-2 control-label" for="formerLaborShip">与原工作的劳动关系:</label>*/
/*   <div class="col-sm-3 controls">*/
/*     <input id="formerLaborShip" class="form-control" type="text" name="basic[formerLaborShip]" value="">*/
/*   </div>*/
/* </div>*/
/* */
/* <div class="form-group">*/
/*   <label class="col-sm-2 control-label">入职时间:</label>*/
/*   <div class="col-sm-2 controls">*/
/*       <input type="text" id="joinTime" class="form-control time" name="basic[joinTime]" placeholder="日期格式：年-月-日"/>*/
/*   </div>*/
/*   <label class="col-sm-2 control-label" for="politics">政治面貌:</label>*/
/*   <div class="col-sm-3 controls">*/
/*     <select class="form-control" name="basic[politics]">*/
/*       {{ select_options(dict('politics')) }}*/
/*     </select>*/
/*   </div>*/
/* </div>*/
/* */
