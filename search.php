<?php 

	get_header();

	if (have_posts()) : ?>

	<!-- for searching -->

			<h2>Seach results for: <?php the_search_query(); ?> </h2>


		<?php  
		while (have_posts()) : the_post(); 


     get_template_part('content');


		 endwhile; 

	else :
		echo "<p>No content found</p>";
	endif;



	get_footer();

 ?>