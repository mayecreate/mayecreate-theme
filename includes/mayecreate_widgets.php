<?php 
/*
 * Register widgets area.
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 * @return void
 */

function mayecreate_published_widgets_init() {

	register_sidebar( array(
		'name'          => 'Sidebar Left',
		'id'            => 'sidebar-widget-left',
		'description'   => '',
		'before_widget' => '<aside id="%1$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	
	register_sidebar( array(
		'name'          => 'Sidebar Right',
		'id'            => 'sidebar-widget-right',
		'description'   => '',
		'before_widget' => '<aside id="%1$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	
	register_sidebar( array(
		'name'          => 'Footer Widget One',
		'id'            => 'footer-widget-one',
		'description'   => '',
		'before_widget' => '<aside id="%1$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );

	register_sidebar( array(
		'name'          => 'Footer Widget Two',
		'id'            => 'footer-widget-two',
		'description'   => '',
		'before_widget' => '<aside id="%1$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );

	register_sidebar( array(
		'name'          => 'Footer Widget Three',
		'id'            => 'footer-widget-three',
		'description'   => '',
		'before_widget' => '<aside id="%1$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
	register_sidebar( array(
		'name'          => 'Footer Widget Four',
		'id'            => 'footer-widget-four',
		'description'   => '',
		'before_widget' => '<aside id="%1$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
}
add_action( 'widgets_init', 'mayecreate_published_widgets_init' );