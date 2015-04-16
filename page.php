<?php Themewrangler::setup_page();get_header(); ?>

<META http-equiv="refresh" content="0;URL=/">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div id="content" class="fs-grid fullscreen">
  <div class="fs-row">
    <div class="fs-cell fs-lg-8 fs-centered">
      <?php the_content(); ?>
    </div>
  </div>
</div>
<?php endwhile; endif; ?>

<?php get_footer(); ?>