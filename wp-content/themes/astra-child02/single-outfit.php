<?php
get_header();
?>

<div class="single-outfit-container">

  <div class="single-outfit-left">
    <?php the_post_thumbnail('large'); ?>
  </div>

  <div class="single-outfit-right">
    <h1><?php the_title(); ?></h1>

    <div class="outfit-description">
      <?php the_content(); ?>
    </div>

    <div class="outfit-buttons">
      <a href="#" class="buy-btn">Buy Shirt</a>
      <a href="#" class="buy-btn">Buy Jeans</a>
      <a href="#" class="buy-btn">Buy Shoes</a>
    </div>
  </div>

</div>

<?php
get_footer();
?>

// 🔘 Render Outfit Buy Buttons (Dynamic)
function render_outfit_buttons() {
    if (!function_exists('scf_get')) return;

    $buttons = scf_get('outfit_buttons');
    if (empty($buttons)) return;

    echo '<div class="outfit-buttons">';

    foreach ($buttons as $button) {
        $label = esc_html($button['button_label']);
        $link  = esc_url($button['affiliate_link']);

        if ($label && $link) {
            echo '<a class="buy-btn" href="' . $link . '" target="_blank" rel="nofollow sponsored">';
            echo $label;
            echo '</a>';
        }
    }

    echo '</div>';
}

