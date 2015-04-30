<header class="page-header text-center <?php if(get_field('simple_header')):?>simple<?php endif;?>">
  <hr class="rule">
  <div class="fs-row">
    <div class="fs-cell fs-lg-2 fs-md-1 fs-sm-1 fs-centered text-center featured-wrap">
      <?php the_post_thumbnail('medium', array('class' => 'img-responsive featured-image')); ?>
    </div>
    <div class="fs-cell fs-lg-12 fs-md-6 fs-sm-3">
      <h1 class="title"><?php the_title(); ?></h1>
    </div>
  </div>
</header>