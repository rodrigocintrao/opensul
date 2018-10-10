<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php wp_title('-', true, 'right'); bloginfo() ?></title>
    <link href="<?php bloginfo('template_url'); ?>/css/bootstrap.css" rel="stylesheet">
    <link href="<?php bloginfo('template_url'); ?>/css/fontawesome.css" rel="stylesheet">
    <link href="<?php bloginfo('template_url'); ?>/css/slick.css" rel="stylesheet">
    <link href="<?php bloginfo('template_url'); ?>/css/animate.css" rel="stylesheet">
    <link href="<?php bloginfo('template_url'); ?>/style.css" rel="stylesheet">
    <script src="<?php bloginfo('template_url'); ?>/js/jquery.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/slick.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/wow.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/functions.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/main.js"></script>
    <!-- Start of HubSpot Embed Code --> <script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/4862319.js"></script> <!-- End of HubSpot Embed Code -->
    <?php wp_head(); ?>
</head>
<body>
    <header class="header wow fadeIn" data-wow-duration=".5s" data-wow-delay=".5s">
        <section class="header-nav">
            <div class="container">
                <div class="row vertical-align">
                    <div class="col-xs-12 col-sm-9 no-padding-mobile">
                        <nav class="navbar navbar-default">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse-menu" aria-expanded="false">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a class="navbar-brand hidden-sm hidden-md hidden-lg" href="<?php bloginfo('url'); ?>">
                                    <img src="<?php bloginfo('template_url'); ?>/img/logo-opensul.png" class="img-responsive">
                                </a>
                            </div>

                            <div class="collapse navbar-collapse" id="collapse-menu">
                                <?php wp_nav_menu(array('menu'=>'menu', 'menu_class'=>'nav navbar-nav')); ?>
                            </div>
                        </nav>
                    </div>
                    <div class="col-sm-3 hidden-xs">
                        <ul class="list-inline text-right social-media">
                            <li>
                                <a href="https://www.facebook.com/OPENSUL/" target="_blank">
                                    <i class="fab fa-facebook-square fa-2x"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="header-logo p-tb-sm">
            <div class="container">
                <div class="row vertical-align">
                    <div class="col-xs-12 col-sm-6 col-md-4 hidden-xs">
                        <a href="<?php bloginfo('url'); ?>">
                            <img src="<?php bloginfo('template_url'); ?>/img/logo-opensul.png" class="img-responsive center-block">
                        </a>
                    </div>
                    <div class="col-md-1 hidden-xs hidden-sm"></div>
                    <div class="col-md-3 hidden-xs hidden-sm">
                        <?php get_template_part('headerListContact'); ?>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <?php get_search_form(); ?>
                        <hr class="no-border hr-sm">
                        <a href="<?php bloginfo('url'); ?>/orcamento" class="btn btn-primary btn-lg btn-block text-uppercase">solicite um orçamento</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="header-banner">
            <div class="slider">
                <div><img src="<?php bloginfo('template_url'); ?>/img/banner1.jpg" alt="banner1" class="full-width"></div>
                <div><img src="<?php bloginfo('template_url'); ?>/img/banner2.jpg" alt="banner2" class="full-width"></div>
                <div><img src="<?php bloginfo('template_url'); ?>/img/banner3.jpg" alt="banner3" class="full-width"></div>
            </div>
        </section>
    </header>