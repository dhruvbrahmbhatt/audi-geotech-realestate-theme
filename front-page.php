<?php
get_header(); ?>
<!-- Carousel Start -->
<div class="container-fluid p-0 pb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="owl-carousel header-carousel position-relative">
        <?php
        $bannerData = new WP_Query([
            'post_type' => 'product',
            'post_per_page' => 3,
            'order' => 'ASC'
        ]);
        if ($bannerData->have_posts()) {
            while ($bannerData->have_posts()) {
                $bannerData->the_post();
        ?>
                <div
                    class="owl-carousel-item position-relative"
                    data-dot="<img src='<?php echo get_the_post_thumbnail_url(get_the_ID(), 'thumbnail'); ?>'>">
                    <img class="img-fluid" style="height: 550px; width:100%" src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'bannerImage'); ?>" alt="" />
                    <div class="owl-carousel-inner">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-10 col-lg-8">
                                    <h1 class="display-1 text-white animated slideInDown">
                                        <?php the_title();
                                        ?>
                                    </h1>
                                    <p class="fs-5 fw-medium text-white mb-4 pb-3">
                                        <?php //echo get_field('banner_data')['banner_text'] 
                                        ?>
                                    </p>
                                    <a
                                        href="<?php the_permalink() ?>"
                                        class="btn btn-primary py-3 px-5 animated slideInLeft">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        <?php
            }
        }
        wp_reset_postdata();
        ?>
    </div>
