<?php
/**
 * Homepage — Hero section.
 * Reference: /reference/what-I-want.png
 *
 * @package NomadCore
 */

$hero_img = content_url( '/uploads/2026/07/Hero-image.png' );

$marquee_items = array(
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
?>

<!-- Hero -->
<section class="relative h-screen flex flex-col justify-end bg-navy-dark"
         style="background-image: url('<?php echo esc_url( $hero_img ); ?>'); background-size: cover; background-position: center right;">

	<!-- Gradient: lighter, gradual — city still visible on left -->
	<div class="absolute inset-0 z-0 pointer-events-none"
	     style="background: linear-gradient(to right, rgba(0,0,0,0.65) 0%, rgba(0,0,0,0.35) 40%, rgba(0,0,0,0) 65%);"
	     aria-hidden="true"></div>

	<!-- Content — no top padding, sits naturally above marquee -->
	<div class="relative z-10 container-site pb-6 lg:pb-8">
		<div class="max-w-[640px]">

			<h1 class="hero-animate hero-animate-1 font-display font-normal text-[42px] sm:text-[60px] lg:text-[85px] text-white uppercase mb-4"
			    style="line-height: 68px; font-family: 'Conduit ITC', 'Barlow Condensed', 'Arial Narrow', sans-serif;">
				<?php esc_html_e( '200K in client savings through precise auditing.', 'nomad-core' ); ?>
			</h1>

			<p class="hero-animate hero-animate-2 text-[13px] text-white/70 leading-relaxed max-w-lg mb-4"
			   style="letter-spacing: -0.02em;">
				<?php esc_html_e( 'We help businesses reduce costs through a suite of financial services, including accounting, bookkeeping, company formation, trademark registration, management consulting, feasibility studies, and corporate finance.', 'nomad-core' ); ?>
			</p>

			<div class="hero-animate hero-animate-3 flex flex-wrap items-center gap-5 mb-5"
			     style="font-size: 10px; letter-spacing: -0.02em; color: rgba(255,255,255,0.6);">
				<a href="mailto:faris@farisco.ae" class="hover:text-white transition-colors duration-150">
					faris@farisco.ae
				</a>
				<a href="tel:+97142211102" class="hover:text-white transition-colors duration-150">
					+971 4 221 1102
				</a>
			</div>

			<div class="hero-animate hero-animate-4">
				<a href="<?php echo esc_url( home_url( '/contact' ) ); ?>"
				   class="btn-gold uppercase tracking-widest"
				   style="font-size: 10px; padding: 8px 20px;">
					<?php esc_html_e( 'Book a call', 'nomad-core' ); ?>
				</a>
			</div>

		</div>
	</div>

	<!-- Infinite marquee strip -->
	<div class="relative z-10 bg-green overflow-hidden" aria-label="<?php esc_attr_e( 'Services', 'nomad-core' ); ?>">
		<div class="marquee-track flex items-center py-3 w-max">
			<?php for ( $pass = 0; $pass < 2; $pass++ ) : ?>
				<?php foreach ( $marquee_items as $item ) : ?>
				<span class="flex items-center gap-4 text-white uppercase whitespace-nowrap px-5"
				      style="font-size: 10px; letter-spacing: -0.02em; line-height: 1em; font-weight: 500;">
					<?php echo esc_html( $item ); ?>
					<span class="text-white/40" style="font-size: 6px;" aria-hidden="true">&#9632;</span>
				</span>
				<?php endforeach; ?>
			<?php endfor; ?>
		</div>
	</div>

</section>
