<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="<?php bloginfo('template_url'); ?>/js/jquery.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
    <link href="<?php bloginfo('template_url'); ?>/css/bootstrap.css" rel="stylesheet">
    <link href="<?php bloginfo('template_url'); ?>/css/fontawesome.css" rel="stylesheet">
    <link href="<?php bloginfo('template_url'); ?>/style.css" rel="stylesheet">
</head>
<body>
    <section class="header">
        <div class="header-nav">
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
        </div>
        <div class="header-logo p-tb-sm">
            <div class="container">
                <div class="row vertical-align">
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <img src="<?php bloginfo('template_url'); ?>/img/logo-opensul.png" class="img-responsive center-block">
                    </div>
                    <div class="col-md-1 hidden-xs hidden-sm"></div>
                    <div class="col-md-3 hidden-xs hidden-sm">
                        <ul class="list-unstyled">
                            <li class="m-tb-xs">
                                <i class="fas fa-phone d-inline-block v-align-middle"></i>    
                                <span class="d-inline-block">(51) 87677 8787<span>
                            </li>
                            <li class="m-tb-xs">
                                <i class="fas fa-map-marker-alt d-inline-block v-align-middle"></i> 
                                <span class="d-inline-block">Rua A, 4657 Bairro - POA</span>
                            </li>
                            <li class="m-tb-xs">
                                <i class="far fa-envelope-open d-inline-block v-align-middle"></i>    
                                <span class="d-inline-block">opensul@opensul.net.br</span>
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
        </div>
    </section>
</body>
</html>