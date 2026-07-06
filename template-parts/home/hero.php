<?php
/**
 * Homepage — Hero section.
 * Reference: /reference/hero.png
 *
 * Layout: full-width bg image, left-gradient overlay, text bottom-left,
 * green services ticker strip at the bottom edge.
 *
 * @package NomadCore
 */

$hero_img = content_url( '/uploads/2026/07/Hero-image.png' );
?>

<!-- Hero -->
<section class="relative overflow-hidden bg-navy-dark"
         style="background-image: url('<?php echo esc_url( $hero_img ); ?>'); background-size: cover; background-position: center right;">

	<!-- Left-side gradient overlay for text legibility -->
	<div class="absolute inset-0 bg-gradient-to-r from-black/80 via-black/50 to-transparent" aria-hidden="true"></div>

	<!-- Hero content — bottom-left anchored -->
	<div class="relative flex flex-col justify-end min-h-[75vh] lg:min-h-[80vh]">
		<div class="container-site pb-12 lg:pb-16 pt-28">
			<div class="max-w-2xl">

				<h1 class="font-display text-5xl sm:text-6xl lg:text-[72px] font-bold text-white uppercase leading-[0.95] tracking-tight mb-5"
				    data-animate>
					<?php esc_html_e( '200K in client savings through precise auditing.', 'nomad-core' ); ?>
				</h1>

				<p class="text-sm lg:text-base text-white/70 leading-relaxed max-w-xl mb-5"
				   data-animate data-animate-delay="1">
					<?php esc_html_e( 'We help businesses reduce costs through a suite of financial services, including accounting, bookkeeping, company formation, trademark registration, management consulting, feasibility studies, and corporate finance.', 'nomad-core' ); ?>
				</p>

				<div class="flex flex-wrap items-center gap-5 mb-6" data-animate data-animate-delay="2">
					<a href="mailto:faris@farisco.ae"
					   class="text-xs text-white/60 hover:text-white transition-colors duration-150">
						faris@farisco.ae
					</a>
					<a href="tel:+97142211102"
					   class="text-xs text-white/60 hover:text-white transition-colors duration-150">
						+971 4 221 1102
					</a>
				</div>

				<div data-animate data-animate-delay="3">
					<a href="<?php echo esc_url( home_url( '/contact' ) ); ?>"
					   class="btn-gold uppercase tracking-widest text-xs">
						<?php esc_html_e( 'Book a call', 'nomad-core' ); ?>
					</a>
				</div>

			</div>
		</div>

		<!-- Services ticker strip -->
		<div class="relative bg-green">
			<div class="container-site py-3">
				<ul class="flex flex-wrap items-center gap-x-6 gap-y-1 text-[11px] font-medium text-white/90 uppercase tracking-wider">
					<?php
					$strip_services = array(
						__( 'Auditing Services', 'nomad-core' ),
						__( 'Accounting & Bookkeeping', 'nomad-core' ),
						__( 'Company Formation & Liquidation', 'nomad-core' ),
						__( 'Business Advisory', 'nomad-core' ),
						__( 'Litigation & Arbitration', 'nomad-core' ),
						__( 'VAT Consulting & Filing', 'nomad-core' ),
						__( 'Strategic Planning', 'nomad-core' ),
						__( 'Corporate Governance & Risk', 'nomad-core' ),
						__( 'Court Expertise', 'nomad-core' ),
						__( 'Trademark Registration', 'nomad-core' ),
					);
					foreach ( $strip_services as $i => $svc ) :
					?>
					<li class="flex items-center gap-x-6">
						<a href="<?php echo esc_url( home_url( '/services' ) ); ?>"
						   class="hover:text-white transition-colors duration-150 whitespace-nowrap">
							<?php echo esc_html( $svc ); ?>
						</a>
						<?php if ( $i < count( $strip_services ) - 1 ) : ?>
						<span class="text-white/30" aria-hidden="true">·</span>
						<?php endif; ?>
					</li>
					<?php endforeach; ?>
				</ul>
			</div>
		</div>

	</div>
</section>
