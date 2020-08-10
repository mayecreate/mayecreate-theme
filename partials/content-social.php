<ul class="social">
	<?php if(get_theme_mod('social_twitter') <> "") { 
		echo '<li><a target="_blank" href="' . get_theme_mod('social_twitter') .'"><i class="fab fa-twitter-square"></i></a></li>'; 
	} ?>
	<?php if(get_theme_mod('social_facebook') <> "") { 
		echo '<li><a target="_blank" href="' . get_theme_mod('social_facebook') .'"><i class="fab fa-facebook-square"></i></a></li>'; 
	} ?>
	<?php if(get_theme_mod('social_linkedin') <> "") { 
		echo '<li><a target="_blank" href="' . get_theme_mod('social_linkedin') .'"><i class="fab fa-linkedin-square"></i></a></li>'; 
	} ?>
	<?php if(get_theme_mod('social_pinterest') <> "") { 
		echo '<li><a target="_blank" href="' . get_theme_mod('social_pinterest') .'"><i class="fab fa-pinterest"></i></a></li>'; 
	} ?>
	<?php if(get_theme_mod('social_instagram') <> "") { 
		echo '<li><a target="_blank" href="' . get_theme_mod('social_instagram') .'"><i class="fab fa-instagram"></i></a></li>'; 
	} ?>
	<?php if(get_theme_mod('social_vimeo') <> "") { 
		echo '<li><a target="_blank" href="' . get_theme_mod('social_vimeo') .'"><i class="fab fa-vimeo-square"></i></a></li>'; 
	} ?>
</ul>