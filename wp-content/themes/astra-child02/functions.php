<?php
// 1️⃣ Enqueue child theme styles
add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style(
        'astra-child-style',
        get_stylesheet_uri(),
        [],
        '1.0'
    );
});

// 2️⃣ Enqueue outfit effects JS (ONLY ONCE)
add_action('wp_enqueue_scripts', function () {
    wp_enqueue_script(
        'outfit-effects',
        get_stylesheet_directory_uri() . '/js/outfit-effects.js',
        [],
        '1.0',
        true
    );
});

// 3️⃣ Register Outfit CPT
function register_outfit_cpt() {
    register_post_type('outfit', array(
        'labels' => array(
            'name' => 'Outfits',
            'singular_name' => 'Outfit',
        ),
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'outfit'),
        'supports' => array('title', 'editor', 'thumbnail'),
        'show_in_rest' => true,
        'menu_icon' => 'dashicons-tshirt',
    ));
}
add_action('init', 'register_outfit_cpt'); // ✅ THIS WAS MISSING

// 4️⃣ Outfit Grid Shortcode
function outfits_grid_shortcode() {
    $query = new WP_Query([
        'post_type' => 'outfit',
        'posts_per_page' => -1,
    ]);

    ob_start();

    if ($query->have_posts()) {
        echo '<div class="outfits-grid">';

        while ($query->have_posts()) {
            $query->the_post();

            echo '<div class="outfit-card">';
            echo '<a href="' . get_permalink() . '">';

            echo '<div class="outfit-media">';
            the_post_thumbnail('large');

            echo '<div class="outfit-overlay">';
            echo '<span class="overlay-text">View Outfit</span>';

            echo '<div class="overlay-buttons">';
            echo '<span class="buy-btn">Shirt</span>';
            echo '<span class="buy-btn">Jeans</span>';
            echo '<span class="buy-btn">Shoes</span>';
            echo '</div>';

            echo '</div>'; // overlay
            echo '</div>'; // media

            echo '<h3 class="outfit-title">' . get_the_title() . '</h3>';

            echo '</a>';
            echo '</div>'; // card
        }

        echo '</div>';
        wp_reset_postdata();
    }

    return ob_get_clean();
}
add_shortcode('outfits', 'outfits_grid_shortcode');
