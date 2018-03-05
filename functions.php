<?php 
show_admin_bar( false );

// Connect style.css to header.php
function WPThemeDevPrac_resources(){

	wp_enqueue_style('style', get_stylesheet_uri());

}
add_action('wp_enqueue_scripts', 'WPThemeDevPrac_resources');





// Get top ancestor
function get_top_ancestor_id() {

	global $post;

	if ($post->post_parent) {
		
		$ancestors = array_reverse(get_post_ancestors($post->ID));
		return $ancestors[0];
	}

	return  $post->ID; 
}

// Does page have children?
function has_shidlren() {

	global $post;

	$pages = get_pages('child_of=' . $post->ID);
	return count($pages);

}

// Theme SetUp
function learningWordPress_setup() {
	// Navigation Menus
register_nav_menus(array(
	'primary' => __('Primary Menu'),
	'footer' => __('Footer Menu'),

));
	// Add Featured image support
	add_theme_support('post-thumbnails');
	add_image_size('small-thumbnail', 180, 120, array('left', 'top')); 
	add_image_size('banner-thumbnail', 920, 350, array('left', 'top')); 

}
add_action('after_setup_theme', 'learningWordPress_setup');












 ?>
