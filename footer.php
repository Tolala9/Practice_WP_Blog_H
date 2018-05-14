<footer class="site-footer">
	<!-- Footer Widgets -->
		<div class="footer-widgets">
			<?php dynamic_sidebar('footer_area_1') ?>
		</div>

	<nav class="site-nav">
		<?php 
			
		$args = array(
			'theme_location' => 'footer'
		);

		 ?>

		<?php wp_nav_menu( $args); ?>
	</nav>
	
	<p><?php bloginfo('name'); ?> - &copy; <?php echo date('Y'); ?></p>

</footer>

</div> <!-- Container -->

<?php wp_footer(); ?>


</body>
</html>