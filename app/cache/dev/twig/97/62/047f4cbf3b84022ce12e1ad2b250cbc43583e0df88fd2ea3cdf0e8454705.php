<?php

/* IDGUserControlBundle:lists:listsCount.html.twig */
class __TwigTemplate_9762047f4cbf3b84022ce12e1ad2b250cbc43583e0df88fd2ea3cdf0e8454705 extends Twig_Template
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
        echo " <button class=\"btn btn-xs btn-primary\" id=\"view_lists\" type=\"button\">
         Number Of Lists: <span class=\"badge\">";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["lists_count"]) ? $context["lists_count"] : $this->getContext($context, "lists_count")), "html", null, true);
        echo "</span>
 </button>";
    }

    public function getTemplateName()
    {
        return "IDGUserControlBundle:lists:listsCount.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,  19 => 1,);
    }
}
