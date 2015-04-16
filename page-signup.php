<?php Themewrangler::setup_page();get_header(/***Template Name: Signup */); ?>


<section id="content" role="main">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <div id="splash--signup" class="white-popup-block mfp-hide">
    <div class="fs-row">
      <div class="fs-cell fs-lg-6 fs-md-5 fs-sm-3 fs-xs-3 fs-centered">
        <div class="wrapper">
          <?php the_content(); ?>
        </div>
      </div>
    </div>
  </div>
  <?php endwhile; endif; ?>
</section>



<?php get_footer(); ?>