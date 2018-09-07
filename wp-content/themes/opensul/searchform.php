<?php
/*
Template Name: Search Form
*/
?>

<form action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get" accept-charset="utf-8" id="searchform" role="search">

    <div class="input-group input-group-lg">
        <input type="text" name="s" id="s" class="form-control" value="<?php the_search_query(); ?>" placeholder="Pesquisar por...">
        <span class="input-group-btn">
            <button id="searchsubmit" class="btn btn-default" type="submit">
                <i class="fas fa-search"></i>
            </button>
        </span>
    </div>

</form>