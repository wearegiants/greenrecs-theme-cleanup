<?php Themewrangler::setup_page();get_header(/***Template Name: Doctors (Join) */); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div id="signup">
	<header id-"signup--header" class="page-header page-header-green text-center">
		<div class="fs-row">
			<div class="fs-cell fs-lg-8 fs-md-6 fs-sm-3 text-center fs-centered">
				<h1 class="title"><?php the_title();?></h1>
			</div>
		</div>
	</header>
	<div class="fs-row">
		<div class="fs-cell fs-lg-8 fs-md-6 fs-sm-3 fs-centered">
			<div id="signup--form">
				<?php the_content(); ?>
				<div class="fs-row">
					<div class="form">
						<?php echo do_shortcode('[gravityform id=1 title=false description=false ajax=true tabindex=49]'); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
      
<?php endwhile; endif; ?>
<?php get_footer(); ?>