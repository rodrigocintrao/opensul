<?php
/*
Template Name: Esquadrias em PVC
*/
?>

<?php get_header('page'); ?>
    <main>
        <section class="content p-tb-lg wow fadeIn" data-wow-duration="1s" data-wow-delay=".5s">
            <div class="container">
                <h1 class="no-margin-top"><?php the_title();?></h1>

                <?php if(have_posts()):while(have_posts()):the_post();?>
                    <?php the_content(); ?>
                <?php endwhile;  else:?>
                <?php endif;?>
                <?php wp_reset_query(); ?>

                <?php
 
                $args = array(
                    // Arguments for your query.
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'produtos',
                            'field' => 'slug',
                            'terms' => 'esquadrias-em-pvc',
                        )
                    )
                );
                
                // Custom query.
                $the_query = new WP_Query( $args );

                ?>
                
                <?php if ( $the_query->have_posts() ) : ?>

                <!-- the loop -->
                <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                    <h2><?php the_title(); ?></h2>
                    <?php the_content(); ?>
                    <?php the_post_thumbnail();?>
                    <a href="<?php the_permalink(); ?>" class="btn btn-primary text-uppercase">saiba mais</a>
                <?php endwhile; ?>
                <!-- end of the loop -->

                <?php wp_reset_postdata(); ?>

                <?php else : ?>
                    <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
                <?php endif; ?>                

            </div>
        </section>
    </main>
<?php get_footer(); ?>