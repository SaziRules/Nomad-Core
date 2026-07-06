<?php
/**
 * Homepage — Registered with / Partner logos.
 *
 * @package NomadCore
 */

$uploads = content_url( '/uploads/2026/07/' );
?>

<!-- Partners / Registered with -->
<section class="bg-navy py-16 lg:py-20">
	<div class="container-site">

		<div class="text-center mb-10" data-animate>
			<p class="text-xs font-semibold tracking-[0.15em] uppercase text-white/40 mb-1">
				<?php esc_html_e( 'Registered with', 'nomad-core' ); ?>
			</p>
			<p class="text-white/60 text-sm">
				<?php esc_html_e( 'Proven results, recognised standards.', 'nomad-core' ); ?>
			</p>
		</div>

		<div class="flex flex-wrap items-center justify-center gap-8 lg:gap-12">

			<!-- PrimeGlobal -->
			<div class="flex-shrink-0 opacity-60 hover:opacity-100 transition-opacity duration-200"
			     data-animate data-animate-delay="1">
				<img src="<?php echo esc_url( $uploads . 'XSbK7MXHCLP8BHC8j2Zqk1XwJRE.png' ); ?>"
				     alt="<?php esc_attr_e( 'PrimeGlobal', 'nomad-core' ); ?>"
				     width="140" height="14"
				     class="h-[14px] w-auto brightness-0 invert"
				     loading="lazy"
				     decoding="async">
			</div>

			<?php
			$partners = array(
				array( 'file' => '7kTZXYD0mJZqbInwBkHLAn7jWV4.avif', 'alt' => '' ),
				array( 'file' => 'Fad6E8ICFEYurqLo5HCeHDSV4m8.webp', 'alt' => '' ),
				array( 'file' => 'dOOvxis8VE1qTLvkJp7Rt3UrYdw.avif', 'alt' => '' ),
				array( 'file' => 'MSeRlcB0mFrG3x2UG976O2tm5o.avif',  'alt' => '' ),
				array( 'file' => 'y4FslJr9GouP98QgJVImnTd7Cw.avif',  'alt' => '' ),
				array( 'file' => 'Y1yxgU33jBiuupkFi3AMnmpjPg.webp',  'alt' => '' ),
			);
			foreach ( $partners as $i => $partner ) :
				$delay = $i + 2;
			?>
			<div class="flex-shrink-0 opacity-60 hover:opacity-100 transition-opacity duration-200"
			     data-animate data-animate-delay="<?php echo esc_attr( min( $delay, 6 ) ); ?>">
				<img src="<?php echo esc_url( $uploads . $partner['file'] ); ?>"
				     alt="<?php echo esc_attr( $partner['alt'] ); ?>"
				     class="h-8 w-auto object-contain brightness-0 invert"
				     loading="lazy"
				     decoding="async">
			</div>
			<?php endforeach; ?>

		</div>

	</div>
</section>
