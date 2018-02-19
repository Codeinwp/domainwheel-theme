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
		<div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="logo-link">
                    <div class="site-branding">
                        <div class="logo-icon">
                            <span class="logo-arrow">
                                <img src="<?php echo get_template_directory_uri() . '/img/logo-arrow.png';?>" alt="<?php
                                bloginfo( 'name' ); ?>"/>
                            </span>
                            <span class="logo-wheel">
                                <img src="<?php echo get_template_directory_uri() . '/img/logo-wheel.png';?>" alt="<?php
                                bloginfo( 'name' ); ?>"/>
                            </span>
                        </div>
                        <div class="logo-name">
                            <img src="<?php echo get_template_directory_uri() . '/img/logo-text.png';?>" alt="<?php
	                        bloginfo( 'name' ); ?>"/>
                        </div>
                    </div><!-- .site-branding -->
                    </a>
                </div>
            </div>

            <?php if ( ! is_front_page() ) { ?>
            <div class="row">
                <div class="col-md-12 mt-5 text-center">
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
            <?php } ?>
        </div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-10 offset-sm-1 pb-5 mb-3">
