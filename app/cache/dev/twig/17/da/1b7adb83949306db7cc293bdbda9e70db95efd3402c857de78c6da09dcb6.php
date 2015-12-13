<?php

/* rjStreamBundle:Home:index.html.twig */
class __TwigTemplate_17da1b7adb83949306db7cc293bdbda9e70db95efd3402c857de78c6da09dcb6 extends Twig_Template
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
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/fontello/fontello.css"), "html", null, true);
        echo "\">
    <!--[if IE 7]><link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/fontello/fontello-ie7.css"), "html", null, true);
        echo "\"><![endif]-->
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/fontello/animation.css"), "html", null, true);
        echo "\">
";
    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        echo "Home - Game of Thrones";
    }

    // line 13
    public function block_sidebar($context, array $blocks = array())
    {
        // line 14
        echo "    ";
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "  
";
    }

    // line 16
    public function block_slider($context, array $blocks = array())
    {
        // line 17
        echo "    ";
        $this->displayParentBlock("slider", $context, $blocks);
        echo " 
";
    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
        // line 20
        echo "\t<h2>Dernière news</h2>
\t<div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            <div class=\"row\">
                <div class=\"col-xs-12\">
                    <h3 class=\"panel-title\">";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["new"]) ? $context["new"] : $this->getContext($context, "new")), "titre", array()), "html", null, true);
        echo "  <span class=\"label label-default color-red\">New</span></h3>
                </div>

                <div class=\"col-xs-12\">
                    <span class=\"icon-pencil span\"><p class=\"info-news\">";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["new"]) ? $context["new"] : $this->getContext($context, "new")), "auteur", array()), "html", null, true);
        echo "</p></span>
                    <span class=\"icon-clock-1 span\"><p class=\"info-news\">";
        // line 30
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["new"]) ? $context["new"] : $this->getContext($context, "new")), "date", array()), "m/d/Y"), "html", null, true);
        echo "</p></span>
                    <span class=\"icon-tag span\"><p class=\"info-news\">";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["new"]) ? $context["new"] : $this->getContext($context, "new")), "tag1", array()), "html", null, true);
        echo "</p><p class=\"info-news\"> - ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["new"]) ? $context["new"] : $this->getContext($context, "new")), "tag2", array()), "html", null, true);
        echo "</p><p class=\"info-news\"> - ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["new"]) ? $context["new"] : $this->getContext($context, "new")), "tag3", array()), "html", null, true);
        echo "</p></span>
                </div>
            </div>
        </div>
        <div id=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["new"]) ? $context["new"] : $this->getContext($context, "new")), "id", array()), "html", null, true);
        echo "\" class=\"panel-body\">
                    <a href=\"#\" id=\"image-saison-";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["new"]) ? $context["new"] : $this->getContext($context, "new")), "id", array()), "html", null, true);
        echo "\" class=\"thumbnail image-saison\">
                        <img  src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/"), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["new"]) ? $context["new"] : $this->getContext($context, "new")), "image", array()), "html", null, true);
        echo "\" alt=\"image saison episode 1\" >
                    </a>
                    <p id=\"description-news-";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["new"]) ? $context["new"] : $this->getContext($context, "new")), "id", array()), "html", null, true);
        echo "\" class=\"text-justify description-news\">";
        echo nl2br(twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute((isset($context["new"]) ? $context["new"] : $this->getContext($context, "new")), "description", array()), 450, true, " ..."), "html", null, true));
        echo "</p>
                    <div class=\"col-xs-12 text-center\">
                        <span onclick=\"newsplus(this,";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["new"]) ? $context["new"] : $this->getContext($context, "new")), "id", array()), "html", null, true);
        echo ");\" id=\"news-plus-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["new"]) ? $context["new"] : $this->getContext($context, "new")), "id", array()), "html", null, true);
        echo "\" class=\"icon-angle-circled-down span news-plus\"></span>
                        <span onclick=\"newsmoins(this,";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["new"]) ? $context["new"] : $this->getContext($context, "new")), "id", array()), "html", null, true);
        echo ");\"  id=\"news-moins-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["new"]) ? $context["new"] : $this->getContext($context, "new")), "id", array()), "html", null, true);
        echo "\" class=\"icon-angle-circled-up span news-moins\"></span>
                    </div>
        </div>
    </div>
    <h2>Dernier episode</h2>
    <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                    <a href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("rj_stream_saison", array("s" => $this->getAttribute((isset($context["episode"]) ? $context["episode"] : $this->getContext($context, "episode")), "saison", array()))), "html", null, true);
        echo "\" class=\"titre-saison\">Saison ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["episode"]) ? $context["episode"] : $this->getContext($context, "episode")), "saison", array()), "html", null, true);
        echo "</a>
                    <span class=\"glyphicon glyphicon-triangle-right span\" aria-hidden=\"true\"></span>
                    <a href=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("rj_stream_episode", array("s" => $this->getAttribute((isset($context["episode"]) ? $context["episode"] : $this->getContext($context, "episode")), "saison", array()), "e" => $this->getAttribute((isset($context["episode"]) ? $context["episode"] : $this->getContext($context, "episode")), "episode", array()))), "html", null, true);
        echo "\" class=\"titre-saison\">Episode ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["episode"]) ? $context["episode"] : $this->getContext($context, "episode")), "episode", array()), "html", null, true);
        echo " : ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["episode"]) ? $context["episode"] : $this->getContext($context, "episode")), "titre", array()), "html", null, true);
        echo "</a>
                    <div class=\"col-xs-1 pull-right text-center span-vue\">
                        <span class=\"glyphicon glyphicon-eye-open span span-vue\"> ";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["episode"]) ? $context["episode"] : $this->getContext($context, "episode")), "vue", array()), "html", null, true);
        echo "</span>

                    </div>
                    
            </div>
            <div class=\"panel-body\">
                <a href=\"#\" class=\"thumbnail image-saison\">
                    <img src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/got.jpg"), "html", null, true);
        echo "\" alt=\"image saison ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["episode"]) ? $context["episode"] : $this->getContext($context, "episode")), "saison", array()), "html", null, true);
        echo " episode ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["episode"]) ? $context["episode"] : $this->getContext($context, "episode")), "episode", array()), "html", null, true);
        echo "\" >
                </a>
                <p>
                    Bientôt la description.
                </p>
                <div class=\"pull-right\">
                    <a href=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("rj_stream_episode", array("s" => $this->getAttribute((isset($context["episode"]) ? $context["episode"] : $this->getContext($context, "episode")), "saison", array()), "e" => $this->getAttribute((isset($context["episode"]) ? $context["episode"] : $this->getContext($context, "episode")), "episode", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">Play <span class=\"glyphicon glyphicon-play-circle span\"></span></a>
                </div>
            </div>
        </div>
";
    }

    // line 71
    public function block_javascripts($context, array $blocks = array())
    {
        // line 72
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo " 
    <script src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/home.js"), "html", null, true);
        echo "\"></script>
    <!-- Web storage -->
    <script src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/webstorage.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/news-plus.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "rjStreamBundle:Home:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  229 => 76,  225 => 75,  220 => 73,  215 => 72,  212 => 71,  203 => 66,  190 => 60,  180 => 53,  171 => 51,  164 => 49,  152 => 42,  146 => 41,  139 => 39,  133 => 37,  129 => 36,  125 => 35,  114 => 31,  110 => 30,  106 => 29,  99 => 25,  92 => 20,  89 => 19,  82 => 17,  79 => 16,  72 => 14,  69 => 13,  63 => 11,  57 => 8,  53 => 7,  49 => 6,  44 => 5,  41 => 4,  11 => 2,);
    }
}
