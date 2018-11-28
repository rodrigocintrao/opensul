<?php
/*
Template Name: Notícias
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

                <?php query_posts('category_name=noticias&posts_per_page=10');?>
                <?php if(have_posts()):while(have_posts()):the_post();?>
                <div class="row">
                    <article class="col-sm-12">
                        <div class="p-sm border-md border-grey-dark">
                            <div class="row">
                                
                                <div class="col-sm-4">
                                    <?php the_post_thumbnail('thumb-general', array('class' => 'full-width img-thumbnail'));?>
                                </div>
                                <div class="col-sm-8">
                                    <h3><?php the_title();?></h3>
                                    <p><?php echo excerpt('86'); ?></p>
                                    <a href="<?php the_permalink(); ?>" class="btn btn-primary text-uppercase">leia mais</a>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <hr>
                <?php endwhile;  else:?>
                <?php endif;?>
                <?php wp_reset_query(); ?>

            </div>
        </section>
    </main>
<?php get_footer(); ?>