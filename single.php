<?php
/**
 * Single post template.
 *
 * @package NomadCore
 */

get_header();
?>

<?php do_action( 'nomad_before_main' ); ?>
<main id="main">
	<?php
	while ( have_posts() ) :
		the_post();
		?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<h1><?php echo esc_html( get_the_title() ); ?></h1>
			<div class="entry-content"><?php the_content(); ?></div>
		</article>
		<?php
	endwhile;
	?>
</main>
<?php do_action( 'nomad_after_main' ); ?>

<?php
get_footer();
