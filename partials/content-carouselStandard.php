<div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
	
		
		<?php 
		
		/*	Set Variables
		============================================================*/
        $carousel_category = get_theme_mod( 'carousel_category');
		
		/* 	Check to make sure a category was chosen.  If it was not 
		*	assigned a category, assign it category id 1 (default blog category) 
		=============================================================*/
		if ($carousel_category){
				$carousel_category = $carousel_category;
			}else{
				$carousel_category = 1;
			}
		?>
        
        
		<?php
		
		/* If Position Indicators are to be displayed, display them
		===========================================================*/
		if(get_theme_mod('carousel-indicators', 'yes-dots') == 'yes-dots') {
			echo '<ol class="carousel-indicators">';
		
			/* The Query for the First Indicator Dot.
			===========================================================*/ 
			$the_query = new WP_Query(array(
				'post_type' 		=> 'post',
				'category__in' 		=> $carousel_category,
				'posts_per_page' 	=> 1,
				'orderby' => 'date',
				'order' => 'DESC'
				));
			
				while ($the_query->have_posts() ) : $the_query->the_post();
			
                	echo '<li data-target="#myCarousel" data-slide-to="0" class="active"></li>';
    		
            	endwhile; wp_reset_postdata();
        	
			/* The Query for the Rest of the Indicator Dots.
			===========================================================*/ 
			$post_count = 1;
			$the_query = new WP_Query(array(
				'post_type' 		=> 'post',
				'category__in' 		=> $carousel_category,
				'posts_per_page' 	=> 5,
				'offset' 			=> 1,
				'orderby' => 'date',
				'order' => 'DESC'
				));
			
				while ($the_query->have_posts() ) : $the_query->the_post();
			
            	echo '<li data-target="#myCarousel" data-slide-to="'.$post_count.'"></li>';
    		
            	$post_count++;
				endwhile; wp_reset_postdata();

      		echo '</ol>';
		} 
		?>
        
        <!-- Carousel items -->
        <div class="carousel-inner">
    		
  		<?php 
		
		/* The Query for the First Slide.
		===========================================================*/ 
		$the_query = new WP_Query(array(
				'post_type' 		=> 'post',
				'category__in' 		=> $carousel_category,
				'posts_per_page' 	=> 1,
				'orderby' => 'date',
				'order' => 'DESC'
			));
			
			while ($the_query->have_posts() ) : $the_query->the_post();
			
                echo '<div class="item active">';		
                get_template_part('partials/loop','carousel');
                echo '</div><!-- item -->';
    		
            endwhile; wp_reset_postdata();
        
		/* The Query for the last 5 slides.
		===========================================================*/
		$the_query = new WP_Query(array(
			'post_type' 		=> 'post',
			'category__in' 		=> $carousel_category,
			'posts_per_page' 	=> 5,
			'offset' 			=> 1,
			'orderby' => 'date',
			'order' => 'DESC'
			));
			
			while ($the_query->have_posts() ) : $the_query->the_post();
			
                echo '<div class="item">';		
                get_template_part('partials/loop','carousel');
                echo '</div><!-- item -->';
    		
            endwhile; wp_reset_postdata();

        ?>
		
		
		</div><!--// carousel-inner -->
        
		<?php
        
		/* If directional navigation is to be displayed, display it
		===========================================================*/
		if(get_theme_mod('carousel_layout_dir_nav', 'yes-arrows') == 'yes-arrows') { 
			// Carousel Navigation
        	echo '<a class="carousel-control left" href="#myCarousel" data-slide="prev"><span class="icon-left-open"></span></a>';
        	echo '<a class="carousel-control right" href="#myCarousel" data-slide="next"><span class="icon-right-open"></span></a>';
		} 
		?>

</div>

<?php wp_reset_query(); ?>