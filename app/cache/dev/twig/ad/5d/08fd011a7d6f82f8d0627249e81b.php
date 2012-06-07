<?php

/* SonataAdminBundle::standard_layout.html.twig */
class __TwigTemplate_ad5d08fd011a7d6f82f8d0627249e81b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'logo' => array($this, 'block_logo'),
            'notice' => array($this, 'block_notice'),
            'actions' => array($this, 'block_actions'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        $context["_preview"] = $this->renderBlock("preview", $context, $blocks);
        // line 12
        $context["_form"] = $this->renderBlock("form", $context, $blocks);
        // line 13
        $context["_show"] = $this->renderBlock("show", $context, $blocks);
        // line 14
        $context["_list_table"] = $this->renderBlock("list_table", $context, $blocks);
        // line 15
        $context["_list_filters"] = $this->renderBlock("list_filters", $context, $blocks);
        // line 16
        $context["_side_menu"] = $this->renderBlock("side_menu", $context, $blocks);
        // line 17
        $context["_content"] = $this->renderBlock("content", $context, $blocks);
        // line 18
        $context["_title"] = $this->renderBlock("title", $context, $blocks);
        // line 19
        $context["_breadcrumb"] = $this->renderBlock("breadcrumb", $context, $blocks);
        // line 20
        echo "<!DOCTYPE html>
<html class=\"no-js\">
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />

        ";
        // line 25
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 35
        echo "
        ";
        // line 36
        $this->displayBlock('javascripts', $context, $blocks);
        // line 53
        echo "
        <title>
            ";
        // line 55
        echo $this->env->getExtension('translator')->getTranslator()->trans("Admin", array(), "SonataAdminBundle");
        // line 56
        echo "
            ";
        // line 57
        if ((!twig_test_empty($this->getContext($context, "_title")))) {
            // line 58
            echo "                ";
            echo $this->getContext($context, "_title");
            echo "
            ";
        } else {
            // line 60
            echo "                ";
            if (array_key_exists("action", $context)) {
                // line 61
                echo "                    -
                    ";
                // line 62
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "admin"), "breadcrumbs", array(0 => $this->getContext($context, "action")), "method"));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["label"] => $context["uri"]) {
                    // line 63
                    echo "                        ";
                    if ((!$this->getAttribute($this->getContext($context, "loop"), "first"))) {
                        // line 64
                        echo "                            &gt;
                        ";
                    }
                    // line 66
                    echo "                        ";
                    echo twig_escape_filter($this->env, $this->getContext($context, "label"), "html", null, true);
                    echo "
                    ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['label'], $context['uri'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 68
                echo "                ";
            }
            // line 69
            echo "            ";
        }
        // line 70
        echo "        </title>
    </head>
    <body class=\"sonata-bc ";
        // line 72
        if (twig_test_empty($this->getContext($context, "_side_menu"))) {
            echo "sonata-ba-no-side-menu";
        }
        echo "\">
        ";
        // line 74
        echo "
        <div class=\"topbar\" data-dropdown=\"dropdown\" >
            <div class=\"topbar\">
                <div class=\"topbar-inner\">
                    <div class=\"container-fluid\">
                        ";
        // line 79
        if (array_key_exists("admin_pool", $context)) {
            // line 80
            echo "                            ";
            $this->displayBlock('logo', $context, $blocks);
            // line 86
            echo "                            ";
            if ($this->getAttribute($this->getContext($context, "app"), "user")) {
                // line 87
                echo "                                <ul class=\"nav\">
                                    ";
                // line 88
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "admin_pool"), "dashboardgroups"));
                foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                    // line 89
                    echo "                                        <li class=\"dropdown\">
                                            <a href=\"#\" class=\"dropdown-toggle\">";
                    // line 90
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getContext($context, "group"), "label"), array(), $this->getAttribute($this->getContext($context, "group"), "label_catalogue")), "html", null, true);
                    echo "</a>
                                            <ul class=\"dropdown-menu\">
                                                ";
                    // line 92
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "group"), "items"));
                    foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                        // line 93
                        echo "                                                    ";
                        if ((($this->getAttribute($this->getContext($context, "admin"), "hasroute", array(0 => "create"), "method") && $this->getAttribute($this->getContext($context, "admin"), "isGranted", array(0 => "CREATE"), "method")) || ($this->getAttribute($this->getContext($context, "admin"), "hasroute", array(0 => "list"), "method") && $this->getAttribute($this->getContext($context, "admin"), "isGranted", array(0 => "LIST"), "method")))) {
                            // line 94
                            echo "                                                        <li><a href=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateUrl", array(0 => "list"), "method"), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getContext($context, "admin"), "label"), array(), $this->getAttribute($this->getContext($context, "admin"), "translationdomain")), "html", null, true);
                            echo "</a></li>
                                                    ";
                        }
                        // line 96
                        echo "                                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
                    $context = array_merge($_parent, array_intersect_key($context, $_parent));
                    // line 97
                    echo "                                            </ul>
                                        </li>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 100
                echo "                                </ul>
                            ";
            }
            // line 102
            echo "
                            <p class=\"pull-right\">";
            // line 103
            $template = $this->env->resolveTemplate($this->getAttribute($this->getContext($context, "admin_pool"), "getTemplate", array(0 => "user_block"), "method"));
            $template->display($context);
            echo "</p>
                        ";
        }
        // line 105
        echo "                    </div>
                </div>
            </div>
        </div>

        <div class=\"container-fluid\">
            ";
        // line 111
        if (((!twig_test_empty($this->getContext($context, "_breadcrumb"))) || array_key_exists("action", $context))) {
            // line 112
            echo "                <ul class=\"breadcrumb\">
                    ";
            // line 113
            if (twig_test_empty($this->getContext($context, "_breadcrumb"))) {
                // line 114
                echo "                        ";
                if (array_key_exists("action", $context)) {
                    // line 115
                    echo "                            ";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "admin"), "breadcrumbs", array(0 => $this->getContext($context, "action")), "method"));
                    $context['loop'] = array(
                      'parent' => $context['_parent'],
                      'index0' => 0,
                      'index'  => 1,
                      'first'  => true,
                    );
                    if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                        $length = count($context['_seq']);
                        $context['loop']['revindex0'] = $length - 1;
                        $context['loop']['revindex'] = $length;
                        $context['loop']['length'] = $length;
                        $context['loop']['last'] = 1 === $length;
                    }
                    foreach ($context['_seq'] as $context["label"] => $context["uri"]) {
                        // line 116
                        echo "                                ";
                        if ((!$this->getAttribute($this->getContext($context, "loop"), "last"))) {
                            // line 117
                            echo "                                    <li><a href=\"";
                            echo twig_escape_filter($this->env, $this->getContext($context, "uri"), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $this->getContext($context, "label"), "html", null, true);
                            echo "</a><span class=\"divider\">/</span></li>
                                ";
                        } else {
                            // line 119
                            echo "                                    <li class=\"active\">";
                            echo twig_escape_filter($this->env, $this->getContext($context, "label"), "html", null, true);
                            echo "</li>
                                ";
                        }
                        // line 121
                        echo "                            ";
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                        if (isset($context['loop']['length'])) {
                            --$context['loop']['revindex0'];
                            --$context['loop']['revindex'];
                            $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['label'], $context['uri'], $context['_parent'], $context['loop']);
                    $context = array_merge($_parent, array_intersect_key($context, $_parent));
                    // line 122
                    echo "                        ";
                }
                // line 123
                echo "                    ";
            } else {
                // line 124
                echo "                        ";
                echo $this->getContext($context, "_breadcrumb");
                echo "
                    ";
            }
            // line 126
            echo "                </ul>
            ";
        }
        // line 128
        echo "
            ";
        // line 129
        $this->displayBlock('notice', $context, $blocks);
        // line 140
        echo "
            <div style=\"float: right\">
                ";
        // line 142
        $this->displayBlock('actions', $context, $blocks);
        // line 143
        echo "            </div>

            ";
        // line 145
        if (((!twig_test_empty($this->getContext($context, "_title"))) || array_key_exists("action", $context))) {
            // line 146
            echo "                <div class=\"page-header\">
                    <h1>
                        ";
            // line 148
            if ((!twig_test_empty($this->getContext($context, "_title")))) {
                // line 149
                echo "                            ";
                echo $this->getContext($context, "_title");
                echo "
                        ";
            } elseif (array_key_exists("action", $context)) {
                // line 151
                echo "                            ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "admin"), "breadcrumbs", array(0 => $this->getContext($context, "action")), "method"));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["label"] => $context["uri"]) {
                    // line 152
                    echo "                                ";
                    if ($this->getAttribute($this->getContext($context, "loop"), "last")) {
                        // line 153
                        echo "                                    ";
                        echo twig_escape_filter($this->env, $this->getContext($context, "label"), "html", null, true);
                        echo "
                                ";
                    }
                    // line 155
                    echo "                            ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['label'], $context['uri'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 156
                echo "                        ";
            }
            // line 157
            echo "                    </h1>
                </div>
            ";
        }
        // line 160
        echo "
            ";
        // line 161
        if ((!twig_test_empty($this->getContext($context, "_side_menu")))) {
            // line 162
            echo "                <div class=\"sidebar\">
                    <div class=\"well sonata-ba-side-menu\">";
            // line 163
            echo $this->getContext($context, "_side_menu");
            echo "</div>
                </div>
            ";
        }
        // line 166
        echo "
            <div class=\"content\">

                ";
        // line 169
        if ((!twig_test_empty($this->getContext($context, "_preview")))) {
            // line 170
            echo "                    <div class=\"sonata-ba-preview\">";
            echo $this->getContext($context, "_preview");
            echo "</div>
                ";
        }
        // line 172
        echo "

                ";
        // line 174
        if ((!twig_test_empty($this->getContext($context, "_content")))) {
            // line 175
            echo "                    <div class=\"sonata-ba-content\">";
            echo $this->getContext($context, "_content");
            echo "</div>
                ";
        }
        // line 177
        echo "
                ";
        // line 178
        if ((!twig_test_empty($this->getContext($context, "_show")))) {
            // line 179
            echo "                    <div class=\"sonata-ba-show\">";
            echo $this->getContext($context, "_show");
            echo "</div>
                ";
        }
        // line 181
        echo "
                ";
        // line 182
        if ((!twig_test_empty($this->getContext($context, "_form")))) {
            // line 183
            echo "                    <div class=\"sonata-ba-form\">";
            echo $this->getContext($context, "_form");
            echo "</div>
                ";
        }
        // line 185
        echo "
                ";
        // line 186
        if (((!twig_test_empty($this->getContext($context, "_list_table"))) || (!twig_test_empty($this->getContext($context, "_list_filters"))))) {
            // line 187
            echo "                    <div class=\"sonata-ba-filter\">
                        ";
            // line 188
            echo $this->getContext($context, "_list_filters");
            echo "
                    </div>
                    <div class=\"sonata-ba-list\">
                        ";
            // line 191
            echo $this->getContext($context, "_list_table");
            echo "
                    </div>
                ";
        }
        // line 194
        echo "
                ";
        // line 195
        $this->displayBlock('footer', $context, $blocks);
        // line 200
        echo "            </div>
        </div>
    </body>
