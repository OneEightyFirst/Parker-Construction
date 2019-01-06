<section class="testimonial">
	<div class="testimonial-slider">

	<?php while( have_rows('testimonial_slider') ): the_row(); 

		// vars
		$image = get_sub_field('testimonial_bg_img');
        $quote = get_sub_field('quote_copy');
		$author = get_sub_field('author_copy');
		$callout = get_sub_field('callout_copy');
    ?>
		<div class="testimonial-slide"> 
        <?php echo '<div class="container" style="background-image:url('. $image .');">' ?>  
                    <div class="row justify-content-center align-self-center"">
                        <div class="testimonial-left-col col-md-7">
                            <p class="quote text-white">
                                <?php echo $quote; ?>
                            </p>
                            <p class="author text-white">
                                <?php echo $author; ?>
                            </p>
                        </div>
                        <div class="testimonial-right-col col-md-4 offset-md-1">
                            <p class="callout text-white">
                                <?php echo $callout; ?>
                            </p>
                        </div>
                    </div>
                </div>
        </div>

	<?php endwhile; ?>

	</div>
</section>