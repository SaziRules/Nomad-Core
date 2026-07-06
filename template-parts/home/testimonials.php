<?php
/**
 * Homepage — Testimonials section.
 *
 * @package NomadCore
 */
?>

<!-- Testimonials -->
<section class="bg-white py-20 lg:py-28">
	<div class="container-site">

		<div class="text-center mb-14">
			<p class="section-label mb-3" data-animate>
				<?php esc_html_e( 'Client stories', 'nomad-core' ); ?>
			</p>
			<h2 class="text-3xl lg:text-4xl font-bold text-charcoal tracking-tight mb-2"
			    data-animate data-animate-delay="1">
				<?php esc_html_e( 'The results speak through our clients.', 'nomad-core' ); ?>
			</h2>
			<p class="text-neutral-500 text-sm" data-animate data-animate-delay="2">
				<?php esc_html_e( 'The best accounting and audit firm in Dubai and the UAE.', 'nomad-core' ); ?>
			</p>
		</div>

		<!-- Testimonials grid -->
		<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-14">
			<?php
			$testimonials = array(
				array(
					'quote' => __( 'I have only good things to say about their services! Truly professional, knowledgeable, and responsive at every step.', 'nomad-core' ),
					'name'  => 'M. Binhumaid',
					'role'  => __( 'Business Owner · Dubai', 'nomad-core' ),
				),
				array(
					'quote' => __( 'Amazing attention to detail — their team really helped me regulate the expenses of my business and brought real clarity to my finances.', 'nomad-core' ),
					'name'  => 'Jameela Mayet',
					'role'  => __( 'SME Founder · UAE', 'nomad-core' ),
				),
				array(
					'quote' => __( 'Faris & Co provided us with exceptional audit and advisory services. Their team demonstrated strong technical expertise, attention to detail, and clear communication throughout the engagement.', 'nomad-core' ),
					'name'  => 'Esra Khalid',
					'role'  => __( 'CFO · Real Estate Developer, Dubai', 'nomad-core' ),
				),
				array(
					'quote' => __( 'We had a very smooth experience working with Faris & Co. Their responsiveness and ability to simplify complex financial matters made a real difference for our business.', 'nomad-core' ),
					'name'  => 'Ashraf Abbas',
					'role'  => __( 'Managing Director · Trading Co., Deira', 'nomad-core' ),
				),
				array(
					'quote' => __( 'Partnering with Faris & Co has been a great decision. Their knowledgeable team supported us with practical insights and ensured full compliance with regulatory requirements.', 'nomad-core' ),
					'name'  => 'Youssef Maali',
					'role'  => __( 'General Counsel · Hospitality Group, Abu Dhabi', 'nomad-core' ),
				),
			);

			foreach ( $testimonials as $i => $t ) :
				$delay = ( $i % 3 ) + 1;
			?>
			<div class="bg-neutral-50 rounded-2xl p-7 flex flex-col"
			     data-animate data-animate-delay="<?php echo esc_attr( $delay ); ?>">
				<!-- Stars -->
				<div class="flex gap-1 mb-4" aria-label="<?php esc_attr_e( '5 out of 5 stars', 'nomad-core' ); ?>">
					<?php for ( $s = 0; $s < 5; $s++ ) : ?>
					<svg class="w-4 h-4 text-green" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
						<path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 0 0 .95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 0 0-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 0 0-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 0 0-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 0 0 .951-.69l1.07-3.292Z"/>
					</svg>
					<?php endfor; ?>
				</div>
				<blockquote class="text-neutral-600 text-sm leading-relaxed flex-1 mb-5">
					&ldquo;<?php echo esc_html( $t['quote'] ); ?>&rdquo;
				</blockquote>
				<footer class="border-t border-neutral-200 pt-4">
					<p class="font-semibold text-charcoal text-sm"><?php echo esc_html( $t['name'] ); ?></p>
					<p class="text-xs text-neutral-400 mt-0.5"><?php echo esc_html( $t['role'] ); ?></p>
				</footer>
			</div>
			<?php endforeach; ?>
		</div>

		<!-- Social proof counter -->
		<div class="text-center" data-animate>
			<p class="text-4xl font-bold text-navy mb-1">100+</p>
			<p class="text-sm text-neutral-500"><?php esc_html_e( 'Satisfied clients across the UAE', 'nomad-core' ); ?></p>
		</div>

	</div>
</section>
