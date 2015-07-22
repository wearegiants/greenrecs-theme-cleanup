<?php Themewrangler::setup_page();get_header(/***Template Name: Homepage */); ?>

<?php $maxWidth = 'fs-lg-10'; ?>

<div id="home--wrapper">

  <div id="home--banner" class="bg green"><?php include locate_template('parts/home/carousel.php' ); ?></div>

  <div id="home--schedule">
    <div class="fs-row">
      <div class="fs-cell <?php echo $maxWidth; ?> fs-md-6 fs-sm-3 fs-centered">
        <div class="fs-row">
          <div class="fs-cell fs-lg-5 fs-md-6 fs-sm-3 fs-right">
            <a href="/your-contact-info" class="btn big btn-lg wide cta ss-gizmo ss-navigateright">Get Your Rec Today</a>
          </div>
          <hr class="invisible fs-lg-hide fs-md-6 fs-sm-3 fs-left">
          <div class="fs-cell fs-lg-7 fs-md-6 fs-sm-3 fs-left">
            <div class="fs-row">
              <div class="icon doctor fs-cell fs-max-2 fs-lg-2 fs-md-1 fs-sm-hide"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/doctor.png" class="img-responsive" /></div>
              <div class="fs-cell fs-cell fs-max-12 fs-lg-10 fs-md-5 fs-sm-3">
                <h2><?php the_field('title_signup');?></h2>
                <p>Sign up and choose a date and time that works best for you. Our average appointment time is about 15-30 minutes.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div><!-- Schedule -->

  <div id="home--physicians" class="bg lightgray">
    <div class="fs-row">
      <div class="fs-cell <?php echo $maxWidth; ?> fs-md-6 fs-sm-3 fs-centered">
        <div class="fs-row">
          <div class="fs-cell fs-lg-6 fs-md-4 fs-sm-3 fs-right text-center">
            <h2><?php the_field('title_physicians');?></h2>
            <p>Our team of physicians schedule an hour or so each day to take time out of their practices so they can come directly to you.</p>
            <p><strong><small>EVERY PHYSICIAN IS:</small></strong></p>
            <ul>
              <li><i class="ss-icon ss-gizmo green">check</i> Is Board Certified by the State of California</li>
              <li><i class="ss-icon ss-gizmo green">check</i> Has a current medical license in good standing</li>
              <li><i class="ss-icon ss-gizmo green">check</i> Is educated on cannabis use for medicinal purposes</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div><!-- Our Physicians -->

  <div id="home--howitworks" class="bg lightgray">
    <div class="fs-row">
      <header class="fs-cell <?php echo $maxWidth; ?> fs-md-6 fs-sm-3 fs-centered text-center"><h2><?php the_field('title_howitworks');?></h2></header>
      <div class="fs-cell <?php echo $maxWidth; ?> fs-md-6 fs-sm-3 fs-centered">
        <div class="fs-row">

          <div class="fs-cell fs-lg-4 fs-md-6 fs-sm-3 text-center">
            <div class="icon book"><img src="/assets/img/howitworks-book.png" class="img-responsive" /></div>
            <h4>1. BOOK</h4>
            <p>Our trusted team of physicians are available 7-days a week from 8am – 8pm PST.</p>
          </div>

          <div class="fs-cell fs-lg-4 fs-md-6 fs-sm-3 text-center">
            <div class="icon meet"><img src="/assets/img/howitworks-meet.png" class="img-responsive" /></div>
            <h4>1. MEET</h4>
            <p>Skip the traditional doctor’s office, get comfortable and see one of our experienced physicians via online video-conference from your home or office.</p>
          </div>

          <div class="fs-cell fs-lg-4 fs-md-6 fs-sm-3 text-center">
            <div class="icon deliver"><img src="/assets/img/howitworks-deliver.png" class="img-responsive" /></div>
            <h4>1. DELIVER</h4>
            <p>Sit back and relax, your card will be arriving in the mail within two to three business days.</p>
          </div>

        </div>
      </div>
    </div>
  </div><!-- How it Works -->

  <div id="home--checkicon">
    <div class="fs-row">
      <div class="fs-cell fs-lg-12 fs-md-6 fs-sm-3">
        <span class="icon check"><img src="/assets/img/how-it-works-check.png" class="img-responsive" /></span>
      </div>
    </div>
  </div><!-- Check Divider -->

  <div id="home--legality">
    <div class="fs-row">
      <header class="fs-cell <?php echo $maxWidth; ?> fs-md-6 fs-sm-3 fs-centered text-center"><h2><?php the_field('title_legal');?></h2></header>
      <div class="fs-cell <?php echo $maxWidth; ?> fs-md-6 fs-sm-3 fs-centered">
        <div class="fs-row">
          <div class="fs-cell fs-lg-5 fs-md-6 fs-sm-3 sizer-item">
            <div class="icon check"><img src="/assets/img/senate.png" /></div>
            <h4 class="green">IT PASSED THE STATE SENATE</h4>
            <p>California Senate Bill 420 (no, that’s not a joke), otherwise known as The Medical Marijuana Program Act, was a bill passed by the California State Legislature in 2003 that mandated a voluntary program for the issuance of identification cards to qualified patients.</p>
          </div>
          <div class="fs-cell fs-lg-2 fs-md-hide fs-sm-hide"><div class="vertical divider sizer-item"></div></div>
          <hr class="thin fs-cell fs-lg-hide fs-md-6 fs-sm-3 ">
          <div class="fs-cell fs-lg-5 fs-md-6 fs-sm-3 sizer-item  text-right">
            <div class="icon check"><img src="/assets/img/security.png" /></div>
            <h4 class="green">HIPAA COMPLIANT – PRIVACY SECURED</h4>
            <p>Protecting your private and personal medical information is our primary focus at all times. GreenRecs is HIPAA (Health Insurance Portability & Accountability Act) compliant. We do NOT share information, keep state or government records and records can only be released with a patient’s written consent.</p>
          </div>
          <hr class="thin fs-cell fs-lg-12 fs-md-6 fs-sm-3 fs-centered">
          <div class="fs-cell fs-lg-12 fs-md-6 fs-sm-3 text-center">
            <div class="icon check"><img src="/assets/img/virtual.png" /></div>
            <h4 class="green">VIRTUAL APPOINTMENTS</h4>
            <p>Telemedicine, originally developed by NASA in the 60s to help treat astronauts in space, allows doctors to diagnose and treat patients remotely and is now one of the most significantly growing mainstream industries in healthcare.All you need to do is offer the proper verification documents and we’re good to go.</p>
          </div>
        </div>
      </div>
    </div>
  </div><!-- Home Legality -->

  <div id="home--testimonials" class="testimonials bg lightgray">
    <div class="fs-row">
      <header class="fs-cell <?php echo $maxWidth; ?> fs-md-6 fs-sm-3 fs-centered text-center"><h2>Testimonials</h2></header>
      <div class="fs-cell <?php echo $maxWidth; ?> fs-md-6 fs-sm-3 fs-centered">
        <div class="fs-row">

          <div class="testimonial fs-cell fs-lg-4 fs-md-6 fs-sm-3 text-center">
            <img class="rounded img-responsive" src="/assets/img/greenblat.png" />
            <p>Stephen</p>
            <p>“Greenrecs was super fast, extremely easy and very efficient.”</p>
          </div>

          <div class="testimonial fs-cell fs-lg-4 fs-md-6 fs-sm-3 text-center">
            <img class="rounded img-responsive" src="/assets/img/jordan.png" />
            <p>Jordan</p>
            <p>“Not only did I get my rec in under 3 days, but my doctor was friendly and the appointment was fast.”</p>
          </div>

          <div class="testimonial fs-cell fs-lg-4 fs-md-6 fs-sm-3 text-center">
            <img class="rounded img-responsive" src="/assets/img/ganine.png" />
            <p>Ganine</p>
            <p>“Nothing better than being able to chat with your doctor during The Daily Show’s commercial break”</p>
          </div>

        </div>
      </div>
    </div>
  </div><!-- Testimonials -->

  <div id="home--faq" class="faq">
    <div class="fs-row">
      <header class="fs-cell <?php echo $maxWidth; ?> fs-md-6 fs-sm-3 fs-centered text-center"><h2><?php the_field('title_faq'); ?></h2></header>
      <div class="fs-cell <?php echo $maxWidth; ?> fs-md-6 fs-sm-3 fs-centered">
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
  </div>

</div>

<?php get_footer(); ?>
