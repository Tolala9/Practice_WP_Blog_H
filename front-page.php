

<?php get_header(); ?>

<?php	if (have_posts()) :
		while (have_posts()) : the_post(); 

			the_content();

				endwhile;

				else:

				 echo '<p>No content found</p>';

				 endif; 
				


				 //Category_1 Posts Loop

			 $CatPosts = new WP_Query('cat=5&posts_per_page=1');

				if ($CatPosts->have_posts()) :
				while ($CatPosts->have_posts()) : $CatPosts->the_post(); ?>

					<h2><?php the_title(); ?></h2>

				<?php endwhile;

				else:

				 	echo '<p>No content found</p>';

				 endif; ?>
				
				



<?php	get_footer();

 ?>