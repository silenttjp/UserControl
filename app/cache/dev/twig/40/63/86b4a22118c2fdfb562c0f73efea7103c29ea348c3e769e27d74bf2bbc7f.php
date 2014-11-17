<?php

/* IDGUserControlBundle:User:list.html.twig */
class __TwigTemplate_406386b4a22118c2fdfb562c0f73efea7103c29ea348c3e769e27d74bf2bbc7f extends Twig_Template
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
  <div class=\"panel-heading\">Current Users</div>


  <!-- List group -->
  <ul class=\"list-group\">
      ";
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 11
            echo "    <li class=\"list-group-item\" id=\"user-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "FirstName", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "LastName", array()), "html", null, true);
            echo "
        <button ref=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
            echo "\" class=\"btn btn-danger btn-xs glyphicon glyphicon-remove pull-right user_id\"></button>
        <button ref=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
            echo "\" class=\"btn btn-success btn-xs glyphicon glyphicon-pencil pull-right user_edit\"></button>

    </li>
    
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "  
  </ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "IDGUserControlBundle:User:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 18,  47 => 13,  43 => 12,  34 => 11,  30 => 10,  19 => 1,);
    }
}
