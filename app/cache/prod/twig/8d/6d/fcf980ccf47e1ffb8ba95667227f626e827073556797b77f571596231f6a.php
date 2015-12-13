<?php

/* rjStreamBundle:Episodes:index.html.twig */
class __TwigTemplate_8d6dfcf980ccf47e1ffb8ba95667227f626e827073556797b77f571596231f6a extends Twig_Template
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
        echo "S";
        echo twig_escape_filter($this->env, (isset($context["s"]) ? $context["s"] : null), "html", null, true);
        echo "-E";
        echo twig_escape_filter($this->env, (isset($context["e"]) ? $context["e"] : null), "html", null, true);
        echo " - Game of Thrones";
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

    // line 15
    public function block_slider($context, array $blocks = array())
    {
    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        // line 18
        echo "    <h2>Saison ";
        echo twig_escape_filter($this->env, (isset($context["s"]) ? $context["s"] : null), "html", null, true);
        echo " Episode ";
        echo twig_escape_filter($this->env, (isset($context["e"]) ? $context["e"] : null), "html", null, true);
        echo "</h2>
    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            <a href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("rj_stream_saison", array("s" => (isset($context["s"]) ? $context["s"] : null))), "html", null, true);
        echo "\" class=\"titre-saison\">Saison ";
        echo twig_escape_filter($this->env, (isset($context["s"]) ? $context["s"] : null), "html", null, true);
        echo "</a>
            <span class=\"glyphicon glyphicon-triangle-right span\" aria-hidden=\"true\"></span>
            <a href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("rj_stream_episode", array("s" => (isset($context["s"]) ? $context["s"] : null), "e" => (isset($context["e"]) ? $context["e"] : null))), "html", null, true);
        echo "\" class=\"titre-saison\">Episode ";
        echo twig_escape_filter($this->env, (isset($context["e"]) ? $context["e"] : null), "html", null, true);
        echo " : ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["episode"]) ? $context["episode"] : null), "titre", array()), "html", null, true);
        echo "</a>
             
            <div class=\" col-xs-3 pull-right note\"> 
                <div class=\"progress\">
                    <div class=\"progress-bar progress-bar-success active note-plus\" style=\"width: ";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["episode"]) ? $context["episode"] : null), "note", array()), "html", null, true);
        echo "%;\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["episode"]) ? $context["episode"] : null), "nbnoteplus", array()), "html", null, true);
        echo " votes\">
                        <span class=\"glyphicon glyphicon-thumbs-up\" aria-hidden=\"true\"></span>
                        <span class=\"sr-only\">35% Complete (success)</span>
                    </div>
                    <div class=\"progress-bar progress-bar-danger note-moins\" style=\"width: ";
        // line 31
        echo twig_escape_filter($this->env, (100 - $this->getAttribute((isset($context["episode"]) ? $context["episode"] : null), "note", array())), "html", null, true);
        echo "%;\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["episode"]) ? $context["episode"] : null), "nbnotemoins", array()), "html", null, true);
        echo " votes\">
                        <span class=\"glyphicon glyphicon-thumbs-down\" aria-hidden=\"true\"></span>
                        <span class=\"sr-only\">35% Complete (danger)</span>
                    </div>
                </div>
            </div>          
        </div><!--end panel heading-->
        <div class=\"panel-body\">
            <div class=\"row\">
                <div class=\"col-xs-4\">
                    <a href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("rj_stream_episode", array("s" => (isset($context["s"]) ? $context["s"] : null), "e" => ((isset($context["e"]) ? $context["e"] : null) - 1))), "html", null, true);
        echo "\" class=\"thumbnail image-saison-left pull-left \">
                        <img src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/got.jpg"), "html", null, true);
        echo "\" alt=\"image saison ";
        echo twig_escape_filter($this->env, (isset($context["s"]) ? $context["s"] : null), "html", null, true);
        echo " episode 1\">
                    </a>
                </div>
                <div class=\"col-xs-4\">
                    <div class=\"row\">
                        <img src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/arrow2.1.png"), "html", null, true);
        echo "\" alt=\"arrow2\" class=\"pull-right image-ep-suiv-prec\">
                        <p class=\"next\" id=\"text-suivant\">Episode suivant</p>
                    </div>
                    <div class=\"row\">
                        <img src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/arrow1.1.png"), "html", null, true);
        echo "\" alt=\"arrow1\" class=\"pull-left image-ep-suiv-prec\">
                        <p class=\"next\" id=\"text-precedent\">Episode précédent</p>
                    </div>
                </div>
                <div class=\"col-xs-4\">
                    <a href=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("rj_stream_episode", array("s" => (isset($context["s"]) ? $context["s"] : null), "e" => ((isset($context["e"]) ? $context["e"] : null) + 1))), "html", null, true);
        echo "\" class=\"thumbnail image-saison-right pull-right\">
                        <img src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/got.jpg"), "html", null, true);
        echo "\" alt=\"image saison ";
        echo twig_escape_filter($this->env, (isset($context["s"]) ? $context["s"] : null), "html", null, true);
        echo " episode 1\" >
                    </a>
                </div>
            </div><!-- row -->
            <div class=\"jumbotron\">
                <p>Pour le moment un seul lecteur est à votre disposition : Purevid</p>
                <a class=\"lien-episode center-block\" data-toggle=\"collapse\" href=\"#collapseDescription\" aria-expanded=\"false\" aria-controls=\"collapseDescription\">
            Description de l'épisode
            </a>
            <div class=\"collapse\" id=\"collapseDescription\">
                <div class=\"well center\">
                    <p class=\"description_episode\">";
        // line 68
        echo nl2br(twig_escape_filter($this->env, $this->getAttribute((isset($context["episode"]) ? $context["episode"] : null), "description", array()), "html", null, true));
        echo "</p>
                </div>
            </div>

            </div>
            <ul class=\"nav nav-tabs nav-justified\">
                <li role=\"presentation\" class=\"dropdown active\">
                    <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-expanded=\"false\">
                      PureVid <span class=\"caret\"></span>
                    </a>
                    <ul class=\"dropdown-menu\" role=\"menu\">
                        <li><a href=\"#\">VF</a></li>
                        <li class=\"divider\"></li>
                        <li><a href=\"#\">VOST</a></li>
                    </ul>
                </li>
                <li role=\"presentation\" class=\"dropdown disabled\">
                    <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-expanded=\"false\">
                  Exashare <span class=\"caret\"></span>
                    </a>
                    <ul class=\"dropdown-menu\" role=\"menu\">
                        <li class=\"disabled\"><a href=\"#\" >VF</a></li>
                        <li class=\"divider\"></li>
                        <li class=\"disabled\"><a href=\"#\">VOST</a></li>
                    </ul>
                </li>
                <li role=\"presentation\" class=\"dropdown disabled\">
                    <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-expanded=\"false\">
                  MyStream <span class=\"caret\"></span>
                    </a>
                    <ul class=\"dropdown-menu\" role=\"menu\">
                        <li class=\"disabled\"><a href=\"#\">VF</a></li>
                        <li class=\"divider\"></li>
                        <li class=\"disabled\"><a href=\"#\">VOST</a></li>
                    </ul>
                </li>
            </ul>
            <div class=\"hebergeur\">
                <p class=\"next\">Selectionez l'hébergeur</p>
                <img src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/arrow4.png"), "html", null, true);
        echo "\" alt=\"arrow2\" class=\"\">
                
            </div>
            <div>            
                <iframe class=\"center-block iframe\" width=\"645px\" height=\"360px\" frameborder=\"0\" src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["episode"]) ? $context["episode"] : null), "lien", array()), "html", null, true);
        echo "\"></iframe>
            </div>
            <a class=\"lien-episode center-block\" data-toggle=\"collapse\" href=\"#collapseExample\" aria-expanded=\"false\" aria-controls=\"collapseExample\">
            Liens épisodes
            </a>
            <div class=\"collapse\" id=\"collapseExample\">
                <div class=\"well center\">
                    <a href=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["episode"]) ? $context["episode"] : null), "lien", array()), "html", null, true);
        echo "\">Purevid link </a>
                    
                </div>
            </div>
        </div>  
        <div class=\"row\">
            <div class=\"col-xs-4\">
                <div class=\"fb-like share-fb center-block\" data-href=\"http://www.brostreaming.com";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("rj_stream_episode", array("s" => (isset($context["s"]) ? $context["s"] : null), "e" => (isset($context["e"]) ? $context["e"] : null))), "html", null, true);
        echo "\" data-width=\"100%\" data-layout=\"button_count\" data-action=\"like\" data-show-faces=\"true\" data-share=\"true\">
                </div>
            </div>
            <div class=\"col-xs-5  pull-right\">
                <p class=\"next text-right mort\">Liens mort ?<img src=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/arrow3.png"), "html", null, true);
        echo "\" alt=\"image flèche 3\">
                    <button type=\"button\" class=\"hid\" ><span class=\"glyphicon glyphicon-ban-circle\" aria-hidden=\"true\"></span>
                    </button>
                </p>
            </div>
        </div>
    </div>
    <div class=\"alert alert-success alert-dismissible hidden\" role=\"alert\">
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
        <strong>Merci!</strong> Votre signalement à été pris en compte.
    </div>
    <div class=\"jumbotron\">
        <div class=\"fb-comments\" data-href=\"http://www.brostreaming.com";
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("rj_stream_episode", array("s" => (isset($context["s"]) ? $context["s"] : null), "e" => (isset($context["e"]) ? $context["e"] : null))), "html", null, true);
        echo "\" data-width=\"100%\"data-numposts=\"5\" data-colorscheme=\"light\">
        </div>
    </div>
