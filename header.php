<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package namegenerator
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
				new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
			j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
			'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-5BDVQZ2');</script>
	<!-- End Google Tag Manager -->
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5BDVQZ2"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div id="page" class="site">
	<header id="masthead" class="site-header">
		<!-- Image and text -->
		<div class="navbar">
			<div class="container">
				<div class="brand-wrapper">
					<a class="navbar-brand" href="<?php echo home_url(); ?>">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/img/logo_dw.jpg' ); ?>" alt="DomainWheel Logo">
					</a>
				</div>
                <div class="nav-wrapper">
                    <nav id="site-navigation" class="main-navigation">
                        <button class="ant-btn ant-btn-ghost menu-toggle" aria-controls="primary-menu" aria-expanded="false"><i class="anticon anticon-menu-fold"></i></button>
                        <?php
                        wp_nav_menu( array(
                            'theme_location' => 'primary-menu',
                            'menu_id'        => 'primary-menu',
                        ) );
                        ?>
                    </nav><!-- #site-navigation -->
                </div>
			</div>
		</div>

	</header><!-- #masthead -->

	<div id="content" class="site-content">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 pb-5 mb-3">
