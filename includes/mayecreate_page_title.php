<?php 
/*
==========================================================
PAGE TITLE
==========================================================
*/
function mayecreate_page_title() {
	global $post;
	
	if (! is_front_page()) {
		
		echo '<div class="row">';
		echo  '<div class="col-md-12 page-header"><h1 class="entry-title">';
		the_title();
		echo '</h1></div>';
		echo '</div>';
	}
}
