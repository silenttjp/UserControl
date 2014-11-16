<?php

/* IDGUserControlBundle:User:user.html.twig */
class __TwigTemplate_ca33f054f4a8ba190ac3020fbf873a3f8aa1097b9fb329eb7e0a82f95c2cc033 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "<div class=\"container\">
   <div class=\"col-sm-12\">


            <div class=\"col-sm-6\">
            <div class=\"panel panel-default\">
              <div class=\"panel-body\">
               User panel: 
               <span id=\"user_count\"> 
                <button class=\"btn btn-xs btn-primary\" id=\"view_users\" type=\"button\">
                     Number Of Users: <span class=\"badge\">";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["user_count"]) ? $context["user_count"] : $this->getContext($context, "user_count")), "html", null, true);
        echo "</span>
                </button>
                </span>
                <button class=\"btn btn-xs btn-success align-right\" id=\"add_user\" type=\"button\">
                    Add User
                </button>
                <br><br>
                <div id=\"user_list\"></div>
              </div>
            </div>
       
    </div>
</div>        

 
";
    }

    public function getTemplateName()
    {
        return "IDGUserControlBundle:User:user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 13,  31 => 3,  28 => 2,);
    }
}
