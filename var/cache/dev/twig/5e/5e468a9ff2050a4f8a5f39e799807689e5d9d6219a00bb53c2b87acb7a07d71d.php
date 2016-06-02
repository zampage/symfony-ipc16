<?php

/* flash_notice.html.twig */
class __TwigTemplate_f6f297c180a6b22efdbc32a2c92aec047fb58647e69d6bdd072e63657b5eb49d extends Twig_Template
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
        $__internal_bf660396021a4d1f471920939f71a2e8d566db95a1ecadf3e051ea61a0578575 = $this->env->getExtension("native_profiler");
        $__internal_bf660396021a4d1f471920939f71a2e8d566db95a1ecadf3e051ea61a0578575->enter($__internal_bf660396021a4d1f471920939f71a2e8d566db95a1ecadf3e051ea61a0578575_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "flash_notice.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "delete.success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 2
            echo "    <div class=\"flash-notice\">
        ";
            // line 3
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo " wurde erfoglreich gelöscht!
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_bf660396021a4d1f471920939f71a2e8d566db95a1ecadf3e051ea61a0578575->leave($__internal_bf660396021a4d1f471920939f71a2e8d566db95a1ecadf3e051ea61a0578575_prof);

    }

    public function getTemplateName()
    {
        return "flash_notice.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  26 => 2,  22 => 1,);
    }
}
/* {% for flashMessage in app.session.flashbag.get("delete.success") %}*/
/*     <div class="flash-notice">*/
/*         {{ flashMessage }} wurde erfoglreich gelöscht!*/
/*     </div>*/
/* {% endfor %}*/
