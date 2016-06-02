<?php

/* event/list.html.twig */
class __TwigTemplate_e27a4d0f390ea315abd4be614049c072c94829c808eed06a1e215a4714c30dae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "event/list.html.twig", 1);
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
        $__internal_fabb8e2831303ea155a11cc771a7fa179a5caab4b376232132fb1e13963c788f = $this->env->getExtension("native_profiler");
        $__internal_fabb8e2831303ea155a11cc771a7fa179a5caab4b376232132fb1e13963c788f->enter($__internal_fabb8e2831303ea155a11cc771a7fa179a5caab4b376232132fb1e13963c788f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "event/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fabb8e2831303ea155a11cc771a7fa179a5caab4b376232132fb1e13963c788f->leave($__internal_fabb8e2831303ea155a11cc771a7fa179a5caab4b376232132fb1e13963c788f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_210f909ab3f492fa4c8246b12451c028a5621b8b01668749ed4cd3bc267e93e6 = $this->env->getExtension("native_profiler");
        $__internal_210f909ab3f492fa4c8246b12451c028a5621b8b01668749ed4cd3bc267e93e6->enter($__internal_210f909ab3f492fa4c8246b12451c028a5621b8b01668749ed4cd3bc267e93e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " | Events";
        
        $__internal_210f909ab3f492fa4c8246b12451c028a5621b8b01668749ed4cd3bc267e93e6->leave($__internal_210f909ab3f492fa4c8246b12451c028a5621b8b01668749ed4cd3bc267e93e6_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_544b085b6b6238e68d5c86d8b1d55983c03428ce146f4e092b37dcc41543af69 = $this->env->getExtension("native_profiler");
        $__internal_544b085b6b6238e68d5c86d8b1d55983c03428ce146f4e092b37dcc41543af69->enter($__internal_544b085b6b6238e68d5c86d8b1d55983c03428ce146f4e092b37dcc41543af69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        echo twig_include($this->env, $context, "flash_notice.html.twig");
        echo "
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Stadt</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["events"]) ? $context["events"] : $this->getContext($context, "events")));
        $context['_iterated'] = false;
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
            // line 17
            echo "                <tr class=\"";
            echo twig_escape_filter($this->env, twig_cycle(array(0 => "odd", 1 => "even"), $this->getAttribute($context["loop"], "index", array())), "html", null, true);
            echo "\">
                    <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "name", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "city", array()), "html", null, true);
            echo "</td>
                    <td>
                        <a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("app_event_show", array("id" => $this->getAttribute($context["e"], "id", array()))), "html", null, true);
            echo "\">Anzeigen</a>
                        <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("app_event_delete", array("id" => $this->getAttribute($context["e"], "id", array()))), "html", null, true);
            echo "\">Löschen</a>
                    </td>
                </tr>
            ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 26
            echo "                <tr>
                    <td colspan=\"2\">Keine Events gefunden</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "        </tbody>
    </table>
    <br>
    <!-- EMBEDDED ELEMENT LADEN -->
    ";
        // line 34
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("AppBundle:Event:embedded"));
        echo "
    <!-- // -->
";
        
        $__internal_544b085b6b6238e68d5c86d8b1d55983c03428ce146f4e092b37dcc41543af69->leave($__internal_544b085b6b6238e68d5c86d8b1d55983c03428ce146f4e092b37dcc41543af69_prof);

    }

    public function getTemplateName()
    {
        return "event/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 34,  130 => 30,  121 => 26,  104 => 22,  100 => 21,  95 => 19,  91 => 18,  86 => 17,  68 => 16,  54 => 6,  48 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block title %}{{ parent() }} | Events{% endblock %}*/
/* */
/* {% block body %}*/
/*     {{ include('flash_notice.html.twig') }}*/
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Name</th>*/
/*                 <th>Stadt</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*             {% for e in events %}*/
/*                 <tr class="{{ cycle(['odd', 'even'], loop.index) }}">*/
/*                     <td>{{ e.name }}</td>*/
/*                     <td>{{ e.city }}</td>*/
/*                     <td>*/
/*                         <a href="{{ path("app_event_show", {"id":e.id}) }}">Anzeigen</a>*/
/*                         <a href="{{ path("app_event_delete", {"id":e.id}) }}">Löschen</a>*/
/*                     </td>*/
/*                 </tr>*/
/*             {% else %}*/
/*                 <tr>*/
/*                     <td colspan="2">Keine Events gefunden</td>*/
/*                 </tr>*/
/*             {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/*     <br>*/
/*     <!-- EMBEDDED ELEMENT LADEN -->*/
/*     {{ render(controller('AppBundle:Event:embedded')) }}*/
/*     <!-- // -->*/
/* {% endblock %}*/
