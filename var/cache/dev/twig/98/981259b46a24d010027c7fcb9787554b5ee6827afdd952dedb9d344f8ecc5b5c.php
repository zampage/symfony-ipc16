<?php

/* base.html.twig */
class __TwigTemplate_1c8cfa1a609198317ec1a849f94dae1be560f3b83b2967ec989f04929e4d02cc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_357891d11d05ca638dc42fce60c9639d5155a6d645ded89b053793fae6653f19 = $this->env->getExtension("native_profiler");
        $__internal_357891d11d05ca638dc42fce60c9639d5155a6d645ded89b053793fae6653f19->enter($__internal_357891d11d05ca638dc42fce60c9639d5155a6d645ded89b053793fae6653f19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_357891d11d05ca638dc42fce60c9639d5155a6d645ded89b053793fae6653f19->leave($__internal_357891d11d05ca638dc42fce60c9639d5155a6d645ded89b053793fae6653f19_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a0c8b073ac86dc9708aefc5b264073549f3202390f94787760b66c5b9710cb55 = $this->env->getExtension("native_profiler");
        $__internal_a0c8b073ac86dc9708aefc5b264073549f3202390f94787760b66c5b9710cb55->enter($__internal_a0c8b073ac86dc9708aefc5b264073549f3202390f94787760b66c5b9710cb55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "IPC16";
        
        $__internal_a0c8b073ac86dc9708aefc5b264073549f3202390f94787760b66c5b9710cb55->leave($__internal_a0c8b073ac86dc9708aefc5b264073549f3202390f94787760b66c5b9710cb55_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5f3a22eb524fc9c6d3be507b9bc22f2f084aff6fc10760f0a451c0163fd6c6f3 = $this->env->getExtension("native_profiler");
        $__internal_5f3a22eb524fc9c6d3be507b9bc22f2f084aff6fc10760f0a451c0163fd6c6f3->enter($__internal_5f3a22eb524fc9c6d3be507b9bc22f2f084aff6fc10760f0a451c0163fd6c6f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_5f3a22eb524fc9c6d3be507b9bc22f2f084aff6fc10760f0a451c0163fd6c6f3->leave($__internal_5f3a22eb524fc9c6d3be507b9bc22f2f084aff6fc10760f0a451c0163fd6c6f3_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_5c758350a7380b615d7f48fa11300ba9c406d23cfd8d60e0468f3b5a0b3af3e4 = $this->env->getExtension("native_profiler");
        $__internal_5c758350a7380b615d7f48fa11300ba9c406d23cfd8d60e0468f3b5a0b3af3e4->enter($__internal_5c758350a7380b615d7f48fa11300ba9c406d23cfd8d60e0468f3b5a0b3af3e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_5c758350a7380b615d7f48fa11300ba9c406d23cfd8d60e0468f3b5a0b3af3e4->leave($__internal_5c758350a7380b615d7f48fa11300ba9c406d23cfd8d60e0468f3b5a0b3af3e4_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_29bfaa1b0303ceebd0dddeba73214b50cfde1ba40fdb3e5b1afafb2fb216b0e8 = $this->env->getExtension("native_profiler");
        $__internal_29bfaa1b0303ceebd0dddeba73214b50cfde1ba40fdb3e5b1afafb2fb216b0e8->enter($__internal_29bfaa1b0303ceebd0dddeba73214b50cfde1ba40fdb3e5b1afafb2fb216b0e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_29bfaa1b0303ceebd0dddeba73214b50cfde1ba40fdb3e5b1afafb2fb216b0e8->leave($__internal_29bfaa1b0303ceebd0dddeba73214b50cfde1ba40fdb3e5b1afafb2fb216b0e8_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}IPC16{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
