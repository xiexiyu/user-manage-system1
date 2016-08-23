<?php

/* AppBundle::macro.html.twig */
class __TwigTemplate_0397b14e205d483a0615c8a003f54438879a60b6156501f4b2d791c8b83c3184 extends Twig_Template
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
        $__internal_dfcd6b4a9cdf92c0b99e99fe19118795d881ffe35c6a8649d847180c577e5e03 = $this->env->getExtension("native_profiler");
        $__internal_dfcd6b4a9cdf92c0b99e99fe19118795d881ffe35c6a8649d847180c577e5e03->enter($__internal_dfcd6b4a9cdf92c0b99e99fe19118795d881ffe35c6a8649d847180c577e5e03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle::macro.html.twig"));

        
        $__internal_dfcd6b4a9cdf92c0b99e99fe19118795d881ffe35c6a8649d847180c577e5e03->leave($__internal_dfcd6b4a9cdf92c0b99e99fe19118795d881ffe35c6a8649d847180c577e5e03_prof);

    }

    // line 1
    public function getpaginator($__paginator__ = null, $__class__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "paginator" => $__paginator__,
            "class" => $__class__,
            "varargs" => func_num_args() > 2 ? array_slice(func_get_args(), 2) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_69c2521033ce1564a09a500f8c110eb0d5048cee7c6c570e0bb366d97afc52bf = $this->env->getExtension("native_profiler");
            $__internal_69c2521033ce1564a09a500f8c110eb0d5048cee7c6c570e0bb366d97afc52bf->enter($__internal_69c2521033ce1564a09a500f8c110eb0d5048cee7c6c570e0bb366d97afc52bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "paginator"));

            // line 2
            echo "  ";
            if (($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "lastPage", array()) > 1)) {
                // line 3
                echo "    <nav class=\" ";
                echo twig_escape_filter($this->env, ((array_key_exists("class", $context)) ? (_twig_default_filter((isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "text-center")) : ("text-center")), "html", null, true);
                echo "\">
      <ul class=\"pagination\">
        ";
                // line 5
                if (($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "currentPage", array()) != $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "firstPage", array()))) {
                    // line 6
                    echo "          <li><a  href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "getPageUrl", array(0 => $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "firstPage", array())), "method"), "html", null, true);
                    echo "\">首页</a></li>
          <li><a  href=\"";
                    // line 7
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "getPageUrl", array(0 => $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "previousPage", array())), "method"), "html", null, true);
                    echo "\"><i class=\"glyphicon glyphicon-chevron-left\"></i></a></li>
        ";
                }
                // line 9
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "pages", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                    // line 10
                    echo "          <li ";
                    if (($context["page"] == $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "currentPage", array()))) {
                        echo "class=\"active\"";
                    }
                    echo "><a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "getPageUrl", array(0 => $context["page"]), "method"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</a></li>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 12
                echo "
        ";
                // line 13
                if (($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "currentPage", array()) != $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "lastPage", array()))) {
                    // line 14
                    echo "          <li><a  href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "getPageUrl", array(0 => $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "nextPage", array())), "method"), "html", null, true);
                    echo "\"><i class=\"glyphicon glyphicon-chevron-right\"></i></a></li>
          <li><a  href=\"";
                    // line 15
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "getPageUrl", array(0 => $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "getLastPage", array(), "method")), "method"), "html", null, true);
                    echo "\">尾页</a></li>
        ";
                }
                // line 17
                echo "      </ul>
    </nav>
  ";
            }
            
            $__internal_69c2521033ce1564a09a500f8c110eb0d5048cee7c6c570e0bb366d97afc52bf->leave($__internal_69c2521033ce1564a09a500f8c110eb0d5048cee7c6c570e0bb366d97afc52bf_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "AppBundle::macro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 17,  94 => 15,  89 => 14,  87 => 13,  84 => 12,  69 => 10,  64 => 9,  59 => 7,  54 => 6,  52 => 5,  46 => 3,  43 => 2,  27 => 1,);
    }
}
/* {% macro paginator(paginator, class) %}*/
/*   {% if paginator.lastPage > 1 %}*/
/*     <nav class=" {{ class|default('text-center') }}">*/
/*       <ul class="pagination">*/
/*         {% if paginator.currentPage != paginator.firstPage %}*/
/*           <li><a  href="{{ paginator.getPageUrl(paginator.firstPage) }}">首页</a></li>*/
/*           <li><a  href="{{ paginator.getPageUrl(paginator.previousPage) }}"><i class="glyphicon glyphicon-chevron-left"></i></a></li>*/
/*         {% endif %}*/
/*         {% for page in paginator.pages %}*/
/*           <li {% if page == paginator.currentPage %}class="active"{% endif %}><a href="{{ paginator.getPageUrl(page) }}">{{ page }}</a></li>*/
/*         {% endfor %}*/
/* */
/*         {% if paginator.currentPage != paginator.lastPage %}*/
/*           <li><a  href="{{ paginator.getPageUrl(paginator.nextPage) }}"><i class="glyphicon glyphicon-chevron-right"></i></a></li>*/
/*           <li><a  href="{{ paginator.getPageUrl(paginator.getLastPage()) }}">尾页</a></li>*/
/*         {% endif %}*/
/*       </ul>*/
/*     </nav>*/
/*   {% endif %}*/
/* {% endmacro %}*/
