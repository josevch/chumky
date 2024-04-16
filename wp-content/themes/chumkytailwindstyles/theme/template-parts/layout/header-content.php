<?php
/**
 * Template part for displaying the header content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ChumkyTailwindStyles
 */

?>

<header id="masthead" class=" bg-chumkyPrimary w-full text-white py-4 " >
<div class="container mx-auto flex justify-between items-center">
	<div>
		<?php
		if ( is_front_page() ) :
			?>
			<h1><?php bloginfo( 'name' ); ?></h1>
			<?php
		else :
			?>
			<p><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php
		endif;

		$chumkytailwindstyles_description = get_bloginfo( 'description', 'display' );
		if ( $chumkytailwindstyles_description || is_customize_preview() ) :
			?>
			<p><?php echo $chumkytailwindstyles_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
		<?php endif; ?>
	</div>

	<nav id="site-navigation" aria-label="<?php esc_attr_e( 'Main Navigation', 'chumkytailwindstyles' ); ?>">
	<!--	<button aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'chumkytailwindstyles' ); ?></button>-->

		<?php
		wp_nav_menu(
			array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
				'items_wrap'     => '<ul id="%1$s" class="%2$s" aria-label="submenu">%3$s</ul>',
			)
		);
		?>
	</nav><!-- #site-navigation -->


</div>

</header><!-- #masthead -->
