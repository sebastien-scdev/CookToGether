<?php
/*
Template Name: Search
*/

get_header(); ?>

<div class="wrap">
    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

    <section>
        <div class="container u-PaddingBottom20">
            <div class="">
            <?php $countPosts = $wp_query->post_count;
            echo '<p class="u-MarginBottom0">'.$countPosts.' résultat(s) correspondent à votre recherche</p>';
            ?>
            </div>
        </div>
    </section>

    <section>
    <div class="container u-PaddingTop10 u-PaddingBottom100">
            <ul class="list">
                <?php
                if ( have_posts() ) :
                    while ( have_posts() ) : the_post(); ?>
                        <?php the_title( sprintf( '<li class="lead text-primary"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></li>' ); ?>
                <?php
                endwhile;
                endif;
                ?>
            </ul>
    </div>
    </section>
</main>
</div>

<?php get_footer(); ?>

