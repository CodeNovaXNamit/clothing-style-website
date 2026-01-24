<?php
get_header();
?>

<div class="outfits-archive">
  <h1><?php single_term_title(); ?> Outfits</h1>

  <div class="outfits-grid">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      
      <div class="outfit-card">
        <a href="<?php the_permalink(); ?>">
          
          <?php if (has_post_thumbnail()) : ?>
            <?php the_post_thumbnail('medium'); ?>
          <?php endif; ?>

          <h3><?php the_title(); ?></h3>
        </a>
      </div>

    <?php endwhile; else : ?>
      <p>No outfits found.</p>
    <?php endif; ?>
  </div>
</div>

<?php
get_footer();
