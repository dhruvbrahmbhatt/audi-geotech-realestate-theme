<?php get_header(); ?>
<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <h1 class="display-1 text-white animated slideInDown">Welcome to our Blogs!</h1>
    </div>
</div>
<!-- Page Header End -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                <?php while (have_posts()) {
                    the_post();
                ?>
                    <div class="post-item">
                        <h2 class="headline headline--medium headline--post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    </div>
                    <div class="metabox">
                        <p>Posted by <?php the_author_posts_link() ?> on <?php the_time("j.n.Y"); ?> in <?php echo get_the_category_list(", "); ?></p>
                    </div>
                    <div class="generic-content">
                        <?php the_excerpt(); ?>
                        <p><a class="btn btn--blue" href="<?php the_permalink(); ?>">Continue Reading &raquo;</a></p>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>