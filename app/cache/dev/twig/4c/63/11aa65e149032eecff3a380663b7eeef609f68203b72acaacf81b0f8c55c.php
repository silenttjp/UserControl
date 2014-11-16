<?php

/* PropelBundle:Panel:configuration.html.twig */
class __TwigTemplate_4c6311aa65e149032eecff3a380663b7eeef609f68203b72acaacf81b0f8c55c extends Twig_Template
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
        echo "<h2>Propel configuration</h2>

<table summary=\"Current Propel configuration\">
    <thead>
    </thead>
    <tbody>
        <tr>
            <th>Propel version</th>
            <td>";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["propel_version"]) ? $context["propel_version"] : $this->getContext($context, "propel_version")), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Default connection</th>
            <td>";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["default_connection"]) ? $context["default_connection"] : $this->getContext($context, "default_connection")), "html", null, true);
        echo "</td>
        <tr>
            <th>Logging</th>
            <td>";
        // line 16
        echo (((isset($context["logging"]) ? $context["logging"] : $this->getContext($context, "logging"))) ? ("enabled") : ("disabled"));
        echo "</td>
        </tr>
        <tr>
            <th>Propel path</th>
            <td>";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["path"]) ? $context["path"] : $this->getContext($context, "path")), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Phing path</th>
            <td>";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["phing_path"]) ? $context["phing_path"] : $this->getContext($context, "phing_path")), "html", null, true);
        echo "</td>
        </tr>
    </tbody>
</table>

<h2>Propel connections</h2>

<table summary=\"Current Propel connections\">
    <thead>
        <tr>
            <th>Connection name</th>
            <th colspan=\"2\" style=\"text-align: center;\">Configuration parameters</th>
        </tr>
    </thead>
    <tbody>
        ";
        // line 39
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : $this->getContext($context, "configuration")), "datasources", array()));
        foreach ($context['_seq'] as $context["name"] => $context["config"]) {
            // line 40
            echo "        <tr>
            <th rowspan=\"5\" style=\"vertical-align: top;\">
                ";
            // line 42
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo "
            </th>
            <th>Adapter</th>
            <td>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["config"], "adapter", array()), "html", null, true);
            echo "</td>
        </tr>
        <tr>
            <th>DSN</th>
            <td>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["config"], "connection", array()), "dsn", array()), "html", null, true);
            echo "</td>
        </tr>
        <tr>
            <th>Class</th>
            <td>";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["config"], "connection", array()), "classname", array()), "html", null, true);
            echo "</td>
        </tr>
        <tr>
            <th>Options</th>
            <td>
                <ul>
                    ";
            // line 59
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["config"], "connection", array()), "options", array()));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 60
                echo "                    <li>";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo " : ";
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "</li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            echo "                </ul>
            </td>
        </tr>
        <tr>
            <th>Attributes</th>
            <td>
                <ul>
                    ";
            // line 69
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["config"], "connection", array()), "attributes", array()));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 70
                echo "                    <li>";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo " : ";
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "</li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 72
            echo "                </ul>
            </td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['config'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "    </tbody>
</table>
";
    }

    public function getTemplateName()
    {
        return "PropelBundle:Panel:configuration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 76,  150 => 72,  139 => 70,  135 => 69,  126 => 62,  115 => 60,  111 => 59,  102 => 53,  95 => 49,  88 => 45,  82 => 42,  78 => 40,  74 => 39,  56 => 24,  49 => 20,  42 => 16,  36 => 13,  29 => 9,  19 => 1,);
    }
}
