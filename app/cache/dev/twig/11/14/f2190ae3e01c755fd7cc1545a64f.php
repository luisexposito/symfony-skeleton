<?php

/* SonataUserBundle:Admin/Core:user_block.html.twig */
class __TwigTemplate_1114f2190ae3e01c755fd7cc1545a64f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'user_block' => array($this, 'block_user_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('user_block', $context, $blocks);
    }

    public function block_user_block($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        if ($this->getAttribute($this->getContext($context, "app"), "user")) {
            // line 3
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "app"), "user"), "html", null, true);
            echo "

        ";
            // line 5
            if ($this->env->getExtension('security')->isGranted("ROLE_PREVIOUS_ADMIN")) {
                // line 6
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("sonata_user_impersonating", array("_switch_user" => "_exit")), "html", null, true);
                echo "\">(exit)</a>
        ";
            }
            // line 8
            echo "
        - <a href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("sonata_user_admin_security_logout"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user_block_logout", array(), "SonataUserBundle"), "html", null, true);
            echo "</a>
    ";
        }
    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Admin/Core:user_block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  44 => 9,  18 => 1,  616 => 196,  613 => 195,  608 => 142,  604 => 139,  598 => 138,  594 => 136,  590 => 134,  585 => 133,  582 => 132,  579 => 131,  574 => 130,  571 => 129,  564 => 83,  558 => 82,  553 => 81,  550 => 80,  544 => 51,  540 => 50,  536 => 49,  531 => 47,  527 => 46,  523 => 45,  519 => 44,  515 => 43,  511 => 42,  507 => 41,  502 => 39,  498 => 38,  493 => 37,  490 => 36,  484 => 33,  480 => 32,  474 => 29,  469 => 27,  466 => 26,  463 => 25,  454 => 200,  452 => 195,  449 => 194,  443 => 191,  437 => 188,  434 => 187,  432 => 186,  429 => 185,  423 => 183,  421 => 182,  418 => 181,  412 => 179,  410 => 178,  407 => 177,  401 => 175,  399 => 174,  395 => 172,  389 => 170,  387 => 169,  382 => 166,  376 => 163,  373 => 162,  371 => 161,  368 => 160,  363 => 157,  360 => 156,  346 => 155,  340 => 153,  337 => 152,  319 => 151,  313 => 149,  311 => 148,  307 => 146,  305 => 145,  301 => 143,  299 => 142,  295 => 140,  293 => 129,  290 => 128,  286 => 126,  280 => 124,  277 => 123,  274 => 122,  260 => 121,  254 => 119,  246 => 117,  243 => 116,  225 => 115,  222 => 114,  220 => 113,  217 => 112,  215 => 111,  207 => 105,  201 => 103,  198 => 102,  194 => 100,  186 => 97,  180 => 96,  172 => 94,  169 => 93,  165 => 92,  160 => 90,  157 => 89,  153 => 88,  150 => 87,  147 => 86,  144 => 80,  142 => 79,  135 => 74,  129 => 72,  125 => 70,  122 => 69,  119 => 68,  102 => 66,  98 => 64,  95 => 63,  78 => 62,  75 => 61,  72 => 60,  66 => 58,  64 => 57,  61 => 56,  59 => 55,  53 => 36,  50 => 35,  48 => 25,  41 => 8,  35 => 6,  33 => 5,  31 => 15,  29 => 14,  25 => 12,  23 => 11,  84 => 37,  76 => 32,  63 => 22,  55 => 53,  49 => 14,  45 => 12,  39 => 19,  37 => 18,  32 => 7,  27 => 3,  24 => 2,);
    }
}
