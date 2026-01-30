<?php
get_header();
the_post();
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

    <?php render_outfit_buttons(); ?>

  </div>

</div>

<?php get_footer(); ?>
