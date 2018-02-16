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
                <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 text-center">
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
<!--		                --><?php
//		                the_custom_logo();
//		                if ( is_front_page() && is_home() ) : ?>
<!--                            <h1 class="site-title"><a href="--><?php //echo esc_url( home_url( '/' ) ); ?><!--" rel="home">--><?php //bloginfo( 'name' ); ?><!--</a></h1>-->
<!--		                --><?php //else : ?>
<!--                            <p class="site-title"><a href="--><?php //echo esc_url( home_url( '/' ) ); ?><!--" rel="home">--><?php //bloginfo( 'name' ); ?><!--</a></p>-->
<!--		                --><?php
//		                endif;
//
//		                $description = get_bloginfo( 'description', 'display' );
//		                if ( $description || is_customize_preview() ) : ?>
<!--                            <p class="site-description">--><?php //echo $description; /* WPCS: xss ok. */ ?><!--</p>-->
<!--		                --><?php
//		                endif; ?>
                    </div><!-- .site-branding -->
                </div>
            </div>

            <?php if ( ! is_front_page() ) { ?>
            <div class="row">
                <div class="col-xs-12 col-sm-10 col-sm-offset-1 text-center">
                    <nav id="site-navigation" class="main-navigation">
                        <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'namegenerator' ); ?></button>
                        <?php
                        wp_nav_menu( array(
                            'theme_location' => 'menu-1',
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
                <div class="col-xs-12 col-sm-10 col-sm-offset-1">
