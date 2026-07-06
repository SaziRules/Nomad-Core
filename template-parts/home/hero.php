<?php
/**
 * Homepage — Hero section.
 *
 * @package NomadCore
 */

$hero_img = content_url( '/uploads/2026/07/Hero-image.png' );
?>

<!-- Hero -->
<section class="relative min-h-screen flex items-center overflow-hidden bg-navy-dark"
         style="background-image: url('<?php echo esc_url( $hero_img ); ?>'); background-size: cover; background-position: center;">

	<!-- Overlay -->
	<div class="absolute inset-0 bg-navy-dark/65" aria-hidden="true"></div>

	<div class="container-site relative w-full pt-[72px] pb-20 lg:pt-24 lg:pb-28">
		<div class="max-w-3xl">

			<p class="section-label text-green-light mb-5" data-animate>
				<?php esc_html_e( 'Audit · Advisory · Compliance · Dubai, UAE', 'nomad-core' ); ?>
			</p>

			<h1 class="font-display text-5xl sm:text-6xl lg:text-[80px] font-bold text-white leading-[0.95] tracking-tight uppercase mb-8"
			    data-animate data-animate-delay="1">
				<?php esc_html_e( '200K in client savings through precise auditing.', 'nomad-core' ); ?>
			</h1>

			<p class="text-base lg:text-lg text-white/70 leading-relaxed max-w-2xl mb-10"
			   data-animate data-animate-delay="2">
				<?php esc_html_e( 'We help businesses reduce costs through a suite of financial services, including accounting, bookkeeping, company formation, trademark registration, management consulting, feasibility studies, and corporate finance.', 'nomad-core' ); ?>
			</p>

			<div class="flex flex-wrap items-center gap-4 mb-12" data-animate data-animate-delay="3">
				<a href="<?php echo esc_url( home_url( '/contact' ) ); ?>"
				   class="btn-gold uppercase tracking-wider text-xs">
					<?php esc_html_e( 'Book a call', 'nomad-core' ); ?>
				</a>
				<a href="<?php echo esc_url( home_url( '/services' ) ); ?>"
				   class="btn-outline-white text-xs uppercase tracking-wider">
					<?php esc_html_e( 'Our services', 'nomad-core' ); ?>
				</a>
			</div>

			<div class="flex flex-wrap items-center gap-6 text-sm text-white/50"
			     data-animate data-animate-delay="4">
				<a href="mailto:faris@farisco.ae"
				   class="flex items-center gap-2 hover:text-white transition-colors duration-150">
					<svg class="w-4 h-4 flex-shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true">
						<path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75"/>
					</svg>
					faris@farisco.ae
				</a>
				<a href="tel:+97142211102"
				   class="flex items-center gap-2 hover:text-white transition-colors duration-150">
					<svg class="w-4 h-4 flex-shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true">
						<path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z"/>
					</svg>
					+971 4 221 1102
				</a>
			</div>

		</div>
	</div>

	<!-- Scroll indicator -->
	<div class="absolute bottom-8 left-1/2 -translate-x-1/2 flex flex-col items-center gap-1.5 text-white/30"
	     aria-hidden="true">
		<span class="text-[10px] tracking-widest uppercase">Scroll</span>
		<svg class="w-4 h-4 animate-bounce" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
			<path stroke-linecap="round" stroke-linejoin="round" d="M19.5 13.5 12 21m0 0-7.5-7.5M12 21V3"/>
		</svg>
	</div>

</section>
