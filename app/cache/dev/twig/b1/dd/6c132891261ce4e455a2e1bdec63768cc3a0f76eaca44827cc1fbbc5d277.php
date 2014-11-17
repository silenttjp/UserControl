<?php

/* IDGUserControlBundle:lists:list.html.twig */
class __TwigTemplate_b1dd6c132891261ce4e455a2e1bdec63768cc3a0f76eaca44827cc1fbbc5d277 extends Twig_Template
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
        // line 1
        echo "

<div class=\"panel panel-default\">
  <!-- Default panel contents -->
  <div class=\"panel-heading\">Current Lists</div>


  <!-- List group -->
  <ul class=\"list-group\">
      ";
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lists"]) ? $context["lists"] : $this->getContext($context, "lists")));
        foreach ($context['_seq'] as $context["_key"] => $context["list"]) {
            // line 11
            echo "    <li class=\"list-group-item\" id=\"lists-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["list"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["list"], "Name", array()), "html", null, true);
            echo "
        <button ref=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["list"], "id", array()), "html", null, true);
            echo "\" class=\"btn btn-danger btn-xs glyphicon glyphicon-remove pull-right list_id\"></button>
        <button ref=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["list"], "id", array()), "html", null, true);
            echo "\" class=\"btn btn-success btn-xs glyphicon glyphicon-pencil pull-right list_edit\"></button>

    </li>
    
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['list'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "  
  </ul>
</div>
             ";
    }

    public function getTemplateName()
    {
        return "IDGUserControlBundle:lists:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 18,  45 => 13,  41 => 12,  34 => 11,  30 => 10,  19 => 1,);
    }
}
