<div class="col-md-8">
	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post();?>
		<?php the_content(); ?>
		<?php endwhile; // end of the loop. ?>
	<?php else : ?>
		<?php get_template_part( 'no-results', 'content' ); ?>
	<?php endif; ?>
</div>
<div class="col-md-4">

	<?php 	$button01 = get_field('button_01_content');
            $button02 = get_field('button_02_content');
            $button03 = get_field('button_03_content');
            $buttonIcon01 = get_field('button_01_icon');
            $buttonIcon02 = get_field('button_02_icon');
            $buttonIcon03 = get_field('button_03_icon');
			$buttonLink01 = get_field('button_01_link');
            $buttonLink02 = get_field('button_02_link');
            $buttonLink03 = get_field('button_03_link');
			?>
	
	<?php  	if (($button01) && ($buttonLink01)) {
            echo '<a href="' .$buttonLink01. '" class="btn btn-mayecreate">';
				if ($buttonIcon01){
					echo '<span><img src="'.$buttonIcon01.'"></span>'; 
					}
			echo $button01 . '</a>';
			};
			?>
       
	<?php  	if (($button02) && ($buttonLink02)) {
            echo '<a href="' .$buttonLink02. '" class="btn btn-mayecreate">';
				if ($buttonIcon02){
					echo '<span><img src="'.$buttonIcon02.'"></span>'; 
					}
			echo $button02 . '</a>';
			};
			?>	
	
	<?php  	if (($button03) && ($buttonLink03)) {
            echo '<a href="' .$buttonLink03. '" class="btn btn-mayecreate">';
				if ($buttonIcon03){
					echo '<span><img src="'.$buttonIcon03.'"></span>'; 
					}
			echo $button03 . '</a>';
			};
			?>
</div>