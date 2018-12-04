<?php
/*
Template Name: Produto
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

                <h1 id="title-product" class="no-margin-top"><?php the_title();?></h1>

                <?php if(have_posts()):while(have_posts()):the_post();?>
                    <?php the_content(); ?>
                <?php endwhile;  else:?>
                <?php endif;?>
                <?php wp_reset_query(); ?>

                <hr>

                <h2>Solicite um Orçamento</h2>
                <?php echo do_shortcode( '[contact-form-7 id="124" title="Orçamento"]' ); ?>

            </div>
            <script>
                $(function(){

                    var produto = $('#title-product').text();
                    $('#produto').val(produto);
                });
            </script>
        </section>
    </main>
<?php get_footer(); ?>