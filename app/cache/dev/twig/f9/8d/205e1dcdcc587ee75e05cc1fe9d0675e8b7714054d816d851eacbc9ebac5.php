<?php

/* rjStreamBundle:News:index.html.twig */
class __TwigTemplate_f98d205e1dcdcc587ee75e05cc1fe9d0675e8b7714054d816d851eacbc9ebac5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        try {
            $this->parent = $this->env->loadTemplate("::base.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(2);

            throw $e;
        }

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'title' => array($this, 'block_title'),
            'sidebar' => array($this, 'block_sidebar'),
            'slider' => array($this, 'block_slider'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/fontello/fontello.css"), "html", null, true);
        echo "\">
    <!--[if IE 7]><link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/fontello/fontello-ie7.css"), "html", null, true);
        echo "\"><![endif]-->
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/fontello/animation.css"), "html", null, true);
        echo "\">
";
    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        echo "News - Game of Thrones";
    }

    // line 14
    public function block_sidebar($context, array $blocks = array())
    {
        // line 15
        echo "    ";
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "  
";
    }

    // line 17
    public function block_slider($context, array $blocks = array())
    {
    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
        // line 20
        echo "    <h2>News</h2>
    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            <div class=\"row\">
                <div class=\"col-xs-12\">
                    <h3 class=\"panel-title\">Dates de sortie officielles des episodes</h3>
                </div>
            </div>
        </div>
        <div class=\"panel-body\">
            <div class=\"table-responsive\">
                <table class=\"table table-hover table-condensed\">
                    <tr>
                        <th>Saison</th>
                        <th>Episode</th> 
                        <th>Titre</th>
                        <th>Date de diffusion</th>
                    </tr>
                    <tr class=\"active\">
                        <td>5</td>
                        <td>01</td> 
                        <td>The Wars to Come</td>
                        <td>12 Avril 2015</td>
                    </tr>
                    <tr class=\"active\">
                        <td>5</td>
                        <td>02</td> 
                        <td>The House of Black and White</td>
                        <td>19 Avril 2015</td>
                    </tr>
                    <tr class=\"active\">
                        <td>5</td>
                        <td>03</td> 
                        <td>High Sparrow</td>
                        <td>26 Avril 2015</td>
                    </tr>
                    <tr class=\"active\">
                        <td>5</td>
                        <td>04</td> 
                        <td>The Sons of the Harpy</td>
                        <td>03 Mai 2015</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>05</td> 
                        <td>Kill the Boy</td>
                        <td>10 Mai 2015</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>06</td> 
                        <td>Unbowed, Unbent, Unbroken</td>
                        <td>17 Mai 2015</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>07</td> 
                        <td>The Gift</td>
                        <td>24 Mai 2015</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>08</td> 
                        <td>Titre inconnu</td>
                        <td>31 Mai 2015</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>09</td> 
                        <td>Titre inconnu</td>
                        <td>07 Juin 2015</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>10</td> 
                        <td>Titre inconnu</td>
                        <td>14 Juin 2015</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    ";
        // line 102
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")));
        foreach ($context['_seq'] as $context["_key"] => $context["new"]) {
            // line 103
            echo "    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            <div class=\"row\">
                <div class=\"col-xs-12\">
                    <h3 class=\"panel-title\">";
            // line 107
            echo twig_escape_filter($this->env, $this->getAttribute($context["new"], "titre", array()), "html", null, true);
            echo "  <span class=\"label label-default color-red\">New</span></h3>
                </div>

                <div class=\"col-xs-12\">
                    <span class=\"icon-pencil span\"><p class=\"info-news\">";
            // line 111
            echo twig_escape_filter($this->env, $this->getAttribute($context["new"], "auteur", array()), "html", null, true);
            echo "</p></span>
                    <span class=\"icon-clock-1 span\"><p class=\"info-news\">";
            // line 112
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["new"], "date", array()), "m/d/Y"), "html", null, true);
            echo "</p></span>
                    <span class=\"icon-tag span\"><p class=\"info-news\">";
            // line 113
            echo twig_escape_filter($this->env, $this->getAttribute($context["new"], "tag1", array()), "html", null, true);
            echo "</p><p class=\"info-news\"> - ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["new"], "tag2", array()), "html", null, true);
            echo "</p><p class=\"info-news\"> - ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["new"], "tag3", array()), "html", null, true);
            echo "</p></span>
                </div>
            </div>
        </div>
        <div id=\"";
            // line 117
            echo twig_escape_filter($this->env, $this->getAttribute($context["new"], "id", array()), "html", null, true);
            echo "\" class=\"panel-body\">
                    <a href=\"#\" id=\"image-saison-";
            // line 118
            echo twig_escape_filter($this->env, $this->getAttribute($context["new"], "id", array()), "html", null, true);
            echo "\" class=\"thumbnail image-saison\">
                        <img src=\"";
            // line 119
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["new"], "image", array()), "html", null, true);
            echo "\" alt=\"image saison episode 1\" >
                    </a>
                    <p id=\"description-news-";
            // line 121
            echo twig_escape_filter($this->env, $this->getAttribute($context["new"], "id", array()), "html", null, true);
            echo "\" class=\"text-justify description-news\">";
            echo nl2br(twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute($context["new"], "description", array()), 450, true, " ..."), "html", null, true));
            echo "</p>
                    <div class=\"col-xs-12 text-center\">
                        <span onclick=\"newsplus(this,";
            // line 123
            echo twig_escape_filter($this->env, $this->getAttribute($context["new"], "id", array()), "html", null, true);
            echo ");\" id=\"news-plus-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["new"], "id", array()), "html", null, true);
            echo "\" class=\"icon-angle-circled-down span news-plus\"></span>
                        <span onclick=\"newsmoins(this,";
            // line 124
            echo twig_escape_filter($this->env, $this->getAttribute($context["new"], "id", array()), "html", null, true);
            echo ");\"  id=\"news-moins-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["new"], "id", array()), "html", null, true);
            echo "\" class=\"icon-angle-circled-up span news-moins\"></span>
                    </div>
        </div>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['new'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 130
    public function block_javascripts($context, array $blocks = array())
    {
        // line 131
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo " 
    <script src=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/news.js"), "html", null, true);
        echo "\"></script> 
    <script src=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/news-plus.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "rjStreamBundle:News:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  262 => 133,  258 => 132,  253 => 131,  250 => 130,  235 => 124,  229 => 123,  222 => 121,  216 => 119,  212 => 118,  208 => 117,  197 => 113,  193 => 112,  189 => 111,  182 => 107,  176 => 103,  172 => 102,  88 => 20,  85 => 19,  80 => 17,  73 => 15,  70 => 14,  64 => 12,  58 => 9,  54 => 8,  50 => 7,  44 => 5,  41 => 4,  11 => 2,);
    }
}
