<section class="project-slider aos-init aos-animate py-5" data-aos="fade-up" data-aos-duration="800" data-aos-easing="ease-in-out">
    <div class="container">
<?php 
$images = get_sub_field('project_slider');
if( $images ): ?>
        <div class="row">
            <div class="col project">
                <span class="pageination pagingInfo-top-right"></span>
                <span class="pageination pagingInfo-bottom-left"></span>
                <div class="project-nav"></div>
                <div class="project-carousel">

                <?php foreach( $images as $image ): ?>
                    <div class="project-slide"><img src="<?php echo $image['url']; ?>" /></div>
                <?php endforeach; ?>
                </div>

            </div>
        </div>    
<?php endif; ?>
    </div>
</section>