";
    }

    // line 145
    public function block_javascripts($context, array $blocks = array())
    {
        // line 146
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "  
    <div id=\"fb-root\"></div>
    <script>
    window.fbAsyncInit = function() {
    FB.init({
      appId      : '829756837071815',
      xfbml      : true,
      version    : 'v2.3'
    });
    };

    (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = \"//connect.facebook.net/en_US/sdk.js\";
     fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
    </script>
    <script src=\"";
        // line 165
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/episode.js"), "html", null, true);
        echo "\"></script>

    <script>
    \$('document').ready(function() {
        var episode = ";
        // line 169
        echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute((isset($context["episode"]) ? $context["episode"] : null), "episode", array())), "html", null, true);
        echo ";
        var saison = ";
        // line 170
        echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute((isset($context["episode"]) ? $context["episode"] : null), "saison", array())), "html", null, true);
        echo ";
        \$('.note-plus').click(function(){
            \$.ajax({
                type: 'get',
                
                url: Routing.generate('rj_stream_episode_notation', { saison: saison, episode: episode, note:1}),
                beforeSend: function() {
                    console.log('Chargement');
                    \$('.note-plus').addClass('progress-bar-striped active');
                },
                success: function(data) {
                    console.log(data.note);   
                    if(data.note != \"\")
                    {        
                        \$('.note-plus').css('width',data.note+'%');
                        \$('.note-moins').css('width',100 - data.note+'%');
                        \$('.note-plus').attr('data-original-title', data.nbplus+' votes');
                    }
                    \$('.note-plus').removeClass('progress-bar-striped active');

                }
            });
        });
        \$('.note-moins').click(function(){
            \$.ajax({
                type: 'get',
                url: Routing.generate('rj_stream_episode_notation', { saison: saison, episode: episode, note:0}),
                beforeSend: function() {
                    console.log('Chargement');
                    \$('.note-moins').addClass('progress-bar-striped active');
                },
                success: function(data) {
                    console.log(data.note);
                    if(data.note != \"\")
                    {
                        \$('.note-plus').css('width',data.note+'%');
                        \$('.note-moins').css('width',100 - data.note+'%');
                        \$('.note-moins').attr('data-original-title', data.nbmoins+' votes');
                    }
                    \$('.note-moins').removeClass('progress-bar-striped active');
                }
            });
        });
    });
    </script>
";
    }

    public function getTemplateName()
    {
        return "rjStreamBundle:Episodes:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  326 => 170,  322 => 169,  315 => 165,  292 => 146,  289 => 145,  281 => 141,  266 => 129,  259 => 125,  249 => 118,  239 => 111,  232 => 107,  190 => 68,  174 => 57,  170 => 56,  162 => 51,  155 => 47,  145 => 42,  141 => 41,  126 => 31,  117 => 27,  106 => 23,  99 => 21,  90 => 18,  87 => 17,  82 => 15,  75 => 13,  72 => 12,  65 => 10,  62 => 9,  52 => 8,  45 => 5,  42 => 4,  11 => 2,);
    }
}
