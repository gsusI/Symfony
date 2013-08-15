<?php

/* AcmeDemoBundle:Demo:index.html.twig */
class __TwigTemplate_c6b168b261e25fbe55da112bbac188fe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content_header' => array($this, 'block_content_header'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Symfony - Demos";
    }

    // line 5
    public function block_content_header($context, array $blocks = array())
    {
        echo "";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "    <h1 class=\"title\">Available demos</h1>
    <ul id=\"demo-list\">
        <li><a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_demo_hello", array("name" => "World")), "html", null, true);
        echo "\">Hello World</a></li>
        <li><a href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_demo_secured_hello", array("name" => "World")), "html", null, true);
        echo "\">Access the secured area</a> <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_demo_login"), "html", null, true);
        echo "\">Go to the login page</a></li>
        ";
        // line 13
        echo "    </ul>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Demo:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 13,  110 => 22,  102 => 17,  53 => 11,  127 => 28,  97 => 41,  76 => 17,  63 => 19,  58 => 17,  23 => 4,  153 => 37,  148 => 35,  124 => 23,  90 => 32,  34 => 7,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  235 => 74,  229 => 73,  224 => 71,  220 => 70,  214 => 69,  208 => 68,  169 => 60,  143 => 56,  140 => 55,  132 => 51,  128 => 49,  119 => 22,  107 => 36,  71 => 19,  38 => 6,  177 => 65,  165 => 64,  160 => 61,  135 => 62,  126 => 45,  114 => 42,  84 => 29,  70 => 36,  67 => 20,  61 => 12,  26 => 12,  94 => 34,  89 => 20,  85 => 32,  75 => 39,  68 => 35,  56 => 11,  28 => 3,  24 => 7,  196 => 90,  183 => 70,  171 => 61,  166 => 71,  163 => 70,  158 => 79,  156 => 38,  151 => 57,  142 => 30,  138 => 25,  136 => 56,  121 => 46,  117 => 19,  105 => 18,  91 => 31,  62 => 31,  49 => 10,  87 => 20,  21 => 2,  31 => 4,  25 => 1,  19 => 1,  93 => 12,  88 => 31,  78 => 26,  46 => 11,  44 => 12,  27 => 4,  79 => 18,  72 => 22,  69 => 25,  47 => 8,  40 => 7,  37 => 10,  22 => 2,  246 => 32,  157 => 56,  145 => 46,  139 => 63,  131 => 61,  123 => 59,  120 => 20,  115 => 43,  111 => 37,  108 => 19,  101 => 43,  98 => 13,  96 => 31,  83 => 25,  74 => 27,  66 => 24,  55 => 14,  52 => 10,  50 => 10,  43 => 7,  41 => 5,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 74,  168 => 66,  164 => 59,  162 => 62,  154 => 54,  149 => 51,  147 => 58,  144 => 53,  141 => 51,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 21,  112 => 15,  109 => 41,  106 => 45,  103 => 37,  99 => 30,  95 => 34,  92 => 33,  86 => 28,  82 => 28,  80 => 30,  73 => 16,  64 => 13,  60 => 16,  57 => 12,  54 => 26,  51 => 13,  48 => 9,  45 => 8,  42 => 7,  39 => 7,  36 => 5,  33 => 3,  30 => 3,);
    }
}
