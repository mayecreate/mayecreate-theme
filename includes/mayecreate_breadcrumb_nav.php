<?php 
/*
==========================================================
Breadcrumb Navigation
==========================================================
*/
function mayecreate_breadcrumbs() {




global $containerWidth;      

$delimiter = '&raquo;'; //change the divider between the navigation elements
$home = get_bloginfo('name'); //change the words that are displayed for hom in the breadcrumbs defaults to site name
$before = '<li>';
$after = '</li>';

echo '<div id="breadcrumb">';
echo '<div class="'. $containerWidth .'">';


global $post;
$homeLink = get_bloginfo('url');

echo '<ol class="breadcrumb">';
echo $before . '<a href="' . $homeLink . '">' . $home . '</a>' . $after;


if ( is_category() ) {
	
	global $wp_query;
	$cat_obj = $wp_query->get_queried_object();
	$thisCat = $cat_obj->term_id;
	$thisCat = get_category($thisCat);
	$parentCat = get_category($thisCat->parent);
	
	if ($thisCat->parent != 0) echo $before . (get_category_parents($parentCat, TRUE, ''));
	echo $before . 'Archive by category "' . single_cat_title('', false) . '"' . $after;

	} elseif ( is_day() ) {
	
		echo $before . '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a>' . $after;
		echo $before . '<a href="' . get_month_link(get_the_time('Y'),get_the_time('m')) . '">' . get_the_time('F') . '</a>' . $after;
		echo $before . 'Archive by date "' . get_the_time('d') . '"' . $after;
	
	} elseif ( is_month() ) {
	
		echo $before . '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a>' . $after;
		echo $before . 'Archive by month "' . get_the_time('F') . '"' . $after;
	
	} elseif ( is_year() ) {
	
		echo $before . 'Archive by year "' . get_the_time('Y') . '"' . $after;
	
	} elseif ( is_single() && !is_attachment() ) {
	
			if ( get_post_type() != 'post' ) { // single post that is a custom post type
			
				$post_type = get_post_type_object(get_post_type());
				$slug = $post_type->rewrite;
				echo $before . '<a href="' . $homeLink . '/' . $slug['slug'] . '/">' . $post_type->labels->singular_name . '</a>' . $after;
				echo $before . get_the_title() . $after;
		
			} else { // single post, posted in parent or child category
			
				$cat = get_the_category(); $cat = $cat[0];
				echo $before . ' ' . get_category_parents($cat, TRUE, '<li>') . '';
				echo 'You&apos;re currently reading "' . get_the_title() . '"';
			
			}


	} elseif ( !is_single() && !is_page() && get_post_type() != 'post' && !is_404() ) {

		$post_type = get_post_type_object(get_post_type());
		echo $before . $post_type->labels->singular_name . $after;
		

	} elseif ( is_attachment() ) {

		$parent_id  = $post->post_parent;
		$breadcrumbs = array();
		while ($parent_id) {
			$page = get_page($parent_id);
			$breadcrumbs[] = $before . '<a href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a>' . $after;
			$parent_id    = $page->post_parent;
		}
		$breadcrumbs = array_reverse($breadcrumbs);
			foreach ($breadcrumbs as $crumb) echo ' ' . $crumb . ' ';
			echo $before . 'You&apos;re currently viewing the attachment "' . get_the_title() . '"' . $after;


	} elseif ( is_page() && !$post->post_parent ) { // is page or does not have a parent page

		echo $before . 'You&apos;re currently reading "' . get_the_title() . '"' . $after;


	} elseif ( is_page() && $post->post_parent ) { // is standard page and is child page

		$parent_id  = $post->post_parent;
		$breadcrumbs = array();
		while ($parent_id) {
				$page = get_page($parent_id);
				$breadcrumbs[] = $before .  '<a href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a>' . $after;
				$parent_id    = $page->post_parent;
		}
		$breadcrumbs = array_reverse($breadcrumbs);
			foreach ($breadcrumbs as $crumb) echo ' ' . $crumb . ' ';
			echo $before . 'You&apos;re currently reading "' . get_the_title() . '"' . $after;

	} elseif ( is_search() ) {
		echo $before . 'Search results for "' . get_search_query() . '"' . $after;

	} elseif ( is_tag() ) {
		echo $before . 'Archive by tag "' . single_tag_title('', false) . '"' . $after;

	} elseif ( is_author() ) {
		global $author;
		$userdata = get_userdata($author);
		echo $before . 'Articles posted by "' . $userdata->display_name . '"' . $after;

	} elseif ( is_404() ) {
		echo $before . 'We apologize but the page you are looking for can not be found.' . $after;
	}

	if ( get_query_var('paged') ) {
		echo $before;
		if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo '( ';
			echo ('Page') . ' ' . get_query_var('paged');
		if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ' )';
	}

echo '</div><!-- / breadcrumb navigation container -->';
echo '</div><!-- / breadcrumb navigation id -->';

       
}