<?php Themewrangler::setup_page();get_header(/***Template Name: FAQ */); ?>

<div id="page" class="faq">

  <?php $image = get_field('page_header_image'); ?>

  <div id="header-wrap" style="background-image:url(<?php echo $image; ?>);">

    <?php get_template_part('parts/page', 'header' );?>

    <article class="page-content text-center <?php if(get_field('simple_header')):?>simple<?php endif;?>">
      <div class="fs-row">
        <div class="fs-cell fs-lg-11 fs-md-6 fs-sm-3 fs-centered">
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <?php the_content();?>
          <?php endwhile; endif; ?>
        </div>
      </div>
    </article>

  </div><!-- Header -->

  <div class="fs-row">
    <div class="fs-cell fs-lg-9 fs-md-6 fs-sm-3 fs-centered">
      <?php include locate_template('/parts/faq/faq.php' );?>
    </div>
  </div>

  <hr class="invisible">

</div>

<?php get_footer(); ?>
