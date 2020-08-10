<?php

// Hook onto 'oembed_dataparse' and get 2 parameters
add_filter( 'oembed_dataparse','responsive_wrap_oembed_dataparse',10,2);

function responsive_wrap_oembed_dataparse( $html, $data ) {
 // Verify oembed data (as done in the oEmbed data2html code)
 if ( ! is_object( $data ) || empty( $data->type ) )
 return $html;
 
 // Verify that it is a video
 if ( !($data->type == 'video') )
 return $html;

 // Calculate aspect ratio
 $ar = $data->width / $data->height;

 // Set the aspect ratio modifier
 $ar_mod = ( abs($ar-(4/3)) < abs($ar-(16/9)) ? 'embed-responsive-4by3' : 'embed-responsive-16by9');

 // Strip width and height from html
 $html = preg_replace( '/(width|height)="\d*"\s/', "", $html );

 // Return code
 return '<div class="embed-responsive '.$ar_mod.'" data-aspectratio="'.number_format($ar, 5, '.').'">'.$html.'</div>';
}