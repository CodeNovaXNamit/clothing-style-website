<?php
get_header();
?>

<?php
if ( have_posts() ) :
  while ( have_posts() ) : the_post();
?>

<div class="single-outfit-container">

  <div class="single-outfit-left">
    <?php the_post_thumbnail('large'); ?>
  </div>

  <div class="single-outfit-center">
    <h1><?php the_title(); ?></h1>

    <div class="outfit-description">
      <?php the_content(); ?>
    </div>
  </div>

  <div class="outfit-actions">
    <?php render_outfit_buttons(); ?>
  </div>

</div>

<?php
  endwhile;
endif;
?>

<?php
get_footer();
?>
