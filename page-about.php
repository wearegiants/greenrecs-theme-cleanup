<?php Themewrangler::setup_page();get_header('splash'/***Template Name: About */); ?>

<META http-equiv="refresh" content="0;URL=/">
<section id="about">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <div id="content" class="fs-grid fullscreen">
    <div class="fs-row">
      <div class="fs-cell fs-lg-11 fs-md-6 fs-sm-3 fs-centered">
        <div class="fs-row">
          <div class="fs-cell fs-lg-6 fs-md-6 fs-sm-3">
            <?php the_content(); ?>
          </div>
          <div class="fs-cell fs-lg-6 fs-md-6 fs-sm-3 fs-right">
            <div class="quotes slider">
              <?php include locate_template('parts/splash/quotes.php' );?>
            </div>
          </div>
          <hr class="invisible">
          <div class="fs-cell fs-lg-12 fs-md-6 fs-sm-3 fs-centered">
            <div class="brands slider">
              <?php include locate_template('parts/splash/brands.php' );?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php endwhile; endif; ?>
</section>
<?php get_footer(); ?>
