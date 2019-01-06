<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

<?php // open the WordPress loop
if (have_posts()) : while (have_posts()) : the_post();

	// are there any rows within within our flexible content?
	if( have_rows('master_template') ): 

		// loop through all the rows of flexible content
		while ( have_rows('master_template') ) : the_row();

		// EMAIL UPDATES
		if( get_row_layout() == 'hero_banner' )
			get_template_part('partials/band', 'hero');

		// NEW PODCAST
		if( get_row_layout() == 'left_right_copy' )
			get_template_part('partials/band', 'twoColCopy');

		// SERVICES STRIPE
		if( get_row_layout() == 'portfolio_slider' )
			get_template_part('partials/band', 'portfolioSlider');

		endwhile; // close the loop of flexible content
	endif; // close flexible content conditional

endwhile; endif; // close the WordPress loop ?>


<?php get_footer(); ?>
