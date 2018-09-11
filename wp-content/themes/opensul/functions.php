<?php

//imagem destacada
add_theme_support('post-thumbnails');

//remimensionar imagem destacada
add_image_size('thumb-general', 800, 600, true);

// menu personalizado
add_theme_support('nav-menus');

// Registrar áreas de widgets
function theme_widgets_init() {
    // Área 1
    register_sidebar( array (
    'name' => 'Widgets da esquerda',
    'id' => 'widgets_da_esquerda',
    'before_widget' => '<div class="widget">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
     ) );
    
    // Área 2
    register_sidebar( array (
    'name' => 'Widgets da direita',
    'id' => 'widgets_da_direita',
    'before_widget' => '<div class="widget">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
     ) );
   }
    
   add_action( 'init', 'theme_widgets_init' );
   
   // Verificar widgets nas áreas de widgets
   function is_sidebar_active( $index ){
     global $wp_registered_sidebars;
     $widgetcolums = wp_get_sidebars_widgets();
     if ($widgetcolums[$index]) return true;
     return false;
   }

// excerpt para pages
add_post_type_support('page','excerpt');

// Limite de caracteres
function excerpt($limit) {
$excerpt = explode(' ', get_the_excerpt(), $limit);
if (count($excerpt)>=$limit) {
array_pop($excerpt);
$excerpt = implode(" ",$excerpt).'&#91;...&#93;';
} else {
$excerpt = implode(" ",$excerpt);
}
$excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
return $excerpt;
}

add_filter('excerpt_length', 'custom_excerpt_length');
function custom_excerpt_length($length) {
return 200; //Nova quantidade de caracteres do excerpt
}