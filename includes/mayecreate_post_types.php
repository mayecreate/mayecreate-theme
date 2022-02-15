<?php


// display the post id to the administration screens for posts.  This will make it easier to get the post id for use in shortcodes.

add_filter( 'manage_posts_columns', 'mayecreate_add_id_column', 5 );
add_action( 'manage_posts_custom_column', 'mayecreate_id_column_content', 5, 2 );

function mayecreate_add_id_column( $columns ) {
   $columns['mayecreate_id'] = 'ID';
   return $columns;
}
function mayecreate_id_column_content( $column, $id ) {
  if( 'mayecreate_id' == $column ) {
    echo $id;
  }
}
 


function mayecreate_create_post_type() {

	if(get_theme_mod('carousel_type', 'standard-posts') == 'custom-post-types') {
	
		// Register the "Carousel Slides" custom post type if the custom post type slider is used.
		register_post_type( 'carousel_slides',
			array(
				'labels' => array(
					'name'              => __( 'Carousel Slides'),
					'singular_name'     => __( 'Carousel Slides' ),
					'add_new'           => __( 'Add Slide' ),
					'add_new_item'      => __( 'Add New Slide' ),
					'edit_item'         => __( 'Edit Slide' ),  
					
				),
			'public' => true,
			'menu_position' => 10,
			'rewrite' => array('slug' => 'carousel_slides', 'with_front' => false),
			'supports' => array('title','thumbnail','revisions'),
			'menu_icon'         => 'dashicons-images-alt',
			)
		);	
	}
}
add_action( 'init', 'mayecreate_create_post_type' );



// Replace Featured Image Metabox with custom version for Carousel Slides Custom Post Type Edit Screens
add_action('do_meta_boxes', 'remove_thumbnail_box');
function remove_thumbnail_box() {
    
    remove_meta_box( 'postimagediv','carousel_slides','side' );
	add_meta_box('postimagediv', 'Carousel Slide Image', 'post_thumbnail_meta_box', 'carousel_slides', 'normal', 'high');

}




/***
  * Conditional to do stuff according to Admin page
  * Based on http://wordpress.stackexchange.com/a/9095/12615
*/

//add_action('admin_init', 'mayecreate_theme_admin_init');

//function mayecreate_theme_admin_init()
//{
    //global $pagenow;
    //if ( 'edit.php' == $pagenow) 
    //{
       // if ( !isset($_GET['post_type']) )
        //{
		//	//echo '<div class="error fade">You are on the Post listings page</div>';
        //}
        //elseif ( isset($_GET['post_type']) && 'page' == $_GET['post_type'] )
        //{
         // echo '<div class="error fade">You are on the Pages listings page</div>';
        //}
        //elseif ( isset($_GET['post_type']) && 'carousel_slides' == $_GET['post_type'] )
        //{
          //echo '<div class="error fade">You are on the Carousel Slide listings page</div>';
        //}
    //}
    //if ('post.php' == $pagenow && isset($_GET['post']) )
    //{
        // Will occur only in this kind of screen: /wp-admin/post.php?post=285&action=edit
        // and it can be a Post, a Page or a CPT
        //$post_type = get_post_type($_GET['post']);
        //if ( 'post' == $post_type )
        //{
        	//echo '<div class="error fade">You are editing a Post</div>';
        //}
        //elseif ( 'page' == $post_type)
        //{
        	//echo '<div class="error fade">You are editing a Page</div>';
        //}
        //elseif ( 'carousel_slides' == $post_type)
        //{
        	//echo '<div class="error fade">You are editing a Carousel Slide</div>';
        //}
    //}

    //if ('post-new.php' == $pagenow )
    //{
        // Will occur only in this kind of screen: /wp-admin/post-new.php
        // or: /wp-admin/post-new.php?post_type=page
        //if ( !isset($_GET['post_type']) ) 
        //{
            //echo '<div class="error fade">You are creating a new Post</div>';
        //}
        //elseif ( isset($_GET['post_type']) && 'page' == $_GET['post_type'] )
        //{
        	//echo '<div class="error fade">You are creating a new Page</div>';
        //}
        //elseif ( isset($_GET['post_type']) && 'carousel_slides' == $_GET['post_type'] )
        //{            
        	//echo '<div class="error fade">You are creating a new Carousel Slide</div>';
        //}
    //}   
//}

function mayecreate_change_featured_image_size_in_admin(){
  
}


// change size of admin featured image size in edit screen 

//function change_featured_image_size_in_admin_28512( $downsize, $id, $size ) {

//remove_filter( 'image_downsize', __FUNCTION__, 10, 3 );

// settings can be thumbnail, medium, large, full 
//$image = image_downsize( $id, 'slider' ); 
//add_filter( 'image_downsize', __FUNCTION__, 10, 3 );

//return $image;
//}
//add_filter( 'image_downsize', 'change_featured_image_size_in_admin_28512', 10, 3 );

?>