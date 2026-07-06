<?php do_action( 'nomad_before_footer' ); ?>

<footer id="site-footer" class="bg-charcoal text-white">

	<!-- Main footer -->
	<div class="container-site py-16 lg:py-20">
		<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12">

			<!-- Brand -->
			<div class="lg:col-span-1">
				<?php if ( has_custom_logo() ) : ?>
					<?php the_custom_logo(); ?>
				<?php else : ?>
					<p class="text-xl font-bold text-white tracking-tight mb-3">
						<?php echo esc_html( get_bloginfo( 'name' ) ); ?>
					</p>
				<?php endif; ?>
				<p class="text-sm text-neutral-400 leading-relaxed mb-6">
					<?php esc_html_e( 'Precision. Professionalism. Purpose.', 'nomad-core' ); ?>
				</p>
				<div class="space-y-2 text-sm text-neutral-400">
					<p>
						<a href="tel:+97142211102" class="hover:text-white transition-colors duration-150">
							+971 4 221 1102
						</a>
					</p>
					<p>
						<a href="mailto:faris@farisco.ae" class="hover:text-white transition-colors duration-150">
							faris@farisco.ae
						</a>
					</p>
				</div>
			</div>

			<!-- Services -->
			<div>
				<h3 class="text-xs font-semibold tracking-[0.15em] uppercase text-gold mb-5">
					<?php esc_html_e( 'Services', 'nomad-core' ); ?>
				</h3>
				<ul class="space-y-3 text-sm text-neutral-400">
					<?php
					$services = array(
						__( 'Auditing Services', 'nomad-core' ),
						__( 'Accounting & Bookkeeping', 'nomad-core' ),
						__( 'Company Formation', 'nomad-core' ),
						__( 'Business Advisory', 'nomad-core' ),
						__( 'VAT Consulting & Filing', 'nomad-core' ),
						__( 'Litigation & Arbitration', 'nomad-core' ),
					);
					foreach ( $services as $service ) :
					?>
						<li>
							<a href="<?php echo esc_url( home_url( '/services' ) ); ?>"
							   class="hover:text-white transition-colors duration-150">
								<?php echo esc_html( $service ); ?>
							</a>
						</li>
					<?php endforeach; ?>
				</ul>
			</div>

			<!-- Company -->
			<div>
				<h3 class="text-xs font-semibold tracking-[0.15em] uppercase text-gold mb-5">
					<?php esc_html_e( 'Company', 'nomad-core' ); ?>
				</h3>
				<ul class="space-y-3 text-sm text-neutral-400">
					<?php
					$pages = array(
						__( 'About Us', 'nomad-core' )    => '/about',
						__( 'Our Clients', 'nomad-core' ) => '/clients',
						__( 'Industries', 'nomad-core' )  => '/industries',
						__( 'CSR', 'nomad-core' )         => '/csr',
						__( 'Contact', 'nomad-core' )     => '/contact',
					);
					foreach ( $pages as $label => $path ) :
					?>
						<li>
							<a href="<?php echo esc_url( home_url( $path ) ); ?>"
							   class="hover:text-white transition-colors duration-150">
								<?php echo esc_html( $label ); ?>
							</a>
						</li>
					<?php endforeach; ?>
				</ul>
			</div>

			<!-- Contact / Address -->
			<div>
				<h3 class="text-xs font-semibold tracking-[0.15em] uppercase text-gold mb-5">
					<?php esc_html_e( 'Office', 'nomad-core' ); ?>
				</h3>
				<address class="not-italic text-sm text-neutral-400 leading-relaxed space-y-3">
					<p><?php esc_html_e( 'Makateb Building, Office #310', 'nomad-core' ); ?></p>
					<p><?php esc_html_e( 'Deira, Dubai, UAE', 'nomad-core' ); ?></p>
					<p>
						<a href="tel:+97142211102" class="hover:text-white transition-colors duration-150">
							+971 4 221 1102
						</a><br>
						<a href="tel:+971504200008" class="hover:text-white transition-colors duration-150">
							+971 50 420 0008
						</a>
					</p>
					<p>
						<a href="mailto:faris@farisco.ae" class="hover:text-white transition-colors duration-150">
							faris@farisco.ae
						</a>
					</p>
				</address>
			</div>

		</div>
	</div>

	<!-- Bottom bar -->
	<div class="border-t border-white/10">
		<div class="container-site py-6 flex flex-col sm:flex-row items-center justify-between gap-4">
			<p class="text-xs text-neutral-500">
				&copy; <?php echo esc_html( gmdate( 'Y' ) ); ?>
				<?php echo esc_html( get_bloginfo( 'name' ) ); ?>.
				<?php esc_html_e( 'All rights reserved.', 'nomad-core' ); ?>
			</p>
			<p class="text-xs text-neutral-500">
				<?php esc_html_e( 'Licensed Independent Auditor · Dubai, UAE', 'nomad-core' ); ?>
			</p>
		</div>
	</div>

</footer>

<?php do_action( 'nomad_after_footer' ); ?>

<?php wp_footer(); ?>
</body>
</html>
