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
		<div class="flex items-center justify-between h-[72px] gap-4">

			<!-- Logo group -->
			<div class="flex items-center gap-3 flex-shrink-0">

				<!-- UAE flag (inline SVG) -->
				<div class="hidden sm:block w-7 h-[18px] flex-shrink-0 overflow-hidden rounded-sm" aria-hidden="true">
					<svg viewBox="0 0 28 18" xmlns="http://www.w3.org/2000/svg" class="w-full h-full">
						<!-- Red left stripe -->
						<rect x="0" y="0" width="7" height="18" fill="#CE1126"/>
						<!-- Green top stripe -->
						<rect x="7" y="0" width="21" height="6" fill="#00732F"/>
						<!-- White middle stripe -->
						<rect x="7" y="6" width="21" height="6" fill="#FFFFFF"/>
						<!-- Black bottom stripe -->
						<rect x="7" y="12" width="21" height="6" fill="#000000"/>
					</svg>
				</div>

				<!-- Logo -->
				<?php if ( has_custom_logo() ) : ?>
					<?php the_custom_logo(); ?>
				<?php else : ?>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"
					   class="text-base font-bold text-white tracking-tight">
						<?php echo esc_html( get_bloginfo( 'name' ) ); ?>
					</a>
				<?php endif; ?>

				<!-- PrimeGlobal badge -->
				<div class="hidden lg:block border-l border-white/20 pl-3 flex-shrink-0">
					<img src="<?php echo esc_url( content_url( '/uploads/2026/07/XSbK7MXHCLP8BHC8j2Zqk1XwJRE.png' ) ); ?>"
					     alt="<?php esc_attr_e( 'PrimeGlobal member firm', 'nomad-core' ); ?>"
					     width="108" height="11"
					     loading="eager"
					     decoding="async"
					     class="h-[11px] w-auto opacity-80">
				</div>

			</div>

			<!-- Desktop navigation -->
			<nav class="hidden lg:flex items-center flex-1 justify-center"
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

			<!-- Desktop: contact info + CTA -->
			<div class="hidden lg:flex items-center gap-4 flex-shrink-0">

				<div class="flex items-center gap-3 text-xs text-white/60">
					<a href="mailto:faris@farisco.ae"
					   class="flex items-center gap-1.5 hover:text-white transition-colors duration-150">
						<svg class="w-3.5 h-3.5 flex-shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true">
							<path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75"/>
						</svg>
						faris@farisco.ae
					</a>
					<a href="tel:+97142211102"
					   class="flex items-center gap-1.5 hover:text-white transition-colors duration-150">
						<svg class="w-3.5 h-3.5 flex-shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true">
							<path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z"/>
						</svg>
						+971 4 221 1102
					</a>
					<a href="https://www.linkedin.com/company/faris-co/"
					   target="_blank" rel="noopener noreferrer"
					   class="hover:text-white transition-colors duration-150"
					   aria-label="<?php esc_attr_e( 'Faris & Co. on LinkedIn', 'nomad-core' ); ?>">
						<svg class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
							<path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 0 1-2.063-2.065 2.064 2.064 0 1 1 2.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
						</svg>
					</a>
				</div>

				<a href="<?php echo esc_url( home_url( '/contact' ) ); ?>"
				   class="btn-header">
					<?php esc_html_e( 'Book a call', 'nomad-core' ); ?>
				</a>

			</div>

			<!-- Mobile: CTA + hamburger -->
			<div class="flex items-center gap-2 flex-shrink-0 lg:hidden">
				<a href="<?php echo esc_url( home_url( '/contact' ) ); ?>"
				   class="btn-header">
					<?php esc_html_e( 'Book a call', 'nomad-core' ); ?>
				</a>

				<button data-nav-toggle
				        type="button"
				        class="flex flex-col justify-center gap-[5px] w-10 h-10 text-white"
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
	     class="lg:hidden bg-navy-dark border-t border-white/10 shadow-xl"
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
			<div class="px-6 py-5 border-t border-white/10 space-y-3">
				<a href="<?php echo esc_url( home_url( '/contact' ) ); ?>"
				   class="btn-header w-full justify-center">
					<?php esc_html_e( 'Book a call', 'nomad-core' ); ?>
				</a>
				<div class="flex items-center justify-center gap-5 text-xs text-white/50">
					<a href="mailto:faris@farisco.ae" class="hover:text-white transition-colors duration-150">
						faris@farisco.ae
					</a>
					<a href="tel:+97142211102" class="hover:text-white transition-colors duration-150">
						+971 4 221 1102
					</a>
				</div>
			</div>
		</nav>
	</div>
</header>

<?php do_action( 'nomad_after_header' ); ?>
