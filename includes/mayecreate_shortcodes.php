<?php 

/**
 * Creates the functionality for [button] shortcode 
 * Shortcode has three arguments 'class', 'url', 'text', 'ltext', and 'target'.
 * 
 *	The 'class' argument gives you a modifyer for the button.  This is useful for button size like small and large.  The default is the word "deafult" 
 *	The 'url' argument controls the link the button is linked too. If nothing is provided the button will not link. 
 * 	The 'text' argument controls the text that appears on the button. 
 *  The 'ltext' argument controls the large text that appears on the button. It is not styled on all sites.
 *	The 'target' argument controls the linking behavior of button.  It defaults to same window add '_blnak in argument for new window'
 *	
 *	Syntax of button shortcode
 *	
 *	[button 'class'='X' 'url'='X', 'ltext'='X', 'text'='X', 'target'='X']
 *
 *  @since MayeCreate Mini Site 2.0
 *  @return void
 *
 */  
function button_function( $atts ){
	
	$a = shortcode_atts( array(
		'url' 		=> 'button_link', 
		'ltext' 	=> '', //the default for this one is blank. 
		'text' 		=> 'button_text', //default word "button_text" will be dsiplayed on the button until this is replaced
		'class' 	=> 'default', //defaults to the word default appended to class
		'target'	=> '_self', // defaults to same window
    ), $atts );
	
	return '<a class="btn-mayecreate '. $a['class'] .'" href="' . $a['url'] . '" target="' . $a['target'] . '"><span class="ltext">' . $a['ltext'] . '</span>' . $a['text'] . '</a>';
}
add_shortcode( 'button', 'button_function' );

function divider_function( $atts ){
	
	return '<div class="divider"></div>';
}
add_shortcode( 'divider', 'divider_function' );

function clear_function( $atts ){
	
	return '<div class="clear"></div>';
}
add_shortcode( 'clear', 'clear_function' );

function print_button_function( $atts ){
	
	return '<a class="btn-mayecreate" href="javascript:window.print()">Print Form</a>';
}
add_shortcode( 'print_button', 'print_button_function' );

function pagebreak_function( $atts ){
	
	$break = shortcode_atts( array(
		'class' 	=> 'default', //defaults to the word default appended to class
    ), $atts );
	
	return '</div></div></div></div><div class="pagebreak '. $break['class'] .'"><div class="container"><div class="row"><div class="col-md-12">';
}
add_shortcode( 'pagebreak', 'pagebreak_function' );

function pagebreak_left_function( $atts ){
	
	$break = shortcode_atts( array(
		'background' 	=> '',
		'class' 	=> 'default', //defaults to the word default appended to class
		'count' => '0',
    ), $atts );
	
	return '</div></div></div></div><div class="pagebreak pagebreak_left '. $break['class'] .'"><div class="pagebreak_left_img pagebreak_left_img_'. $break['count'] .'" style="background-image:url('. $break['background'] .');"></div><div class="pagebreak_left_content pagebreak_left_content_'. $break['count'] .'"><div class="container"><div class="row">';
}
add_shortcode( 'pagebreak_left', 'pagebreak_left_function' );

function pagebreak_right_function( $atts ){
	
	$break = shortcode_atts( array(
		'background' 	=> '',
		'class' 	=> 'default', //defaults to the word default appended to class
		'count' => '0',
    ), $atts );
	
	return '</div></div></div></div><div class="pagebreak pagebreak_right '. $break['class'] .'"><div class="pagebreak_right_img pagebreak_right_img_'. $break['count'] .'" style="background-image:url('. $break['background'] .');"></div><div class="pagebreak_right_content pagebreak_right_content_'. $break['count'] .'"><div class="container"><div class="row">';
}
add_shortcode( 'pagebreak_right', 'pagebreak_right_function' );

function endbreak_function( $atts ){
	
	return '</div></div></div></div><div class="pagebreak_fix"><div class="container"><div class="row"><div class="col-md-12">';
}
add_shortcode( 'endbreak', 'endbreak_function' );

function PULLPOST_CHANGENAME_function( $atts ){
	ob_start();
	get_template_part('partials/content','PULLPOST_CHANGENAME-shortcode'); 
	return ob_get_clean();
}
add_shortcode( 'PULLPOST_CHANGENAME', 'PULLPOST_CHANGENAME_function' );