<?php

/* default/hello.html.twig */
class __TwigTemplate_987249102a5b2e30bad743d452c872dfcadc55e2e92ba3f04c59b1e942205666 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/hello.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5f2cc428732c18c67c58b52e40693d46362bf5f32df7f7ce8fa594d89d5d56f8 = $this->env->getExtension("native_profiler");
        $__internal_5f2cc428732c18c67c58b52e40693d46362bf5f32df7f7ce8fa594d89d5d56f8->enter($__internal_5f2cc428732c18c67c58b52e40693d46362bf5f32df7f7ce8fa594d89d5d56f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/hello.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5f2cc428732c18c67c58b52e40693d46362bf5f32df7f7ce8fa594d89d5d56f8->leave($__internal_5f2cc428732c18c67c58b52e40693d46362bf5f32df7f7ce8fa594d89d5d56f8_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_92790135b75665eefa3fed084fe0a1a10fabeec824d80d1c9e845e04721cd345 = $this->env->getExtension("native_profiler");
        $__internal_92790135b75665eefa3fed084fe0a1a10fabeec824d80d1c9e845e04721cd345->enter($__internal_92790135b75665eefa3fed084fe0a1a10fabeec824d80d1c9e845e04721cd345_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " | ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        
        $__internal_92790135b75665eefa3fed084fe0a1a10fabeec824d80d1c9e845e04721cd345->leave($__internal_92790135b75665eefa3fed084fe0a1a10fabeec824d80d1c9e845e04721cd345_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_78397a4e8d58653b7bfd73bac219141be86e50b8f28175c13d9661d744718c7a = $this->env->getExtension("native_profiler");
        $__internal_78397a4e8d58653b7bfd73bac219141be86e50b8f28175c13d9661d744718c7a->enter($__internal_78397a4e8d58653b7bfd73bac219141be86e50b8f28175c13d9661d744718c7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "Hello <b>";
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "</b>
";
        
        $__internal_78397a4e8d58653b7bfd73bac219141be86e50b8f28175c13d9661d744718c7a->leave($__internal_78397a4e8d58653b7bfd73bac219141be86e50b8f28175c13d9661d744718c7a_prof);

    }

    public function getTemplateName()
    {
        return "default/hello.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 6,  49 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block title %}{{ parent() }} | {{ name }}{% endblock %}*/
/* */
/* {% block body %}*/
/* Hello <b>{{ name | upper }}</b>*/
/* {% endblock %}*/
