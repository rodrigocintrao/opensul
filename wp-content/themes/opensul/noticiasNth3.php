<div class="row">
    <?php query_posts('category_name=noticias&showposts=3');?>
    <?php if(have_posts()):while(have_posts()):the_post();?>
    <article class="col-sm-6 col-md-4">
        <div class="p-sm border-md border-grey-dark">
            <?php the_post_thumbnail('thumb-general', array('class' => 'full-width img-thumbnail'));?>
            <h3 title="<?php the_title();?>"><?php the_title();?></h3>
            <p><?php echo excerpt('25'); ?></p>
            <div class="text-center">
                <a href="<?php the_permalink(); ?>" class="btn btn-primary text-uppercase">leia mais</a>
            </div>
        </div>
    </article>
    <?php endwhile;  else:?>
    <?php endif;?>
    <?php wp_reset_query(); ?>
</div>