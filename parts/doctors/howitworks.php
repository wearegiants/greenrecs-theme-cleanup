<?php if( have_rows('how_it_works') ): while ( have_rows('how_it_works') ) : the_row(); ?>

<?php
  $image = get_sub_field('howitworks--thumb');
?>

<div class="fs-cell fs-lg-6 fs-md-3 fs-sm-3 item">
  <div class="fs-row">
    <div class="fs-cell fs-all-third fs-sm-3 text-center">
      <img class="img-responsive" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
    </div>
    <div class="fs-cell fs-lg-8 fs-md-4 fs-sm-3">
      <h3><?php the_sub_field('howitworks--title'); ?></h3>
      <?php the_sub_field('howitworks--description'); ?>
    </div>
  </div>
</div>

<?php endwhile; endif; ?>