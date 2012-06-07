<?php

/* SonataUserBundle:Admin:Security/login.html.twig */
class __TwigTemplate_3eb747e10e0d110d7e29b18cf41710b0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
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

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "
    <div class=\"row\">
        <div class=\"span8 offset5 border connection\">
            <form class=\"form-stacked\" action=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sonata_user_admin_security_check"), "html", null, true);
        echo "\" method=\"post\">

                ";
        // line 9
        if ($this->getContext($context, "error")) {
            // line 10
            echo "                    <div class=\"alert-message error\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "error"), array(), "SonataUserBundle"), "html", null, true);
            echo "</div>
                ";
        }
        // line 12
        echo "
                <div class=\"clearfix\">
                    <label for=\"username\">";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>

                    <div class=\"input\">
                        <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->getContext($context, "last_username"), "html", null, true);
        echo "\" class=\"big sonata-medium\"/>
                    </div>
                </div>

                <div class=\"clearfix\">
                    <label for=\"password\">";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>

                    <div class=\"input\">
                        <input type=\"password\" id=\"password\" name=\"_password\" class=\"big sonata-medium\" />
                    </div>
                </div>

                <div class=\"clearfix\">
                    <label for=\"remember_me\">
                        <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                        ";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "
                    </label>
                </div>

                <div class=\"actions\">
                    <input type=\"submit\" class=\"btn primary\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
                </div>
            </form>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Admin:Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 37,  76 => 32,  63 => 22,  55 => 17,  49 => 14,  45 => 12,  39 => 10,  37 => 9,  32 => 7,  27 => 4,  24 => 3,);
    }
}
