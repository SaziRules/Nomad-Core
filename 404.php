<?php
/**
 * 404 template.
 *
 * @package NomadCore
 */

get_header();
?>

<?php do_action( 'nomad_before_main' ); ?>
<main id="main">
	<h1><?php esc_html_e( 'Page Not Found', 'nomad-core' ); ?></h1>
	<p><?php esc_html_e( 'The page you are looking for does not exist.', 'nomad-core' ); ?></p>
	<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
		<?php esc_html_e( 'Back to Home', 'nomad-core' ); ?>
	</a>
</main>
<?php do_action( 'nomad_after_main' ); ?>

<?php
get_footer();
