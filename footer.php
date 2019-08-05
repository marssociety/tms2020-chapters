<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper" id="wrapper-footer">

	<footer class="site-footer" id="colophon">

		<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 footer-primary-div">
				<?php wp_nav_menu(
					array(
						'theme_location'  => 'footer0',
						'container_class' => 'div',
						'container_id'    => 'footer-primary',
						'menu_class'      => 'footer-menu footer-main border-right border-secondary',
						'fallback_cb'     => '',
						'menu_id'         => '7',
						'depth'           => 1,
						'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
					)
				); ?>
			</div>

			<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 text-right">
				<?php if ( has_nav_menu( 'social' ) ) : ?>
					<nav class="social-navigation social-navigation-footer" aria-label="<?php esc_attr_e( 'Social Links Menu', 'tms2020' ); ?>">
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'social',
								'menu_class'     => 'social-links-menu footer-menu',
								'link_before'    => '<span class="screen-reader-text">',
								'link_after'     => '</span>' . tms2020_get_icon_svg( 'link' ),
								'depth'          => 1,
							)
						);
						?>
					</nav><!-- .social-navigation -->
				<?php endif; ?>

			</div>

	</footer><!-- #colophon -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

