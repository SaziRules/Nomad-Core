<?php
/**
 * Homepage — Sectors we serve.
 *
 * @package NomadCore
 */

$uploads = content_url( '/uploads/2026/07/' );
?>

<!-- Industries -->
<section class="bg-neutral-50 py-20 lg:py-28">
	<div class="container-site">

		<div class="text-center mb-14">
			<p class="section-label mb-3" data-animate>
				<?php esc_html_e( 'Sectors we serve', 'nomad-core' ); ?>
			</p>
			<h2 class="text-3xl lg:text-4xl font-bold text-charcoal tracking-tight"
			    data-animate data-animate-delay="1">
				<?php esc_html_e( 'Industry expertise across the UAE economy.', 'nomad-core' ); ?>
			</h2>
		</div>

		<?php
		$industries = array(
			array(
				'label' => __( 'Real Estate & Developers', 'nomad-core' ),
				'icon'  => $uploads . 'Real-Estate-and-Developers.png',
				'photo' => $uploads . 'real-estate.webp',
			),
			array(
				'label' => __( 'Medical Services Providers', 'nomad-core' ),
				'icon'  => $uploads . 'Medical-Services-Providers.png',
				'photo' => $uploads . '47-479982_nurses-png-1.webp',
			),
			array(
				'label' => __( 'Non-Profit Organisations', 'nomad-core' ),
				'icon'  => $uploads . 'Non-Profit-Associations-and-Foundations.png',
				'photo' => $uploads . '10-2-non-profit-download-png-thumb-1.webp',
			),
			array(
				'label' => __( 'Consumer Markets & Distribution', 'nomad-core' ),
				'icon'  => $uploads . 'Consumer-Markets-–-Manufacturers-Distributors-Wholesalers-Retailers.png',
				'photo' => $uploads . '3d-industrial-plant-isolate-on-transparency-background-png.webp',
			),
			array(
				'label' => __( 'Travel, Hotels & Restaurants', 'nomad-core' ),
				'icon'  => $uploads . 'Travel-Agencies-Hotels-and-Restaurants.png',
				'photo' => $uploads . 'travel-agency.webp',
			),
			array(
				'label' => __( 'Individuals', 'nomad-core' ),
				'icon'  => $uploads . 'Individual.png',
				'photo' => $uploads . 'Individual.png',
			),
			array(
				'label' => __( 'Brokers & Other Services', 'nomad-core' ),
				'icon'  => $uploads . 'Brokers-and-other-services.png',
				'photo' => $uploads . 'Brokers-and-other-services.png',
			),
		);
		?>

		<div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 xl:grid-cols-7 gap-4">
			<?php foreach ( $industries as $i => $industry ) :
				$delay = ( $i % 4 ) + 1;
			?>
			<a href="<?php echo esc_url( home_url( '/industries' ) ); ?>"
			   class="group bg-white border border-neutral-200 rounded-xl overflow-hidden hover:border-green hover:shadow-md transition-all duration-200"
			   data-animate data-animate-delay="<?php echo esc_attr( $delay ); ?>">
				<div class="aspect-square w-full overflow-hidden bg-neutral-100">
					<img src="<?php echo esc_url( $industry['icon'] ); ?>"
					     alt="<?php echo esc_attr( $industry['label'] ); ?>"
					     class="w-full h-full object-contain p-4 group-hover:scale-105 transition-transform duration-300"
					     loading="lazy"
					     decoding="async">
				</div>
				<div class="p-3">
					<span class="text-[11px] font-medium text-neutral-600 group-hover:text-green transition-colors duration-150 leading-tight block text-center">
						<?php echo esc_html( $industry['label'] ); ?>
					</span>
				</div>
			</a>
			<?php endforeach; ?>
		</div>

		<div class="text-center mt-10" data-animate>
			<a href="<?php echo esc_url( home_url( '/industries' ) ); ?>" class="btn-outline">
				<?php esc_html_e( 'View all industries', 'nomad-core' ); ?>
			</a>
		</div>

	</div>
</section>
