<?php
/**
 * The Footer for the theme
 */
?>

<!-- FOOTER start -->

		<?php
			$footerPath = TEMPLATEPATH . '/includes/include-footer.php';

			if ( file_exists( $footerPath ) ) {
				include( $footerPath );
			}
		?>

<!-- FOOTER end -->

<!-- SCRIPTS start -->
		<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/assets/js/scripts.min.js"></script>

		<?php wp_footer(); ?>
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
<!-- SCRIPTS end -->

	</body>
</html>