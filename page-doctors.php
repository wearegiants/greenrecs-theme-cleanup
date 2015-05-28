<?php Themewrangler::setup_page();get_header(/***Template Name: Doctors */); ?>

<div id="page" class="doctors">

  <?php $image = get_field('page_header_image'); ?>

  <div id="header-wrap" style="background-image:url(<?php echo $image; ?>);">

    <?php get_template_part('parts/page', 'header' );?>

    <article class="page-content doctors <?php if(get_field('simple_header')):?>simple<?php endif;?>">
      <div class="fs-row">
        <div class="fs-cell fs-lg-11 fs-md-6 fs-sm-3 fs-centered">
          <div class="fs-row">
            <div class="fs-cell fs-lg-4 fs-md-2 fs-sm-3 fs-right"><img src="/assets/img/1574833361.jpg" /></div>
            <div class="fs-cell fs-lg-7 fs-md-4 fs-sm-3">
              <hr class="invisible">
              <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
              <?php the_content();?>
              <?php endwhile; endif; ?>
            </div>
          </div>
        </div>
      </div>
    </article>

  </div><!-- Header -->

  <section id="doctors--icon" class="checkicon">
    <div class="fs-row">
      <div class="fs-cell fs-lg-12 fs-md-6 fs-sm-3 text-center">
        <span class="icon check"><img src="/assets/img/doctor--headericon.png" class="img-responsive" /></span>
      </div>
    </div>
  </section><!-- Check Divider -->

  <section id="doctors--qualifications">
    <div class="fs-row">
      <div class="fs-cell fs-lg-11 fs-md-6 fs-sm-3 fs-centered bg">
        <div class="fs-row">
          <header class="fs-cell fs-lg-11 fs-md-6 fs-sm-3"><h2><?php the_field('doctors--qualifications-title');?></h2></header>
          <div class="fs-cell fs-xl-8 fs-lg-7 fs-md-4 fs-sm-3">
            <?php the_field('doctors--qualifications-description'); ?>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="doctors--howitworks">
    <div class="fs-row">
      <div class="fs-cell fs-lg-11 fs-md-6 fs-sm-3 fs-centered bg">
        <div class="fs-row">
          <header class="fs-cell fs-lg-11 fs-md-6 fs-sm-3 fs-centered text-center"><h2>How It Works</h2></header>
          <?php include locate_template('parts/doctors/howitworks.php' ); ?>
        </div>
      </div>
    </div>
  </section>

  <section id="doctors--checkicon" class="checkicon">
    <div class="fs-row">
      <div class="fs-cell fs-lg-12 fs-md-6 fs-sm-3 text-center">
        <span class="icon check"><img src="/assets/img/how-it-works-check.png" class="img-responsive" /></span>
      </div>
    </div>
  </section><!-- Check Divider -->

  <section id="doctors--legality">
    <div class="fs-row">
      <div class="fs-cell fs-lg-11 fs-md-6 fs-sm-3 fs-centered bg">
        <div class="fs-row">
          <?php include locate_template('parts/doctors/legality.php' ); ?>
        </div>
      </div>
    </div>
  </section>

  <section id="doctors--quotes">
    <div class="fs-row">
      <div class="fs-cell fs-lg-11 fs-md-6 fs-sm-3 fs-centered bg">
        <div class="fs-row">
          <header class="fs-cell fs-lg-11 fs-md-6 fs-sm-3 fs-centered text-center"><h2>What doctors are saying:</h2></header>
          <div class="fs-cell fs-lg-6 fs-md-6 fs-sm-3 text-center quote"><?php the_field('doctors--first_quote'); ?></div>
          <div class="fs-cell fs-lg-6 fs-md-6 fs-sm-3 text-center quote"><?php the_field('doctors--second_quote'); ?></div>
        </div>
      </div>
    </div>
  </section>

  <section id="doctors--faq" class="faq">
    <div class="fs-row">
      <header class="fs-cell fs-lg-11 fs-md-6 fs-sm-3 fs-centered text-center"><h2>Frequently Asked Questions</h2></header>
      <div class="fs-cell fs-lg-11 fs-md-6 fs-sm-3 fs-centered">
        <div class="fs-row">

          <div class="faq-item fs-cell fs-lg-4 fs-md-6 fs-sm-3 text-center">
            <h2><a href="/faq">How do I know if I qualify for a Medical Marijuana Rec (MMR)?</a></h2>
          </div>

          <div class="faq-item fs-cell fs-lg-4 fs-md-6 fs-sm-3 text-center">
            <h2><a href="/faq">What “serious” medical condition(s) do I need to have to qualify for a MMR?</a></h2>
          </div>

          <div class="faq-item fs-cell fs-lg-4 fs-md-6 fs-sm-3 text-center">
            <h2><a href="/faq">How long will it take to get my GreenRecs MMR?</a></h2>
          </div>

          <div class="fs-cell fs-lg-12 fs-md-6 fs-sm-3 text-center">
            <a href="/faq"><strong>VIEW FAQ</strong></a>
          </div>

        </div>
      </div>
    </div>
  </section>

</div>

<?php get_footer(); ?>
