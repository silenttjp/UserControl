<?php

/* PropelBundle:Collector:propel.html.twig */
class __TwigTemplate_88186a82f0e0e005484918bd829097c20e0e345d02723c3cd02d026a97bd3239 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("WebProfilerBundle:Profiler:layout.html.twig");

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WebProfilerBundle:Profiler:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        // line 5
        echo "    ";
        ob_start();
        // line 6
        echo "        <img alt=\"Propel\" src=\"data:image/png;base64,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\" />
        <span class=\"sf-toolbar-status\">";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "querycount", array()), "html", null, true);
        echo "</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 9
        echo "    ";
        ob_start();
        // line 10
        echo "        <div class=\"sf-toolbar-info-piece\">
            <b>DB Queries</b>
            <span>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "querycount", array()), "html", null, true);
        echo "</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Query time</b>
            <span>";
        // line 16
        echo twig_escape_filter($this->env, sprintf("%0.2f", ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "time", array()) * 1000)), "html", null, true);
        echo " ms</span>
        </div>
";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 19
        echo "    ";
        $this->env->loadTemplate("WebProfilerBundle:Profiler:toolbar_item.html.twig")->display(array_merge($context, array("link" => (isset($context["profiler_url"]) ? $context["profiler_url"] : $this->getContext($context, "profiler_url")))));
    }

    // line 22
    public function block_menu($context, array $blocks = array())
    {
        // line 23
        echo "    ";
        // line 24
        echo "    <span class=\"label\">
        <span class=\"icon\"><img src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/propel/images/profiler/propel.png"), "html", null, true);
        echo "\" alt=\"\" /></span>
        <strong>Propel</strong>
        <span class=\"count\">
            <span>";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "querycount", array()), "html", null, true);
        echo "</span>
            <span>";
        // line 29
        echo twig_escape_filter($this->env, sprintf("%0.0f", ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "time", array()) * 1000)), "html", null, true);
        echo " ms</span>
        </span>
    </span>
";
    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        // line 35
        echo "    ";
        // line 36
        echo "    <style type=\"text/css\">
    .SQLKeyword {
        color: blue;
        white-space: nowrap;
    }
    .SQLName {
        color: #464646;
        white-space: nowrap;
    }
    .SQLInfo, .SQLComment {
        color: gray;
        display: block;
        font-size: 0.9em;
        margin: 3px 0;
    }

    .SQLExplain {
       margin: 5px;
    }

    .SQLExplain .error {
        background-color: #F2DEDE;
        border-color: #EED3D7;
        color: #B94A48;
        padding: 8px 35px 8px 14px;
        font-weight: bold;
    }

    #content .SQLExplain h2 {
        font-size: 17px;
        margin-bottom: 0;
    }
    </style>

    <h2>Queries</h2>
    <table summary=\"Show logged queries\">
        <thead>
            <tr>
                <th>SQL queries</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 78
        if ((!$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "querycount", array()))) {
            // line 79
            echo "            <tr><td>No queries.</td></tr>
        ";
        } else {
            // line 81
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "queries", array()));
            foreach ($context['_seq'] as $context["i"] => $context["query"]) {
                // line 82
                echo "            <tr>
                <td>
                    <a name=\"propel-query-";
                // line 84
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "\" ></a>
                    <code>";
                // line 85
                echo $this->env->getExtension('propel_syntax_extension')->formatSQL($this->getAttribute($context["query"], "sql", array()));
                echo "</code>
                    ";
                // line 86
                if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "has", array(0 => "query"), "method") && ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "query"), "method") == $context["i"]))) {
                    // line 87
                    echo "                        <div class=\"SQLExplain\">
                        ";
                    // line 88
                    echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("PropelBundle:Panel:explain", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "panel" => "propel", "query" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "query"), "method"), "connection" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "connection"), "method"))), array());
                    // line 94
                    echo "                        </div>
                    ";
                }
                // line 96
                echo "                    <div class=\"SQLInfo\">
                        Time: ";
                // line 97
                echo twig_escape_filter($this->env, $this->getAttribute($context["query"], "time", array()), "html", null, true);
                echo " - Memory: ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["query"], "memory", array()), "html", null, true);
                echo " - Connection: ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["query"], "connection", array()), "html", null, true);
                echo "

                        ";
                // line 99
                if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "query", 1 => (-1)), "method") != $context["i"])) {
                    // line 100
                    echo "                            - <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("panel" => "propel", "token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "connection" => $this->getAttribute($context["query"], "connection", array()), "query" => $context["i"])), "html", null, true);
                    echo "#propel-query-";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "\">Explain the query</a>
                        ";
                }
                // line 102
                echo "                    </div>
                </td>
            </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['query'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 106
            echo "        ";
        }
        // line 107
        echo "        </tbody>
    </table>

    ";
        // line 110
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("PropelBundle:Panel:configuration"), array());
    }

    public function getTemplateName()
    {
        return "PropelBundle:Collector:propel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  219 => 110,  214 => 107,  211 => 106,  202 => 102,  194 => 100,  192 => 99,  183 => 97,  180 => 96,  176 => 94,  174 => 88,  171 => 87,  169 => 86,  165 => 85,  161 => 84,  157 => 82,  152 => 81,  148 => 79,  146 => 78,  102 => 36,  100 => 35,  97 => 34,  89 => 29,  85 => 28,  79 => 25,  76 => 24,  74 => 23,  71 => 22,  66 => 19,  60 => 16,  53 => 12,  49 => 10,  46 => 9,  41 => 7,  38 => 6,  35 => 5,  33 => 4,  30 => 3,);
    }
}
