<?php
get_header();
?>

<div class="outfit-archive container">
  <h1 class="archive-title">All Outfits</h1>

  <div class="outfit-grid">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      
      <div class="outfit-card">
        <div class="outfit-media">
          
          <?php the_post_thumbnail('large'); ?>

          <div class="outfit-overlay">
            <span class="overlay-text"><?php the_title(); ?></span>

            <div class="overlay-buttons">
              <a href="#" class="buy-btn">Shirt</a>
              <a href="#" class="buy-btn">Jeans</a>
              <a href="#" class="buy-btn">Shoes</a>
            </div>
          </div>

        </div>
      </div>


    <?php endwhile; endif; ?>
  </div>
</div>

<?php
get_footer();


