<?php 
/*
==========================================================
FOOTER WIDGETS
==========================================================
*/
global $containerWidth;
$ftr_widgets = get_theme_mod( 'footer_widgets_number', 4 );
$span = 12;
if($ftr_widgets > 1) {$span = 6;}
if($ftr_widgets > 2) {$span = 4;}
if($ftr_widgets > 3) {$span = 3;}

if($ftr_widgets > 0) {
	echo '<div class="'. $containerWidth .'">';
	echo '<div class="row">';
		echo '<div class="col-md-'.$span.' aside">';
			
			if ( ! dynamic_sidebar( 'footer-widget-one' ) ) :
				echo '<h4>Footer One Widget</h4>';
				echo '<p>You have activated a Footer Widget! You can deactivate this in the Theme Customizer or put content in it under "Appearance > Widgets".</p>';
			endif;
		
		echo '</div>';
		if($ftr_widgets > 1) {
			echo '<div class="col-md-'.$span.' aside">';
			
			if ( ! dynamic_sidebar( 'footer-widget-two' ) ) :
				echo '<h4>Footer Two Widget</h4>';
				echo '<p>You have activated a second Footer Widget! You can deactivate this in the Theme Customizer or put content in it under "Appearance > Widgets".</p>';
			endif;
			
			echo '</div>';
		}
		if($ftr_widgets > 2) {
			echo '<div class="col-md-'.$span.' aside">';
			
			if ( ! dynamic_sidebar( 'footer-widget-three' ) ) :
				echo '<h4>Footer Three Widget</h4>';
				echo '<p>You have activated a second Footer Widget! You can deactivate this in the Theme Customizer or put content in it under "Appearance > Widgets".</p>';
			endif;
			
			echo '</div>';
		}
		if($ftr_widgets > 3) {
			echo '<div class="col-md-'.$span.' aside">';
			
			if ( ! dynamic_sidebar( 'footer-widget-four' ) ) :
				echo '<h4>Footer Four Widget</h4>';
				echo '<p>You have activated a second Footer Widget! You can deactivate this in the Theme Customizer or put content in it under "Appearance > Widgets".</p>';
			endif;
			
			echo '</div>';
		}
	echo '</div>';
	echo '</div>';
}
?>