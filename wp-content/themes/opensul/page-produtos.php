<?php
/*
Template Name: Produtos
*/
?>

<?php get_header('page'); ?>
    <main>
        <section class="content p-tb-lg wow fadeIn" data-wow-duration="1s" data-wow-delay=".5s">
            <div class="container">

                <?php
                    if ( function_exists('yoast_breadcrumb') ) {
                    yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
                    }
                ?>

                <h1 class="no-margin-top"><?php the_title();?></h1>

                <?php if(have_posts()):while(have_posts()):the_post();?>
                    <?php the_content(); ?>
                <?php endwhile;  else:?>
                <?php endif;?>
                <?php wp_reset_query(); ?>

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
    </main>
<?php get_footer(); ?>