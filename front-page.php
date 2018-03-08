<?php 

	get_header();

	if (have_posts()) :
		while (have_posts()) : the_post(); ?>

			<article class="post page">

				<!-- Sub Menu -->
				<?php  
				if (has_shidlren() OR $post->post_parent > 0) { ?>


				<nav class="site-nav children-links clearfix">

					<span class="parent-link">

						<a href="<?php echo get_the_permalink(get_top_ancestor_id()); ?>">
						<?php echo get_the_title(get_top_ancestor_id()); ?>
							
						</a></span> 

						<ul>
							<?php  
							$args = array(
								'child_of' => get_top_ancestor_id(),
								'title_li' => ''
							)
							?>

							<?php wp_list_pages($args); ?>
						</ul>

					</nav>

				<?php } ?>
				<!-- /Sub Menu -->

				<h3>custom html here</h3>
				<?php the_content() ?>

			</article>


		<?php endwhile; 

	else :
		echo "<p>No content found</p>";
	endif;



	get_footer();

 ?>