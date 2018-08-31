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
    <link href="<?php bloginfo('template_url'); ?>/css/animate.css" rel="stylesheet">
    <link href="<?php bloginfo('template_url'); ?>/style.css" rel="stylesheet">
    <script src="<?php bloginfo('template_url'); ?>/js/jquery.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/slick.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/wow.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/functions.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/main.js"></script>
    <?php wp_head(); ?>
</head>
<body>
    <header class="header wow fadeIn" data-wow-duration="1s" data-wow-delay=".5s">
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
                                <a class="navbar-brand hidden-sm hidden-md hidden-lg" href="<?php bloginfo('url'); ?>">
                                    <img src="<?php bloginfo('template_url'); ?>/img/logo-opensul.png" class="img-responsive">
                                </a>
                            </div>

                            <div class="collapse navbar-collapse" id="collapse-menu">
                                <ul class="nav navbar-nav">
                                    <li><a href="#">home</a></li>
                                    <li><a href="#">sobre nós</a></li>
                                    <li><a href="#">produtos</a></li>
                                    <li><a href="#">orçamento</a></li>
                                    <li><a href="#footer">contato</a></li>
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
                        <a href="<?php bloginfo('url'); ?>">
                            <img src="<?php bloginfo('template_url'); ?>/img/logo-opensul.png" class="img-responsive center-block">
                        </a>
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
        <section class="about-us p-tb-lg wow fadeIn" data-wow-duration="1s" data-wow-delay=".5s">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <img src="<?php bloginfo('template_url'); ?>/img/img.jpg" alt="img" class="full-width img-thumbnail">
                    </div>
                    <div class="col-sm-8">
                        <h2>Sobre Nós</h2>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Animi distinctio porro cupiditate culpa ab quisquam ut aperiam quam sequi pariatur a, eveniet neque consectetur assumenda enim! Quae obcaecati quia laborum.</p>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Animi distinctio porro cupiditate culpa ab quisquam ut aperiam quam sequi pariatur a, eveniet neque consectetur assumenda enim! Quae obcaecati quia laborum.</p>
                        <a href="#" class="btn btn-primary text-uppercase">leia mais</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="news-events p-tb-lg wow fadeIn" data-wow-duration=".5s" data-wow-delay="1s">
            <div class="container">
                <h2 class="no-margin-top">Notícias e Eventos</h2>
                <div class="row">
                    <article class="col-sm-6 col-md-3">
                        <div class="p-sm border-md border-grey-dark">
                            <img src="<?php bloginfo('template_url'); ?>/img/img.jpg" alt="img" class="full-width img-thumbnail">
                            <h3>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae quod mollitia, harum, id facere amet dolore beatae, nostrum dolor quia voluptates vero praesentium perspiciatis dicta labore hic omnis quibusdam magni.</p>
                            <div class="text-center">
                                <a href="#" class="btn btn-primary text-uppercase">leia mais</a>
                            </div>
                        </div>
                    </article>
                    <article class="col-sm-6 col-md-3">
                        <div class="p-sm border-md border-grey-dark">
                            <img src="<?php bloginfo('template_url'); ?>/img/img.jpg" alt="img" class="full-width img-thumbnail">
                            <h3>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae quod mollitia, harum, id facere amet dolore beatae, nostrum dolor quia voluptates vero praesentium perspiciatis dicta labore hic omnis quibusdam magni.</p>
                            <div class="text-center">
                                <a href="#" class="btn btn-primary text-uppercase">leia mais</a>
                            </div>
                        </div>
                    </article>
                    <article class="col-sm-6 col-md-3">
                        <div class="p-sm border-md border-grey-dark">
                            <img src="<?php bloginfo('template_url'); ?>/img/img.jpg" alt="img" class="full-width img-thumbnail">
                            <h3>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae quod mollitia, harum, id facere amet dolore beatae, nostrum dolor quia voluptates vero praesentium perspiciatis dicta labore hic omnis quibusdam magni.</p>
                            <div class="text-center">
                                <a href="#" class="btn btn-primary text-uppercase">leia mais</a>
                            </div>
                        </div>
                    </article>
                    <article class="col-sm-6 col-md-3">
                        <div class="p-sm border-md border-grey-dark">
                            <img src="<?php bloginfo('template_url'); ?>/img/img.jpg" alt="img" class="full-width img-thumbnail">
                            <h3>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae quod mollitia, harum, id facere amet dolore beatae, nostrum dolor quia voluptates vero praesentium perspiciatis dicta labore hic omnis quibusdam magni.</p>
                            <div class="text-center">
                                <a href="#" class="btn btn-primary text-uppercase">leia mais</a>
                            </div>
                        </div>
                    </article>
                </div>
            </div>  
        </section>
        <section class="recent-projects p-tb-lg wow fadeIn" data-wow-duration=".5s" data-wow-delay="1s">
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
        <section class="represented p-tb-lg wow fadeIn" data-wow-duration=".5s" data-wow-delay="1s">
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
    <footer id="footer" class="footer wow fadeIn" data-wow-duration="1s" data-wow-delay=".5s">
        <section class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3453.616517266903!2d-51.220774885281614!3d-30.047857781881!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95197859d2e8b319%3A0xc4238500125bed13!2sAv.+Ipiranga%2C+1000+-+Menino+Deus%2C+Porto+Alegre+-+RS%2C+90160-090!5e0!3m2!1spt-BR!2sbr!4v1535675236599" frameborder="0" style="border:0" allowfullscreen></iframe>	
        </section>
        <section class="contact">
            <div class="container">
                <div class="row p-tb-lg">
                    <div class="col-sm-4 text-center">
                        <div class="contact-box">
                            <i class="fas fa-phone fa-3x"></i>
                            <p class="no-margin">Telefone Fixo:</p>
                            <h3 class="no-margin">(51) 3049 9898</h3>
                        </div>
                    </div>
                    <hr class="hr-md visible-xs">
                    <div class="col-sm-4 text-center">
                        <div class="contact-box">
                            <i class="fas fa-mobile-alt fa-3x"></i>
                            <p class="no-margin">Celular/Whatsapp:</p>
                            <h3 class="no-margin">(51) 98988 9898</h3>
                        </div>
                    </div>
                    <hr class="hr-md visible-xs">
                    <div class="col-sm-4 text-center">
                        <div class="contact-box">
                            <i class="fab fa-skype fa-3x"></i>
                            <p class="no-margin">Skype:</p>
                            <h3 class="no-margin">opensul</h3>
                        </div>
                    </div>
                </div>
                <hr class="hr-md no-border hidden-xs">
                <div class="row p-b-lg">
                    <div class="col-sm-5 text-right text-center-sm">
                        <h2>Contato por E-mail:</h2>
                        <p>Preencha o formulário que entraremos em contato.</p>
                        <p>Respondemos em menos de 24h.</p>
                        <h4>Redes Sociais</h4>
                        <ul class="list-inline social-media">
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
                    <div class="col-sm-7">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="name">Nome:</label>
                                    <input type="text" class="form-control" placeholder="Digite seu nome" id="name">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="email">E-mail:</label>
                                    <input type="email" class="form-control" placeholder="Digite seu e-mail" id="email">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="assunto">Assunto:</label>
                                    <input type="text" class="form-control" placeholder="Digite o assunto" id="assunto">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="mensagem">Mensagem:</label>
                                    <textarea class="form-control no-resize" rows="4" id="mensagem" placeholder="Escreva sua mensagem"></textarea>
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-primary text-uppercase">Enviar mensagem</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="copy p-tb-sm">
            <div class="container">
                <p class="text-center small no-margin">Open Sul &copy <?php echo date('Y'); ?> - Todos os direitos reservados.</p>
            </div>
        </section>
    </footer>
</body>
<?php wp_footer(); ?>
</html>