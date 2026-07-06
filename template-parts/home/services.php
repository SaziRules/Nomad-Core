<?php
/**
 * Homepage — Services section.
 *
 * @package NomadCore
 */

$uploads = content_url( '/uploads/2026/07/' );
?>

<!-- Services -->
<section class="bg-neutral-50 py-20 lg:py-28">
	<div class="container-site">

		<div class="flex flex-col md:flex-row md:items-end md:justify-between gap-6 mb-14">
			<div>
				<p class="section-label mb-3" data-animate>
					<?php esc_html_e( 'Our expertise', 'nomad-core' ); ?>
				</p>
				<h2 class="text-3xl lg:text-4xl font-bold text-charcoal tracking-tight"
				    data-animate data-animate-delay="1">
					<?php esc_html_e( 'Services built for UAE compliance.', 'nomad-core' ); ?>
				</h2>
			</div>
			<a href="<?php echo esc_url( home_url( '/services' ) ); ?>"
			   class="btn-outline flex-shrink-0"
			   data-animate data-animate-delay="2">
				<?php esc_html_e( 'View all services', 'nomad-core' ); ?>
			</a>
		</div>

		<?php
		$services = array(
			array(
				'title' => __( 'Auditing Services', 'nomad-core' ),
				'desc'  => __( 'Statutory, internal, and forensic audits conducted to international standards.', 'nomad-core' ),
				'icon'  => $uploads . 'Shield-Check.png',
			),
			array(
				'title' => __( 'Accounting & Bookkeeping', 'nomad-core' ),
				'desc'  => __( 'Accurate books and financial statements that keep you decision-ready.', 'nomad-core' ),
				'icon'  => $uploads . 'Scroll.png',
			),
			array(
				'title' => __( 'Company Formation & Liquidation', 'nomad-core' ),
				'desc'  => __( 'Mainland, Free Zone, and offshore setup with full registration support.', 'nomad-core' ),
				'icon'  => $uploads . 'Briefcase.png',
			),
			array(
				'title' => __( 'Business Advisory', 'nomad-core' ),
				'desc'  => __( 'Strategic guidance on restructuring, growth planning, and profitability.', 'nomad-core' ),
				'icon'  => $uploads . 'Briefcase-1.png',
			),
			array(
				'title' => __( 'Litigation & Arbitration', 'nomad-core' ),
				'desc'  => __( 'Expert financial witness support and dispute resolution for UAE courts.', 'nomad-core' ),
				'icon'  => $uploads . 'Gavel.png',
			),
			array(
				'title' => __( 'Court Expertise', 'nomad-core' ),
				'desc'  => __( 'Court-appointed expert assignments and forensic accounting services.', 'nomad-core' ),
				'icon'  => $uploads . 'Gavel.png',
			),
			array(
				'title' => __( 'Trademark Registration', 'nomad-core' ),
				'desc'  => __( 'Protect your brand — trademark, patent, and copyright registration in the UAE.', 'nomad-core' ),
				'icon'  => $uploads . 'Sketch-Logo.png',
			),
			array(
				'title' => __( 'Strategic Planning', 'nomad-core' ),
				'desc'  => __( 'Long-term business strategies and feasibility studies for UAE ventures.', 'nomad-core' ),
				'icon'  => $uploads . 'Badge-Check.png',
			),
			array(
				'title' => __( 'Corporate Governance & Risk', 'nomad-core' ),
				'desc'  => __( 'Governance frameworks, internal controls, and enterprise risk management.', 'nomad-core' ),
				'icon'  => $uploads . 'Shield-Check.png',
			),
			array(
				'title' => __( 'VAT Consulting & Filing', 'nomad-core' ),
				'desc'  => __( 'FTA-compliant VAT registration, returns, and advisory across all sectors.', 'nomad-core' ),
				'icon'  => $uploads . 'Wallet.png',
			),
		);
		?>

		<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-5 gap-4">
			<?php foreach ( $services as $i => $service ) :
				$delay = ( $i % 5 ) + 1;
			?>
			<div class="bg-white rounded-xl p-6 border border-neutral-100 group hover:border-green hover:shadow-md transition-all duration-200"
			     data-animate data-animate-delay="<?php echo esc_attr( $delay ); ?>">
				<div class="w-10 h-10 mb-4 flex items-center justify-center" aria-hidden="true">
					<img src="<?php echo esc_url( $service['icon'] ); ?>"
					     alt=""
					     class="w-8 h-8 object-contain"
					     loading="lazy"
					     decoding="async">
				</div>
				<h3 class="text-sm font-semibold text-charcoal mb-2 group-hover:text-green transition-colors duration-150">
					<a href="<?php echo esc_url( home_url( '/services' ) ); ?>">
						<?php echo esc_html( $service['title'] ); ?>
					</a>
				</h3>
				<p class="text-xs text-neutral-500 leading-relaxed">
					<?php echo esc_html( $service['desc'] ); ?>
				</p>
			</div>
			<?php endforeach; ?>
		</div>

	</div>
</section>
