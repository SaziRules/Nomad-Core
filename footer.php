<?php do_action( 'nomad_before_footer' ); ?>

<footer id="site-footer">
	<div>
		<p>
			&copy; <?php echo esc_html( gmdate( 'Y' ) ); ?>
			<?php echo esc_html( get_bloginfo( 'name' ) ); ?>
		</p>
	</div>
</footer>

<?php do_action( 'nomad_after_footer' ); ?>

<?php wp_footer(); ?>
</body>
</html>
