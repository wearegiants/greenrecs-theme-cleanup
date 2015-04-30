<?php if( have_rows('slider') ): ?>

<div id="banner-carousel" class="royalslider rsMinW">

<?php while ( have_rows('slider') ) : the_row();?>

  <?php
    $image = get_sub_field('background_image');
    if( !empty($image) ):
      $url = $image['url'];
      $title = $image['title'];
      $alt = $image['alt'];
      $caption = $image['caption'];
      $size = 'large';
      $thumb = $image['sizes'][ $size ];
      $width = $image['sizes'][ $size . '-width' ];
      $height = $image['sizes'][ $size . '-height' ];
    endif;

  ?>

  <div class="slide" style="background-image:url(<?php echo $thumb; ?>);">
    <div class="fs-row">
      <div class="fs-cell fs-max-6 fs-lg-7 fs-md-5 fs-sm-3">
        <?php the_sub_field('description'); ?>
      </div>
    </div>
  </div><!-- Slide -->

<?php endwhile; ?>

</div>

<?php endif; ?>