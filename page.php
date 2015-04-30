<?php Themewrangler::setup_page();get_header(); ?>

<div id="content" class="fs-grid fullscreen">
  <div class="text-center"><?php get_template_part('parts/page','header');?></div>
  <div class="fs-row">
    <div class="fs-cell fs-lg-8 fs-centered">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <div class="page-content">
      <?php the_content(); ?>
      <?php include locate_template('parts/faq/faq.php');?>
      </div>
      <?php endwhile; endif; ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>