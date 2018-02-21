<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package namegenerator
 */

?>
    </div></div></div>
    </div><!-- #content -->

    </div><!-- #page -->


<footer class="footer dmw-footer">
    <div class="container">
        <div class="row text-center vertical-align">
            <div class="col-md-3 col-xs-12 name-generator-tagline">
                <p>Made with <span class="anticon anticon-heart"></span> by <a href="https://themeisle.com" target="_blank">ThemeIsle</a></p>
            </div>
            <div class="col-md-7 offset-md-2 col-xs-12 mt-4 mt-md-0 name-generator-footer-nav">
				<?php wp_nav_menu(
					array(
						'menu'            => 'footer-menu',
						'container'       => 'nav',
						'container_class' => 'name-generator-footer-nav',
						'menu_class'      => 'menu',
						'menu_id'         => 'footer-menu',
						'echo'            => true,
						'fallback_cb'     => 'wp_page_menu',
						'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
					)
				); ?>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>

</body>
</html>
