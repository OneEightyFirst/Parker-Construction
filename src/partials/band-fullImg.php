<?php 

$image = get_sub_field('full_image');

if( !empty($image) ): ?>
<section class="full-img py-5">
    <div class="container-fluid p-0">
        <div class="row no-gutters">
            <div class="col">
                <img class="img-fluid" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
            </div>
        </div>
    </div>
</section>

<?php endif; ?>