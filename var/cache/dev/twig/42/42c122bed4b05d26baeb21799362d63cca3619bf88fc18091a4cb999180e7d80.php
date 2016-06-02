<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_fa0b151e1d624a2aeb9de8dd768f8d37335e828143d2f7c52f8e37344be71b47 extends Twig_Template
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
        $__internal_7e98a8d52673733a2d8eee75ad14861f9b1925dafbf5e8211406e198aa2d3e66 = $this->env->getExtension("native_profiler");
        $__internal_7e98a8d52673733a2d8eee75ad14861f9b1925dafbf5e8211406e198aa2d3e66->enter($__internal_7e98a8d52673733a2d8eee75ad14861f9b1925dafbf5e8211406e198aa2d3e66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7e98a8d52673733a2d8eee75ad14861f9b1925dafbf5e8211406e198aa2d3e66->leave($__internal_7e98a8d52673733a2d8eee75ad14861f9b1925dafbf5e8211406e198aa2d3e66_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e0fb01674b3d7a6c23e637261eb6ce5173c5d0198465fba6312c47eb2fec15f6 = $this->env->getExtension("native_profiler");
        $__internal_e0fb01674b3d7a6c23e637261eb6ce5173c5d0198465fba6312c47eb2fec15f6->enter($__internal_e0fb01674b3d7a6c23e637261eb6ce5173c5d0198465fba6312c47eb2fec15f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e0fb01674b3d7a6c23e637261eb6ce5173c5d0198465fba6312c47eb2fec15f6->leave($__internal_e0fb01674b3d7a6c23e637261eb6ce5173c5d0198465fba6312c47eb2fec15f6_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_89fb620c6e482b6373b923c3da94492d50c42a1d0cc2e2816081d2f6d6606add = $this->env->getExtension("native_profiler");
        $__internal_89fb620c6e482b6373b923c3da94492d50c42a1d0cc2e2816081d2f6d6606add->enter($__internal_89fb620c6e482b6373b923c3da94492d50c42a1d0cc2e2816081d2f6d6606add_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_89fb620c6e482b6373b923c3da94492d50c42a1d0cc2e2816081d2f6d6606add->leave($__internal_89fb620c6e482b6373b923c3da94492d50c42a1d0cc2e2816081d2f6d6606add_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_52d38b14222ef03564ca188889438404260f8cb3fe92b0906d54c7456870f209 = $this->env->getExtension("native_profiler");
        $__internal_52d38b14222ef03564ca188889438404260f8cb3fe92b0906d54c7456870f209->enter($__internal_52d38b14222ef03564ca188889438404260f8cb3fe92b0906d54c7456870f209_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_52d38b14222ef03564ca188889438404260f8cb3fe92b0906d54c7456870f209->leave($__internal_52d38b14222ef03564ca188889438404260f8cb3fe92b0906d54c7456870f209_prof);

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
