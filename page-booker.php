<?php Themewrangler::setup_page();get_header(/***Template Name: Booker */); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div id="signup">
  <header id="signup--header" class="page-header">
    <div class="fs-row">
      <div class="fs-cell fs-xl-9 fs-lg-10 fs-md-5 fs-sm-3 fs-centered">
        <?php the_title(); ?>
      </div>
    </div>
  </header>
  <div id="signup--content">
    <div class="fs-row">
      <div class="fs-cell fs-xl-9 fs-lg-10 fs-md-5 fs-sm-3 fs-centered">
        <?php the_content(); ?>
      </div>
    </div>
  </div>
</div>

<?php endwhile; endif; ?>
<?php get_footer(); ?>