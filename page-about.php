<?php Themewrangler::setup_page();get_header(/***Template Name: About */); ?>

<?php get_template_part('parts/page', 'header' );?>

<div id="page" class="about">

  <article class="page-content about text-center">
    <div class="fs-row">
      <div class="fs-cell fs-lg-11 fs-md-6 fs-sm-3 fs-centered">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php the_content();?>
        <?php endwhile; endif; ?>
      </div>
    </div>
  </article>

  <section id="about--checkicon">
    <div class="fs-row">
      <div class="fs-cell fs-lg-12 fs-md-6 fs-sm-3 text-center">
        <span class="icon check"><img src="/assets/img/how-it-works-check.png" class="img-responsive" /></span>
      </div>
    </div>
  </section><!-- Check Divider -->

  <section id="about--our-team">
    <div class="fs-row">
      <div class="fs-cell fs-lg-11 fs-md-6 fs-sm-3 fs-centered bg">
        <div class="fs-row">
          <div class="fs-cell fs-lg-8 fs-md-4 fs-sm-3">
            <?php the_field('about--our_team'); ?>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="about--hippa">
    <div class="fs-row">
      <div class="fs-cell fs-lg-11 fs-md-6 fs-sm-3 fs-centered bg">
        <div class="fs-row">
          <div class="fs-cell fs-lg-8 fs-md-4 fs-sm-3">
            <?php the_field('about--hippa'); ?>
          </div>
          <div class="fs-cell fs-lg-3 fs-md-2 fs-sm-3">
            <?php the_field('about--hipaa_compliance_button'); ?>
          </div>
          <div class="fs-cell fs-lg-1 fs-md-hide fs-sm-hide fs-right">&nbsp;</div>
        </div>
      </div>
    </div>
  </section>

</div>

<?php get_footer(); ?>
