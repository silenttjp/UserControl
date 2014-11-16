<?php

/* IDGUserControlBundle:User:userCount.html.twig */
class __TwigTemplate_5c3cca007dc48d67a88b3258e8391b30e5d074f996acdde90dcdd5ae166b5236 extends Twig_Template
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
        echo " <button class=\"btn btn-xs btn-primary\" id=\"view_users\" type=\"button\">
         Number Of Users: <span class=\"badge\">";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["user_count"]) ? $context["user_count"] : $this->getContext($context, "user_count")), "html", null, true);
        echo "</span>
 </button>";
    }

    public function getTemplateName()
    {
        return "IDGUserControlBundle:User:userCount.html.twig";
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
