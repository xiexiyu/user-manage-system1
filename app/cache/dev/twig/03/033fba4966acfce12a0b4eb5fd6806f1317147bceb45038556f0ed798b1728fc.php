<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_84594f8c989b111376c4e2c978dd681d9a6018f3a6c8ead16b9660c65773bf07 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b9f67e9075c9536450463ecdbba3d74e7268a59147cf766d1cae407999c9add5 = $this->env->getExtension("native_profiler");
        $__internal_b9f67e9075c9536450463ecdbba3d74e7268a59147cf766d1cae407999c9add5->enter($__internal_b9f67e9075c9536450463ecdbba3d74e7268a59147cf766d1cae407999c9add5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b9f67e9075c9536450463ecdbba3d74e7268a59147cf766d1cae407999c9add5->leave($__internal_b9f67e9075c9536450463ecdbba3d74e7268a59147cf766d1cae407999c9add5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_938cc4ea5bf1507a86eee94ba6682df3a1fa130f463e191c6756b1504a455fbd = $this->env->getExtension("native_profiler");
        $__internal_938cc4ea5bf1507a86eee94ba6682df3a1fa130f463e191c6756b1504a455fbd->enter($__internal_938cc4ea5bf1507a86eee94ba6682df3a1fa130f463e191c6756b1504a455fbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_938cc4ea5bf1507a86eee94ba6682df3a1fa130f463e191c6756b1504a455fbd->leave($__internal_938cc4ea5bf1507a86eee94ba6682df3a1fa130f463e191c6756b1504a455fbd_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_8df4db0412b09c218786bea2256b3aa425c261e389c0d6cdf01b2b500e2655a1 = $this->env->getExtension("native_profiler");
        $__internal_8df4db0412b09c218786bea2256b3aa425c261e389c0d6cdf01b2b500e2655a1->enter($__internal_8df4db0412b09c218786bea2256b3aa425c261e389c0d6cdf01b2b500e2655a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_8df4db0412b09c218786bea2256b3aa425c261e389c0d6cdf01b2b500e2655a1->leave($__internal_8df4db0412b09c218786bea2256b3aa425c261e389c0d6cdf01b2b500e2655a1_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_b8c5aae884f3c4a9f782fdc9bfb773e56eaafc37e82abfdaacf717e54603d41f = $this->env->getExtension("native_profiler");
        $__internal_b8c5aae884f3c4a9f782fdc9bfb773e56eaafc37e82abfdaacf717e54603d41f->enter($__internal_b8c5aae884f3c4a9f782fdc9bfb773e56eaafc37e82abfdaacf717e54603d41f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_b8c5aae884f3c4a9f782fdc9bfb773e56eaafc37e82abfdaacf717e54603d41f->leave($__internal_b8c5aae884f3c4a9f782fdc9bfb773e56eaafc37e82abfdaacf717e54603d41f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
