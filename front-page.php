<?php
/**
 * The front page template file.
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 *
 * @package namegenerator
 */

get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<div class="name-generator">
				<?php echo do_shortcode('[domainwheel_app]') ?>
			</div>
<?php /*
			<div class="row">
				<div class="col-xs-12 col-md-4">
					<h2>1. Insert a keyword to generate new domain names.</h2>
				</div>
				<div class="col-xs-12 col-md-4">
					<h2>2. Not happy? Add filters to narrow results.</h2>
				</div>
				<div class="col-xs-12 col-md-4">
					<h2>3. Success! Go get your new domain.</h2>
				</div>
			</div>
*/ ?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
