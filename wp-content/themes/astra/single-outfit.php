<?php get_header(); ?>

<div class="outfit-container">

  <h1><?php the_title(); ?></h1>

  <?php if ( has_post_thumbnail() ) : ?>
    <div class="outfit-image">
      <?php the_post_thumbnail('large'); ?>
    </div>
  <?php endif; ?>

  <div class="outfit-buttons">

    <?php if ( get_field('shirt_link') ) : ?>
      <a class="buy-btn" href="<?php echo esc_url(get_field('shirt_link')); ?>" target="_blank">
        Buy Shirt
      </a>
    <?php endif; ?>

    <?php if ( get_field('pant_link') ) : ?>
      <a class="buy-btn" href="<?php echo esc_url(get_field('pant_link')); ?>" target="_blank">
        Buy Pant
      </a>
    <?php endif; ?>

    <?php if ( get_field('shoes_link') ) : ?>
      <a class="buy-btn" href="<?php echo esc_url(get_field('shoes_link')); ?>" target="_blank">
        Buy Shoes
      </a>
    <?php endif; ?>

  </div>

</div>

<?php get_footer(); ?>
