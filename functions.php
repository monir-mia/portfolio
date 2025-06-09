<?php
function mytheme_enqueue_assets() {
    // CSS ফাইলসমূহ
    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/assets/vendor/bootstrap/css/bootstrap.min.css');
    wp_enqueue_style('aos-css', $theme_uri . '/assets/vendor/aos/aos.css');
    wp_enqueue_style('glightbox-css', $theme_uri . '/assets/vendor/glightbox/glightbox.min.css');
    wp_enqueue_style('swiper-css', $theme_uri . '/assets/vendor/swiper/swiper-bundle.min.css');
    wp_enqueue_style('main-style', get_template_directory_uri() . '/assets/css/main.css');
    
    // JS ফাইলসমূহ (true = footer-এ লোড হবে)
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/assets/vendor/bootstrap/js/bootstrap.bundle.min.js', array('jquery'), null, true);
    wp_enqueue_script('aos-js', $theme_uri . '/assets/vendor/aos/aos.js', array(), null, true);
    wp_enqueue_script('glightbox-js', $theme_uri . '/assets/vendor/glightbox/glightbox.min.js', array(), null, true);
    wp_enqueue_script('swiper-js', $theme_uri . '/assets/vendor/swiper/swiper-bundle.min.js', array(), null, true);
    wp_enqueue_script('imagesloaded', $theme_uri . '/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js', array(), null, true);
    wp_enqueue_script('isotope', $theme_uri . '/assets/vendor/isotope-layout/isotope.pkgd.min.js', array(), null, true);
    wp_enqueue_script('purecounter', $theme_uri . '/assets/vendor/purecounter/purecounter_vanilla.js', array(), null, true);
    wp_enqueue_script('typed', $theme_uri . '/assets/vendor/typed.js/typed.umd.js', array(), null, true);
    wp_enqueue_script('waypoints', $theme_uri . '/assets/vendor/waypoints/noframework.waypoints.js', array(), null, true);
    wp_enqueue_script('php-email-form', $theme_uri . '/assets/vendor/php-email-form/validate.js', array(), null, true);
    wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/main.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'mytheme_enqueue_assets');
?>

