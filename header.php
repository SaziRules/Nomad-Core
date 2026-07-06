<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<a class="sr-only focus:not-sr-only focus:fixed focus:top-4 focus:left-4 focus:z-[100] focus:bg-white focus:text-charcoal focus:px-4 focus:py-2 focus:rounded-lg focus:shadow-lg focus:font-semibold" href="#main">
	<?php esc_html_e( 'Skip to main content', 'nomad-core' ); ?>
</a>

<?php do_action( 'nomad_before_header' ); ?>

<header id="site-header">
	<div class="container-site">
		<div class="flex items-center justify-between h-20">

			<!-- Logo -->
			<?php if ( has_custom_logo() ) : ?>
				<div class="flex-shrink-0"><?php the_custom_logo(); ?></div>
			<?php else : ?>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"
				   class="text-lg font-bold text-charcoal tracking-tight flex-shrink-0">
					<?php echo esc_html( get_bloginfo( 'name' ) ); ?>
				</a>
			<?php endif; ?>

			<!-- Desktop navigation -->
			<nav class="hidden lg:flex items-center"
			     aria-label="<?php esc_attr_e( 'Primary navigation', 'nomad-core' ); ?>">
				<?php
				wp_nav_menu( array(
					'theme_location' => 'primary',
					'menu_class'     => 'primary-nav',
					'container'      => false,
					'fallback_cb'    => false,
				) );
				?>
			</nav>

			<!-- Desktop CTA + Mobile toggle -->
			<div class="flex items-center gap-3 flex-shrink-0">
				<a href="<?php echo esc_url( home_url( '/contact' ) ); ?>"
				   class="hidden lg:inline-flex btn-gold">
					<?php esc_html_e( 'Book a call', 'nomad-core' ); ?>
				</a>

				<button data-nav-toggle
				        type="button"
				        class="lg:hidden flex flex-col justify-center gap-[5px] w-10 h-10 text-charcoal"
				        aria-expanded="false"
				        aria-controls="mobile-menu"
				        aria-label="<?php esc_attr_e( 'Open navigation menu', 'nomad-core' ); ?>">
					<span class="w-6 h-0.5 bg-current block" aria-hidden="true"></span>
					<span class="w-6 h-0.5 bg-current block" aria-hidden="true"></span>
					<span class="w-6 h-0.5 bg-current block" aria-hidden="true"></span>
				</button>
			</div>

		</div>
	</div>

	<!-- Mobile menu -->
	<div id="mobile-menu"
	     data-nav-menu
	     class="lg:hidden bg-white border-t border-neutral-100 shadow-lg"
	     aria-hidden="true"
	     hidden>
		<nav aria-label="<?php esc_attr_e( 'Mobile navigation', 'nomad-core' ); ?>">
			<?php
			wp_nav_menu( array(
				'theme_location' => 'primary',
				'menu_class'     => 'mobile-nav',
				'container'      => false,
				'fallback_cb'    => false,
			) );
			?>
			<div class="px-6 py-5 border-t border-neutral-100">
				<a href="<?php echo esc_url( home_url( '/contact' ) ); ?>"
				   class="btn-gold w-full justify-center">
					<?php esc_html_e( 'Book a call', 'nomad-core' ); ?>
				</a>
			</div>
		</nav>
	</div>
</header>

<?php do_action( 'nomad_after_header' ); ?>
