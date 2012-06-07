<?php

/* SonataBlockBundle:Block:block_base.html.twig */
class __TwigTemplate_1dab8be4c793b16887581a2c0bedfa0f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "<div id=\"cms-block-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "block"), "id"), "html", null, true);
        echo "\" class=\"cms-block cms-block-element\">
    ";
        // line 12
        $this->displayBlock('block', $context, $blocks);
        // line 13
        echo "</div>";
    }

    // line 12
    public function block_block($context, array $blocks = array())
    {
        echo "EMPTY CONTENT";
    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 13,  23 => 12,  18 => 11,  113 => 47,  107 => 46,  102 => 43,  98 => 41,  96 => 40,  91 => 39,  84 => 37,  76 => 33,  69 => 31,  64 => 30,  62 => 29,  54 => 26,  47 => 24,  39 => 19,  34 => 16,  29 => 12,  86 => 38,  80 => 35,  74 => 32,  71 => 27,  67 => 26,  63 => 24,  57 => 27,  51 => 25,  48 => 20,  44 => 19,  40 => 17,  37 => 16,  32 => 15,  26 => 14,);
    }
}
