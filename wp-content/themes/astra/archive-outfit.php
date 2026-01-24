<?php
get_header();
?>

<div class="outfit-container">
  <h1 class="archive-title">All Outfits</h1>

  <div class="outfit-grid">
    <?php if ( have_posts() ) : ?>
      <?php while ( have_posts() ) : the_post(); ?>

        <div class="outfit-card">
          <a href="<?php the_permalink(); ?>">
            
            <?php if ( has_post_thumbnail() ) : ?>
              <div class="outfit-thumb">
                <?php the_post_thumbnail('large'); ?>
              </div>
            <?php endif; ?>

            <h2 class="outfit-title"><?php the_title(); ?></h2>

          </a>
        </div>

      <?php endwhile; ?>
    <?php else : ?>
      <p>No outfits found.</p>
    <?php endif; ?>
  </div>
</div>

<?php
get_footer();
