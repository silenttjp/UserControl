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
            echo "    <li class=\"list-group-item\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "FirstName", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "LastName", array()), "html", null, true);
            echo "</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
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
        return array (  45 => 13,  34 => 11,  30 => 10,  19 => 1,);
    }
}
