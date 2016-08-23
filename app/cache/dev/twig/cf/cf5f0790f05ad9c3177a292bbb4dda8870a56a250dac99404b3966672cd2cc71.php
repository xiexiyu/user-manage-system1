<?php

/* AppBundle:Department:list.html.twig */
class __TwigTemplate_cebfb59ff020ed8019df6be35a3653ae177a4ecc73ebe00a59b80f507fac1134 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::base.html.twig", "AppBundle:Department:list.html.twig", 1);
        $this->blocks = array(
            'content_title' => array($this, 'block_content_title'),
            'content_body' => array($this, 'block_content_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4b65f11b4c75cd38ee88a0a251955639762dc04a83db15e91b4f86bc04c87681 = $this->env->getExtension("native_profiler");
        $__internal_4b65f11b4c75cd38ee88a0a251955639762dc04a83db15e91b4f86bc04c87681->enter($__internal_4b65f11b4c75cd38ee88a0a251955639762dc04a83db15e91b4f86bc04c87681_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Department:list.html.twig"));

        // line 2
        $context["nav"] = "department";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4b65f11b4c75cd38ee88a0a251955639762dc04a83db15e91b4f86bc04c87681->leave($__internal_4b65f11b4c75cd38ee88a0a251955639762dc04a83db15e91b4f86bc04c87681_prof);

    }

    // line 4
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_1d31f5ddd7ed1e155abd935864fb403b8fa36716ece17cc7e5a6c279e01ff7ae = $this->env->getExtension("native_profiler");
        $__internal_1d31f5ddd7ed1e155abd935864fb403b8fa36716ece17cc7e5a6c279e01ff7ae->enter($__internal_1d31f5ddd7ed1e155abd935864fb403b8fa36716ece17cc7e5a6c279e01ff7ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        echo " 
";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('app_asset_helper')->script(array(0 => "links/user/js/system-settings.js")), "html", null, true);
        echo "
<div class=\"content-header\">  
  <h1>部门管理</h1>
</div>
<hr>
<ul class=\"nav nav-tabs mbm\">
  <a class=\"btn btn-sm btn-success pull-right bot add-department-modal\" data-url=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("admin_add_department");
        echo "\"><span class=\"glyphicon glyphicon-plus\"></span>&nbsp;添加部门</a>
</ul>
";
        
        $__internal_1d31f5ddd7ed1e155abd935864fb403b8fa36716ece17cc7e5a6c279e01ff7ae->leave($__internal_1d31f5ddd7ed1e155abd935864fb403b8fa36716ece17cc7e5a6c279e01ff7ae_prof);

    }

    // line 14
    public function block_content_body($context, array $blocks = array())
    {
        $__internal_a843fc58350b45e5df61fe8a969c1fc30e7136c9206225e59febc7bf0008be79 = $this->env->getExtension("native_profiler");
        $__internal_a843fc58350b45e5df61fe8a969c1fc30e7136c9206225e59febc7bf0008be79->enter($__internal_a843fc58350b45e5df61fe8a969c1fc30e7136c9206225e59febc7bf0008be79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_body"));

        // line 15
        echo "
<form id=\"add-user-form\" class=\"form-horizontal\">
  <div class=\"add-user-body\">
    <table id=\"user-table\" class=\"table table-striped table-hover\" data-search-form=\"#user-search-form\">
      <thead>
        <tr>
          <th width=\"35%\">部门</th>
          <th width=\"40%\">现有人数</th>
          <th>操作</th>
        </tr>
      </thead>
      <tbody>
      ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["departments"]) ? $context["departments"] : $this->getContext($context, "departments")));
        foreach ($context['_seq'] as $context["_key"] => $context["department"]) {
            // line 28
            echo "        <tr>
          <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["department"], "name", array()), "html", null, true);
            echo "</td>
          <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["department"], "amount", array()), "html", null, true);
            echo "</td>
          <td>
            <a class=\"btn btn-sm btn-primary edit-department-modal\" data-url=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_edit_department", array("id" => $this->getAttribute($context["department"], "id", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-edit\"></span>&nbsp;编辑</a> 
            ";
            // line 33
            if (($this->getAttribute($context["department"], "amount", array()) == 0)) {
                // line 34
                echo "              <a class=\"btn btn-sm btn-danger del-department\" data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_delete_department", array("id" => $this->getAttribute($context["department"], "id", array()))), "html", null, true);
                echo "\"><span class=\"glyphicon glyphicon-trash\"></span>&nbsp;删除</a>
            ";
            }
            // line 36
            echo "          </td>
        </tr>  
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['department'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "      </tbody>
    </table>
  </div>
</form>
";
        
        $__internal_a843fc58350b45e5df61fe8a969c1fc30e7136c9206225e59febc7bf0008be79->leave($__internal_a843fc58350b45e5df61fe8a969c1fc30e7136c9206225e59febc7bf0008be79_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Department:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 39,  113 => 36,  107 => 34,  105 => 33,  101 => 32,  96 => 30,  92 => 29,  89 => 28,  85 => 27,  71 => 15,  65 => 14,  55 => 11,  46 => 5,  38 => 4,  31 => 1,  29 => 2,  11 => 1,);
    }
}
/* {% extends 'AppBundle::base.html.twig' %}*/
/* {% set nav ='department' %}*/
/* */
/* {% block content_title %} */
/* {{ script(['links/user/js/system-settings.js']) }}*/
/* <div class="content-header">  */
/*   <h1>部门管理</h1>*/
/* </div>*/
/* <hr>*/
/* <ul class="nav nav-tabs mbm">*/
/*   <a class="btn btn-sm btn-success pull-right bot add-department-modal" data-url="{{path('admin_add_department')}}"><span class="glyphicon glyphicon-plus"></span>&nbsp;添加部门</a>*/
/* </ul>*/
/* {% endblock %}*/
/* {% block content_body %}*/
/* */
/* <form id="add-user-form" class="form-horizontal">*/
/*   <div class="add-user-body">*/
/*     <table id="user-table" class="table table-striped table-hover" data-search-form="#user-search-form">*/
/*       <thead>*/
/*         <tr>*/
/*           <th width="35%">部门</th>*/
/*           <th width="40%">现有人数</th>*/
/*           <th>操作</th>*/
/*         </tr>*/
/*       </thead>*/
/*       <tbody>*/
/*       {% for department in departments %}*/
/*         <tr>*/
/*           <td>{{department.name}}</td>*/
/*           <td>{{department.amount}}</td>*/
/*           <td>*/
/*             <a class="btn btn-sm btn-primary edit-department-modal" data-url="{{ path('admin_edit_department' , {id:department.id}) }}"><span class="glyphicon glyphicon-edit"></span>&nbsp;编辑</a> */
/*             {% if  department.amount == 0 %}*/
/*               <a class="btn btn-sm btn-danger del-department" data-url="{{ path('admin_delete_department', {id:department.id}) }}"><span class="glyphicon glyphicon-trash"></span>&nbsp;删除</a>*/
/*             {% endif %}*/
/*           </td>*/
/*         </tr>  */
/*       {% endfor %}*/
/*       </tbody>*/
/*     </table>*/
/*   </div>*/
/* </form>*/
/* {% endblock %}*/
