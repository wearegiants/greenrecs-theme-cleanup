<?php Themewrangler::setup_page();get_header(/***Template Name: Doctors (Join) */); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div id="signup">
	<?php include locate_template('parts/page-header.php'); ?>
	<div class="fs-row">
		<div class="fs-cell fs-lg-8 fs-md-6 fs-sm-3 fs-centered">
			<div id="signup--form" class="text-center">
				<?php the_content(); ?>
				<hr class="invisible">
				<div class="fs-row">
					<div class="form text-left">
						<?php echo do_shortcode('[gravityform id=1 title=false description=false ajax=true tabindex=49]'); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
      
<?php endwhile; endif; ?>
<?php get_footer(); ?>