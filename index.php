<?php
/**
 * Fallback template — WordPress requires this file.
 *
 * @package NomadCore
 */

get_header();
?>

<?php do_action( 'nomad_before_main' ); ?>
<main id="main">
	<?php
	if ( have_posts() ) :
		while ( have_posts() ) :
			the_post();
			echo '<h2>' . esc_html( get_the_title() ) . '</h2>';
			the_excerpt();
		endwhile;
	else :
		?>
		<p><?php esc_html_e( 'No content found.', 'nomad-core' ); ?></p>
		<?php
	endif;
	?>
</main>
<?php do_action( 'nomad_after_main' ); ?>

<?php
get_footer();
