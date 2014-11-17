<?php

/* IDGUserControlBundle:lists:new.html.twig */
class __TwigTemplate_e9cca9f63403b3018ce8b100a2591071082a90ea31b94d2a8e49bab27856ca9a extends Twig_Template
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
        echo "\" id=\"new_list\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
    ";
        // line 2
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
<button type=\"submit\" id=\"lists_save\" name=\"lists[save]\" class=\"btn btn-success\">Add List</button>
</form>
\t\t    <script>
\t\t           \$('#lists_save').addClass(\"btn btn-success\");
\t\t           \$('#lists_name').addClass(\"form-control\");
\t\t           

\t\t           
          </script>   ";
    }

    public function getTemplateName()
    {
        return "IDGUserControlBundle:lists:new.html.twig";
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
