<?php
/**
 * Single template
 */
?>

<?php if ( is_single() ) {
	get_header( );
} else {
	get_header();
}; ?>
		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();
			// Include the single post content template.
			// End of the loop.
		endwhile;
		?>

<?php get_footer(); ?>