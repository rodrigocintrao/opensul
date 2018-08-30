<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Open Sul</title>
    <link href="<?php bloginfo('template_url'); ?>/css/bootstrap.css" rel="stylesheet">
    <link href="<?php bloginfo('template_url'); ?>/css/fontawesome.css" rel="stylesheet">
    <link href="<?php bloginfo('template_url'); ?>/css/slick.css" rel="stylesheet">
    <link href="<?php bloginfo('template_url'); ?>/style.css" rel="stylesheet">
    <script src="<?php bloginfo('template_url'); ?>/js/jquery.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/slick.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/main.js"></script>
</head>
<body>
    <header class="header">
        <section class="header-nav">
            <div class="container">
                <div class="row vertical-align">
                    <div class="col-xs-12 col-sm-9">
                        <nav class="navbar navbar-default">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse-menu" aria-expanded="false">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a class="navbar-brand hidden-sm hidden-md hidden-lg" href="#">open sul</a>
                            </div>

                            <div class="collapse navbar-collapse" id="collapse-menu">
                                <ul class="nav navbar-nav">
                                    <li><a href="#">home</a></li>
                                    <li><a href="#">sobre nós</a></li>
                                    <li><a href="#">produtos</a></li>
                                    <li><a href="#">orçamento</a></li>
                                    <li><a href="#">contato</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <div class="col-sm-3 hidden-xs">
                        <ul class="list-inline text-right social-media">
                            <li>
                                <a href="#" target="_blank">
                                    <i class="fab fa-facebook-square fa-2x"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class="fab fa-twitter fa-2x"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                <i class="fab fa-google-plus fa-2x"></i>
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
                        <img src="<?php bloginfo('template_url'); ?>/img/logo-opensul.png" class="img-responsive center-block">
                    </div>
                    <div class="col-md-1 hidden-xs hidden-sm"></div>
                    <div class="col-md-3 hidden-xs hidden-sm">
                        <ul class="list-unstyled">
                            <li class="m-tb-xs">
                                <i class="fas fa-phone d-inline-block v-align-middle"></i>    
                                <span class="d-inline-block v-align-middle">(51) 87677 8787<span>
                            </li>
                            <li class="m-tb-xs">
                                <i class="fas fa-map-marker-alt d-inline-block v-align-middle"></i> 
                                <span class="d-inline-block v-align-middle">Rua A, 4657 Bairro - POA</span>
                            </li>
                            <li class="m-tb-xs">
                                <i class="far fa-envelope-open d-inline-block v-align-middle"></i>    
                                <span class="d-inline-block v-align-middle">opensul@opensul.net.br</span>
                            </li>
                        </ul>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="input-group input-group-lg">
                            <input type="text" class="form-control" placeholder="Pesquisar por...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fas fa-search"></i>
                                </button>
                            </span>
                        </div><!-- /input-group -->
                        <hr class="no-border hr-sm">
                        <a href="#" class="btn btn-primary btn-lg btn-block text-uppercase">solicite um orçamento</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="header-banner">
            <div class="slider">
                <div><img src="<?php bloginfo('template_url'); ?>/img/banner.jpg" alt="banner" class="full-width"></div>
                <div><img src="<?php bloginfo('template_url'); ?>/img/banner.jpg" alt="banner" class="full-width"></div>
            </div>
        </section>
    </header>
    <main>
        <section class="about-us p-tb-lg">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <img src="<?php bloginfo('template_url'); ?>/img/img.jpg" alt="img" class="full-width img-thumbnail">
                    </div>
                    <div class="col-sm-8">
                        <h2>Sobre Nós</h2>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Animi distinctio porro cupiditate culpa ab quisquam ut aperiam quam sequi pariatur a, eveniet neque consectetur assumenda enim! Quae obcaecati quia laborum.</p>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Animi distinctio porro cupiditate culpa ab quisquam ut aperiam quam sequi pariatur a, eveniet neque consectetur assumenda enim! Quae obcaecati quia laborum.</p>
                        <a href="#" class="btn btn-primary btn-lg text-uppercase">leia mais</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="news-events p-tb-lg">
            <div class="container">
                <h2 class="no-margin-top">Notícias e Eventos</h2>
                <div class="row">
                    <article class="col-sm-6 col-md-3">
                        <div class="p-sm border-md border-grey-dark">
                            <img src="<?php bloginfo('template_url'); ?>/img/img.jpg" alt="img" class="full-width img-thumbnail">
                            <h3>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae quod mollitia, harum, id facere amet dolore beatae, nostrum dolor quia voluptates vero praesentium perspiciatis dicta labore hic omnis quibusdam magni.</p>
                            <div class="text-center">
                                <a href="#" class="btn btn-primary btn-lg text-uppercase">leia mais</a>
                            </div>
                        </div>
                    </article>
                    <article class="col-sm-6 col-md-3">
                        <div class="p-sm border-md border-grey-dark">
                            <img src="<?php bloginfo('template_url'); ?>/img/img.jpg" alt="img" class="full-width img-thumbnail">
                            <h3>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae quod mollitia, harum, id facere amet dolore beatae, nostrum dolor quia voluptates vero praesentium perspiciatis dicta labore hic omnis quibusdam magni.</p>
                            <div class="text-center">
                                <a href="#" class="btn btn-primary btn-lg text-uppercase">leia mais</a>
                            </div>
                        </div>
                    </article>
                    <article class="col-sm-6 col-md-3">
                        <div class="p-sm border-md border-grey-dark">
                            <img src="<?php bloginfo('template_url'); ?>/img/img.jpg" alt="img" class="full-width img-thumbnail">
                            <h3>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae quod mollitia, harum, id facere amet dolore beatae, nostrum dolor quia voluptates vero praesentium perspiciatis dicta labore hic omnis quibusdam magni.</p>
                            <div class="text-center">
                                <a href="#" class="btn btn-primary btn-lg text-uppercase">leia mais</a>
                            </div>
                        </div>
                    </article>
                    <article class="col-sm-6 col-md-3">
                        <div class="p-sm border-md border-grey-dark">
                            <img src="<?php bloginfo('template_url'); ?>/img/img.jpg" alt="img" class="full-width img-thumbnail">
                            <h3>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae quod mollitia, harum, id facere amet dolore beatae, nostrum dolor quia voluptates vero praesentium perspiciatis dicta labore hic omnis quibusdam magni.</p>
                            <div class="text-center">
                                <a href="#" class="btn btn-primary btn-lg text-uppercase">leia mais</a>
                            </div>
                        </div>
                    </article>
                </div>
            </div>  
        </section>
        <section class="recent-projects p-tb-lg">
            <div class="container">
                <h2 class="no-margin-top">Projetos Recentes</h2>
                <div class="row">
                    <article class="col-sm-6 col-md-3">
                        <a href="#">
                            <div class="relative">
                            <img src="<?php bloginfo('template_url'); ?>/img/img.jpg" alt="img" class="full-width img-thumbnail">
                            <h3 class="p-sm">Lorem ipsum dolor sit amet consectetur.</h3>
                            </div>
                        </a>
                    </article>
                    <article class="col-sm-6 col-md-3">
                        <a href="#">
                            <div class="relative">
                            <img src="<?php bloginfo('template_url'); ?>/img/img.jpg" alt="img" class="full-width img-thumbnail">
                            <h3 class="p-sm">Lorem ipsum dolor sit amet consectetur.</h3>
                            </div>
                        </a>
                    </article>
                    <article class="col-sm-6 col-md-3">
                        <a href="#">
                            <div class="relative">
                            <img src="<?php bloginfo('template_url'); ?>/img/img.jpg" alt="img" class="full-width img-thumbnail">
                            <h3 class="p-sm">Lorem ipsum dolor sit amet consectetur.</h3>
                            </div>
                        </a>
                    </article>
                    <article class="col-sm-6 col-md-3">
                        <a href="#">
                            <div class="relative">
                            <img src="<?php bloginfo('template_url'); ?>/img/img.jpg" alt="img" class="full-width img-thumbnail">
                            <h3 class="p-sm">Lorem ipsum dolor sit amet consectetur.</h3>
                            </div>
                        </a>
                    </article>
                </div>
        </section>
        <section class="represented p-tb-lg">
            <div class="container">
                <div class="slider-represented">
                    <div>
                        <a href="#">
                            <img src="<?php bloginfo('template_url'); ?>/img/brambilla.png" alt="represented" class="img-thumbnail">
                        </a>
                    </div>
                    <div>
                        <a href="#">
                            <img src="<?php bloginfo('template_url'); ?>/img/brambilla.png" alt="represented" class="img-thumbnail">
                        </a>
                    </div>
                    <div>
                        <a href="#">
                            <img src="<?php bloginfo('template_url'); ?>/img/brambilla.png" alt="represented" class="img-thumbnail">
                        </a>
                    </div>
                    <div>
                        <a href="#">
                            <img src="<?php bloginfo('template_url'); ?>/img/brambilla.png" alt="represented" class="img-thumbnail">
                        </a>
                    </div>
                    <div>
                        <a href="#">
                            <img src="<?php bloginfo('template_url'); ?>/img/brambilla.png" alt="represented" class="img-thumbnail">
                        </a>
                    </div>
                    <div>
                        <a href="#">
                            <img src="<?php bloginfo('template_url'); ?>/img/brambilla.png" alt="represented" class="img-thumbnail">
                        </a>
                    </div>
                    <div>
                        <a href="#">
                            <img src="<?php bloginfo('template_url'); ?>/img/brambilla.png" alt="represented" class="img-thumbnail">
                        </a>
                    </div>
                    <div>
                        <a href="#">
                            <img src="<?php bloginfo('template_url'); ?>/img/brambilla.png" alt="represented" class="img-thumbnail">
                        </a>
                    </div>
                    <div>
                        <a href="#">
                            <img src="<?php bloginfo('template_url'); ?>/img/brambilla.png" alt="represented" class="img-thumbnail">
                        </a>
                    </div>
                    <div>
                        <a href="#">
                            <img src="<?php bloginfo('template_url'); ?>/img/brambilla.png" alt="represented" class="img-thumbnail">
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>
</html>