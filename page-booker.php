<?php Themewrangler::setup_page();get_header(/***Template Name: Booker */); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div id="signup" class="booking-form">
  <header class="page-header text-center simple">
    <hr class="rule">
    <div class="fs-row">
      <div class="fs-cell fs-lg-2 fs-md-1 fs-sm-1 fs-centered text-center featured-wrap">
        <img src="/wp-content/uploads/2015/04/Greenrecs-Icon-2.png" class="img-responsive featured-image" />
        <?php the_post_thumbnail('medium', array('class' => 'img-responsive featured-image')); ?>
      </div>
      <div class="fs-cell fs-lg-12 fs-md-6 fs-sm-3">
        <h1 class="title"><?php the_title(); ?></h1>
      </div>
    </div>
  </header>
  <div id="content" class="booking-form">
    <div class="fs-row">
      <div class="fs-cell fs-xl-9 fs-lg-10 fs-md-5 fs-sm-3 fs-centered">
        <?php the_content(); ?>
      </div>
    </div>
  </div>
</div>

<?php endwhile; endif; ?>
<?php get_footer(); ?>