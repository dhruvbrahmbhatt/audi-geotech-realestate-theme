<?php get_header();
while (have_posts()) {
    the_post();
    pageBanner();
?>

    <section class="container-xxl py-5">
        <div class="container">
            <h2 class="text-center mb-5">Product Datasheets</h2>
            <div class="row g-4 justify-content-center">

                <?php
                $args = array(
                    'post_type' => 'dlm_download',
                    'posts_per_page' => -1,
                    'orderby' => 'date',
                    'order' => 'DESC'
                );

                $downloads = new WP_Query($args);
                if ($downloads->have_posts()):
                    while ($downloads->have_posts()): $downloads->the_post();
                        $download_id = get_the_ID();
                        $title = get_the_title();
                        $permalink = get_permalink($download_id);
                ?>
                        <div class="col-md-4 col-sm-6">
                            <div class="card h-100 text-center border-0 shadow-sm">
                                <div class="card-body">
                                    <a href="#" class="download-trigger text-decoration-none" data-pdf="<?php echo esc_url($permalink); ?>" data-bs-toggle="modal" data-bs-target="#pdfModal">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/pdf-download.jpg" alt="PDF icon" class="mb-3" style="max-width:80px;">
                                        <h5 class="card-title text-dark"><?php echo esc_html($title); ?></h5>
                                    </a>
                                </div>
                            </div>
                        </div>
                <?php endwhile;
                endif;
                wp_reset_postdata();
                ?>
            </div>
        </div>
    </section>

    <!-- Modal -->
    <div class="modal fade" id="pdfModal" tabindex="-1" aria-labelledby="pdfModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Get Your PDF</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <?php echo do_shortcode('[contact-form-7 id="fb5ca03" title="PDF Access Form"]'); ?>
                </div>
            </div>
        </div>
    </div>

<?php }
get_footer(); ?>