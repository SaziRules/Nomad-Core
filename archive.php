<?php
/**
 * Archive template.
 *
 * @package NomadCore
 */

get_header();
?>

<?php do_action( 'nomad_before_main' ); ?>
<main id="main">
	<?php if ( have_posts() ) : ?>
		<header>
			<?php the_archive_title( '<h1>', '</h1>' ); ?>
		</header>

		<?php
		while ( have_posts() ) :
			the_post();
			?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<h2>
					<a href="<?php the_permalink(); ?>"><?php echo esc_html( get_the_title() ); ?></a>
				</h2>
				<?php the_excerpt(); ?>
			</article>
			<?php
		endwhile;

		the_posts_navigation();
	else :
		?>
		<p><?php esc_html_e( 'No posts found.', 'nomad-core' ); ?></p>
		<?php
	endif;
	?>
</main>
<?php do_action( 'nomad_after_main' ); ?>

<?php
get_footer();
