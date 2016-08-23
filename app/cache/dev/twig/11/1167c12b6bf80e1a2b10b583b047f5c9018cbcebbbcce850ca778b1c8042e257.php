<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_e97512a85c1840e5856d45df6db07ff260b6f06257941580d79fffc187d57b74 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_39ed7d2a44400a2640c21ba95956a50c77902a2ada3201853312f3bcf1f2a13a = $this->env->getExtension("native_profiler");
        $__internal_39ed7d2a44400a2640c21ba95956a50c77902a2ada3201853312f3bcf1f2a13a->enter($__internal_39ed7d2a44400a2640c21ba95956a50c77902a2ada3201853312f3bcf1f2a13a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_39ed7d2a44400a2640c21ba95956a50c77902a2ada3201853312f3bcf1f2a13a->leave($__internal_39ed7d2a44400a2640c21ba95956a50c77902a2ada3201853312f3bcf1f2a13a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d23eeee9aea6bb64637337cef36cb247d5d9d2b66c15430b6678074477e2bd8a = $this->env->getExtension("native_profiler");
        $__internal_d23eeee9aea6bb64637337cef36cb247d5d9d2b66c15430b6678074477e2bd8a->enter($__internal_d23eeee9aea6bb64637337cef36cb247d5d9d2b66c15430b6678074477e2bd8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d23eeee9aea6bb64637337cef36cb247d5d9d2b66c15430b6678074477e2bd8a->leave($__internal_d23eeee9aea6bb64637337cef36cb247d5d9d2b66c15430b6678074477e2bd8a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_aea346c8cc52baf93b3af4da1c408fdea56f28fd68fc5391a7de36bbf76d9d1a = $this->env->getExtension("native_profiler");
        $__internal_aea346c8cc52baf93b3af4da1c408fdea56f28fd68fc5391a7de36bbf76d9d1a->enter($__internal_aea346c8cc52baf93b3af4da1c408fdea56f28fd68fc5391a7de36bbf76d9d1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_aea346c8cc52baf93b3af4da1c408fdea56f28fd68fc5391a7de36bbf76d9d1a->leave($__internal_aea346c8cc52baf93b3af4da1c408fdea56f28fd68fc5391a7de36bbf76d9d1a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_56aa9ce16beb2cedcc42d2f5e4df0d3d85cdf4f1c0dc3dc2db551b1fd7ef5636 = $this->env->getExtension("native_profiler");
        $__internal_56aa9ce16beb2cedcc42d2f5e4df0d3d85cdf4f1c0dc3dc2db551b1fd7ef5636->enter($__internal_56aa9ce16beb2cedcc42d2f5e4df0d3d85cdf4f1c0dc3dc2db551b1fd7ef5636_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_56aa9ce16beb2cedcc42d2f5e4df0d3d85cdf4f1c0dc3dc2db551b1fd7ef5636->leave($__internal_56aa9ce16beb2cedcc42d2f5e4df0d3d85cdf4f1c0dc3dc2db551b1fd7ef5636_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
