<?php get_header(); ?>

<div class="outfit-container">

  <h1><?php the_title(); ?></h1>

  <?php if ( has_post_thumbnail() ) : ?>
    <div class="outfit-image">
      <?php the_post_thumbnail('large'); ?>
    </div>
  <?php endif; ?>

  <div class="outfit-description">
    <?php the_content(); ?>
  </div>

  <div class="outfit-buttons">
    <?php if ($shirt = get_field('buy_shirt')): ?>
      <a class="buy-btn" href="<?= esc_url($shirt) ?>" target="_blank">Buy Shirt</a>
    <?php endif; ?>

    <?php if ($jeans = get_field('buy_jeans')): ?>
      <a class="buy-btn" href="<?= esc_url($jeans) ?>" target="_blank">Buy Jeans</a>
    <?php endif; ?>

    <?php if ($shoes = get_field('buy_shoes')): ?>
      <a class="buy-btn" href="<?= esc_url($shoes) ?>" target="_blank">Buy Shoes</a>
    <?php endif; ?>
  </div>

</div>

<?php get_footer(); ?>
