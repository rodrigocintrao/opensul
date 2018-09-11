<div class="row">
    <article class="col-sm-12">
        <div class="p-sm border-md border-grey-dark">
            <div class="row">
                <?php query_posts('category_name=noticias');?>
                <?php if(have_posts()):while(have_posts()):the_post();?>
                <div class="col-sm-4">
                    <?php the_post_thumbnail('thumb-general', array('class' => 'full-width img-thumbnail'));?>
                </div>
                <div class="col-sm-8">
                    <h3><?php the_title();?></h3>
                    <p><?php echo excerpt('86'); ?></p>
                    <a href="<?php the_permalink(); ?>" class="btn btn-primary text-uppercase">leia mais</a>
                </div>
                <?php endwhile;  else:?>
                <?php endif;?>
                <?php wp_reset_query(); ?>
            </div>
        </div>
    </article>
</div>