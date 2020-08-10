<?php 

/*
==========================================================
CUSTOM LOGO
==========================================================
*/

function mayecreate_custom_logo() { 
	$custom_logo = get_theme_mod( 'logo_image', '');
	if ($custom_logo) {
		echo '<div id="branding-container">';
		echo '<a class="brand" href="' . home_url() . '" title=" ' . esc_attr( get_bloginfo( 'name', 'display' ) ) . '">';
		echo '<img class="site-logo" src="'. $custom_logo . '" alt=" ' . esc_attr( get_bloginfo( 'name', 'display' ) ) . '" />';
		echo '</a>'; 
		echo '</div>';
	} else { 
		echo '<div id="branding-container">';
		echo '<a class="brand" href="' . home_url() . '" title=" ' . esc_attr( get_bloginfo( 'name', 'display' ) ) . '">';
		echo bloginfo('name');
		echo '</a>';
		echo '</div>';
	}
}