</div>
<!-- Carousel End -->
<!-- About Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                <div class="about-img">
                    <?php
                    // Replace 'your_cpt_slug' with the actual CPT slug (e.g., 'products')
                    $post = get_page_by_path('first-product', '', 'product');
                    $post1 = get_page_by_path('audigro-fgm-flexible-growth-medium', '', 'product');
                    // print_r($post);
                    if ($post && has_post_thumbnail($post->ID)) {
                        $img_url = get_the_post_thumbnail_url($post->ID, 'aboutImage');
                        $img_url1 = get_the_post_thumbnail_url($post1->ID, 'aboutImage');
                    ?>
                        <img class="img-fluid" src="<?php echo esc_url($img_url); ?>" alt="<?php echo esc_attr(get_the_title($post->ID)); ?>" />
                        <img class="img-fluid" src="<?php echo esc_url($img_url1); ?>" alt="<?php echo esc_attr(get_the_title($post1->ID)); ?>" />
                        <!-- <img class="img-fluid" src="<?php echo get_template_directory_uri() . '/img/about-2.jpg'; ?>" alt="" /> -->

                    <?php
                    } else {
                        // Optional fallback
                    ?>
                        <img class="img-fluid" src="<?php echo esc_url(get_template_directory_uri() . '/img/default.jpg'); ?>" alt="Default Image" />
                        <img class="img-fluid" src="<?php echo esc_url(get_template_directory_uri() . '/img/default.jpg'); ?>" alt="Default Image" />
                    <?php
                    }
                    ?>
                </div>
            </div>
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                <h4 class="section-title">About Us</h4>
                <h1 class="display-5 mb-4">
                    A Creative GeoTech Agency For Innovation.
                </h1>
                <p>
                    Founded in 2019, we specialize in sustainable geotechnical and environmental solutions for infrastructure, erosion control, and land restoration. With 6 years of experience, we provide innovative materials for highways, railways, mining, landfills, and landscaping.

                    Committed to quality and eco-responsibility, we work closely with engineers and developers to deliver durable solutions that support a greener, more resilient future.


                </p>
                <div class="d-flex align-items-center mb-5">
                    <div
                        class="d-flex flex-shrink-0 align-items-center justify-content-center border border-5 border-primary"
                        style="width: 120px; height: 120px">
                        <h1 class="display-1 mb-n2" data-toggle="counter-up">6</h1>
                    </div>
                    <div class="ps-4">
                        <h3>Years</h3>
                        <h3>Working</h3>
                        <h3 class="mb-0">Experience</h3>
                    </div>
                </div>
                <p class="mb-4">
                <h2>Our product portfolio includes:</h2>
                <ul>
                    <li>
                        <strong>AudiMesh</strong> – A robust 3D geo-reinforced mesh designed for long-term slope stabilization and erosion prevention.
                    </li>
                    <li>
                        <strong>AudiGro FGM (Flexible Growth Medium)</strong> – A biodegradable, nutrient-rich solution that promotes rapid vegetation and soil protection.
                    </li>
                    <li>
                        <strong>AudiGro BFM (Bonded Fibre Matrix)</strong> – A high-performance erosion control blanket for steep and vulnerable terrains.
                    </li>
                    <li>
                        <strong>AudiCreteWrap (Concrete Canvas)</strong> – A flexible concrete-impregnated fabric that replaces traditional concrete in a more sustainable and rapid-installation format.
                    </li>
                </ul>
                </p>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Feature Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <h4 class="section-title">What Makes Us Different!</h4>
                <h1 class="display-5 mb-4">
                    What Makes Audi Geotech Different? Learn More About Us!
                </h1>
                <p class="mb-4">
                    With years of expertise in geotechnical and environmental engineering,
                    Audi Geotech stands out by delivering sustainable, innovative, and reliable
                    solutions for complex infrastructure and environmental challenges.
                    Our commitment to performance, quality, and long-term impact is what sets us apart.
                </p>
                <div class="row g-4">
                    <div class="col-12">
                        <div class="d-flex align-items-start">
                            <img
                                class="flex-shrink-0"
                                src="<?php echo get_template_directory_uri() . '/img/icons/icon-2.png'; ?>"
                                alt="Icon" />
                            <div class="ms-4">
                                <h3>Sustainability</h3>
                                <p class="mb-0">
                                    We prioritize eco-friendly practices and biodegradable solutions, helping restore natural landscapes while reducing the carbon footprint of infrastructure projects.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="d-flex align-items-start">
                            <img
                                class="flex-shrink-0"
                                src="<?php echo get_template_directory_uri() . '/img/icons/icon-3.png'; ?>"
                                alt="Icon" />
                            <div class="ms-4">
                                <h3>Innovation</h3>
                                <p class="mb-0">
                                    From flexible growth media to concrete canvas technology, we continuously adopt advanced materials and methods that solve modern engineering problems more efficiently and cost-effectively.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="d-flex align-items-start">
                            <img
                                class="flex-shrink-0"
                                src="<?php echo get_template_directory_uri() . '/img/icons/icon-4.png'; ?>"
                                alt="Icon" />
                            <div class="ms-4">
                                <h3>Reliability</h3>
                                <p class="mb-0">
                                    With proven product performance across highways, railways, mining, and landfills, our clients trust us for durable results, technical support, and on-time delivery—every time.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="feature-img">
                    <?php
                    // Replace 'your_cpt_slug' with the actual CPT slug (e.g., 'products')
                    $post = get_page_by_path('audigro-bfm-bonded-fibre-matrix', '', 'product');
                    $post1 = get_page_by_path('audicretewrap-concrete-canvas', '', 'product');
                    // print_r($post);
                    if ($post && has_post_thumbnail($post->ID)) {
                        $img_url = get_the_post_thumbnail_url($post->ID, 'aboutImage');
                        $img_url1 = get_the_post_thumbnail_url($post1->ID, 'aboutImage');
                    ?>
                        <img class="img-fluid" src="<?php echo esc_url($img_url); ?>" alt="<?php echo esc_attr(get_the_title($post->ID)); ?>" />
                        <img class="img-fluid" src="<?php echo esc_url($img_url1); ?>" alt="<?php echo esc_attr(get_the_title($post1->ID)); ?>" />
                    <?php
                    } else {
                        // Optional fallback
                    ?>
                        <img class="img-fluid" src="<?php echo esc_url(get_template_directory_uri() . '/img/default.jpg'); ?>" alt="Default Image" />
                        <img class="img-fluid" src="<?php echo esc_url(get_template_directory_uri() . '/img/default.jpg'); ?>" alt="Default Image" />
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Feature End -->

<!-- Facts Start -->
<div class="container-xxl py-5">
    <div class="container pt-5">
        <div class="row g-4">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="fact-item text-center bg-light h-100 p-5 pt-0">
                    <div class="fact-icon">
                        <a href="<?php echo site_url('resources'); ?>"><img src="<?php echo get_template_directory_uri() . '/img/icons/icon-6.png'; ?>" alt="Icon" /></a>
                    </div>
                    <h3 class="mb-3">Resources & Datasheets</h3>
                    <p class="mb-0">
                        Explore our library of technical datasheets and product brochures. Each PDF includes detailed specifications, application methods, and performance advantages to help you select the right solution for your project.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="fact-item text-center bg-light h-100 p-5 pt-0">
                    <div class="fact-icon">
                        <a href="<?php echo site_url('services'); ?>"><img src="<?php echo get_template_directory_uri() . '/img/icons/icon-5.png'; ?>" alt="Icon" /></a>
                    </div>
                    <h3 class="mb-3">Sectors Served</h3>
                    <p class="mb-0">
                        We serve a wide range of infrastructure and environmental sectors, providing sustainable solutions for highways, railways, mining sites, landfills, landscaping projects, utility corridors, and emergency relief applications.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="fact-item text-center bg-light h-100 p-5 pt-0">
                    <div class="fact-icon">
                        <a href="<?php echo site_url('contact'); ?>"><img src="<?php echo get_template_directory_uri() . '/img/icons/icon-2.png'; ?>" alt="Icon" /></a>
                    </div>
                    <h3 class="mb-3">Contact</h3>
                    <p class="mb-0">
                        Have questions or need a custom solution? Our team is here to help with product inquiries, technical support, and partnership opportunities.
                        We’re just an email or call away—connect with us today.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Facts End -->

<!-- Service Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div
            class="text-center mx-auto mb-5 wow fadeInUp"
            data-wow-delay="0.1s"
            style="max-width: 600px">
            <h4 class="section-title">Our Services</h4>
            <h1 class="display-5 mb-4">
                Featured Industries
            </h1>
        </div>
        <div class="row g-4">
            <?php
            $projects = new WP_Query([
                'post_type' => 'projects',
                'per_page' => 6,
                'order' => 'ASC'
            ]);

            $i = 0.1;
            while ($projects->have_posts()) {
                $projects->the_post();
                get_template_part('template-parts/content', 'projects');
                if ($i < 0.5) {
                    $i = $i + 0.2;
                } else {
                    $i = 0.1;
                }
            } ?>
        </div>
    </div>
</div>

<!-- Appointment Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <h4 class="section-title">Get a Quote</h4>
                <h1 class="display-5 mb-4">
                    Get a Quote To Start Your Dream Project
                </h1>
                <p class="mb-4">
                    Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu
                    diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet
                    lorem sit clita duo justo magna dolore erat amet
                </p>
                <div class="row g-4">
                    <div class="col-12">
                        <div class="d-flex">
                            <div
                                class="d-flex flex-shrink-0 align-items-center justify-content-center bg-light"
                                style="width: 65px; height: 65px">
                                <i class="fa fa-2x fa-phone-alt text-primary"></i>
                            </div>
                            <div class="ms-4">
                                <p class="mb-2">Call Us Now</p>
                                <h3 class="mb-0">+91 95006 76711</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="d-flex">
                            <div
                                class="d-flex flex-shrink-0 align-items-center justify-content-center bg-light"
                                style="width: 65px; height: 65px">
                                <i class="fa fa-2x fa-envelope-open text-primary"></i>
                            </div>
                            <div class="ms-4">
                                <p class="mb-2">Mail Us Now</p>
                                <h3 class="mb-0">info@audigeotech.com</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <?php echo do_shortcode('[contact-form-7 id="8c9efdb" title="Contact form 1"]'); ?>
                <?php //echo do_shortcode('[email-download download_id="2911" contact_form_id="fb5ca03"]'); 
                ?>
            </div>
        </div>
    </div>
</div>
<!-- Appointment End -->
<?php get_footer();
