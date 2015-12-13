<?php

/* rjStreamBundle:Episodes:all.html.twig */
class __TwigTemplate_3ced8ca06620e6e899fb8a2bec9f84d5c958dbe102ab1e478d99ce9fd0a77465 extends Twig_Template
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
            'navbar' => array($this, 'block_navbar'),
            'sidebar' => array($this, 'block_sidebar'),
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
        echo "Tous les épisodes - Game of Thrones";
    }

    // line 9
    public function block_navbar($context, array $blocks = array())
    {
        // line 10
        echo "    ";
        $this->displayParentBlock("navbar", $context, $blocks);
        echo "  
";
    }

    // line 12
    public function block_sidebar($context, array $blocks = array())
    {
        // line 13
        echo "    ";
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "  
";
    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        // line 17
        echo "    <div class=\"list-group\">
        <a href=\"#\" class=\"list-group-item disabled\">
        Cras justo odio
        </a>
        <a href=\"#\" class=\"list-group-item\">Dapibus ac facilisis in</a>
        <a href=\"#\" class=\"list-group-item\">Morbi leo risus</a>
        <a href=\"#\" class=\"list-group-item\">Porta ac consectetur ac</a>
        <a href=\"#\" class=\"list-group-item\">Vestibulum at eros</a>
    </div>
";
    }

    // line 27
    public function block_javascripts($context, array $blocks = array())
    {
        // line 28
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "  
    <script src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/episode.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "rjStreamBundle:Episodes:all.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 29,  96 => 28,  93 => 27,  80 => 17,  77 => 16,  70 => 13,  67 => 12,  60 => 10,  57 => 9,  51 => 8,  44 => 5,  41 => 4,  11 => 2,);
    }
}
