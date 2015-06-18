<?php Themewrangler::setup_page();get_header(/***Template Name: FAQ */); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div id="faq">
  <?php include locate_template('parts/page-header.php'); ?>
  <div class="fs-row">
    <div class="fs-cell fs-lg-8 fs-md-6 fs-sm-3 fs-centered">
      <div id="signup--form" class="text-left">
        <?php the_content(); ?>
        <hr class="invisible">
        <div class="fs-row">
        <?php include locate_template('/parts/faq/faq.php' );?>
        </div>
      </div>
    </div>
  </div>
</div>
      
<?php endwhile; endif; ?>
<?php get_footer(); ?>
