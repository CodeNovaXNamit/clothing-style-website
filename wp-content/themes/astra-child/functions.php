<?php
// Enqueue child theme stylesheet
add_action( 'wp_enqueue_scripts', function() {
    wp_enqueue_style(
        'astra-child-style',
        get_stylesheet_uri(),
        [],
        '1.0'
    );
});

// Register Outfit Custom Post Type
function register_outfit_cpt() {
    register_post_type('outfit', array(
        'labels' => array(
            'name' => 'Outfits',
            'singular_name' => 'Outfit',
        ),
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'outfits'),
        'supports' => array('title', 'editor', 'thumbnail'),
        'show_in_rest' => true,
        'menu_icon' => 'dashicons-tshirt'
    ));
}
add_action('init', 'register_outfit_cpt');
