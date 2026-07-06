<?php do_action( 'nomad_before_footer' ); ?>

<footer id="site-footer" class="bg-navy-dark text-white">

	<!-- Main footer -->
	<div class="container-site py-16 lg:py-20">
		<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12">

			<!-- Brand -->
			<div class="lg:col-span-1">
				<?php if ( has_custom_logo() ) : ?>
					<?php the_custom_logo(); ?>
				<?php else : ?>
					<p class="text-lg font-bold text-white tracking-tight mb-2">
						<?php echo esc_html( get_bloginfo( 'name' ) ); ?>
					</p>
				<?php endif; ?>
				<p class="text-sm text-white/50 leading-relaxed mt-4 mb-6 max-w-xs">
					<?php esc_html_e( 'Precision. Professionalism. Purpose.', 'nomad-core' ); ?>
				</p>
				<div class="space-y-2 text-sm text-white/50">
					<p>
						<a href="mailto:faris@farisco.ae" class="hover:text-white transition-colors duration-150">
							faris@farisco.ae
						</a>
					</p>
					<p>
						<a href="tel:+97142211102" class="hover:text-white transition-colors duration-150">
							+971 4 221 1102
						</a>
					</p>
					<p>
						<a href="tel:+971504200008" class="hover:text-white transition-colors duration-150">
							+971 50 420 0008
						</a>
					</p>
				</div>
			</div>

			<!-- Pages -->
			<div>
				<h3 class="text-xs font-semibold tracking-[0.15em] uppercase text-green mb-5">
					<?php esc_html_e( 'Pages', 'nomad-core' ); ?>
				</h3>
				<ul class="space-y-3 text-sm text-white/50">
					<?php
					$nav_pages = array(
						__( 'Home', 'nomad-core' )       => '/',
						__( 'About', 'nomad-core' )      => '/about',
						__( 'Services', 'nomad-core' )   => '/services',
						__( 'Industries', 'nomad-core' ) => '/industries',
						__( 'Clients', 'nomad-core' )    => '/clients',
						__( 'Contact', 'nomad-core' )    => '/contact',
						__( 'CSR', 'nomad-core' )        => '/csr',
					);
					foreach ( $nav_pages as $label => $path ) :
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

			<!-- Services -->
			<div>
				<h3 class="text-xs font-semibold tracking-[0.15em] uppercase text-green mb-5">
					<?php esc_html_e( 'Services', 'nomad-core' ); ?>
				</h3>
				<ul class="space-y-3 text-sm text-white/50">
					<?php
					$services = array(
						__( 'Auditing Services', 'nomad-core' ),
						__( 'Accounting & Bookkeeping', 'nomad-core' ),
						__( 'Company Formation & Liquidation', 'nomad-core' ),
						__( 'Business Advisory', 'nomad-core' ),
						__( 'Trademark Registration', 'nomad-core' ),
						__( 'Litigation & Arbitration', 'nomad-core' ),
						__( 'Strategic Planning', 'nomad-core' ),
						__( 'Corporate Governance & Risk', 'nomad-core' ),
						__( 'Court Expertise', 'nomad-core' ),
						__( 'VAT Consulting & Filing', 'nomad-core' ),
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

			<!-- Contact / Address -->
			<div>
				<h3 class="text-xs font-semibold tracking-[0.15em] uppercase text-green mb-5">
					<?php esc_html_e( 'Contact us', 'nomad-core' ); ?>
				</h3>
				<address class="not-italic text-sm text-white/50 leading-relaxed space-y-3">
					<p><?php esc_html_e( 'Makateb Building, Office #310', 'nomad-core' ); ?></p>
					<p><?php esc_html_e( 'Deira, Dubai, UAE', 'nomad-core' ); ?></p>
					<p>
						<a href="tel:+97142211102" class="hover:text-white transition-colors duration-150">+971 4 221 1102</a><br>
						<a href="tel:+971504200008" class="hover:text-white transition-colors duration-150">+971 50 420 0008</a><br>
						<?php esc_html_e( 'Fax: +971 4 221 1103', 'nomad-core' ); ?>
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
		<div class="container-site py-5 flex flex-col sm:flex-row items-center justify-between gap-3">
			<p class="text-xs text-white/30">
				&copy; <?php echo esc_html( '1995–' . gmdate( 'Y' ) ); ?>
				<?php echo esc_html( get_bloginfo( 'name' ) ); ?>.
				<?php esc_html_e( 'All Rights Reserved.', 'nomad-core' ); ?>
			</p>
			<p class="text-xs text-white/30">
				<?php esc_html_e( 'Licensed Independent Auditor · Dubai, UAE', 'nomad-core' ); ?>
			</p>
		</div>
	</div>

</footer>

<?php do_action( 'nomad_after_footer' ); ?>

<?php wp_footer(); ?>
</body>
</html>
