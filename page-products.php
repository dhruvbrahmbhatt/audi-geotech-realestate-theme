<?php get_header(); ?>
<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <h1 class="display-1 text-white animated slideInDown">Knowledge Center</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb text-uppercase mb-0">
                <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                <li class="breadcrumb-item text-primary active" aria-current="pagew">Knowledge Center</li>
            </ol>
        </nav>
    </div>
</div>
x
<!-- Page Header End -->
<div class="container-xxl py-5">
    <div class="container">
        <?php
        $productQuery = new WP_Query([
            'post_type' => 'products',
            'posts_per_page' => -1,
            'order' => 'ASC'
        ]);
        while ($productQuery->have_posts()) {
            $productQuery->the_post();
        ?>
            <div class="post-item">
                <h2 class="headline headline--medium headline--post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            </div>
            <div class="metabox">
                <p>Posted by <?php the_author_posts_link() ?> on <?php the_time("j.n.Y"); ?> in <?php echo get_the_category_list(", "); ?></p>
            </div>
            <div class="generic-content">
                <?php the_excerpt(); ?>
                <p><a class="btn btn-primary" href="<?php the_permalink(); ?>">Continue Reading &raquo;</a></p>
            </div>
        <?php } ?>
    </div>
</div>
<?php get_footer(); ?>