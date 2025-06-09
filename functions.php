<?php
function mytheme_enqueue_assets() {
    // CSS ফাইলসমূহ
    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/assets/vendor/bootstrap/css/bootstrap.min.css');
    wp_enqueue_style('main-style', get_template_directory_uri() . '/assets/css/main.css');
    
    // JS ফাইলসমূহ (true = footer-এ লোড হবে)
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/assets/vendor/bootstrap/js/bootstrap.bundle.min.js', array('jquery'), null, true);
    wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/main.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'mytheme_enqueue_assets');
?>

