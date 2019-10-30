<!-- Footer -->
<footer id="footer">
	<div class="inner">
		<div class="content">
			<?php if (is_active_sidebar("footer_top")) {
				dynamic_sidebar("footer_top");
			} ?>
		</div>

		<?php
		if (is_active_sidebar("footer_bottom")) {
			dynamic_sidebar("footer_bottom");
		}
		?>

	</div>
</footer>

<!-- Scripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/browser.min.js"></script>
<script src="assets/js/breakpoints.min.js"></script>
<script src="assets/js/util.js"></script>
<script src="assets/js/main.js"></script>

<?php wp_footer(); ?>

</body>

</html>