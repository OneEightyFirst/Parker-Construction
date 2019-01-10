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

	// are there any rows within within our flexible content?
	if( have_rows('master_template') ): 

		// loop through all the rows of flexible content
		while ( have_rows('master_template') ) : the_row();

		// HERO BANNER
        if( get_row_layout() == 'hero_banner_band' ) 
			get_template_part('partials/band', 'hero');
        
		// TWO COLUMN COPY
		if( get_row_layout() == 'two_column_copy_band' ) 
			get_template_part('partials/band', 'twoColCopy');
        
		// PORTFOLIO SLIDER
		if( get_row_layout() == 'portfolio_slider_band' ) 
			get_template_part('partials/band', 'portfolioSlider');

		// PROJECT SLIDER
		if( get_row_layout() == 'project_slider_band' ) 
			get_template_part('partials/band', 'projectCarousel');

		// SINGLE COLUMN COPY
		if( get_row_layout() == 'single_column_copy_band' ) 
			get_template_part('partials/band', 'singleColCopy');
            
		// TESTIMONIAL SLIDER
		if( get_row_layout() == 'testimonial_band' ) 
            get_template_part('partials/band', 'testimonial');
			
		// TEAM GALLERY
		if( get_row_layout() == 'team_gallery_band' ) 
			get_template_part('partials/band', 'teamGallery');

		// FULL WIDTH IMAGE
		if( get_row_layout() == 'full_image_band' ) 
			get_template_part('partials/band', 'fullImg');			
						
		endwhile; // close the loop of flexible content
	endif; // close flexible content conditional ?>

<?php get_footer(); ?>
