<?php

/* AppBundle:User:change-jobstatus-modal.html.twig */
class __TwigTemplate_fbda5417d466d187fa3a5061a5e52bae7589ebf10dca70d1a258f3d9b4714691 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::modal-base.html.twig", "AppBundle:User:change-jobstatus-modal.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
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
        $__internal_919f942965b4a21de1821bfe6ab5e2c95cea2a222fcf3e123b5ee583e9d79279 = $this->env->getExtension("native_profiler");
        $__internal_919f942965b4a21de1821bfe6ab5e2c95cea2a222fcf3e123b5ee583e9d79279->enter($__internal_919f942965b4a21de1821bfe6ab5e2c95cea2a222fcf3e123b5ee583e9d79279_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:User:change-jobstatus-modal.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_919f942965b4a21de1821bfe6ab5e2c95cea2a222fcf3e123b5ee583e9d79279->leave($__internal_919f942965b4a21de1821bfe6ab5e2c95cea2a222fcf3e123b5ee583e9d79279_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c560f11d5e7588c3477938a26074b8147c0b574fc5c33175f788a7fe617d1c38 = $this->env->getExtension("native_profiler");
        $__internal_c560f11d5e7588c3477938a26074b8147c0b574fc5c33175f788a7fe617d1c38->enter($__internal_c560f11d5e7588c3477938a26074b8147c0b574fc5c33175f788a7fe617d1c38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  员工离职信息
";
        
        $__internal_c560f11d5e7588c3477938a26074b8147c0b574fc5c33175f788a7fe617d1c38->leave($__internal_c560f11d5e7588c3477938a26074b8147c0b574fc5c33175f788a7fe617d1c38_prof);

    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        $__internal_af482c337802e63a4d80ed56372b31f4983f3cf84321abc16a5cceb3a372cb16 = $this->env->getExtension("native_profiler");
        $__internal_af482c337802e63a4d80ed56372b31f4983f3cf84321abc16a5cceb3a372cb16->enter($__internal_af482c337802e63a4d80ed56372b31f4983f3cf84321abc16a5cceb3a372cb16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 8
        echo "  ";
        $this->displayBlock('body', $context, $blocks);
        // line 24
        echo "  ";
        $this->displayBlock('footer', $context, $blocks);
        // line 26
        echo "  <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("links/user/js/datepicker.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_af482c337802e63a4d80ed56372b31f4983f3cf84321abc16a5cceb3a372cb16->leave($__internal_af482c337802e63a4d80ed56372b31f4983f3cf84321abc16a5cceb3a372cb16_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_ac21b4050cbd7aa3e577190c7a2b4628d03cc8eccb9a4e2b75a6270db861bf50 = $this->env->getExtension("native_profiler");
        $__internal_ac21b4050cbd7aa3e577190c7a2b4628d03cc8eccb9a4e2b75a6270db861bf50->enter($__internal_ac21b4050cbd7aa3e577190c7a2b4628d03cc8eccb9a4e2b75a6270db861bf50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    <form id=\"injob-form\" >
      <div class=\"form-group\">
        <label class=\"col-sm-2 control-label\" for=\"";
        // line 11
        if (((isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")) == "on")) {
            echo "quitTime";
        } else {
            echo "joinTime";
        }
        echo "\">";
        if (((isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")) == "on")) {
            echo "离职日期";
        } else {
            echo "入职日期";
        }
        echo ":</label>
        <div class=\"col-sm-8 controls\">
          <div class='input-group date time' id='";
        // line 13
        if (((isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")) == "on")) {
            echo "quitTime";
        } else {
            echo "joinTime";
        }
        echo "'>
          <input type='text' class=\"form-control\" name=\"";
        // line 14
        if (((isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")) == "on")) {
            echo "quitTime";
        } else {
            echo "joinTime";
        }
        echo "\" />
          <span class=\"input-group-addon\">
            <span class=\"glyphicon glyphicon-calendar\"></span>
          </span>
        </div>
      </div>
      <button type=\"button\" class=\"btn btn-sm btn-success change-status\" data-url=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
        echo "\">保存</button>
      </div>
    </form>
  ";
        
        $__internal_ac21b4050cbd7aa3e577190c7a2b4628d03cc8eccb9a4e2b75a6270db861bf50->leave($__internal_ac21b4050cbd7aa3e577190c7a2b4628d03cc8eccb9a4e2b75a6270db861bf50_prof);

    }

    // line 24
    public function block_footer($context, array $blocks = array())
    {
        $__internal_efa7eaddad4bc45e221decb61c3ca18322647f3e96020d62c028c95dfe3b524a = $this->env->getExtension("native_profiler");
        $__internal_efa7eaddad4bc45e221decb61c3ca18322647f3e96020d62c028c95dfe3b524a->enter($__internal_efa7eaddad4bc45e221decb61c3ca18322647f3e96020d62c028c95dfe3b524a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 25
        echo "  ";
        
        $__internal_efa7eaddad4bc45e221decb61c3ca18322647f3e96020d62c028c95dfe3b524a->leave($__internal_efa7eaddad4bc45e221decb61c3ca18322647f3e96020d62c028c95dfe3b524a_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:User:change-jobstatus-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 25,  130 => 24,  119 => 20,  106 => 14,  98 => 13,  83 => 11,  79 => 9,  73 => 8,  63 => 26,  60 => 24,  57 => 8,  51 => 7,  43 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends 'AppBundle::modal-base.html.twig' %}*/
/* */
/* {% block title %}*/
/*   员工离职信息*/
/* {% endblock %}*/
/* */
/* {% block main %}*/
/*   {% block body %}*/
/*     <form id="injob-form" >*/
/*       <div class="form-group">*/
/*         <label class="col-sm-2 control-label" for="{% if status == 'on' %}quitTime{% else %}joinTime{% endif %}">{% if status == 'on' %}离职日期{% else %}入职日期{% endif %}:</label>*/
/*         <div class="col-sm-8 controls">*/
/*           <div class='input-group date time' id='{% if status == 'on' %}quitTime{% else %}joinTime{% endif %}'>*/
/*           <input type='text' class="form-control" name="{% if status == 'on' %}quitTime{% else %}joinTime{% endif %}" />*/
/*           <span class="input-group-addon">*/
/*             <span class="glyphicon glyphicon-calendar"></span>*/
/*           </span>*/
/*         </div>*/
/*       </div>*/
/*       <button type="button" class="btn btn-sm btn-success change-status" data-url="{{ path(url, {id:id}) }}">保存</button>*/
/*       </div>*/
/*     </form>*/
/*   {% endblock %}*/
/*   {% block footer %}*/
/*   {% endblock %}*/
/*   <script type="text/javascript" src="{{ asset('links/user/js/datepicker.js') }}"></script>*/
/* {% endblock %}*/
/* */
