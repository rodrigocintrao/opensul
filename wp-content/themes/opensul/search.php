<?php get_header(); ?>
    <main>
        <section class="content p-tb-lg wow fadeIn" data-wow-duration="1s" data-wow-delay=".5s">
            <div class="container">
                <h1 class="no-margin-top"><?php printf( __( 'Resultados da pesquisa para: %s', 'shape' ), '<span>' . get_search_query() . '</span>' ); ?></h1>

                <?php if(have_posts()):while(have_posts()):the_post();?>
                    <?php the_content(); ?>
                <?php endwhile;  else:?>
                <?php endif;?>
                <?php wp_reset_query(); ?>
                
            </div>
        </section>
    </main>
<?php get_footer(); ?>