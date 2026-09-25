<?php get_header();
while (have_posts()) {
    the_post();
    pageBanner();
?>

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


    <!-- Founder Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h4 class="section-title">Words from the Founder</h4>
                <h1 class="display-5 mb-4">Our Vision & Commitment</h1>
            </div>
            <div class="row g-5 align-items-center">
                <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <img class="img-fluid rounded-circle" src="http://getfitwithme.local/wp-content/uploads/2025/07/c15RbaoUwRBOjUa8dZI0dKPI09lMj2MHLunNOWmVxo9J7AAK3AtSk7-2H4ayAK5pio.webp" alt="Founder Image">
                </div>
                <div class="col-lg-8 wow fadeInUp" data-wow-delay="0.3s">
                    <p class="fs-5">
                        “At the heart of everything we build is a belief in design that lasts. My journey began with a vision to shape environments that inspire people and respect the planet. Today, we continue to lead by example — blending innovation with sustainability in every project we take on.”
                    </p>
                    <h3 class="mt-4 mb-1">Shanthini Ramasamy</h3>
                    <span class="text-primary">Founder</span>
                </div>
            </div>
        </div>
    </div>
    <!-- Founder End -->

    <!-- Testimonial Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div
                class="text-center mx-auto mb-5 wow fadeInUp"
                data-wow-delay="0.1s"
                style="max-width: 600px">
                <h4 class="section-title">Testimonial</h4>
                <h1 class="display-5 mb-4">
                    Client segments served
                </h1>
            </div>
            <div
                class="owl-carousel testimonial-carousel wow fadeInUp"
                data-wow-delay="0.1s">
                <?php
                $testimonials = new WP_Query([
                    'post_type' => 'testimonial',
                    'posts_per_page' => '-1',
                    'order' => 'ASC'
                ]);
                while ($testimonials->have_posts()) {
                    $testimonials->the_post();
                    get_template_part('template-parts/content', 'testimonials');
                }
                ?>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
<?php }
get_footer(); ?>