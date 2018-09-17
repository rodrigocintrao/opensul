<?php get_header(); ?>
    <main>
        <section class="about-us p-tb-lg wow fadeIn" data-wow-duration=".5s" data-wow-delay=".5s">
            <div class="container">
                <div class="row">
                    <?php query_posts('page_id=9');?>
                    <?php if(have_posts()):while(have_posts()):the_post();?>
                    <div class="col-sm-4">
                        <?php the_post_thumbnail('thumb-general', array('class' => 'full-width img-thumbnail'));?>
                    </div>
                    <div class="col-sm-8">
                        <h2><?php the_title();?></h2>
                        <p><?php echo excerpt('86'); ?></p>
                        <a href="<?php the_permalink(); ?>" class="btn btn-primary text-uppercase">leia mais</a>
                    </div>
                    <?php endwhile;  else:?>
                    <?php endif;?>
                    <?php wp_reset_query(); ?>
                </div>
            </div>
        </section>
        <section class="news-events p-tb-lg wow fadeIn" data-wow-duration=".5s" data-wow-delay=".5s">
            <div class="container">
                <h2 class="no-margin-top">Notícias e Eventos</h2>
                <?php get_template_part('noticiasNth1'); ?>
            </div>  
        </section>
        <section class="recent-projects p-tb-lg wow fadeIn" data-wow-duration=".5s" data-wow-delay=".5s">
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
        <!-- <section class="represented p-tb-lg wow fadeIn" data-wow-duration=".5s" data-wow-delay=".5s">
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
        </section> -->
    </main>
<?php get_footer(); ?>