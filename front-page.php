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

			<div class="row pt-5 name-generator-features">
				<div class="col-sm-12 col-md-4 px-4 mt-4">
                    <span class="anticon anticon-message mb-4 text-muted"></span>
					<h4>1. Add a keyword to generate domain names.</h4>
				</div>
				<div class="col-sm-12 col-md-4 px-4 mt-4">
                    <span class="anticon anticon-filter mb-4 text-muted"></span>
					<h4>2. Not happy? Chose similar alternatives.</h4>
				</div>
				<div class="col-sm-12 col-md-4 px-4 mt-4">
                    <span class="anticon anticon-like mb-4 text-muted"></span>
					<h4>3. Success! Go get your new domain.</h4>
				</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
