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
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<header id="masthead" class="site-header">
		<!-- Image and text -->
		<div class="navbar">
			<div class="container">
				<div class="col-4 col-md-4 col-lg-3">
					<a class="navbar-brand" href="<?php echo home_url(); ?>">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/img/logo_dw.jpg' ); ?>" alt="DomainWheel Logo">
					</a>
				</div>
                <div class="col-8 col-md-8 col-lg-9">
                    <nav id="site-navigation" class="main-navigation">
                        <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><i class="anticon anticon-menu-fold"></i></button>
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
				<div class="col-xs-12 col-sm-10 offset-sm-1 pb-5 mb-3">
