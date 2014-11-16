<?php

/* ::base.html.twig */
class __TwigTemplate_ef9db2bf362cd76d815e51a666c8f5e73730e3e6d5203da0e5c073c71a7c5cc0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "8fed0c3_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_8fed0c3_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/8fed0c3_part_1.css");
            // line 7
            echo "    \t\t<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
\t\t";
        } else {
            // asset "8fed0c3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_8fed0c3") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/8fed0c3.css");
            echo "    \t\t<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
\t\t";
        }
        unset($context["asset_url"]);
        // line 9
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 12
        $this->displayBlock('body', $context, $blocks);
        // line 13
        echo "        ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "fe10066_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_fe10066_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/fe10066_part_1.js");
            // line 16
            echo "   \t\t\t <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
\t\t";
        } else {
            // asset "fe10066"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_fe10066") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/fe10066.js");
            echo "   \t\t\t <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
\t\t";
        }
        unset($context["asset_url"]);
        // line 18
        echo "\t\t    <script>
    \$( document ).ready(function() {

        
        
        
        \$('#view_users').click(function(){
        \t\$.post('";
        // line 25
        echo $this->env->getExtension('routing')->getPath("user_bundle_routing");
        echo "',{
                getUsers:1
            },function(data){
                   \$('#user_list').html(data);             
            });
        });
        
        \$('#add_user').click(function(){
        \t\$.post('";
        // line 33
        echo $this->env->getExtension('routing')->getPath("new_user_routing");
        echo "',{
                getUsers:1
            },function(data){
                   \$('#user_list').html(data);             
            });
        });

        \$('#user_list').on(\"submit\",\"#new_user\", function(){

    \t    var FN = \$('#user_firstName').val();
    \t    var LN = \$('#user_lastName').val();
    \t    
    \t    \$.post('";
        // line 45
        echo $this->env->getExtension('routing')->getPath("new_user_save_routing");
        echo "',{
    \t    \tuser_firstname:FN,
    \t    \tuser_lastname:LN
            },function(data){
         \t   \$('#user_list').html(data); 
          \t  \$.post('";
        // line 50
        echo $this->env->getExtension('routing')->getPath("get_user_count_routing");
        echo "',{
        \t    \tgetUser:1
                },function(data){
             \t   \$('#user_count').html(data);          
                });         
            });

    \t    
            return false;
       });  
    }) 
    </script> 
    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 12,  139 => 5,  120 => 50,  112 => 45,  97 => 33,  86 => 25,  77 => 18,  63 => 16,  58 => 13,  56 => 12,  49 => 9,  35 => 7,  31 => 6,  27 => 5,  21 => 1,);
    }
}
