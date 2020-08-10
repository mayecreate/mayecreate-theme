<?php 
/*
 * Adjusts excerpt display properties.
 * @return void
 */

// function below adjusts excerpt display properties	
function excerpt($limit) {
	$excerpt = explode(' ', get_the_excerpt(), $limit);
	
	if (count($excerpt)>=$limit) {
	
	array_pop($excerpt);
	$excerpt = implode(" ",$excerpt).'...<!---<a class="button" href="<?php the_permalink(); ?>">Read More &raquo;</a> -->';
	} else {
	$excerpt = implode(" ",$excerpt);
	}
	
	$excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
	return $excerpt ;
}