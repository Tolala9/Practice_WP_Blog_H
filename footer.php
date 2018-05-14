<footer class="site-footer">
 
	<?php if (get_theme_mod('lwp-footer-callout-display') == "Yes") { ?>

		<div class="footer-callout clearfix">
		<div class="footer-collout-image">
			<img src="<?php echo wp_get_attachment_url(get_theme_mod('lwp-footer-callout-image')); ?>" alt="">
		</div>
		<div class="footer-callout-text">
			<h2><a href="<?php echo get_permalink(get_theme_mod('lwp-footer-callout-link')); ?>"><?php echo get_theme_mod('lwp-footer-callout-headline'); ?></a></h2>
			<?php echo wpautop(get_theme_mod('lwp-footer-callout-text')) ?>
		</div>
	</div>

 <?php 	} ?>
	

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