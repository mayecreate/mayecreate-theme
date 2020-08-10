<?php 
/* THIS IS THE REPLACEMENT FOR WP EASY COLUMNS. ADDED:10-26-17 */

//HALF

function one_half_first_function($atts, $content = ""){
	
	$content = wpautop(trim($content));
	return '<div class="row"><div class="col-md-6 col-sm-6">'.do_shortcode($content).'</div>';
}
add_shortcode( 'one_half_first', 'one_half_first_function' );

function one_half_last_function($atts, $content = ""){
	
	$content = wpautop(trim($content));
	return '<div class="col-md-6 col-sm-6">'.do_shortcode($content).'</div></div><div class="clear"></div>';
}
add_shortcode( 'one_half_last', 'one_half_last_function' );

//THIRDS

function one_third_first_function($atts, $content = ""){
	
	$content = wpautop(trim($content));
	return '<div class="row"><div class="col-md-4">'.do_shortcode($content).'</div>';
}
add_shortcode( 'one_third_first', 'one_third_first_function' );

function one_third_function($atts, $content = ""){
	
	$content = wpautop(trim($content));
	return '<div class="col-md-4">'.do_shortcode($content).'</div>';
}
add_shortcode( 'one_third', 'one_third_function' );

function one_third_last_function($atts, $content = ""){
	
	$content = wpautop(trim($content));
	return '<div class="col-md-4">'.do_shortcode($content).'</div></div><div class="clear"></div>';
}
add_shortcode( 'one_third_last', 'one_third_last_function' );

//TWO THIRDS

function two_third_first_function($atts, $content = ""){
	
	$content = wpautop(trim($content));
	return '<div class="row"><div class="col-md-8">'.do_shortcode($content).'</div>';
}
add_shortcode( 'two_third_first', 'two_third_first_function' );

function two_third_function($atts, $content = ""){
	
	$content = wpautop(trim($content));
	return '<div class="col-md-8">'.do_shortcode($content).'</div>';
}
add_shortcode( 'two_third', 'two_third_function' );

function two_third_last_function($atts, $content = ""){
	
	$content = wpautop(trim($content));
	return '<div class="col-md-8">'.do_shortcode($content).'</div></div><div class="clear"></div>';
}
add_shortcode( 'two_third_last', 'two_third_last_function' );

//QUARTERS

function one_quarter_first_function($atts, $content = ""){
	
	$content = wpautop(trim($content));
	return '<div class="row"><div class="col-md-3 col-sm-6">'.do_shortcode($content).'</div>';
}
add_shortcode( 'one_quarter_first', 'one_quarter_first_function' );

function one_quarter_function($atts, $content = ""){
	
	$content = wpautop(trim($content));
	return '<div class="col-md-3 col-sm-6">'.do_shortcode($content).'</div>';
}
add_shortcode( 'one_quarter', 'one_quarter_function' );

function one_quarter_last_function($atts, $content = ""){
	
	$content = wpautop(trim($content));
	return '<div class="col-md-3 col-sm-6">'.do_shortcode($content).'</div></div><div class="clear"></div>';
}
add_shortcode( 'one_quarter_last', 'one_quarter_last_function' );

//SIXTHS

function one_sixth_first_function($atts, $content = ""){
	
	$content = wpautop(trim($content));
	return '<div class="row"><div class="col-md-2 col-sm-4 col-xs-6">'.do_shortcode($content).'</div>';
}
add_shortcode( 'one_sixth_first', 'one_sixth_first_function' );

function one_sixth_function($atts, $content = ""){
	
	$content = wpautop(trim($content));
	return '<div class="col-md-2 col-sm-4 col-xs-6">'.do_shortcode($content).'</div>';
}
add_shortcode( 'one_sixth', 'one_sixth_function' );

function one_sixth_last_function($atts, $content = ""){
	
	$content = wpautop(trim($content));
	return '<div class="col-md-2 col-sm-4 col-xs-6">'.do_shortcode($content).'</div></div><div class="clear"></div>';
}
add_shortcode( 'one_sixth_last', 'one_sixth_last_function' );