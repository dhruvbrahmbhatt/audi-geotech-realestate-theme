<?php get_header();
while (have_posts()) {
    the_post();
    pageBanner([
        'title' => get_the_title(),
        'photo' => get_the_post_thumbnail_url(get_the_ID(), 'bannerImage')
    ]) ?>

    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="container container--narrow page-section">
                    <div class="metabox metabox--position-up metabox--with-home-link">
                        <p>
                            <a class="metabox__blog-home-link" href="<?php echo site_url("/blog") ?>"><i class="fa fa-home" aria-hidden="true"></i> Blog Home</a>
                            <span class="metabox__main">Posted by <?php the_author_posts_link(); ?> on <?php the_time("j.n.Y"); ?> in <?php echo get_the_category_list(", "); ?></span>
                        </p>
                    </div>
                <?php
                the_content();
            }
                ?>
                </div>
            </div>
        </div>
    </div>
    <?php get_footer(); ?>