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
        $__internal_6d82e8a17588fae783f7a6f4d3d81f9bbd30cc0f5151cd7df910942556c67523 = $this->env->getExtension("native_profiler");
        $__internal_6d82e8a17588fae783f7a6f4d3d81f9bbd30cc0f5151cd7df910942556c67523->enter($__internal_6d82e8a17588fae783f7a6f4d3d81f9bbd30cc0f5151cd7df910942556c67523_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_6d82e8a17588fae783f7a6f4d3d81f9bbd30cc0f5151cd7df910942556c67523->leave($__internal_6d82e8a17588fae783f7a6f4d3d81f9bbd30cc0f5151cd7df910942556c67523_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_0941b4d922463d9f974272dbb503d6b3e589182cd7cb2d23ee7b222eeca76d0c = $this->env->getExtension("native_profiler");
        $__internal_0941b4d922463d9f974272dbb503d6b3e589182cd7cb2d23ee7b222eeca76d0c->enter($__internal_0941b4d922463d9f974272dbb503d6b3e589182cd7cb2d23ee7b222eeca76d0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_0941b4d922463d9f974272dbb503d6b3e589182cd7cb2d23ee7b222eeca76d0c->leave($__internal_0941b4d922463d9f974272dbb503d6b3e589182cd7cb2d23ee7b222eeca76d0c_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_958ad5cc25f3ba821acf9205619bfa6cc27c808e961b297e96ccaf02c28fb81f = $this->env->getExtension("native_profiler");
        $__internal_958ad5cc25f3ba821acf9205619bfa6cc27c808e961b297e96ccaf02c28fb81f->enter($__internal_958ad5cc25f3ba821acf9205619bfa6cc27c808e961b297e96ccaf02c28fb81f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_958ad5cc25f3ba821acf9205619bfa6cc27c808e961b297e96ccaf02c28fb81f->leave($__internal_958ad5cc25f3ba821acf9205619bfa6cc27c808e961b297e96ccaf02c28fb81f_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_04ed7d95cd54bc332d4dbb87594abfa0587de2346809c81195f944a9838c5964 = $this->env->getExtension("native_profiler");
        $__internal_04ed7d95cd54bc332d4dbb87594abfa0587de2346809c81195f944a9838c5964->enter($__internal_04ed7d95cd54bc332d4dbb87594abfa0587de2346809c81195f944a9838c5964_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_04ed7d95cd54bc332d4dbb87594abfa0587de2346809c81195f944a9838c5964->leave($__internal_04ed7d95cd54bc332d4dbb87594abfa0587de2346809c81195f944a9838c5964_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_768db4a974ca25e27d68c542b0eb914bcce837585822f5c2f73f2eeb9bed42a8 = $this->env->getExtension("native_profiler");
        $__internal_768db4a974ca25e27d68c542b0eb914bcce837585822f5c2f73f2eeb9bed42a8->enter($__internal_768db4a974ca25e27d68c542b0eb914bcce837585822f5c2f73f2eeb9bed42a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_768db4a974ca25e27d68c542b0eb914bcce837585822f5c2f73f2eeb9bed42a8->leave($__internal_768db4a974ca25e27d68c542b0eb914bcce837585822f5c2f73f2eeb9bed42a8_prof);

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
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
