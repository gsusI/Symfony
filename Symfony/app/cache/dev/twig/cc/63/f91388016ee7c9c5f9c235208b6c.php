<?php

/* ::base.html.twig */
class __TwigTemplate_cc63f91388016ee7c9c5f9c235208b6c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'header' => array($this, 'block_header'),
            'login' => array($this, 'block_login'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html\"; charset=utf-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo " - Planner</title>
        <!--[if lt IE 9]>
            <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
        <![endif]-->
        <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js\"></script>
        ";
        // line 11
        echo "            ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 16
        echo "        <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        ";
        // line 18
        echo "    </head>

    <body class=\"metrouicss\"  >
        ";
        // line 21
        $this->displayBlock('javascripts', $context, $blocks);
        // line 26
        echo "
            <div class=\"page\">
                <div class=\"page-header\">
                    <div class=\"page-header-content bg-color-lighten\">
                        ";
        // line 30
        $this->displayBlock('header', $context, $blocks);
        // line 31
        echo "                    </div>
                </div>

                <div class=\"page-region\" style=\"text-align: center\">
                    ";
        // line 35
        $this->displayBlock('login', $context, $blocks);
        // line 36
        echo "                    <div class=\"page-region-content\">
                            ";
        // line 37
        $this->displayBlock('body', $context, $blocks);
        // line 39
        echo "                    </div>
                </div>
            </div>
    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Planner";
    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 12
        echo "                ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "8f2a89c_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_8f2a89c_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/8f2a89c_modern_1.css");
            // line 13
            echo "                    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
                ";
        } else {
            // asset "8f2a89c"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_8f2a89c") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/8f2a89c.css");
            echo "                    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
                ";
        }
        unset($context["asset_url"]);
        // line 15
        echo "            ";
    }

    // line 21
    public function block_javascripts($context, array $blocks = array())
    {
        // line 22
        echo "            ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "c0d93fd_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c0d93fd_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/c0d93fd_index_1.js");
            // line 23
            echo "                <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
            ";
        } else {
            // asset "c0d93fd"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c0d93fd") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/c0d93fd.js");
            echo "                <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
            ";
        }
        unset($context["asset_url"]);
        // line 25
        echo "        ";
    }

    // line 30
    public function block_header($context, array $blocks = array())
    {
        echo "<div><h1>Planner</h1></div> ";
    }

    // line 35
    public function block_login($context, array $blocks = array())
    {
    }

    // line 37
    public function block_body($context, array $blocks = array())
    {
        // line 38
        echo "                            ";
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
        return array (  153 => 37,  148 => 35,  124 => 23,  90 => 11,  34 => 7,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  235 => 74,  229 => 73,  224 => 71,  220 => 70,  214 => 69,  208 => 68,  169 => 60,  143 => 56,  140 => 55,  132 => 51,  128 => 49,  119 => 22,  107 => 36,  71 => 19,  38 => 6,  177 => 65,  165 => 64,  160 => 61,  135 => 47,  126 => 45,  114 => 42,  84 => 5,  70 => 36,  67 => 15,  61 => 13,  26 => 6,  94 => 22,  89 => 20,  85 => 25,  75 => 39,  68 => 35,  56 => 9,  28 => 5,  24 => 3,  196 => 90,  183 => 70,  171 => 61,  166 => 71,  163 => 70,  158 => 67,  156 => 38,  151 => 57,  142 => 30,  138 => 25,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 31,  62 => 31,  49 => 19,  87 => 20,  21 => 2,  31 => 5,  25 => 1,  19 => 2,  93 => 12,  88 => 6,  78 => 21,  46 => 7,  44 => 12,  27 => 4,  79 => 18,  72 => 16,  69 => 25,  47 => 18,  40 => 7,  37 => 10,  22 => 3,  246 => 32,  157 => 56,  145 => 46,  139 => 50,  131 => 42,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 37,  101 => 32,  98 => 13,  96 => 31,  83 => 25,  74 => 14,  66 => 24,  55 => 15,  52 => 21,  50 => 10,  43 => 36,  41 => 7,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 74,  168 => 66,  164 => 59,  162 => 62,  154 => 54,  149 => 51,  147 => 58,  144 => 53,  141 => 51,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 21,  112 => 15,  109 => 41,  106 => 36,  103 => 37,  99 => 30,  95 => 34,  92 => 33,  86 => 28,  82 => 22,  80 => 19,  73 => 37,  64 => 17,  60 => 30,  57 => 11,  54 => 26,  51 => 36,  48 => 13,  45 => 37,  42 => 16,  39 => 11,  36 => 33,  33 => 6,  30 => 31,);
    }
}
