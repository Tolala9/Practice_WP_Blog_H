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

				<h2><?php the_title(); ?></h2>
				<?php the_content() ?>

			</article>


		<?php endwhile; 

	else :
		echo "<p>No content found</p>";
	endif;

		// costom query for about posts and for that pagination *dont work
	?>
	<h2>blog posts about us</h2>
	<?php

	$aboutPosts = new WP_Query(array(
		'category_name' => 'about',
		'posts_per_page' => 1,
	));

	if ($aboutPosts->have_posts()) :
		while($aboutPosts->have_posts()) :
			$aboutPosts->the_post();
				?>
				<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
				<?php
		endwhile;
	 endif;

	get_footer();

 ?>