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
