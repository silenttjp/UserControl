<?php

/* IDGUserControlBundle:User:new.html.twig */
class __TwigTemplate_8d50bf1e65ace9feafdc52ec7bd32129469e45df29291f2e9413caec01c01d3a extends Twig_Template
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
        echo "<form action=\"";
        echo $this->env->getExtension('routing')->getPath("new_user_routing");
        echo "\" id=\"new_user\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
    ";
        // line 2
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "

</form>
\t\t    <script>
\t\t           \$('#user_save').addClass(\"btn btn-success\");
\t\t           \$('#user_firstName').addClass(\"form-control\");
\t\t           \$('#user_lastName').addClass(\"form-control\");

\t\t           
          </script>   ";
    }

    public function getTemplateName()
    {
        return "IDGUserControlBundle:User:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 2,  19 => 1,);
    }
}
