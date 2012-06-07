<?php

/* SonataAdminBundle:Core:dashboard.html.twig */
class __TwigTemplate_aa35b28fee4d0061533df262d43868ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate($this->getContext($context, "base_template"));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        echo $this->env->getExtension('translator')->getTranslator()->trans("title_dashboard", array(), "SonataAdminBundle");
    }

    // line 15
    public function block_breadcrumb($context, array $blocks = array())
    {
    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        // line 17
        echo "    <div class=\"row\">
        <div class=\"span9\">
            ";
        // line 19
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "blocks"));
        foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
            // line 20
            echo "                ";
            if (($this->getAttribute($this->getContext($context, "block"), "position") == "left")) {
                // line 21
                echo "                    ";
                echo $this->env->getExtension('sonata_block')->renderBlock(array("type" => $this->getAttribute($this->getContext($context, "block"), "type"), "settings" => $this->getAttribute($this->getContext($context, "block"), "settings")));
                echo "
                ";
            }
            // line 23
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 24
        echo "        </div>
        <div class=\"span10\">
            ";
        // line 26
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "blocks"));
        foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
            // line 27
            echo "                ";
            if (($this->getAttribute($this->getContext($context, "block"), "position") == "right")) {
                // line 28
                echo "                    ";
                echo $this->env->getExtension('sonata_block')->renderBlock(array("type" => $this->getAttribute($this->getContext($context, "block"), "type"), "settings" => $this->getAttribute($this->getContext($context, "block"), "settings")));
                echo "
                ";
            }
            // line 30
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 31
        echo "        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Core:dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 31,  80 => 30,  74 => 28,  71 => 27,  67 => 26,  63 => 24,  57 => 23,  51 => 21,  48 => 20,  44 => 19,  40 => 17,  37 => 16,  32 => 15,  26 => 14,);
    }
}
