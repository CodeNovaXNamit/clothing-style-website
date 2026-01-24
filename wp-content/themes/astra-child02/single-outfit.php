<?php
get_header();
?>

<div class="outfit-container">

  <?php while ( have_posts() ) : the_post(); ?>

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
      <a href="#" class="buy-btn">Buy Shirt</a>
      <a href="#" class="buy-btn">Buy Jeans</a>
      <a href="#" class="buy-btn">Buy Shoes</a>
    </div>

  <?php endwhile; ?>

</div>

<?php
get_footer();
