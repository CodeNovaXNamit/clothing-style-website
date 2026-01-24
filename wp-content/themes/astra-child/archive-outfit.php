<?php get_header(); ?>

<div class="outfit-container">

  <h1 class="outfit-archive-title">All Outfits</h1>

  <div class="outfit-grid">
    <?php if ( have_posts() ) : ?>
      <?php while ( have_posts() ) : the_post(); ?>

        <div class="outfit-card">
          <a href="<?php the_permalink(); ?>">
            <?php if ( has_post_thumbnail() ) : ?>
              <?php the_post_thumbnail('large'); ?>
            <?php endif; ?>

            <h3><?php the_title(); ?></h3>
          </a>
        </div>

      <?php endwhile; ?>
    <?php else : ?>
      <p>No outfits found.</p>
    <?php endif; ?>
  </div>

</div>

<?php get_footer(); ?>
