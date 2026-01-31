<?php get_header(); ?>

<div class="single-outfit-container">

  <!-- 1️⃣ Image -->
  <div class="outfit-media">
    <?php the_post_thumbnail('large'); ?>
  </div>

  <!-- 2️⃣ Details -->
  <div class="outfit-info">
    <h1><?php the_title(); ?></h1>

    <div class="outfit-description">
      <?php the_content(); ?>
    </div>
  </div>

  <!-- 3️⃣ Buy buttons -->
  <div class="outfit-actions">
    <?php render_outfit_buttons(); ?>
  </div>

  <!-- 4️⃣ Ratings / future -->
  <div class="outfit-meta">
    <!-- ratings, tags, season, etc (future) -->
  </div>

</div>

<?php get_footer(); ?>
