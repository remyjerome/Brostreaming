<?php

/* rjStreamBundle:Saisons:index.html.twig */
class __TwigTemplate_4aada324411de3ef542a7a67e9b845173cf7289c0f0f9f8d7d7bfed2f6ba5062 extends Twig_Template
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
";
    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        // line 9
        echo "Saison ";
        echo twig_escape_filter($this->env, (isset($context["s"]) ? $context["s"] : $this->getContext($context, "s")), "html", null, true);
        echo " - Game of Thrones
";
    }

    // line 11
    public function block_sidebar($context, array $blocks = array())
    {
        // line 12
        echo "    ";
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "  
";
    }

    // line 14
    public function block_slider($context, array $blocks = array())
    {
    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        // line 17
        echo "    <h2>Saison ";
        echo twig_escape_filter($this->env, (isset($context["s"]) ? $context["s"] : $this->getContext($context, "s")), "html", null, true);
        echo "</h2>
    ";
        // line 18
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["episodes"]) ? $context["episodes"] : $this->getContext($context, "episodes")));
        foreach ($context['_seq'] as $context["_key"] => $context["episode"]) {
            // line 19
            echo "        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                    <a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("rj_stream_saison", array("s" => (isset($context["s"]) ? $context["s"] : $this->getContext($context, "s")))), "html", null, true);
            echo "\" class=\"titre-saison\">Saison ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["episode"], "saison", array()), "html", null, true);
            echo "</a>
                    <span class=\"glyphicon glyphicon-triangle-right span\" aria-hidden=\"true\"></span>
                    <a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("rj_stream_episode", array("s" => (isset($context["s"]) ? $context["s"] : $this->getContext($context, "s")), "e" => $this->getAttribute($context["episode"], "episode", array()))), "html", null, true);
            echo "\" class=\"titre-saison\">Episode ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["episode"], "episode", array()), "html", null, true);
            echo " : ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["episode"], "titre", array()), "html", null, true);
            echo "</a>
                    <div class=\"col-xs-1 pull-right text-center span-vue\">
                        <span class=\"glyphicon glyphicon-eye-open span span-vue\"> ";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["episode"], "vue", array()), "html", null, true);
            echo "</span>

                    </div>
            </div>
            <div class=\"panel-body\">
                <a href=\"#\" class=\"thumbnail image-saison\">
                    <img src=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/got.jpg"), "html", null, true);
            echo "\" alt=\"image saison ";
            echo twig_escape_filter($this->env, (isset($context["s"]) ? $context["s"] : $this->getContext($context, "s")), "html", null, true);
            echo " episode ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["episode"], "episode", array()), "html", null, true);
            echo "\" >
                </a>
                <p>
                    Bientôt la description.
                </p>
                <div class=\"pull-right\">
                    <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("rj_stream_episode", array("s" => $this->getAttribute($context["episode"], "saison", array()), "e" => $this->getAttribute($context["episode"], "episode", array()))), "html", null, true);
            echo "\" class=\"btn btn-default\">Play <span class=\"glyphicon glyphicon-play-circle\"></span></a>
                </div>
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['episode'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 43
    public function block_javascripts($context, array $blocks = array())
    {
        // line 44
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo " 
    <script src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/saison.js"), "html", null, true);
        echo "\"></script> 
";
    }

    public function getTemplateName()
    {
        return "rjStreamBundle:Saisons:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 45,  146 => 44,  143 => 43,  130 => 37,  117 => 31,  108 => 25,  99 => 23,  92 => 21,  88 => 19,  84 => 18,  79 => 17,  76 => 16,  71 => 14,  64 => 12,  61 => 11,  54 => 9,  51 => 8,  44 => 5,  41 => 4,  11 => 2,);
    }
}
