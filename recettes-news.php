<?php
/*
Template Name: Infine-Recettes
Template Post Type: post, recettes
*/
?>

<?php get_header();  ?>
<?php
// Start the loop.
while ( have_posts() ) : the_post(); ?>

<?php
// Appel du content dédié LP
get_template_part( 'template-parts/news/fiches-recettes', 'content' );
?>

<?php
endwhile;
?>

<?php get_footer(); ?>
<?php wp_footer(); ?>

</body>

