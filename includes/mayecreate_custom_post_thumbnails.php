<?php 
/*
 * Instantiates the post thumbnails and custom post image sizes 
 * @return void
 *
 */

if ( function_exists( 'add_theme_support' ) ) { 
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 200, 200, true ); // default Post Thumbnail dimensions (cropped)
}


//Activates Custom Featured Image Sizes
add_action( 'after_setup_theme', 'wpdocs_theme_setup' );
function wpdocs_theme_setup() {
    add_image_size('blog', 700, 300, true); // (cropped)
    add_image_size('blog-card', 360, 300, true); // (cropped)
	add_image_size('team', 300, 350, true); // (cropped)
	add_image_size('slider', 1920, 450, true); // (cropped)
    add_image_size('mailchimp',564, 280, true); // (cropped)
	//add_image_size('featuredItemSlider', 175, 175, true); // (cropped)  Remeber to uncomment the corisponding line it the funtion below
}

add_filter('image_size_names_choose', 'my_image_sizes');
function my_image_sizes($sizes) {
	$addsizes = array(
	'blog' 					=> __( "Blog"),
	'blog-card' 			=> __( "Blog Card"),
	'slider' 				=> __( "Slider")
	//'featuredItemSlider' 	=> __( "Featured Item Slider")
);
$newsizes = array_merge($sizes, $addsizes);
	return $newsizes;
}