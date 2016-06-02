<?php

/* event/show.html.twig */
class __TwigTemplate_dcf7d6c3c5ac20c0babc11e43e4cb8c3791497f79518e70258d6be59a0cc019a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "event/show.html.twig", 1);
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
        $__internal_dd4aaeed79cbc172da7672fa8a30f0468b508c6768c06a02ed151e377c99756d = $this->env->getExtension("native_profiler");
        $__internal_dd4aaeed79cbc172da7672fa8a30f0468b508c6768c06a02ed151e377c99756d->enter($__internal_dd4aaeed79cbc172da7672fa8a30f0468b508c6768c06a02ed151e377c99756d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "event/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dd4aaeed79cbc172da7672fa8a30f0468b508c6768c06a02ed151e377c99756d->leave($__internal_dd4aaeed79cbc172da7672fa8a30f0468b508c6768c06a02ed151e377c99756d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_09241f3b4b78f86a2c55977143b789f7eb25384f2d565b89e198d7942a28ff91 = $this->env->getExtension("native_profiler");
        $__internal_09241f3b4b78f86a2c55977143b789f7eb25384f2d565b89e198d7942a28ff91->enter($__internal_09241f3b4b78f86a2c55977143b789f7eb25384f2d565b89e198d7942a28ff91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " | ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "name", array()), "html", null, true);
        
        $__internal_09241f3b4b78f86a2c55977143b789f7eb25384f2d565b89e198d7942a28ff91->leave($__internal_09241f3b4b78f86a2c55977143b789f7eb25384f2d565b89e198d7942a28ff91_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_65803a5ac4b5a02c32febcbd7d95cdde6713112c4985b160acd45c5b0d920c11 = $this->env->getExtension("native_profiler");
        $__internal_65803a5ac4b5a02c32febcbd7d95cdde6713112c4985b160acd45c5b0d920c11->enter($__internal_65803a5ac4b5a02c32febcbd7d95cdde6713112c4985b160acd45c5b0d920c11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>Event</h1>
    ID: ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "id", array()), "html", null, true);
        echo "<br>
    Name: ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "name", array()), "html", null, true);
        echo "<br>
    City: ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "city", array()), "html", null, true);
        echo "<br>
    <br>
    <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("app_event_list");
        echo "\">Zurück</a>
";
        
        $__internal_65803a5ac4b5a02c32febcbd7d95cdde6713112c4985b160acd45c5b0d920c11->leave($__internal_65803a5ac4b5a02c32febcbd7d95cdde6713112c4985b160acd45c5b0d920c11_prof);

    }

    public function getTemplateName()
    {
        return "event/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 11,  66 => 9,  62 => 8,  58 => 7,  55 => 6,  49 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block title %}{{ parent() }} | {{ event.name }}{% endblock %}*/
/* */
/* {% block body %}*/
/*     <h1>Event</h1>*/
/*     ID: {{ event.id }}<br>*/
/*     Name: {{ event.name }}<br>*/
/*     City: {{ event.city }}<br>*/
/*     <br>*/
/*     <a href="{{ path("app_event_list") }}">Zurück</a>*/
/* {% endblock %}*/
