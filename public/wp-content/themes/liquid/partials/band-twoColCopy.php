
<?	while( have_rows('two_column_copy') ): the_row(); 
		// vars
		$left = get_sub_field('left_copy');
		$right = get_sub_field('right_copy');
		
        ?>
        <section class="main aos-init aos-animate" data-aos="fade-up" data-aos-duration="800" data-aos-easing="ease-in-out">
            <div class="container">
                <div class="row">
                    <div class="offset-lg-1 col-lg-5 offset-xl-1 col-xl-5">
                        <h1><?php echo $left; ?></h1>
                    </div>
                    <div class="offset-lg-0 col-lg-5 offset-xl-1 col-xl-5"> 
                        <?php echo $right; ?>
                    </div>
                </div>
            </div>
        </section>
	<?php endwhile; ?>
	