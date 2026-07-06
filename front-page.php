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
	<p><?php esc_html_e( 'Nomad Core Ready', 'nomad-core' ); ?></p>
</main>
<?php do_action( 'nomad_after_main' ); ?>

<?php
get_footer();
