<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<a class="sr-only focus:not-sr-only focus:absolute focus:z-50 focus:p-4" href="#main">
	<?php esc_html_e( 'Skip to main content', 'nomad-core' ); ?>
</a>

<?php do_action( 'nomad_before_header' ); ?>

<header id="site-header">
	<div>
		<?php if ( has_custom_logo() ) : ?>
			<?php the_custom_logo(); ?>
		<?php else : ?>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
				<?php echo esc_html( get_bloginfo( 'name' ) ); ?>
			</a>
		<?php endif; ?>

		<?php
		wp_nav_menu(
			array(
				'theme_location'       => 'primary',
				'menu_id'              => 'primary-menu',
				'container'            => 'nav',
				'container_aria_label' => esc_attr__( 'Primary navigation', 'nomad-core' ),
				'fallback_cb'          => false,
			)
		);
		?>
	</div>
</header>

<?php do_action( 'nomad_after_header' ); ?>
