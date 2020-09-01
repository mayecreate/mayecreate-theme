<?php

	$slideTitle = get_the_title();
	$slideURL 	= get_the_permalink();
	$slideText 	= '<p>'. excerpt(20) . '</p>';
	
	
	/* If whole slide is linked, wrap featured image in link
	===========================================================*/
	if(get_theme_mod('carousel-links', 'link-slide') == 'link-slide') {
			echo '<a href="' .$slideURL. '">';
		} 
	
	/* Get The Image for the Slide
	===========================================================*/
	//echo the_post_thumbnail('slider');
	
	/* Start of the slide title and content
	===========================================================*/
	echo '<div class="slideDesc">';
	
	
	/* If title is linked, wrap title in link
	===========================================================*/
	if(get_theme_mod('carousel-links', 'link-slide') == 'link-title') { 
			echo '<a class="slideTitle" href="' .$slideURL. '">';
			echo $slideTitle;
			echo '</a>';
		} else {
			echo '<span class="slideTitle">' . $slideTitle . '</span>';
		}
	
	/* If excerpt is to be displayed, display it
	===========================================================*/
	if(get_theme_mod('carousel_layout_excerpt', 'no-excerpt') == 'yes-excerpt') { 
			echo '<span class="slideText">' .$slideText. '</span>';
		}
	
	/* If slide is linked with button, display button
	===========================================================*/
	if(get_theme_mod('carousel-links', 'link-slide') == 'link-button') { 
			echo '<a class="btn-mayecreate" href="' .$slideURL. '">Read More</a>';
		}
	
	/* End of the slide title and content
	===========================================================*/
	echo '</div>';

	/* If whole slide is linked, close the link
	===========================================================*/
	if(get_theme_mod('carousel-links', 'link-slide') == 'link-slide') {
			echo '</a>';
		} 
	
?>