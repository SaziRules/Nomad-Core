<?php
/**
 * Front page template — Faris & Co.
 *
 * Section order follows the Framer source of truth:
 * Hero → About → Services → CTA Mid → Testimonials → Industries → Partners → CTA Footer
 *
 * @package NomadCore
 */

get_header();
?>

<?php do_action( 'nomad_before_main' ); ?>
<main id="main">

	<?php get_template_part( 'template-parts/home/hero' ); ?>
	<?php get_template_part( 'template-parts/home/about' ); ?>
	<?php get_template_part( 'template-parts/home/services' ); ?>
	<?php get_template_part( 'template-parts/home/cta-mid' ); ?>
	<?php get_template_part( 'template-parts/home/testimonials' ); ?>
	<?php get_template_part( 'template-parts/home/industries' ); ?>
	<?php get_template_part( 'template-parts/home/partners' ); ?>

	<!-- Final CTA -->
	<section class="bg-navy-dark py-20 lg:py-28">
		<div class="container-site">
			<div class="max-w-2xl mx-auto text-center">
				<p class="text-xs font-semibold tracking-[0.15em] uppercase text-green mb-4" data-animate>
					<?php esc_html_e( 'Ready to work together?', 'nomad-core' ); ?>
				</p>
				<h2 class="font-display text-4xl sm:text-5xl lg:text-6xl font-bold text-white uppercase tracking-tight leading-tight mb-6"
				    data-animate data-animate-delay="1">
					<?php esc_html_e( "Let's talk about your business.", 'nomad-core' ); ?>
				</h2>
				<p class="text-white/60 text-base leading-relaxed mb-10"
				   data-animate data-animate-delay="2">
					<?php esc_html_e( "Book a no-obligation call with our team. We'll review your situation and show you exactly where we can add value.", 'nomad-core' ); ?>
				</p>
				<div class="flex flex-wrap items-center justify-center gap-4"
				     data-animate data-animate-delay="3">
					<a href="<?php echo esc_url( home_url( '/contact' ) ); ?>"
					   class="btn-gold uppercase tracking-wider text-xs">
						<?php esc_html_e( 'Book a call', 'nomad-core' ); ?>
					</a>
					<a href="tel:+97142211102" class="btn-outline-white text-xs uppercase tracking-wider">
						+971 4 221 1102
					</a>
				</div>
				<p class="text-white/30 text-xs mt-8" data-animate data-animate-delay="4">
					<?php esc_html_e( 'Makateb Building, Office #310, Deira, Dubai, UAE', 'nomad-core' ); ?>
				</p>
			</div>
		</div>
	</section>

</main>
<?php do_action( 'nomad_after_main' ); ?>

<?php get_footer(); ?>
