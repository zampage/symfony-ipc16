<?php

/* default/side.html.twig */
class __TwigTemplate_142f2bafa1dc30f9549b4bbc5f99b78ec4f88de1bbea79703eb91020af8cde06 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/side.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cd5147f689b8019098968253538547d74809ffd98f946916916031918142056e = $this->env->getExtension("native_profiler");
        $__internal_cd5147f689b8019098968253538547d74809ffd98f946916916031918142056e->enter($__internal_cd5147f689b8019098968253538547d74809ffd98f946916916031918142056e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/side.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cd5147f689b8019098968253538547d74809ffd98f946916916031918142056e->leave($__internal_cd5147f689b8019098968253538547d74809ffd98f946916916031918142056e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_357de5ac9df54696f92ae50ec1d4c973299a8c41dbedf2f7ab50649d3049f226 = $this->env->getExtension("native_profiler");
        $__internal_357de5ac9df54696f92ae50ec1d4c973299a8c41dbedf2f7ab50649d3049f226->enter($__internal_357de5ac9df54696f92ae50ec1d4c973299a8c41dbedf2f7ab50649d3049f226_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div id=\"wrapper\">
        <h1>Hello World!</h1>
    </div>
";
        
        $__internal_357de5ac9df54696f92ae50ec1d4c973299a8c41dbedf2f7ab50649d3049f226->leave($__internal_357de5ac9df54696f92ae50ec1d4c973299a8c41dbedf2f7ab50649d3049f226_prof);

    }

    public function getTemplateName()
    {
        return "default/side.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <div id="wrapper">*/
/*         <h1>Hello World!</h1>*/
/*     </div>*/
/* {% endblock %}*/
