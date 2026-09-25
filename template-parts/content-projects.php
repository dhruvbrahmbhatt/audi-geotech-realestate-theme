<div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="<?php echo $i; ?>">
    <div
        class="service-item d-flex position-relative text-center h-100">
        <img class="bg-img" src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'aboutImage'); ?>" alt="" />
        <div class="service-text p-5">
            <img class="mb-4" src="<?php echo get_template_directory_uri() . '/img/icons/icon-5.png'; ?>" alt="Icon" />
            <h3 class="mb-3"><?php echo get_the_title(); ?></h3>
            <p class="mb-4">
                <?php echo get_the_excerpt(); ?>
            </p>
            <a class="btn" href="<?php echo get_the_permalink(); ?>"><i class="fa fa-plus text-primary me-3"></i>Read More</a>
        </div>
    </div>
</div>