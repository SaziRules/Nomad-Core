<?php
/**
 * Homepage — Mid-page CTA ("Backed by decades").
 *
 * @package NomadCore
 */

$bg_img = content_url( '/uploads/2026/07/Backed-by-decades.png' );
?>

<!-- CTA mid -->
<section class="relative bg-navy-dark overflow-hidden py-20 lg:py-28">

	<!-- Background image -->
	<div class="absolute inset-0 opacity-15 pointer-events-none" aria-hidden="true">
		<img src="<?php echo esc_url( $bg_img ); ?>"
		     alt=""
		     class="w-full h-full object-cover"
		     loading="lazy"
		     decoding="async">
	</div>

	<div class="container-site relative">
		<div class="max-w-2xl">

			<p class="section-label text-green-light mb-4" data-animate>
				<?php esc_html_e( 'Why Faris & Co.', 'nomad-core' ); ?>
			</p>
			<h2 class="font-display text-4xl sm:text-5xl lg:text-6xl font-bold text-white uppercase leading-tight tracking-tight mb-6"
			    data-animate data-animate-delay="1">
				<?php esc_html_e( 'Backed by decades of experience, your business is in trusted hands.', 'nomad-core' ); ?>
			</h2>
			<p class="text-white/60 text-base leading-relaxed mb-8"
			   data-animate data-animate-delay="2">
				<?php esc_html_e( 'Find out how our expertise can support your business today.', 'nomad-core' ); ?>
			</p>

			<div class="flex flex-wrap items-center gap-4" data-animate data-animate-delay="3">
				<a href="<?php echo esc_url( home_url( '/contact' ) ); ?>"
				   class="btn-gold uppercase tracking-wider text-xs">
					<?php esc_html_e( 'Book a call', 'nomad-core' ); ?>
				</a>
				<div class="flex items-center gap-4 text-sm text-white/50">
					<a href="mailto:faris@farisco.ae" class="hover:text-white transition-colors duration-150">
						faris@farisco.ae
					</a>
					<a href="tel:+97142211102" class="hover:text-white transition-colors duration-150">
						+971 4 221 1102
					</a>
				</div>
			</div>

		</div>
	</div>
</section>
