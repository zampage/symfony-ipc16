<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_ea164e52e63ffd54f7833c6da637f557906e7e7f8332c0b32e806105edd8b3a5 extends Twig_Template
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
        $__internal_462292265dc67e5a36a2a4847efc3645f937ad3703d0f8e63f87504ac3d50978 = $this->env->getExtension("native_profiler");
        $__internal_462292265dc67e5a36a2a4847efc3645f937ad3703d0f8e63f87504ac3d50978->enter($__internal_462292265dc67e5a36a2a4847efc3645f937ad3703d0f8e63f87504ac3d50978_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_462292265dc67e5a36a2a4847efc3645f937ad3703d0f8e63f87504ac3d50978->leave($__internal_462292265dc67e5a36a2a4847efc3645f937ad3703d0f8e63f87504ac3d50978_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_bd5b028c81b804a675910837190dc37c0734b6726b097335d803dc8c628e4410 = $this->env->getExtension("native_profiler");
        $__internal_bd5b028c81b804a675910837190dc37c0734b6726b097335d803dc8c628e4410->enter($__internal_bd5b028c81b804a675910837190dc37c0734b6726b097335d803dc8c628e4410_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_bd5b028c81b804a675910837190dc37c0734b6726b097335d803dc8c628e4410->leave($__internal_bd5b028c81b804a675910837190dc37c0734b6726b097335d803dc8c628e4410_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_368370ef2afe76eb41a89f454651aff06d01eb81245b337ce86eb87fbc60f2fa = $this->env->getExtension("native_profiler");
        $__internal_368370ef2afe76eb41a89f454651aff06d01eb81245b337ce86eb87fbc60f2fa->enter($__internal_368370ef2afe76eb41a89f454651aff06d01eb81245b337ce86eb87fbc60f2fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_368370ef2afe76eb41a89f454651aff06d01eb81245b337ce86eb87fbc60f2fa->leave($__internal_368370ef2afe76eb41a89f454651aff06d01eb81245b337ce86eb87fbc60f2fa_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_fbeeb198c283b9a1b82a56bb7885b7c7221a6e970a71e6b6a70cf494ab1bf4b8 = $this->env->getExtension("native_profiler");
        $__internal_fbeeb198c283b9a1b82a56bb7885b7c7221a6e970a71e6b6a70cf494ab1bf4b8->enter($__internal_fbeeb198c283b9a1b82a56bb7885b7c7221a6e970a71e6b6a70cf494ab1bf4b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_fbeeb198c283b9a1b82a56bb7885b7c7221a6e970a71e6b6a70cf494ab1bf4b8->leave($__internal_fbeeb198c283b9a1b82a56bb7885b7c7221a6e970a71e6b6a70cf494ab1bf4b8_prof);

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
