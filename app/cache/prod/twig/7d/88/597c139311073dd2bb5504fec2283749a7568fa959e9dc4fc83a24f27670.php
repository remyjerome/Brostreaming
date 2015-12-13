<?php

/* ::base.html.twig */
class __TwigTemplate_7d88597c139311073dd2bb5504fec2283749a7568fa959e9dc4fc83a24f27670 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'navbar' => array($this, 'block_navbar'),
            'slider' => array($this, 'block_slider'),
            'body' => array($this, 'block_body'),
            'sidebar' => array($this, 'block_sidebar'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
  <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <meta name=\"description\" content=\"Regardez et reregardez tous les épisodes de Game of Thrones en Streaming HD VF et VOSTFR\">
    <meta name=\"author\" content=\"RJ\">
    <meta name=\"copyright\" content=\"© BroStreaming.com\" />
    <meta name=\"keywords\" content=\"Game of Thrones, épisode, saison, streaming, HBO, saison 5, HD, VO, VOSTFR\" />
    <link rel=\"icon\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Stark.ico"), "html", null, true);
        echo "\">

    <title>";
        // line 14
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 15
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 24
        echo "     
  </head>

  <body>
    ";
        // line 28
        $this->displayBlock('navbar', $context, $blocks);
        // line 75
        echo "    <div class=\"container\">
      ";
        // line 76
        $this->displayBlock('slider', $context, $blocks);
        // line 122
        echo "        <hr>
      <div class=\"row row-offcanvas row-offcanvas-right\">

        <section class=\"col-xs-12 col-sm-12 col-md-9 col-lg-8\">
        <p class=\"pull-right visible-xs visible-sm\">
            <button type=\"button\" class=\"btn btn-primary btn-xs\" data-toggle=\"offcanvas\">Toggle nav</button>
        </p>
        ";
        // line 129
        $this->displayBlock('body', $context, $blocks);
        // line 133
        echo "        </section><!--/.col-xs-12.col-sm-9-->

        <div class=\"col-xs-3 col-sm-3 col-md-3 col-lg-4 sidebar-offcanvas\" id=\"sidebar\">
          ";
        // line 136
        $this->displayBlock('sidebar', $context, $blocks);
        // line 152
        echo "        </div><!--/.sidebar-offcanvas-->
      </div><!--/row-->

      <hr>

      <footer>
        <p>&copy; brostreaming.com 2015</p>
        <p>Avertissement légal : Brostreaming.com n'héberge aucun fichier vidéo sur ses serveurs. Nous ne répertorions que des vidéos en provenance d'hébergeurs légaux. Brostreaming.com et son hébergeur ne peuvent en aucun cas être tenus pour responsables du contenu diffusé sur le site. Selon la loi, pour visionner une œuvre sur le site vous devez posséder l'originale.</p>
      </footer>

    </div><!--/.container-->

    ";
        // line 164
        $this->displayBlock('javascripts', $context, $blocks);
        // line 181
        echo "  </body>