</html>

";
    }

    // line 25
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 26
        echo "            <!-- jQuery code -->
            <link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonatajquery/themes/flick/jquery-ui-1.8.16.custom.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />

            <link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/bootstrap/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" >

            <!-- base application asset -->
            <link rel=\"stylesheet\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/css/layout.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\">
            <link rel=\"stylesheet\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/css/colors.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\">
        ";
    }

    // line 36
    public function block_javascripts($context, array $blocks = array())
    {
        // line 37
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonatajquery/jquery-1.7.1.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonatajquery/jquery-ui-1.8.17.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonatajquery/jquery-ui-i18n.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

            <script src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/bootstrap/js/bootstrap-tabs.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/bootstrap/js/bootstrap-alerts.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/bootstrap/js/bootstrap-modal.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/bootstrap/js/bootstrap-twipsy.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/bootstrap/js/bootstrap-popover.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/bootstrap/js/bootstrap-scrollspy.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/bootstrap/js/bootstrap-dropdown.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

            <script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/qtip/jquery.qtip-1.0.0-rc3.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/jquery/jquery.form.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/base.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        ";
    }

    // line 80
    public function block_logo($context, array $blocks = array())
    {
        // line 81
        echo "                                <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("sonata_admin_dashboard"), "html", null, true);
        echo "\" class=\"brand\">
                                    <img src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getContext($context, "admin_pool"), "titlelogo")), "html", null, true);
        echo "\"  alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin_pool"), "title"), "html", null, true);
        echo "\" />
                                    ";
        // line 83
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin_pool"), "title"), "html", null, true);
        echo "
                                </a>
                            ";
    }

    // line 129
    public function block_notice($context, array $blocks = array())
    {
        // line 130
        echo "                ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(array(0 => "success", 1 => "error", 2 => "info", 3 => "warning"));
        foreach ($context['_seq'] as $context["_key"] => $context["notice_level"]) {
            // line 131
            echo "                    ";
            $context["session_var"] = ("sonata_flash_" . $this->getContext($context, "notice_level"));
            // line 132
            echo "                    ";
            if ($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "hasFlash", array(0 => $this->getContext($context, "session_var")), "method")) {
                // line 133
                echo "                        <div class=\"alert-message ";
                echo twig_escape_filter($this->env, $this->getContext($context, "notice_level"), "html", null, true);
                echo "\">
                            ";
                // line 134
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flash", array(0 => $this->getContext($context, "session_var")), "method"), array(), "SonataAdminBundle"), "html", null, true);
                echo "
                            ";
                // line 136
                echo "                        </div>
                    ";
            }
            // line 138
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notice_level'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 139
        echo "            ";
    }

    // line 142
    public function block_actions($context, array $blocks = array())
    {
    }

    // line 195
    public function block_footer($context, array $blocks = array())
    {
        // line 196
        echo "                    <div class=\"pull-right clearfix\">
                        <span class=\"label\"><a href=\"http://sonata-project.org\" rel=\"noreferrer\" style=\"text-decoration: none; color: black\">Sonata Project</a></span>
                    </div>
                ";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle::standard_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  616 => 196,  613 => 195,  608 => 142,  604 => 139,  598 => 138,  594 => 136,  590 => 134,  585 => 133,  582 => 132,  579 => 131,  574 => 130,  571 => 129,  564 => 83,  558 => 82,  553 => 81,  550 => 80,  544 => 51,  540 => 50,  536 => 49,  531 => 47,  527 => 46,  523 => 45,  519 => 44,  515 => 43,  511 => 42,  507 => 41,  502 => 39,  498 => 38,  493 => 37,  490 => 36,  484 => 33,  480 => 32,  474 => 29,  469 => 27,  466 => 26,  463 => 25,  454 => 200,  452 => 195,  449 => 194,  443 => 191,  437 => 188,  434 => 187,  432 => 186,  429 => 185,  423 => 183,  421 => 182,  418 => 181,  412 => 179,  410 => 178,  407 => 177,  401 => 175,  399 => 174,  395 => 172,  389 => 170,  387 => 169,  382 => 166,  376 => 163,  373 => 162,  371 => 161,  368 => 160,  363 => 157,  360 => 156,  346 => 155,  340 => 153,  337 => 152,  319 => 151,  313 => 149,  311 => 148,  307 => 146,  305 => 145,  301 => 143,  299 => 142,  295 => 140,  293 => 129,  290 => 128,  286 => 126,  280 => 124,  277 => 123,  274 => 122,  260 => 121,  254 => 119,  246 => 117,  243 => 116,  225 => 115,  222 => 114,  220 => 113,  217 => 112,  215 => 111,  207 => 105,  201 => 103,  198 => 102,  194 => 100,  186 => 97,  180 => 96,  172 => 94,  169 => 93,  165 => 92,  160 => 90,  157 => 89,  153 => 88,  150 => 87,  147 => 86,  144 => 80,  142 => 79,  135 => 74,  129 => 72,  125 => 70,  122 => 69,  119 => 68,  102 => 66,  98 => 64,  95 => 63,  78 => 62,  75 => 61,  72 => 60,  66 => 58,  64 => 57,  61 => 56,  59 => 55,  53 => 36,  50 => 35,  48 => 25,  41 => 20,  35 => 17,  33 => 16,  31 => 15,  29 => 14,  25 => 12,  23 => 11,  84 => 37,  76 => 32,  63 => 22,  55 => 53,  49 => 14,  45 => 12,  39 => 19,  37 => 18,  32 => 7,  27 => 13,  24 => 3,);
    }
}
