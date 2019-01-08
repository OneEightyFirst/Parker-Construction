    <?php while( have_rows('portfolio_slider') ): the_row(); ?>

        <?php if ( get_sub_field( 'lean' ) ): ?>  
            <section class="portfolio aos-init aos-animate lean-left" data-aos="fade-up" data-aos-duration="800" data-aos-easing="ease-in-out">
        <?php else: // field_name returned false ?>
            <section class="portfolio aos-init aos-animate lean-right" data-aos="fade-up" data-aos-duration="800" data-aos-easing="ease-in-out">
        <?php endif; // end of if field_name logic    ?>              

        
                <div class="portfolio-nav"></div>


        <?php 
        $images = get_sub_field('portfolio_slides');
        $size = 'full'; // (thumbnail, medium, large, full or custom size)
            if( $images ): ?>
                <div class="portfolio-carousel">
                    <?php foreach( $images as $image ): ?>

                        <div class="banner-slide">
                            <?php echo wp_get_attachment_image( $image['ID'], $size ); ?>
                        </div>

                    <?php endforeach; ?>
                </div>

            <?php endif; ?>

            </section>
    <?php endwhile; ?>

<!-- <h1><?php echo $count; ?></h1> -->
