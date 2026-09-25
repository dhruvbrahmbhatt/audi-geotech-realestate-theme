<!DOCTYPE html>
<html lang="en">
<?php wp_head(); ?>

<head>
    <meta charset="utf-8">
    <title><?php the_title(); ?></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border position-relative text-primary" style="width: 6rem; height: 6rem;" role="status"></div>
        <img class="position-absolute top-50 start-50 translate-middle" src="img/icons/icon-1.png" alt="Icon">
    </div>
    <!-- Spinner End -->

    <!-- Topbar Start -->
    <div class="container-fluid bg-dark p-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="row gx-0 d-none d-lg-flex">
            <div class="col-lg-7 px-5 text-start">
                <div class="h-100 d-inline-flex align-items-center py-3 me-3">
                    <a class="text-body px-2" href="https://wa.me/919500676711" target="_blank">
                        <i class="fab fa-whatsapp text-success me-2"></i>WhatsApp Us
                    </a>
                </div>
            </div>
            <div class="col-lg-5 px-5 text-end">
                <div class="h-100 d-inline-flex align-items-center">
                    <a class="text-body px-2" href="mailto:info@audigeotech.com?subject=Inquiry&body=Hello Audi Geotech Team,">
                        <i class="fa fa-envelope text-primary me-2"></i>info@audigeotech.com
                    </a>

                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
        <a href="<?php echo site_url(); ?>" class="navbar-brand ms-4 ms-lg-0">
            <h1 class="text-primary m-0"><img class="me-3" src="<?php $custom_logo_id = get_theme_mod('custom_logo');
                                                                $image = wp_get_attachment_image_src($custom_logo_id, 'full');
                                                                echo $image[0]; ?>" style="height: 40px; width:40px;" alt="Icon">Audi Geotech</h1>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="<?php echo site_url(); ?>" class="nav-item nav-link <?php if (is_front_page()) echo 'active'; ?>">Home</a>
                <a href="<?php echo site_url('about'); ?>" class="nav-item nav-link <?php if (is_page('about')) echo 'active'; ?>">About</a>
                <a href="<?php echo site_url('downloads'); ?>" class="nav-item nav-link <?php if (is_page('downloads')) echo 'active'; ?>">Resources</a>
                <div class="nav-item dropdown">
                    <a href="<?php echo get_post_type_archive_link('product'); ?>" class="dropdown-toggle nav-link <?php echo get_post_type() == 'product' ? 'active' : '' ?>" data-bs-toggle="dropdown">Products</a>
                    <!-- <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a> -->
                    <div class="dropdown-menu border-0 m-0">
                        <?php $projectsQuery = new WP_Query([
                            'post_type' => 'product',
                            'posts_per_page' => 6,
                            'order' => 'ASC'
                        ]);
                        // echo $projectsQuery->post_count() . 'sd';
                        while ($projectsQuery->have_posts()) {
                            $projectsQuery->the_post(); ?>
                            <a href="<?php the_permalink(); ?>" class="dropdown-item"><?php the_title(); ?></a>
                        <?php } ?>
                    </div>
                </div>
                <a href="<?php echo site_url('services'); ?>" class="nav-item nav-link <?php if (is_page('services')) echo 'active'; ?>">Services</a>
                <a href="<?php echo get_post_type_archive_link('post'); ?>" class="nav-item nav-link <?php echo (is_home() || is_singular('post')) ? 'active' : ''; ?>">Knowledge Center</a>
                <a href="<?php echo site_url('contact'); ?>" class="nav-item nav-link <?php if (is_page('contact')) echo 'active'; ?>">Contact Us</a>
                <!-- <div class="nav-item dropdown">
                    <!-- <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu border-0 m-0">
                        <a href="feature.html" class="dropdown-item">Our Features</a>
                        <a href="project.html" class="dropdown-item">Our Projects</a>
                        <a href="team.html" class="dropdown-item">Team Members</a>
                        <a href="appointment.html" class="dropdown-item">Appointment</a>
                        <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                        <a href="404.html" class="dropdown-item">404 Page</a>
                    </div> -->
                <!-- </div>  -->
            </div>
        </div>
    </nav>
    <!-- Navbar End -->