</html>
";
    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        echo "BroStreaming";
    }

    // line 15
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 16
        echo "    <!-- Bootstrap core CSS -->
    <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Base stylesheet -->
    <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/offcanvas.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- LayerSlider stylesheet -->
    <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/layerslider.css"), "html", null, true);
        echo "\" type=\"text/css\">
    ";
    }

    // line 28
    public function block_navbar($context, array $blocks = array())
    {
        // line 29
        echo "    <nav class=\"navbar navbar-fixed-top navbar-inverse\">
      <div class=\"container\">
        <div class=\"navbar-header\">
          <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
          <a class=\"navbar-brand\" href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("rj_stream_homepage");
        echo "\">BroStreaming</a>
        </div>
        <div id=\"navbar\" class=\"collapse navbar-collapse\">
          <ul class=\"nav navbar-nav\">
            <li class=\"active home\"><a href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("rj_stream_homepage");
        echo "\">Home</a></li>
            
            <li class=\"dropdown saison\">
              <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\">Saisons <span class=\"caret\"></span></a>
              <ul class=\"dropdown-menu\" role=\"menu\">
                <li><a href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("rj_stream_saison", array("s" => 1));
        echo "\">Saison 1</a></li>
                <li><a href=\"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("rj_stream_saison", array("s" => 2));
        echo "\">Saison 2</a></li>
                <li><a href=\"";
        // line 49
        echo $this->env->getExtension('routing')->getPath("rj_stream_saison", array("s" => 3));
        echo "\">Saison 3</a></li>
                <li><a href=\"";
        // line 50
        echo $this->env->getExtension('routing')->getPath("rj_stream_saison", array("s" => 4));
        echo "\">Saison 4</a></li>
                <li><a href=\"";
        // line 51
        echo $this->env->getExtension('routing')->getPath("rj_stream_saison", array("s" => 5));
        echo "\">Saison 5</a></li>
              </ul>
              <li class=\"dropdown nav-episode episode\">
              <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\">Episodes <span id=\"badge-ws-episode\" class=\"badge color-red\">0</span><span class=\"caret\"></span></a>
              <ul class=\"dropdown-menu\" role=\"menu\">
                <li><a href=\"";
        // line 56
        echo $this->env->getExtension('routing')->getPath("rj_stream_episode_all");
        echo "\">Tous les épisodes</a></li>
                <li><a href=\"";
        // line 57
        echo $this->env->getExtension('routing')->getPath("rj_stream_episode_last");
        echo "\">Derniers épisodes</a></li>
                <li><a href=\"";
        // line 58
        echo $this->env->getExtension('routing')->getPath("rj_stream_episode_vue");
        echo "\">Episode le plus vu</a></li>
                <li><a href=\"";
        // line 59
        echo $this->env->getExtension('routing')->getPath("rj_stream_episode_note");
        echo "\">Episode le mieux noté</a></li>
              </ul>
              </li>
              <li class=\"news\"><a href=\"";
        // line 62
        echo $this->env->getExtension('routing')->getPath("rj_stream_news");
        echo "\">News <span id=\"badge-ws-news\" class=\"badge color-red\">0</span></a></li>
          </ul>
          <!--<form class=\"navbar-form navbar-right\" role=\"search\">
                <div class=\"form-group\">
                    <input type=\"text\" class=\"form-control\" placeholder=\"Recherche ...\">
                </div>
                <button type=\"submit\" class=\"btn btn-inverse\"><span class=\"glyphicon glyphicon-search\" aria-hidden=\"true\"></span></button>
          </form>-->
          
        </div><!-- /.nav-collapse -->
      </div><!-- /.container -->
    </nav><!-- /.navbar -->
    ";
    }

    // line 76
    public function block_slider($context, array $blocks = array())
    {
        // line 77
        echo "        <div id=\"layerslider\" style=\"width:1280px;height:720px;max-width: 1280px;\">
          <div class=\"ls-slide\" data-ls=\"slidedelay:10000;transition2d:75,79;\">
            <img src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/sliderimages/bg.jpg"), "html", null, true);
        echo "\" class=\"ls-bg\" alt=\"Slide background\"/><img class=\"ls-l\" style=\"top:0px;left:0px;white-space: nowrap;\" data-ls=\"offsetxin:0;durationin:2000;easingin:linear;offsetxout:0;durationout:6000;showuntil:1;easingout:linear;\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/sliderimages/bg21.jpg"), "html", null, true);
        echo "\" alt=\"\">
            <h1 class=\"ls-l\" style=\"top:60px;left:800px;font-weight: 300;font-size:40px;color:#286e89;white-space: nowrap;\" data-ls=\"offsetxin:50;durationin:3000;rotateyin:60;transformoriginin:right 50% 0;offsetxout:-50;durationout:3000;rotateyout:-60;transformoriginout:left 50% 0;\">BROSTREAMING</h1>
            <h2 class=\"ls-l\" style=\"top:100px;left:801px;font-weight: 500;font-size:30px;color:#fa6b4b;white-space: nowrap;\" data-ls=\"offsetxin:-50;durationin:3000;delayin:500;rotateyin:-60;transformoriginin:left 50% 0;offsetxout:50;durationout:3000;rotateyout:60;transformoriginout:right 50% 0;\">presents</h2>
            <img class=\"ls-l\" style=\"top:450px;left:100px;white-space: nowrap;\" data-ls=\"offsetxin:0;durationin:750;delayin:1000;rotateyin:90;transformoriginin:left 50% 0;offsetxout:0;durationout:750;rotateyout:90;transformoriginout:right -50% 0;\" src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/sliderimages/slide-d-5-5.png"), "html", null, true);
        echo "\" alt=\"\"><img class=\"ls-l\" style=\"top:450px;left:250px;white-space: nowrap;\" data-ls=\"offsetxin:0;durationin:750;delayin:1300;rotateyin:90;transformoriginin:left 50% 0;offsetxout:0;durationout:750;rotateyout:90;transformoriginout:left -50% 0;\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/sliderimages/slide-d-5-6.png"), "html", null, true);
        echo "\" alt=\"\"><img class=\"ls-l\" style=\"top:300px;left:250px;white-space: nowrap;\" data-ls=\"offsetxin:0;durationin:750;delayin:1600;rotatexin:90;transformoriginin:50% bottom 0;offsetxout:0;durationout:500;rotateyout:90;skewyout:1;transformoriginout:left 50% 0;\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/sliderimages/slide-d-5-4.png"), "html", null, true);
        echo "\" alt=\"\"><img class=\"ls-l\" style=\"top:300px;left:100px;white-space: nowrap;\" data-ls=\"offsetxin:0;durationin:750;delayin:1900;rotateyin:-90;transformoriginin:right 50% 0;offsetxout:0;durationout:750;rotateyout:90;transformoriginout:right 50% 0;\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/sliderimages/slide-d-5-3.png"), "html", null, true);
        echo "\" alt=\"\"><img class=\"ls-l\" style=\"top:150px;left:100px;white-space: nowrap;\" data-ls=\"offsetxin:0;durationin:750;delayin:2200;rotatexin:90;transformoriginin:50% bottom 0;offsetxout:0;durationout:750;rotateyout:90;transformoriginout:right 150% 0;\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/sliderimages/slide-d-5-1.png"), "html", null, true);
        echo "\" alt=\"\"><img class=\"ls-l\" style=\"top:150px;left:250px;white-space: nowrap;\" data-ls=\"offsetxin:0;durationin:750;delayin:2500;rotateyin:90;transformoriginin:left 50% 0;offsetxout:0;durationout:750;rotateyout:90;transformoriginout:left 150% 0;\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/sliderimages/slide-d-5-2.png"), "html", null, true);
        echo "\" alt=\"\">
            <h1 class=\"ls-l\" style=\"font-family: Oswald; top:65px;left:80px;font-weight: 500; text-align: center; opacity: .5;width:340px;font-size:60px;color:#a14730;border-radius:5px;white-space: nowrap;\" data-ls=\"offsetxin:0;durationin:2500;delayin:3000;easingin:easeOutElastic;rotatexin:90;transformoriginin:50% bottom 0;offsetxout:0;rotateout:-90;transformoriginout:left bottom 0;\">Game of Thrones</h1>
            <p class=\"ls-l\" style=\"top:150px;left:500px;font-weight: 300;height:40px;padding-right:10px;padding-left:10px;font-size:30px;line-height:37px;color:#ffffff;background:#fa6b4b;border-radius:4px;white-space: nowrap;\" data-ls=\"durationin:1500;delayin:3300;rotatein:20;rotatexin:30;scalexin:1.5;scaleyin:1.5;transformoriginin:left 50% 0;durationout:750;rotateout:20;rotatexout:-30;scalexout:0;scaleyout:0;transformoriginout:left 50% 0;\">
            SAISON 5
            </p>
            <p class=\"ls-l\" style=\"top:190px;left:500px;font-weight: 300;font-size:24px;color:#333;white-space: nowrap;\" data-ls=\"offsetxin:0;durationin:1500;delayin:3700;rotateyin:90;skewxin:60;transformoriginin:25% 50% 0;offsetxout:100;durationout:750;skewxout:60;\">
            Tous les derniers épisodes
            </p>
            <p class=\"ls-l\" style=\"top:250px;left:500px;font-weight: 300;height:40px;padding-right:10px;padding-left:10px;font-size:30px;line-height:37px;color:#ffffff;background:#fa6b4b;border-radius:4px;white-space: nowrap;\" data-ls=\"durationin:1500;delayin:4000;rotatein:20;rotatexin:30;scalexin:1.5;scaleyin:1.5;transformoriginin:left 50% 0;durationout:750;rotateout:20;rotatexout:-30;scalexout:0;scaleyout:0;transformoriginout:left 50% 0;\">
            PAS DE PUB
            </p>
            <p class=\"ls-l\" style=\"top:290px;left:500px;font-weight: 300;font-size:24px;color:#333;white-space: nowrap;\" data-ls=\"offsetxin:0;durationin:1500;delayin:4400;rotateyin:90;skewxin:60;transformoriginin:25% 50% 0;offsetxout:100;durationout:750;skewxout:60;\">
            Que du streaming
            </p>
            <!--<p class=\"ls-l\" style=\"top:350px;left:500px;font-weight: 300;height:40px;padding-right:10px;padding-left:10px;font-size:30px;line-height:37px;color:#ffffff;background:#fa6b4b;border-radius:4px;white-space: nowrap;\" data-ls=\"durationin:1500;delayin:4700;rotatein:20;rotatexin:30;scalexin:1.5;scaleyin:1.5;transformoriginin:left 50% 0;durationout:750;rotateout:20;rotatexout:-30;scalexout:0;scaleyout:0;transformoriginout:left 50% 0;\">
            PROCHAINEMENT
            </p>
            <p class=\"ls-l\" style=\"top:390px;left:499px;font-weight: 300;font-size:24px;color:#333;white-space: nowrap;\" data-ls=\"offsetxin:0;durationin:1500;delayin:5100;rotateyin:90;skewxin:60;transformoriginin:25% 50% 0;offsetxout:100;durationout:750;skewxout:60;\">
            Tous les épisodes en HD
            </p>-->
          </div>
            <div class=\"ls-slide\" data-ls=\"slidedelay:10000;transition2d:11;\">
            <img src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/sliderimages/bg51.jpg"), "html", null, true);
        echo "\" class=\"ls-bg\" alt=\"Slide background\"/><img class=\"ls-l\" style=\"top:0px;left:0px;white-space: nowrap;\" data-ls=\"offsetxin:0;durationin:2000;scalexin:1.1;scaleyin:1.1;offsetxout:0;\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/sliderimages/bg31.jpg"), "html", null, true);
        echo "\" alt=\"\">
            <p class=\"ls-l\" style=\"top:50%;left:50%;font-weight: 300; background: white; background: rgba(255,255,255,.2);height:40px;padding-right:10px;padding-left:10px;font-size:30px;line-height:37px;color:#ffe9db;white-space: nowrap;\" data-ls=\"offsetxin:0;rotatexin:-70;scalexin:3;scaleyin:3;offsetxout:0;durationout:1000;showuntil:500;rotatexout:70;scalexout:0.5;scaleyout:0.5;\">
            SAISON 5
            </p>
            <div class=\"ls-l\" style=\"top:100px;left:50%;background: white; background: rgba(255,255,255,.2); box-shadow: 0px 5px 70px -20px black;width:660px;height:380px;white-space: nowrap;\" data-ls=\"offsetxin:0;durationin:2000;delayin:1500;easingin:easeInOutExpo;rotatexin:20;scalexin:0.8;scaleyin:0.8;transformoriginin:50% 50% -150;offsetxout:0;durationout:1000;rotatexout:-20;scalexout:0.8;scaleyout:0.8;transformoriginout:50% 50% -150;\">
            </div>
            <div class=\"ls-l\" style=\"top:110px;left:50%;white-space: nowrap;\" data-ls=\"offsetxin:0;durationin:2000;delayin:1500;easingin:easeInOutExpo;rotatexin:20;scalexin:0.8;scaleyin:0.8;transformoriginin:50% 50% -150;offsetxout:0;durationout:1000;rotatexout:-20;scalexout:0.8;scaleyout:0.8;transformoriginout:50% 50% -150;\">
            <iframe width=\"600\" height=\"340\" src=\"http://www.youtube.com/embed/YjABoFk4yM0?autoplay=false?vq=hd720\" frameborder=\"0\" allowfullscreen></iframe>
            </div>
            <p class=\"ls-l\" style=\"top:30px;left:30px;font-weight: 300; background: black; background: rgba(0,0,0,.2);height:40px;padding-right:10px;padding-left:10px;font-size:30px;line-height:37px;color:#ffe9db;white-space: nowrap;\" data-ls=\"offsetxin:150;delayin:3000;skewxin:-60;offsetxout:-150;skewxout:60;\">
            La saison 5 arrive !
            </p>
            <p class=\"ls-l\" style=\"top:30px;left:835px;font-weight: 300; background: black; background: rgba(0,0,0,.2);height:40px;padding-right:10px;padding-left:10px;font-size:30px;line-height:37px;color:#ffe9db;white-space: nowrap;\" data-ls=\"offsetxin:-150;delayin:3000;skewxin:60;offsetxout:150;skewxout:-60;\">
            Vous êtes prêt ?
            </p>
            </div>  
        </div>
      ";
    }

    // line 129
    public function block_body($context, array $blocks = array())
    {
        // line 130
        echo "          
          
          ";
    }

    // line 136
    public function block_sidebar($context, array $blocks = array())
    {
        // line 137
        echo "          <div class=\"panel panel-default\">
              <div class=\"panel-heading\">
                <h3 class=\"panel-title\">Saisons</h3>
              </div>
            <div class=\"panel-body\">
                <div class=\"list-group\">
                  <a href=\"";
        // line 143
        echo $this->env->getExtension('routing')->getPath("rj_stream_saison", array("s" => 1));
        echo "\" class=\"list-group-item\">Saison 1</a>
                  <a href=\"";
        // line 144
        echo $this->env->getExtension('routing')->getPath("rj_stream_saison", array("s" => 2));
        echo "\" class=\"list-group-item\">Saison 2</a>
                  <a href=\"";
        // line 145
        echo $this->env->getExtension('routing')->getPath("rj_stream_saison", array("s" => 3));
        echo "\" class=\"list-group-item\">Saison 3</a>
                  <a href=\"";
        // line 146
        echo $this->env->getExtension('routing')->getPath("rj_stream_saison", array("s" => 4));
        echo "\" class=\"list-group-item\">Saison 4</a>
                  <a href=\"";
        // line 147
        echo $this->env->getExtension('routing')->getPath("rj_stream_saison", array("s" => 5));
        echo "\" class=\"list-group-item\">Saison 5</a>
                </div>
              </div>
          </div>
          ";
    }

    // line 164
    public function block_javascripts($context, array $blocks = array())
    {
        // line 165
        echo "    
    <!-- External library jQuery -->
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js\"></script>
    <!-- Bootstrap core JavaScript -->
    <script src=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <!-- LayerSlider script files -->
    <script src=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/layerslider.transitions.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 172
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/layerslider.kreaturamedia.jquery.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 173
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/greensock.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 174
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/layerslider.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- Base stylesheet -->
    <script src=\"";
        // line 176
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/offcanvas.js"), "html", null, true);
        echo "\"></script>
    <!-- Bundle FOSJsRoutingBundle -->
    <script src=\"";
        // line 178
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 179
        echo $this->env->getExtension('routing')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>
    ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  379 => 179,  375 => 178,  370 => 176,  365 => 174,  361 => 173,  357 => 172,  353 => 171,  348 => 169,  342 => 165,  339 => 164,  330 => 147,  326 => 146,  322 => 145,  318 => 144,  314 => 143,  306 => 137,  303 => 136,  297 => 130,  294 => 129,  270 => 104,  235 => 82,  227 => 79,  223 => 77,  220 => 76,  203 => 62,  197 => 59,  193 => 58,  189 => 57,  185 => 56,  177 => 51,  173 => 50,  169 => 49,  165 => 48,  161 => 47,  153 => 42,  146 => 38,  135 => 29,  132 => 28,  126 => 22,  121 => 20,  115 => 17,  112 => 16,  109 => 15,  103 => 14,  97 => 181,  95 => 164,  81 => 152,  79 => 136,  74 => 133,  72 => 129,  63 => 122,  61 => 76,  58 => 75,  56 => 28,  50 => 24,  48 => 15,  44 => 14,  39 => 12,  26 => 1,);
    }
}
