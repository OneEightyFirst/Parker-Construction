<section class="team-gallery aos-init aos-animate py-5" data-aos="fade-up" data-aos-duration="800" data-aos-easing="ease-in-out">
    <div class="container">
<?php 

$images = get_sub_field('team_gallery');

if( $images ): ?>
        <div class="row">

        <?php foreach( $images as $image ): ?>
            <div class="col col-md-4 col-sm-6 col-12 mb-5 p-0">
                <div class="gallery-front">
                    <div class="gallery-front-img" style="background-image:url(<?php echo $image['url']; ?>);"></div>
                </div>                    
                <div class="gallery-back">
                    <p class="quote"><?php echo $image['description']; ?></p>
                </div>
                <p class="name"><?php echo $image['title']; ?></p>
                <p class="title"><?php echo $image['caption']; ?></p>
            </div>
        <?php endforeach; ?>
        </div>
<?php endif; ?>
    </div>
</section>