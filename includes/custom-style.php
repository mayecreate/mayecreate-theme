<style>
/* BODY */
<?php
/* Set Variables */
$bg_color 					= get_theme_mod( 'site_background_color');
$bg_image 					= get_theme_mod( 'site_background_image');
$bg_repeat 					= get_theme_mod( 'site_background_repeat');
$bg_position 				= get_theme_mod( 'site_background_position');
$bg_attachment 				= get_theme_mod( 'site_background_attachment');
$body_size 					= get_theme_mod( 'body_size');
$body_font 					= get_theme_mod( 'body_font');
$body_color 				= get_theme_mod( 'body_color');
$body_line 					= get_theme_mod( 'body_line_height');
$heading_font 				= get_theme_mod( 'heading_font_family');
$heading_color 				= get_theme_mod( 'heading_color');
$small_color 				= get_theme_mod( 'small_color');
$link_color 				= get_theme_mod( 'link_color');
$border_color 				= get_theme_mod( 'border_color');
$border_accent_color 		= get_theme_mod( 'accent_color');
$well_color 				= get_theme_mod( 'well_color');
$form_border_color 			= get_theme_mod( 'form_border_color');
$heading_color 				= get_theme_mod( 'heading_color');
$ftr_bg_color 				= get_theme_mod( 'footer_bg_color');
$ftr_bg_image 				= get_theme_mod( 'footer_background_image');
$ftr_text_color 			= get_theme_mod( 'footer_text_color');
$ftr_bottom_border_color 	= get_theme_mod( 'footer_bottom_border_color');
$ftr_top_border_color 		= get_theme_mod( 'footer_top_border_color');
$ftr_widget_border_color 	= get_theme_mod( 'footer_widget_border_color');
$ftr_link_color 			= get_theme_mod( 'footer_link_color');
$container 					= get_theme_mod( 'container_width', 1200);


/* Site Background */
echo 'body,html {';
if($bg_color) {echo 'background-color:' .$bg_color.';';}
if($bg_image) {echo 'background-image:url("' .$bg_image.'");';}
if($bg_repeat) {echo 'background-repeat:' .$bg_repeat.';';}
if($bg_position) {echo 'background-position:' .$bg_position.';';}
if($bg_attachment) {echo 'background-attachment:' .$bg_attachment.';';}
echo '}';

/* Footer Background */
if($ftr_bg_color){echo 'footer.site-footer { background:' .$ftr_bg_color.';}';}
if($ftr_bg_image){echo 'footer.site-footer { background-image:url("' .$ftr_bg_image.'");}';}



do_action('mayecreate_add_to_custom_style'); ?>

</style>