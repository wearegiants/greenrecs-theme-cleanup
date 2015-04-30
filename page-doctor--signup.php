<?php Themewrangler::setup_page();get_header(/***Template Name: Doctors (Join) */); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div id="content" class="fs-grid page-content">
  <div class="fs-row">
    <div class="fs-cell fs-lg-8 fs-md-6 fs-sm-3 fs-centered">
      <header class="page-header text-center">
        <h1><?php the_title();?></h1>
      </header>
      <?php the_content(); ?>
    </div>
  </div>
</div>
<?php endwhile; endif; ?>

<?php get_footer(); ?>