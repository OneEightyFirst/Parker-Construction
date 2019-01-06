<section class="banner">
	<div class="banner-carousel">

	<?php while( have_rows('hero_banner') ): the_row(); 

		// vars
		$image = get_sub_field('banner_image');
		$content = get_sub_field('banner_copy');

		?>

		<div class="banner-slide">
            <img src="<?php echo $image; ?>"/>
                <div class="container">
                    <div class="row no-gutters">
                        <div class="col-md-9 offset-md-3 col-lg-7 offset-lg-5 col-xl-6 offset-xl-6 text-right">
                            <div class="banner-title"><?php echo $content; ?></div>
                        </div>
                    </div>
                </div>
        </div>

	<?php endwhile; ?>

	</div>
</section>