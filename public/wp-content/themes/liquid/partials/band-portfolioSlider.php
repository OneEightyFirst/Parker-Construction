        <?php  // loop through rows (parent repeater)
            while( have_rows('portfolio_slider') ): the_row(); ?>
                <?php if ( get_sub_field( 'lean' ) ): ?>  
                    <section class="portfolio aos-init aos-animate lean-left" data-aos="fade-up" data-aos-duration="800" data-aos-easing="ease-in-out">
                <?php else: // field_name returned false ?>
                    <section class="portfolio aos-init aos-animate lean-right" data-aos="fade-up" data-aos-duration="800" data-aos-easing="ease-in-out">
                <?php endif; // end of if field_name logic    
                $count=1; ?>
                <?php
                    echo '<div class="portfolio-nav pn-' . $count . '"></div>';
                    $count++;
            
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
        <?php endwhile; // while( has_sub_field('to-do_lists') ): ?>