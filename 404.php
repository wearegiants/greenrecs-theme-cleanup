<?php Themewrangler::setup_page();get_header(); ?>

<section id="content" role="main">
	<article id="post-0" class="post not-found">
		<div class="not-found-wrapper">
			<div class="fs-row">
				<div class="fs-cell fs-lg-8 fs-md-5 fs-sm-3 fs-centered text-center">
					<header class="header">
						<h1 class="entry-title"><?php _e( 'Not Found', 'blankslate' ); ?></h1>
					</header>
					<section class="entry-content">
						<p><?php _e( 'Nothing found for the requested page. Try a search instead?', 'blankslate' ); ?></p>
					</section>
				</div>
			</div>
		</div>
	</article>
</section>

<?php get_sidebar(); ?>
<?php get_footer(); ?>