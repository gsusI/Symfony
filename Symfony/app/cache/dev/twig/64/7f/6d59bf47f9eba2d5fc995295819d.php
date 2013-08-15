<?php

/* FOSUserBundle:Group:new_content.html.twig */
class __TwigTemplate_647f6d59bf47f9eba2d5fc995295819d extends Twig_Template
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
        // line 2
        echo "
<form action=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_group_new"), "html", null, true);
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"fos_user_group_new\">
    ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("group.new.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</form>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 3,  153 => 37,  148 => 35,  124 => 23,  90 => 11,  34 => 7,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  235 => 74,  229 => 73,  224 => 71,  220 => 70,  214 => 69,  208 => 68,  169 => 60,  143 => 56,  140 => 55,  132 => 51,  128 => 49,  119 => 22,  107 => 36,  71 => 19,  38 => 6,  177 => 65,  165 => 64,  160 => 61,  135 => 47,  126 => 45,  114 => 42,  84 => 5,  70 => 36,  67 => 20,  61 => 13,  26 => 12,  94 => 22,  89 => 20,  85 => 25,  75 => 39,  68 => 35,  56 => 9,  28 => 4,  24 => 7,  196 => 90,  183 => 70,  171 => 61,  166 => 71,  163 => 70,  158 => 67,  156 => 38,  151 => 57,  142 => 30,  138 => 25,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 31,  62 => 31,  49 => 19,  87 => 20,  21 => 2,  31 => 4,  25 => 1,  19 => 2,  93 => 12,  88 => 6,  78 => 21,  46 => 11,  44 => 12,  27 => 4,  79 => 18,  72 => 22,  69 => 25,  47 => 18,  40 => 7,  37 => 10,  22 => 3,  246 => 32,  157 => 56,  145 => 46,  139 => 50,  131 => 42,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 37,  101 => 32,  98 => 13,  96 => 31,  83 => 25,  74 => 14,  66 => 24,  55 => 14,  52 => 21,  50 => 10,  43 => 12,  41 => 7,  35 => 8,  32 => 4,  29 => 6,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 74,  168 => 66,  164 => 59,  162 => 62,  154 => 54,  149 => 51,  147 => 58,  144 => 53,  141 => 51,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 21,  112 => 15,  109 => 41,  106 => 36,  103 => 37,  99 => 30,  95 => 34,  92 => 33,  86 => 28,  82 => 22,  80 => 19,  73 => 37,  64 => 17,  60 => 16,  57 => 11,  54 => 26,  51 => 13,  48 => 12,  45 => 37,  42 => 10,  39 => 9,  36 => 33,  33 => 6,  30 => 2,);
    }
}
