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

            </div>
        </section>
    </main>
<?php get_footer(); ?>