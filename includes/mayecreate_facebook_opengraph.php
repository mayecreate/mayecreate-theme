<?php 
/*
==========================================================
MayeCreate Facebook Open Graph
==========================================================
*/
function mayecreate_facebook_opengraph() {
$custom_share_image = get_theme_mod( 'facebook_image', '');

echo '<!-- START OPEN GRAPH-->';

$page_id = get_queried_object_id();

if ( has_post_thumbnail( $page_id ) ) :
    $image_array = wp_get_attachment_image_src( get_post_thumbnail_id( $page_id ), 'large' );
    $openGraphImage = $image_array[0];
else :
    $openGraphImage = $custom_share_image;

endif;
	$openGraphUrl = get_permalink();
	$openGraphTitle = get_the_title(); 
	$openGraphDescript = get_the_excerpt();  


echo '<meta property="og:title" content="' . $openGraphTitle . '"/>';
echo '<meta property="og:type" content="website"/>';
echo '<meta property="og:url" content="' . $openGraphUrl . '"/>';
echo '<meta property="og:image" content="'. $openGraphImage .'"/>';
echo '<meta property="og:description" content="'. $openGraphDescript .'"/>';

echo '<!-- END OPEN GRAPH -->';




}
