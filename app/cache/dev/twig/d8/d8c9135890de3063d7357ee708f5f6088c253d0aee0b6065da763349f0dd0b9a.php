<?php

/* AppBundle::modal-base.html.twig */
class __TwigTemplate_3d8f44c33aac8d024628f6d44615707e482f9a2884145d0c6cfcf08fa91c4bd4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_55f3d519b737ff664048acc9549026921df757835125da603cc722873ce41958 = $this->env->getExtension("native_profiler");
        $__internal_55f3d519b737ff664048acc9549026921df757835125da603cc722873ce41958->enter($__internal_55f3d519b737ff664048acc9549026921df757835125da603cc722873ce41958_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle::modal-base.html.twig"));

        // line 1
        echo "<div class=\"modal-dialog\">
  <div class=\"modal-content\">
    <div class=\"modal-header\">
      <button type=\"button\" class=\"close\"
      data-dismiss=\"modal\" aria-hidden=\"true\">
      &times;
      </button>
    <h4 class=\"modal-title\" id=\"myModalLabel\">
      ";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        // line 10
        echo "    </h4>
    </div>

    <div class=\"modal-body\">
      ";
        // line 14
        $this->displayBlock('main', $context, $blocks);
        // line 17
        echo "
    </div>
  </div>
</div>
";
        
        $__internal_55f3d519b737ff664048acc9549026921df757835125da603cc722873ce41958->leave($__internal_55f3d519b737ff664048acc9549026921df757835125da603cc722873ce41958_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_398113e7bae398aebe45f67580614b163be2390564d1a5c5ce8105c6f80ff0aa = $this->env->getExtension("native_profiler");
        $__internal_398113e7bae398aebe45f67580614b163be2390564d1a5c5ce8105c6f80ff0aa->enter($__internal_398113e7bae398aebe45f67580614b163be2390564d1a5c5ce8105c6f80ff0aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_398113e7bae398aebe45f67580614b163be2390564d1a5c5ce8105c6f80ff0aa->leave($__internal_398113e7bae398aebe45f67580614b163be2390564d1a5c5ce8105c6f80ff0aa_prof);

    }

    // line 14
    public function block_main($context, array $blocks = array())
    {
        $__internal_8b31b82b0cbce2ea5ef0eb0f34d3e8a86a11b0d1ac74e02ab2512e2d96ebf8fe = $this->env->getExtension("native_profiler");
        $__internal_8b31b82b0cbce2ea5ef0eb0f34d3e8a86a11b0d1ac74e02ab2512e2d96ebf8fe->enter($__internal_8b31b82b0cbce2ea5ef0eb0f34d3e8a86a11b0d1ac74e02ab2512e2d96ebf8fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 15
        echo "        <div class=\"modal-body\">";
        $this->displayBlock('body', $context, $blocks);
        echo "</div>
      ";
        
        $__internal_8b31b82b0cbce2ea5ef0eb0f34d3e8a86a11b0d1ac74e02ab2512e2d96ebf8fe->leave($__internal_8b31b82b0cbce2ea5ef0eb0f34d3e8a86a11b0d1ac74e02ab2512e2d96ebf8fe_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_06468c4b1987d5757de5401533232dfa761b81835fc6857cd55a6e066a5d04ca = $this->env->getExtension("native_profiler");
        $__internal_06468c4b1987d5757de5401533232dfa761b81835fc6857cd55a6e066a5d04ca->enter($__internal_06468c4b1987d5757de5401533232dfa761b81835fc6857cd55a6e066a5d04ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_06468c4b1987d5757de5401533232dfa761b81835fc6857cd55a6e066a5d04ca->leave($__internal_06468c4b1987d5757de5401533232dfa761b81835fc6857cd55a6e066a5d04ca_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle::modal-base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  73 => 15,  67 => 14,  56 => 9,  45 => 17,  43 => 14,  37 => 10,  35 => 9,  25 => 1,);
    }
}
/* <div class="modal-dialog">*/
/*   <div class="modal-content">*/
/*     <div class="modal-header">*/
/*       <button type="button" class="close"*/
/*       data-dismiss="modal" aria-hidden="true">*/
/*       &times;*/
/*       </button>*/
/*     <h4 class="modal-title" id="myModalLabel">*/
/*       {% block title %}{% endblock %}*/
/*     </h4>*/
/*     </div>*/
/* */
/*     <div class="modal-body">*/
/*       {% block main %}*/
/*         <div class="modal-body">{% block body %}{% endblock %}</div>*/
/*       {% endblock %}*/
/* */
/*     </div>*/
/*   </div>*/
/* </div>*/
/* */
