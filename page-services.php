<?php get_header(); ?>
<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <h1 class="display-1 text-white animated slideInDown">Services</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <!-- <ol class="breadcrumb text-uppercase mb-0">
                <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                <li class="breadcrumb-item text-primary active" aria-current="page"><?php //echo get_the_title(); 
                                                                                    ?></li>
            </ol> -->
        </nav>
    </div>
</div>
<!-- Page Header End -->
<!-- Facts Start -->
<div class="container-xxl py-5">
    <div class="container pt-5">
        <div class="row g-4">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="fact-item text-center bg-light h-100 p-5 pt-0">
                    <div class="fact-icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/icon-2.png" alt="Icon">
                    </div>
                    <h3 class="mb-3">Design Approach</h3>
                    <p class="mb-0">Our solutions are backed by a consultative design process that involves collaboration with engineers, contractors, and project managers. We tailor every solution based on site conditions, performance goals, and long-term resilience.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="fact-item text-center bg-light h-100 p-5 pt-0">
                    <div class="fact-icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/icon-3.png" alt="Icon">
                    </div>
                    <h3 class="mb-3">Innovative Solutions</h3>
                    <p class="mb-0">We specialize in forward-thinking, sustainable geotechnical products designed to solve complex engineering challenges across highways, railways, mining, and environmental projects. Our materials offer cutting-edge performance with a focus on durability and environmental impact.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="fact-item text-center bg-light h-100 p-5 pt-0">
                    <div class="fact-icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/icon-4.png" alt="Icon">
                    </div>
                    <h3 class="mb-3">Project Management</h3>
                    <p class="mb-0">From planning to execution, we ensure seamless coordination across every stage of the project. Our technical support team offers on-site guidance, installation best practices, and ongoing consultation to ensure successful implementation and long-term outcomes.</p>
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
                Featured projects or industries
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
<!-- Service End -->
<!-- Testimonial Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h4 class="section-title">Testimonial</h4>
            <h1 class="display-5 mb-4">Thousands Of Customers Who Trust Us And Our Services</h1>
        </div>
        <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
            <div class="testimonial-item text-center" data-dot="<img class='img-fluid' src='img/testimonial-1.jpg' alt=''>">
                <p class="fs-5">Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.</p>
                <h3>Client Name</h3>
                <span class="text-primary">Profession</span>
            </div>
            <div class="testimonial-item text-center" data-dot="<img class='img-fluid' src='img/testimonial-2.jpg' alt=''>">
                <p class="fs-5">Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.</p>
                <h3>Client Name</h3>
                <span class="text-primary">Profession</span>
            </div>
            <div class="testimonial-item text-center" data-dot="<img class='img-fluid' src='img/testimonial-3.jpg' alt=''>">
                <p class="fs-5">Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.</p>
                <h3>Client Name</h3>
                <span class="text-primary">Profession</span>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->
<?php get_footer(); ?>