<?php
/**
 * Front page template — Faris & Co.
 *
 * @package NomadCore
 */

get_header();
?>

<?php do_action( 'nomad_before_main' ); ?>
<main id="main">

	<!-- ═══════════════════════════════════════════
	     HERO
	     ═══════════════════════════════════════════ -->
	<section class="relative bg-white pt-32 pb-24 lg:pt-40 lg:pb-32 overflow-hidden">

		<!-- Subtle grid background -->
		<div class="absolute inset-0 bg-[linear-gradient(to_right,#f0f0f0_1px,transparent_1px),linear-gradient(to_bottom,#f0f0f0_1px,transparent_1px)] bg-[size:64px_64px] opacity-40 pointer-events-none" aria-hidden="true"></div>

		<div class="container-site relative">
			<div class="max-w-4xl mx-auto text-center">

				<p class="section-label mb-6">
					<?php esc_html_e( 'Licensed Auditors · Dubai, UAE · Est. 1995', 'nomad-core' ); ?>
				</p>

				<h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-charcoal leading-[1.1] tracking-tight mb-6">
					<?php esc_html_e( 'AED 200K in client savings through precise auditing.', 'nomad-core' ); ?>
				</h1>

				<p class="text-lg text-neutral-500 leading-relaxed max-w-2xl mx-auto mb-10">
					<?php esc_html_e( 'We help UAE businesses reduce costs, stay compliant, and build confidence with stakeholders — through audit, advisory, and financial services trusted for 30 years.', 'nomad-core' ); ?>
				</p>

				<div class="flex flex-wrap items-center justify-center gap-4">
					<a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn-gold">
						<?php esc_html_e( 'Book a call', 'nomad-core' ); ?>
					</a>
					<a href="<?php echo esc_url( home_url( '/services' ) ); ?>" class="btn-outline">
						<?php esc_html_e( 'Our services', 'nomad-core' ); ?>
					</a>
				</div>

			</div>
		</div>
	</section>

	<!-- ═══════════════════════════════════════════
	     TRUST BAR
	     ═══════════════════════════════════════════ -->
	<div class="border-y border-neutral-100 bg-neutral-50 py-6">
		<div class="container-site">
			<p class="text-center text-xs font-semibold tracking-[0.15em] uppercase text-neutral-400">
				<?php esc_html_e( 'Trusted by businesses across Dubai · Real Estate · Construction · Hospitality · Trading · Healthcare', 'nomad-core' ); ?>
			</p>
		</div>
	</div>

	<!-- ═══════════════════════════════════════════
	     SERVICES
	     ═══════════════════════════════════════════ -->
	<section class="bg-white py-20 lg:py-28">
		<div class="container-site">

			<div class="flex flex-col md:flex-row md:items-end md:justify-between gap-6 mb-14">
				<div>
					<p class="section-label mb-3">
						<?php esc_html_e( 'What we do', 'nomad-core' ); ?>
					</p>
					<h2 class="text-3xl lg:text-4xl font-bold text-charcoal tracking-tight">
						<?php esc_html_e( 'Services built for UAE compliance.', 'nomad-core' ); ?>
					</h2>
				</div>
				<a href="<?php echo esc_url( home_url( '/services' ) ); ?>"
				   class="btn-outline flex-shrink-0">
					<?php esc_html_e( 'View all services', 'nomad-core' ); ?>
				</a>
			</div>

			<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-px bg-neutral-100">

				<?php
				$services = array(
					array(
						'title' => __( 'Auditing Services', 'nomad-core' ),
						'desc'  => __( 'Statutory, internal, and forensic audits conducted to international standards.', 'nomad-core' ),
						'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 0 0 2.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 0 0-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 0 0 .75-.75 2.25 2.25 0 0 0-.1-.664m-5.8 0A2.251 2.251 0 0 1 13.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25Z"/>',
					),
					array(
						'title' => __( 'Accounting & Bookkeeping', 'nomad-core' ),
						'desc'  => __( 'Accurate books and financial statements that keep you decision-ready.', 'nomad-core' ),
						'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 0 0 6 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 0 1 6 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 0 1 6-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0 0 18 18a8.967 8.967 0 0 0-6 2.292m0-14.25v14.25"/>',
					),
					array(
						'title' => __( 'Company Formation', 'nomad-core' ),
						'desc'  => __( 'Mainland, Free Zone, and offshore setup with full registration support.', 'nomad-core' ),
						'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" d="M2.25 21h19.5m-18-18v18m10.5-18v18m6-13.5V21M6.75 6.75h.75m-.75 3h.75m-.75 3h.75m3-6h.75m-.75 3h.75m-.75 3h.75M6.75 21v-3.375c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21M3 3h12m-.75 4.5H21m-3.75 3.75h.008v.008h-.008v-.008Zm0 3h.008v.008h-.008v-.008Zm0 3h.008v.008h-.008v-.008Z"/>',
					),
					array(
						'title' => __( 'Business Advisory', 'nomad-core' ),
						'desc'  => __( 'Strategic guidance on restructuring, growth planning, and profitability.', 'nomad-core' ),
						'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" d="M3.75 3v11.25A2.25 2.25 0 0 0 6 16.5h2.25M3.75 3h-1.5m1.5 0h16.5m0 0h1.5m-1.5 0v11.25A2.25 2.25 0 0 1 18 16.5h-2.25m-7.5 0h7.5m-7.5 0-1 3m8.5-3 1 3m0 0 .5 1.5m-.5-1.5h-9.5m0 0-.5 1.5M9 11.25v1.5M12 9v3.75m3-6v6"/>',
					),
					array(
						'title' => __( 'VAT Consulting & Filing', 'nomad-core' ),
						'desc'  => __( 'FTA-compliant VAT registration, returns, and advisory across all sectors.', 'nomad-core' ),
						'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18.75a60.07 60.07 0 0 1 15.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 0 1 3 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 0 0-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 0 1-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 0 0 3 15h-.75M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm3 0h.008v.008H18V10.5Zm-12 0h.008v.008H6V10.5Z"/>',
					),
					array(
						'title' => __( 'Litigation & Arbitration', 'nomad-core' ),
						'desc'  => __( 'Expert financial witness support and dispute resolution for UAE courts.', 'nomad-core' ),
						'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" d="M12 3v17.25m0 0c-1.472 0-2.882.265-4.185.75M12 20.25c1.472 0 2.882.265 4.185.75M18.75 4.97A48.416 48.416 0 0 0 12 4.5c-2.291 0-4.545.16-6.75.47m13.5 0c1.01.143 2.01.317 3 .52m-3-.52 2.62 10.726c.122.499-.106 1.028-.589 1.202a5.988 5.988 0 0 1-2.031.352 5.988 5.988 0 0 1-2.031-.352c-.483-.174-.711-.703-.59-1.202L18.75 4.97Zm-16.5.52c.99-.203 1.99-.377 3-.52m0 0 2.62 10.726c.122.499-.106 1.028-.589 1.202a5.989 5.989 0 0 1-2.031.352 5.989 5.989 0 0 1-2.031-.352c-.483-.174-.711-.703-.59-1.202L5.25 5.49Z"/>',
					),
					array(
						'title' => __( 'Corporate Finance', 'nomad-core' ),
						'desc'  => __( 'Valuations, financial modelling, and transaction advisory for UAE deals.', 'nomad-core' ),
						'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6 9 12.75l4.286-4.286a11.948 11.948 0 0 1 4.306 6.43l.776 2.898m0 0 3.182-5.511m-3.182 5.51-5.511-3.181"/>',
					),
					array(
						'title' => __( 'Due Diligence', 'nomad-core' ),
						'desc'  => __( 'Financial and commercial due diligence to de-risk acquisitions and investments.', 'nomad-core' ),
						'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z"/>',
					),
					array(
						'title' => __( 'Payroll Management', 'nomad-core' ),
						'desc'  => __( 'WPS-compliant payroll processing and end-of-service benefit calculations.', 'nomad-core' ),
						'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z"/>',
					),
					array(
						'title' => __( 'Internal Audit', 'nomad-core' ),
						'desc'  => __( 'Risk-based internal audit programmes that strengthen governance and controls.', 'nomad-core' ),
						'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75m-3-7.036A11.959 11.959 0 0 1 3.598 6 11.99 11.99 0 0 0 3 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285Z"/>',
					),
				);
				foreach ( $services as $service ) :
				?>
				<div class="bg-white p-8 group hover:bg-gold-subtle transition-colors duration-200">
					<div class="w-10 h-10 rounded-xl bg-gold/10 flex items-center justify-center mb-5 group-hover:bg-gold/20 transition-colors duration-200" aria-hidden="true">
						<svg class="w-5 h-5 text-gold" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
							<?php echo $service['icon']; ?>
						</svg>
					</div>
					<h3 class="text-base font-semibold text-charcoal mb-2">
						<a href="<?php echo esc_url( home_url( '/services' ) ); ?>"
						   class="hover:text-gold transition-colors duration-150">
							<?php echo esc_html( $service['title'] ); ?>
						</a>
					</h3>
					<p class="text-sm text-neutral-500 leading-relaxed">
						<?php echo esc_html( $service['desc'] ); ?>
					</p>
				</div>
				<?php endforeach; ?>

			</div>
		</div>
	</section>

	<!-- ═══════════════════════════════════════════
	     STATS STRIP
	     ═══════════════════════════════════════════ -->
	<section class="bg-charcoal py-16 lg:py-20">
		<div class="container-site">
			<div class="grid grid-cols-2 lg:grid-cols-4 gap-8 lg:gap-0 lg:divide-x lg:divide-white/10">

				<?php
				$stats = array(
					array( 'value' => '30+',      'label' => __( 'Years of experience', 'nomad-core' ) ),
					array( 'value' => '1995',     'label' => __( 'Established in Dubai', 'nomad-core' ) ),
					array( 'value' => 'AED 200K', 'label' => __( 'Avg. client cost savings', 'nomad-core' ) ),
					array( 'value' => '10',       'label' => __( 'Specialist services', 'nomad-core' ) ),
				);
				foreach ( $stats as $stat ) :
				?>
				<div class="text-center lg:px-8">
					<p class="text-3xl lg:text-4xl font-bold text-gold mb-2">
						<?php echo esc_html( $stat['value'] ); ?>
					</p>
					<p class="text-sm text-neutral-400">
						<?php echo esc_html( $stat['label'] ); ?>
					</p>
				</div>
				<?php endforeach; ?>

			</div>
		</div>
	</section>

	<!-- ═══════════════════════════════════════════
	     ABOUT / WHO WE ARE
	     ═══════════════════════════════════════════ -->
	<section class="bg-white py-20 lg:py-28">
		<div class="container-site">
			<div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">

				<div>
					<p class="section-label mb-4">
						<?php esc_html_e( 'About Faris & Co.', 'nomad-core' ); ?>
					</p>
					<h2 class="text-3xl lg:text-4xl font-bold text-charcoal tracking-tight mb-6">
						<?php esc_html_e( 'Three decades of trusted advisory in the UAE.', 'nomad-core' ); ?>
					</h2>
					<div class="text-neutral-500 leading-relaxed space-y-4 mb-8">
						<p>
							<?php esc_html_e( 'Founded in 1995, Faris & Co. has grown into one of Dubai\'s most respected accounting and auditing practices. We combine the personal attention of a boutique firm with the technical depth you\'d expect from a major house.', 'nomad-core' ); ?>
						</p>
						<p>
							<?php esc_html_e( 'Our team of licensed auditors, accountants, and advisors operates under IFRS and UAE regulatory frameworks — keeping clients compliant, competitive, and in control of their finances.', 'nomad-core' ); ?>
						</p>
					</div>
					<div class="flex flex-wrap gap-4">
						<a href="<?php echo esc_url( home_url( '/about' ) ); ?>" class="btn-primary">
							<?php esc_html_e( 'Our story', 'nomad-core' ); ?>
						</a>
						<a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn-outline">
							<?php esc_html_e( 'Get in touch', 'nomad-core' ); ?>
						</a>
					</div>
				</div>

				<div class="grid grid-cols-2 gap-4">
					<div class="bg-neutral-50 rounded-2xl p-8 flex flex-col justify-between aspect-square">
						<p class="section-label"><?php esc_html_e( 'Precision', 'nomad-core' ); ?></p>
						<p class="text-neutral-600 text-sm leading-relaxed">
							<?php esc_html_e( 'Every figure verified. Every report defensible.', 'nomad-core' ); ?>
						</p>
					</div>
					<div class="bg-gold rounded-2xl p-8 flex flex-col justify-between aspect-square">
						<p class="text-xs font-semibold tracking-[0.15em] uppercase text-white/70">
							<?php esc_html_e( 'Licensed', 'nomad-core' ); ?>
						</p>
						<p class="text-white text-sm leading-relaxed">
							<?php esc_html_e( 'Independent Auditor registered with UAE regulatory authorities.', 'nomad-core' ); ?>
						</p>
					</div>
					<div class="bg-charcoal rounded-2xl p-8 flex flex-col justify-between aspect-square">
						<p class="text-xs font-semibold tracking-[0.15em] uppercase text-white/50">
							<?php esc_html_e( 'Est.', 'nomad-core' ); ?>
						</p>
						<p class="text-3xl font-bold text-white">1995</p>
					</div>
					<div class="bg-neutral-50 rounded-2xl p-8 flex flex-col justify-between aspect-square">
						<p class="section-label"><?php esc_html_e( 'Purpose', 'nomad-core' ); ?></p>
						<p class="text-neutral-600 text-sm leading-relaxed">
							<?php esc_html_e( 'Your growth. Our mandate.', 'nomad-core' ); ?>
						</p>
					</div>
				</div>

			</div>
		</div>
	</section>

	<!-- ═══════════════════════════════════════════
	     TESTIMONIALS
	     ═══════════════════════════════════════════ -->
	<section class="bg-neutral-50 py-20 lg:py-28">
		<div class="container-site">

			<div class="text-center mb-14">
				<p class="section-label mb-3">
					<?php esc_html_e( 'Client stories', 'nomad-core' ); ?>
				</p>
				<h2 class="text-3xl lg:text-4xl font-bold text-charcoal tracking-tight">
					<?php esc_html_e( 'What our clients say.', 'nomad-core' ); ?>
				</h2>
			</div>

			<div class="grid grid-cols-1 md:grid-cols-3 gap-6">

				<?php
				$testimonials = array(
					array(
						'quote'    => __( 'Faris & Co. identified inefficiencies in our VAT filings that had gone unnoticed for two years. Their audit saved us over AED 85,000 in corrections — and gave us complete peace of mind.', 'nomad-core' ),
						'name'     => 'Esra Khalid',
						'role'     => __( 'CFO, Real Estate Developer — Dubai', 'nomad-core' ),
					),
					array(
						'quote'    => __( 'Setting up our mainland company felt overwhelming until we engaged Faris & Co. They handled every step — from trade licence to corporate banking — in under three weeks.', 'nomad-core' ),
						'name'     => 'Ashraf Abbas',
						'role'     => __( 'Managing Director, Trading Co. — Deira', 'nomad-core' ),
					),
					array(
						'quote'    => __( 'Their team\'s understanding of UAE arbitration processes was exceptional. We went into proceedings fully prepared, and the outcome reflected that. Highly professional throughout.', 'nomad-core' ),
						'name'     => 'Youssef Maali',
						'role'     => __( 'General Counsel, Hospitality Group — Abu Dhabi', 'nomad-core' ),
					),
				);
				foreach ( $testimonials as $t ) :
				?>
				<div class="bg-white rounded-2xl p-8 flex flex-col">
					<!-- Stars -->
					<div class="flex gap-1 mb-5" aria-label="<?php esc_attr_e( '5 out of 5 stars', 'nomad-core' ); ?>">
						<?php for ( $i = 0; $i < 5; $i++ ) : ?>
						<svg class="w-4 h-4 text-gold" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
							<path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 0 0 .95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 0 0-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 0 0-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 0 0-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 0 0 .951-.69l1.07-3.292Z"/>
						</svg>
						<?php endfor; ?>
					</div>
					<blockquote class="text-neutral-600 text-sm leading-relaxed flex-1 mb-6">
						&ldquo;<?php echo esc_html( $t['quote'] ); ?>&rdquo;
					</blockquote>
					<footer class="border-t border-neutral-100 pt-5">
						<p class="font-semibold text-charcoal text-sm"><?php echo esc_html( $t['name'] ); ?></p>
						<p class="text-xs text-neutral-400 mt-0.5"><?php echo esc_html( $t['role'] ); ?></p>
					</footer>
				</div>
				<?php endforeach; ?>

			</div>
		</div>
	</section>

	<!-- ═══════════════════════════════════════════
	     INDUSTRIES
	     ═══════════════════════════════════════════ -->
	<section class="bg-white py-20 lg:py-28">
		<div class="container-site">

			<div class="text-center mb-14">
				<p class="section-label mb-3">
					<?php esc_html_e( 'Industries', 'nomad-core' ); ?>
				</p>
				<h2 class="text-3xl lg:text-4xl font-bold text-charcoal tracking-tight">
					<?php esc_html_e( 'Sector expertise across the UAE economy.', 'nomad-core' ); ?>
				</h2>
			</div>

			<div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-7 gap-3">
				<?php
				$industries = array(
					array( 'label' => __( 'Real Estate', 'nomad-core' ),           'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M8.25 21v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21m0 0h4.5V3.545M12.75 21h7.5V10.75M2.25 21h1.5m18 0h-18M2.25 9l4.5-1.636M18.75 3l-1.5.545m0 6.205 3 1m1.5.5-1.5-.5M6.75 7.364V3h-3v18m3-13.636 10.5-3.819"/>' ),
					array( 'label' => __( 'Construction', 'nomad-core' ),           'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M11.42 15.17 17.25 21A2.652 2.652 0 0 0 21 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 1 1-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 0 0 4.486-6.336l-3.276 3.277a3.004 3.004 0 0 1-2.25-2.25l3.276-3.276a4.5 4.5 0 0 0-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437 1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008Z"/>' ),
					array( 'label' => __( 'Trading', 'nomad-core' ),                'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M8.25 18.75a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m3 0h6m-9 0H3.375a1.125 1.125 0 0 1-1.125-1.125V14.25m17.25 4.5a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m3 0h1.125c.621 0 1.129-.504 1.09-1.124a17.902 17.902 0 0 0-3.213-9.193 2.056 2.056 0 0 0-1.58-.86H14.25M16.5 18.75h-2.25m0-11.177v-.958c0-.568-.422-1.048-.987-1.106a48.554 48.554 0 0 0-10.026 0 1.106 1.106 0 0 0-.987 1.106v7.635m12-6.677v6.677m0 4.5v-4.5m0 0h-12"/>' ),
					array( 'label' => __( 'Hospitality', 'nomad-core' ),            'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25"/>' ),
					array( 'label' => __( 'Healthcare', 'nomad-core' ),             'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z"/>' ),
					array( 'label' => __( 'Education', 'nomad-core' ),              'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.438 60.438 0 0 0-.491 6.347A48.62 48.62 0 0 1 12 20.904a48.62 48.62 0 0 1 8.232-4.41 60.46 60.46 0 0 0-.491-6.347m-15.482 0a50.636 50.636 0 0 0-2.658-.813A59.906 59.906 0 0 1 12 3.493a59.903 59.903 0 0 1 10.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.717 50.717 0 0 1 12 13.489a50.702 50.702 0 0 1 3.741-3.342M6.75 15a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Zm0 0v-3.675A55.378 55.378 0 0 1 12 8.443m-7.007 11.55A5.981 5.981 0 0 0 6.75 15.75v-1.5"/>' ),
					array( 'label' => __( 'Technology', 'nomad-core' ),             'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M9 17.25v1.007a3 3 0 0 1-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0 1 15 18.257V17.25m6-12V15a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 15V5.25m18 0A2.25 2.25 0 0 0 18.75 3H5.25A2.25 2.25 0 0 0 3 5.25m18 0H3"/>' ),
				);
				foreach ( $industries as $industry ) :
				?>
				<a href="<?php echo esc_url( home_url( '/industries' ) ); ?>"
				   class="group border border-neutral-200 rounded-xl p-5 flex flex-col items-center gap-3 text-center hover:border-gold hover:bg-gold-subtle transition-colors duration-200">
					<div class="w-10 h-10 rounded-lg bg-neutral-100 flex items-center justify-center group-hover:bg-gold/10 transition-colors duration-200" aria-hidden="true">
						<svg class="w-5 h-5 text-neutral-500 group-hover:text-gold transition-colors duration-200" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
							<?php echo $industry['icon']; ?>
						</svg>
					</div>
					<span class="text-xs font-medium text-neutral-600 group-hover:text-charcoal transition-colors duration-200 leading-tight">
						<?php echo esc_html( $industry['label'] ); ?>
					</span>
				</a>
				<?php endforeach; ?>

			</div>

			<div class="text-center mt-10">
				<a href="<?php echo esc_url( home_url( '/industries' ) ); ?>" class="btn-outline">
					<?php esc_html_e( 'View all industries', 'nomad-core' ); ?>
				</a>
			</div>

		</div>
	</section>

	<!-- ═══════════════════════════════════════════
	     CTA
	     ═══════════════════════════════════════════ -->
	<section class="bg-charcoal py-20 lg:py-28">
		<div class="container-site">
			<div class="max-w-3xl mx-auto text-center">

				<p class="section-label mb-4">
					<?php esc_html_e( 'Ready to work together?', 'nomad-core' ); ?>
				</p>
				<h2 class="text-3xl lg:text-4xl font-bold text-white tracking-tight mb-6">
					<?php esc_html_e( 'Let\'s talk about your business.', 'nomad-core' ); ?>
				</h2>
				<p class="text-neutral-400 text-lg leading-relaxed mb-10">
					<?php esc_html_e( 'Book a no-obligation call with our team. We\'ll review your situation and show you where we can add real value.', 'nomad-core' ); ?>
				</p>

				<div class="flex flex-wrap items-center justify-center gap-4">
					<a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn-gold">
						<?php esc_html_e( 'Book a call', 'nomad-core' ); ?>
					</a>
					<a href="tel:+97142211102" class="btn-outline-white">
						+971 4 221 1102
					</a>
				</div>

				<p class="text-neutral-500 text-xs mt-8">
					<?php esc_html_e( 'Makateb Building, Office #310, Deira, Dubai, UAE', 'nomad-core' ); ?>
				</p>

			</div>
		</div>
	</section>

</main>
<?php do_action( 'nomad_after_main' ); ?>

<?php get_footer(); ?>
