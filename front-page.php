<?php
/**
 * Front page template.
 *
 * @package NomadCore
 */

get_header();
?>

<?php do_action( 'nomad_before_main' ); ?>
<main id="main">

	<!-- Hero -->
	<section class="min-h-screen flex items-center justify-center bg-neutral-950 px-6 py-24">
		<div class="text-center max-w-3xl mx-auto">
			<p class="text-xs font-semibold tracking-widest uppercase text-neutral-500 mb-6">
				<?php echo esc_html( get_bloginfo( 'name' ) ); ?>
			</p>
			<h1 class="text-5xl lg:text-7xl font-bold text-white leading-tight mb-6">
				<?php esc_html_e( 'Built to perform.', 'nomad-core' ); ?><br>
				<?php esc_html_e( 'Designed to last.', 'nomad-core' ); ?>
			</h1>
			<?php if ( get_bloginfo( 'description' ) ) : ?>
				<p class="text-lg text-neutral-400 mb-10 max-w-xl mx-auto">
					<?php echo esc_html( get_bloginfo( 'description' ) ); ?>
				</p>
			<?php endif; ?>
			<div class="flex flex-wrap gap-4 justify-center">
				<a href="<?php echo esc_url( get_permalink( get_option( 'page_for_posts' ) ) ); ?>"
				   class="inline-block bg-white text-neutral-950 font-semibold px-8 py-4 rounded-full hover:bg-neutral-200 transition-colors duration-150">
					<?php esc_html_e( 'Explore', 'nomad-core' ); ?>
				</a>
				<a href="<?php echo esc_url( home_url( '/contact' ) ); ?>"
				   class="inline-block border border-neutral-700 text-white font-semibold px-8 py-4 rounded-full hover:border-neutral-500 transition-colors duration-150">
					<?php esc_html_e( 'Get in touch', 'nomad-core' ); ?>
				</a>
			</div>
		</div>
	</section>

	<!-- Features -->
	<section class="py-24 px-6 bg-white">
		<div class="max-w-6xl mx-auto">
			<div class="grid grid-cols-1 md:grid-cols-3 gap-12">

				<div>
					<div class="w-12 h-12 bg-neutral-950 rounded-xl mb-6 flex items-center justify-center" aria-hidden="true">
						<svg class="w-6 h-6 text-white" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M17.25 6.75 22.5 12l-5.25 5.25m-10.5 0L1.5 12l5.25-5.25m7.5-3-4.5 16.5"/></svg>
					</div>
					<h3 class="text-xl font-semibold text-neutral-950 mb-3">
						<?php esc_html_e( 'Code-First', 'nomad-core' ); ?>
					</h3>
					<p class="text-neutral-500 leading-relaxed">
						<?php esc_html_e( 'No page builders. Clean PHP templates, Tailwind CSS v4, and Vanilla JS ES Modules — nothing more.', 'nomad-core' ); ?>
					</p>
				</div>

				<div>
					<div class="w-12 h-12 bg-neutral-950 rounded-xl mb-6 flex items-center justify-center" aria-hidden="true">
						<svg class="w-6 h-6 text-white" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z"/></svg>
					</div>
					<h3 class="text-xl font-semibold text-neutral-950 mb-3">
						<?php esc_html_e( 'Performance-First', 'nomad-core' ); ?>
					</h3>
					<p class="text-neutral-500 leading-relaxed">
						<?php esc_html_e( 'Minimal dependencies, optimised asset loading, and Core Web Vitals as the benchmark on every project.', 'nomad-core' ); ?>
					</p>
				</div>

				<div>
					<div class="w-12 h-12 bg-neutral-950 rounded-xl mb-6 flex items-center justify-center" aria-hidden="true">
						<svg class="w-6 h-6 text-white" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 0 1-1.043 3.296 3.745 3.745 0 0 1-3.296 1.043A3.745 3.745 0 0 1 12 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 0 1-3.296-1.043 3.745 3.745 0 0 1-1.043-3.296A3.745 3.745 0 0 1 3 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 0 1 1.043-3.296 3.746 3.746 0 0 1 3.296-1.043A3.746 3.746 0 0 1 12 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 0 1 3.296 1.043 3.746 3.746 0 0 1 1.043 3.296A3.745 3.745 0 0 1 21 12z"/></svg>
					</div>
					<h3 class="text-xl font-semibold text-neutral-950 mb-3">
						<?php esc_html_e( 'Accessibility-First', 'nomad-core' ); ?>
					</h3>
					<p class="text-neutral-500 leading-relaxed">
						<?php esc_html_e( 'WCAG 2.1 AA compliance built into every component from the ground up — never bolted on after.', 'nomad-core' ); ?>
					</p>
				</div>

			</div>
		</div>
	</section>

</main>
<?php do_action( 'nomad_after_main' ); ?>

<?php
get_footer();
