<?php get_header(); ?>
    <main>
        <section class="products p-tb-lg wow fadeIn" data-wow-duration=".5s" data-wow-delay=".5s">
            <div class="container">
                <h2 class="no-margin-top text-center">Produtos</h2>

                <?php

                $args = array(
                    // Arguments for your query.
                    'orderby' => 'date',
                    'order' => 'ASC',
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'produtos_categorias',
                            'field' => 'slug',
                            'terms' => 'produtos', 
                        )
                    )
                );
                
                // Custom query.
                $the_query = new WP_Query( $args );

                ?>

                
                <?php if ( $the_query->have_posts() ) : ?>

                <div class="row loop-products">

                    <!-- the loop -->
                    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                        <div class="col-xs-6 col-sm-3">
                            <a title="mais detalhes" class="relative d-block" href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail('thumb-produtos', array('class' => 'full-width img-thumbnail'));?>
                                <div class="box-hover">
                                    <div class="box-hover-border">
                                        <div class="box-hover-content">
                                            <div>
                                                <i class="fas fa-search-plus fa-2x"></i>
                                            </div>
                                            <div class="text-uppercase small mais-detalhes">mais detalhes</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <h2 class="text-center"><?php the_title(); ?></h2>
                        </div>
                    <?php endwhile; ?>
                    <!-- end of the loop -->

                    <?php wp_reset_postdata(); ?>

                </div>

                <?php else : ?>
                    <p><?php esc_html_e( 'Não há produtos cadastrados.' ); ?></p>
                <?php endif; ?>                

            </div>
        </section>
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
                <h2 class="no-margin-top text-center">Notícias</h2>
                <?php get_template_part('noticiasNth3'); ?>
            </div>  
        </section>
        <section class="recent-projects p-tb-lg wow fadeIn" data-wow-duration=".5s" data-wow-delay=".5s">
            <div class="container">
                <h2 class="no-margin-top text-center">Obras e Projetos</h2>
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