<?php
/**
 * Homepage — About section.
 *
 * @package NomadCore
 */

$founder_img = content_url( '/uploads/2026/07/founder-image.png' );
?>

<!-- About -->
<section class="bg-white py-20 lg:py-28">
	<div class="container-site">
		<div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">

			<!-- Text -->
			<div>
				<p class="section-label mb-4" data-animate>
					<?php esc_html_e( 'Who we are', 'nomad-core' ); ?>
				</p>
				<h2 class="text-3xl lg:text-4xl font-bold text-charcoal tracking-tight leading-tight mb-6"
				    data-animate data-animate-delay="1">
					<?php esc_html_e( 'Over 30 years of experience serving clients across the UAE.', 'nomad-core' ); ?>
				</h2>
				<div class="text-neutral-500 leading-relaxed space-y-4 mb-10"
				     data-animate data-animate-delay="2">
					<p>
						<?php esc_html_e( 'Founded in 1995 in Dubai, United Arab Emirates, Faris & Co. has grown into a trusted advisory firm serving clients across multiple sectors. Our expertise spans audit and assurance, accounting and bookkeeping, company formation, trademark registration, management consulting, feasibility studies, and corporate finance.', 'nomad-core' ); ?>
					</p>
					<p>
						<?php esc_html_e( 'We take pride in the long-standing trust we have earned, built on a foundation of professionalism, precision, and client-focused service. Our team is dedicated to delivering insight-driven solutions that support informed decision-making. We prioritise clarity, accuracy, and efficiency in every engagement.', 'nomad-core' ); ?>
					</p>
				</div>

				<!-- Stats -->
				<div class="grid grid-cols-3 gap-8 mb-10" data-animate data-animate-delay="3">
					<?php
					$stats = array(
						array( 'value' => '30+',  'label' => __( 'Years of experience', 'nomad-core' ) ),
						array( 'value' => '100+', 'label' => __( 'Satisfied clients', 'nomad-core' ) ),
						array( 'value' => '100%', 'label' => __( 'Success rate', 'nomad-core' ) ),
					);
					foreach ( $stats as $stat ) :
					?>
					<div>
						<p class="text-3xl lg:text-4xl font-bold text-navy mb-1">
							<?php echo esc_html( $stat['value'] ); ?>
						</p>
						<p class="text-xs text-neutral-500 leading-snug">
							<?php echo esc_html( $stat['label'] ); ?>
						</p>
					</div>
					<?php endforeach; ?>
				</div>

				<div class="flex flex-wrap gap-4" data-animate data-animate-delay="4">
					<a href="<?php echo esc_url( home_url( '/about' ) ); ?>" class="btn-gold">
						<?php esc_html_e( 'Learn more', 'nomad-core' ); ?>
					</a>
					<a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn-outline">
						<?php esc_html_e( 'Get in touch', 'nomad-core' ); ?>
					</a>
				</div>
			</div>

			<!-- Image -->
			<div class="relative" data-animate data-animate-delay="2">
				<div class="rounded-2xl overflow-hidden bg-neutral-100 aspect-[3/4] max-w-sm mx-auto lg:mx-0">
					<img src="<?php echo esc_url( $founder_img ); ?>"
					     alt="<?php esc_attr_e( 'Faris & Co. founder', 'nomad-core' ); ?>"
					     class="w-full h-full object-cover"
					     loading="lazy"
					     decoding="async">
				</div>
				<!-- Accent card -->
				<div class="absolute -bottom-6 -left-6 bg-navy text-white rounded-xl p-5 shadow-xl hidden lg:block">
					<p class="text-2xl font-bold">1995</p>
					<p class="text-xs text-white/60 mt-0.5"><?php esc_html_e( 'Established', 'nomad-core' ); ?></p>
				</div>
			</div>

		</div>
	</div>
</section>
