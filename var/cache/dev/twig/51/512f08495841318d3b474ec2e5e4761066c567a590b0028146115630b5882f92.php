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
        $__internal_80e446e44a622c81d3f6176ef969a2966cb3098f676dd4ad2af52c7dcae0ee63 = $this->env->getExtension("native_profiler");
        $__internal_80e446e44a622c81d3f6176ef969a2966cb3098f676dd4ad2af52c7dcae0ee63->enter($__internal_80e446e44a622c81d3f6176ef969a2966cb3098f676dd4ad2af52c7dcae0ee63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "event/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_80e446e44a622c81d3f6176ef969a2966cb3098f676dd4ad2af52c7dcae0ee63->leave($__internal_80e446e44a622c81d3f6176ef969a2966cb3098f676dd4ad2af52c7dcae0ee63_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d0dc4816cb72fd9cf79ca11c78c606658adf1e87f5142382102d103fecf68d56 = $this->env->getExtension("native_profiler");
        $__internal_d0dc4816cb72fd9cf79ca11c78c606658adf1e87f5142382102d103fecf68d56->enter($__internal_d0dc4816cb72fd9cf79ca11c78c606658adf1e87f5142382102d103fecf68d56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " | Events";
        
        $__internal_d0dc4816cb72fd9cf79ca11c78c606658adf1e87f5142382102d103fecf68d56->leave($__internal_d0dc4816cb72fd9cf79ca11c78c606658adf1e87f5142382102d103fecf68d56_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a4cd6417e15f002418f1d56705d8163007d72da2df9fab8e05de329dc855bdf5 = $this->env->getExtension("native_profiler");
        $__internal_a4cd6417e15f002418f1d56705d8163007d72da2df9fab8e05de329dc855bdf5->enter($__internal_a4cd6417e15f002418f1d56705d8163007d72da2df9fab8e05de329dc855bdf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Stadt</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 15
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
            // line 16
            echo "                <tr class=\"";
            echo twig_escape_filter($this->env, twig_cycle(array(0 => "odd", 1 => "even"), $this->getAttribute($context["loop"], "index", array())), "html", null, true);
            echo "\">
                    <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "name", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "city", array()), "html", null, true);
            echo "</td>
                    <td>
                        <a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("app_event_show", array("id" => $this->getAttribute($context["e"], "id", array()))), "html", null, true);
            echo "\">Anzeigen</a>
                        <a href=\"";
            // line 21
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
            // line 25
            echo "                <tr>
                    <td colspan=\"2\">Keine Events gefunden</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "        </tbody>
    </table>
";
        
        $__internal_a4cd6417e15f002418f1d56705d8163007d72da2df9fab8e05de329dc855bdf5->leave($__internal_a4cd6417e15f002418f1d56705d8163007d72da2df9fab8e05de329dc855bdf5_prof);

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
        return array (  127 => 29,  118 => 25,  101 => 21,  97 => 20,  92 => 18,  88 => 17,  83 => 16,  65 => 15,  54 => 6,  48 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block title %}{{ parent() }} | Events{% endblock %}*/
/* */
/* {% block body %}*/
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
/* {% endblock %}*/
