<?php
function theme_enqueue_assets()
{
    // Favicon (output in head using wp_head hook separately, see below)
    echo '<link rel="icon" href="' . get_template_directory_uri() . '/img/favicon.ico" type="image/x-icon">' . "\n";

    // Google Fonts
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600&family=Teko:wght@400;500;600&display=swap', [], null);

    // Preconnect for performance
    add_action('wp_head', function () {
        echo '<link rel="preconnect" href="https://fonts.googleapis.com">' . "\n";
        echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>' . "\n";
    });

    // Icon Fonts
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css', [], '5.10.0');
    wp_enqueue_style('bootstrap-icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css', [], '1.4.1');

    // Library Styles
    wp_enqueue_style('animate', get_template_directory_uri() . '/lib/animate/animate.min.css');
    wp_enqueue_style('owlcarousel', get_template_directory_uri() . '/lib/owlcarousel/assets/owl.carousel.min.css');
    wp_enqueue_style('tempusdominus', get_template_directory_uri() . '/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css');

    // Bootstrap + Main Stylesheet
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_style('main-style', get_template_directory_uri() . '/css/style.css');

    // jQuery
    wp_enqueue_script('jquery-cdn', 'https://code.jquery.com/jquery-3.4.1.min.js', [], '3.4.1', true);

    // Bootstrap Bundle
    wp_enqueue_script('bootstrap-bundle', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js', ['jquery-cdn'], '5.0.0', true);

    // JS Libraries
    wp_enqueue_script('wow', get_template_directory_uri() . '/lib/wow/wow.min.js', [], null, true);
    wp_enqueue_script('easing', get_template_directory_uri() . '/lib/easing/easing.min.js', [], null, true);
    wp_enqueue_script('waypoints', get_template_directory_uri() . '/lib/waypoints/waypoints.min.js', [], null, true);
    wp_enqueue_script('counterup', get_template_directory_uri() . '/lib/counterup/counterup.min.js', [], null, true);
    wp_enqueue_script('owlcarousel', get_template_directory_uri() . '/lib/owlcarousel/owl.carousel.min.js', [], null, true);
    wp_enqueue_script('moment', get_template_directory_uri() . '/lib/tempusdominus/js/moment.min.js', [], null, true);
    wp_enqueue_script('moment-timezone', get_template_directory_uri() . '/lib/tempusdominus/js/moment-timezone.min.js', [], null, true);
    wp_enqueue_script('tempusdominus', get_template_directory_uri() . '/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js', [], null, true);

    // Main JS
    wp_enqueue_script('main-js', get_template_directory_uri() . '/js/main.js', [], null, true);

    // add_theme_support('post-thumbnails'); // Ensure featured images are enabled

    // add_image_size('large', 1500, 640, true);
}
add_action('wp_enqueue_scripts', 'theme_enqueue_assets');


function university_features()
{
    add_theme_support('post-thumbnails');
    add_image_size('bannerImage', 900, 400, true); // Hard crop
    add_image_size('aboutImage', 600, 800, true); // Hard crop
}
add_action('after_setup_theme', 'university_features');

function pageBanner($args = NULL)
{
?>
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn"
        data-wow-delay="0.1s"
        style="<?php echo $args['photo'] ? 'background-image: url(' . esc_url($args['photo']) . '); background-size: cover;' : ''; ?>">
        <div class="container py-5">
            <h1 class="display-1 text-white animated slideInDown"><?php echo $args['title'] ?? get_the_title(); ?></h1>
            <!-- <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb text-uppercase mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page"><?php echo $args['title'] ?? get_the_title(); ?></li>
                </ol>
            </nav> -->
        </div>
    </div>
<?php
}
