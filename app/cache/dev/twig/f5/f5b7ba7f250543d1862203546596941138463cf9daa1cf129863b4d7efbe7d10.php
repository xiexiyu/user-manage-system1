<?php

/* AppBundle:User:change-role-modal.html.twig */
class __TwigTemplate_b85fec993fc9bf4d3b875a98a96f415848a351ebfbf2e450f5056ea77b2b3cad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::modal-base.html.twig", "AppBundle:User:change-role-modal.html.twig", 1);
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
        $__internal_5392aef20af639c66ea782a8a40eb75b7f6ec91df1e05da34e57e4e88c3a0cb6 = $this->env->getExtension("native_profiler");
        $__internal_5392aef20af639c66ea782a8a40eb75b7f6ec91df1e05da34e57e4e88c3a0cb6->enter($__internal_5392aef20af639c66ea782a8a40eb75b7f6ec91df1e05da34e57e4e88c3a0cb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:User:change-role-modal.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5392aef20af639c66ea782a8a40eb75b7f6ec91df1e05da34e57e4e88c3a0cb6->leave($__internal_5392aef20af639c66ea782a8a40eb75b7f6ec91df1e05da34e57e4e88c3a0cb6_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_cb61073250a433c2c7c8bf02e4e42fe2d171cc1a69b56dbafb4ef741d58fece7 = $this->env->getExtension("native_profiler");
        $__internal_cb61073250a433c2c7c8bf02e4e42fe2d171cc1a69b56dbafb4ef741d58fece7->enter($__internal_cb61073250a433c2c7c8bf02e4e42fe2d171cc1a69b56dbafb4ef741d58fece7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "设置用户组";
        
        $__internal_cb61073250a433c2c7c8bf02e4e42fe2d171cc1a69b56dbafb4ef741d58fece7->leave($__internal_cb61073250a433c2c7c8bf02e4e42fe2d171cc1a69b56dbafb4ef741d58fece7_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_1e483bfbe5cd49c3e6f1951b222a39cbaa17e25ebb6d9f4cff11e74dc62db0ec = $this->env->getExtension("native_profiler");
        $__internal_1e483bfbe5cd49c3e6f1951b222a39cbaa17e25ebb6d9f4cff11e74dc62db0ec->enter($__internal_1e483bfbe5cd49c3e6f1951b222a39cbaa17e25ebb6d9f4cff11e74dc62db0ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "  <form method='post'  class=\"form-group \" >
    <div class=\"checkboxs\">
      <label>
        <input type=\"checkbox\" name=\"roles[]\" value=\"ROLE_USER\" ";
        // line 9
        if (twig_in_filter("ROLE_USER", $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "roles", array()))) {
            echo "checked=\"checked\"";
        }
        echo ">普通员工
      </label>
      <label>
        <input type=\"checkbox\" name=\"roles[]\" value=\"ROLE_LEADER\" ";
        // line 12
        if (twig_in_filter("ROLE_LEADER", $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "roles", array()))) {
            echo "checked=\"checked\"";
        }
        echo ">部门领导
      </label>
      <label>
        <input type=\"checkbox\" name=\"roles[]\" value=\"ROLE_ADMIN\" ";
        // line 15
        if (twig_in_filter("ROLE_ADMIN", $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "roles", array()))) {
            echo "checked=\"checked\"";
        }
        echo ">管理员
      </label>
    </div>
";
        
        $__internal_1e483bfbe5cd49c3e6f1951b222a39cbaa17e25ebb6d9f4cff11e74dc62db0ec->leave($__internal_1e483bfbe5cd49c3e6f1951b222a39cbaa17e25ebb6d9f4cff11e74dc62db0ec_prof);

    }

    // line 20
    public function block_footer($context, array $blocks = array())
    {
        $__internal_7315b456cb04047235d5a013f5177479dd04d04d6ace2562b52e8fa0c6f1e4bb = $this->env->getExtension("native_profiler");
        $__internal_7315b456cb04047235d5a013f5177479dd04d04d6ace2562b52e8fa0c6f1e4bb->enter($__internal_7315b456cb04047235d5a013f5177479dd04d04d6ace2562b52e8fa0c6f1e4bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 21
        echo "  <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">关闭</button>
  <button type=\"button\" class=\"btn btn-default change-role\" data-url=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_role_change", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
        echo "\">确认
  </button>
    </form>

  <script type=\"text/javascript\" src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("links/user/js/change-role.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_7315b456cb04047235d5a013f5177479dd04d04d6ace2562b52e8fa0c6f1e4bb->leave($__internal_7315b456cb04047235d5a013f5177479dd04d04d6ace2562b52e8fa0c6f1e4bb_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:User:change-role-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 26,  97 => 22,  94 => 21,  88 => 20,  75 => 15,  67 => 12,  59 => 9,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'AppBundle::modal-base.html.twig' %}*/
/* */
/* {% block title %}设置用户组{% endblock %}*/
/* */
/* {% block body %}*/
/*   <form method='post'  class="form-group " >*/
/*     <div class="checkboxs">*/
/*       <label>*/
/*         <input type="checkbox" name="roles[]" value="ROLE_USER" {% if 'ROLE_USER' in user.roles %}checked="checked"{% endif %}>普通员工*/
/*       </label>*/
/*       <label>*/
/*         <input type="checkbox" name="roles[]" value="ROLE_LEADER" {% if 'ROLE_LEADER' in user.roles %}checked="checked"{% endif %}>部门领导*/
/*       </label>*/
/*       <label>*/
/*         <input type="checkbox" name="roles[]" value="ROLE_ADMIN" {% if 'ROLE_ADMIN' in user.roles %}checked="checked"{% endif %}>管理员*/
/*       </label>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block footer %}*/
/*   <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>*/
/*   <button type="button" class="btn btn-default change-role" data-url="{{path('admin_user_role_change',{id:user.id})}}">确认*/
/*   </button>*/
/*     </form>*/
/* */
/*   <script type="text/javascript" src="{{ asset('links/user/js/change-role.js') }}"></script>*/
/* {% endblock %}*/
/* */
/* */
