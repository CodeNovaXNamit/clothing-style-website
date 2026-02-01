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

  <div class="single-outfit-right">
    <?php render_outfit_buttons(); ?>
  </div>

</div>
