<div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">


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
			
			while ($the_query->have_posts() ) : $the_query->the_post(); ?>
			
                 <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id(), 'slider' ); ?>
                <div class="carousel-item item active" style="background-image: url('<?php echo $image[0]; ?>')">
                	<?php 
							$slideTitle = get_field('custom_slide_title');
							$link_text = get_field('link_text');
							
							if ($slideTitle){
								$slideTitle == $slideTitle;
							}else{
								$slideTitle = get_the_title();
							}
							
							$slideURL 	= get_field('link_for_slide');
							$slideText 	= get_field('text_for_slide');
							
						
							if (get_theme_mod('carousel-links', 'link-slide') == 'no-link') { //if no link	
									
									
		                			echo '<div class="slideDesc"><div class="slideDesc_inner">';
									echo '<span class="slideTitle">' . $slideTitle . '</span>';
		                			
		                			if($slideText){
										echo '<span class="slideText">' .$slideText. '</span>';
		                			}
									echo '</div></div>';
							

							} elseif (get_theme_mod('carousel-links', 'link-slide') == 'link-slide'){ //if linked whole slide	
									
									if ((get_field('add_link_to_slide') == 'Yes') && ($slideURL)){
										echo '<a href="' .$slideURL. '">';
									}
									
									echo '<div class="slideDesc"><div class="slideDesc_inner">';
									echo '<span class="slideTitle">' . $slideTitle . '</span>';
		                			
		                			if($slideText){
										echo '<span class="slideText">' .$slideText. '</span>';
		                			}

		                			echo '</div></div>';
									
									if ((get_field('add_link_to_slide') == 'Yes') && ($slideURL)){
										echo'</a>';
									}
							

							} elseif (get_theme_mod('carousel-links', 'link-slide') == 'link-button'){ //if linked with button	
							
		                			echo '<div class="slideDesc"><div class="slideDesc_inner">';
									echo '<span class="slideTitle">' . $slideTitle . '</span>';
		                			
		                			if($slideText){
										echo '<span class="slideText">' .$slideText. '</span>';
		                			}

		                			if ((get_field('add_link_to_slide') == 'Yes') && ($slideURL) && ($link_text)){
										echo '<a class="btn-mayecreate" href="' .$slideURL. '">'. $link_text .'</a>';
									}
									if ((get_field('add_link_to_slide') == 'Yes') && ($slideURL) && (!$link_text)){
										echo '<a class="btn-mayecreate" href="' .$slideURL. '">Read More</a>';
									}
									
									echo '</div></div>';
									
							
							} elseif (get_theme_mod('carousel-links', 'link-slide') == 'link-title'){ //if linked with title
									
		                			echo '<div class="slideDesc"><div class="slideDesc_inner">';
									
									if ((get_field('add_link_to_slide') == 'Yes') && ($slideURL)){
		                				echo '<a class="slideTitle" href="' .$slideURL. '">';
										echo $slideTitle;
										echo '</a>';
									}else{
										echo '<span class="slideTitle">' . $slideTitle . '</span>';
									}
									
									if($slideText){
										echo '<span class="slideText">' .$slideText. '</span>';
		                			}
		                			
		                			echo '</div></div>';
							} ?>
                </div><!-- item active -->
    			<?php endwhile; wp_reset_postdata(); ?>
        
		<?php /* The Query for the last 5 slides.
		===========================================================*/
		$the_query = new WP_Query(array(
			'post_type' 		=> 'post',
			'category__in' 		=> $carousel_category,
			'posts_per_page' 	=> 5,
			'offset' 			=> 1,
			'orderby' => 'date',
			'order' => 'DESC'
			));
			
			while ($the_query->have_posts() ) : $the_query->the_post(); ?>
			
                 <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id(), 'slider' ); ?>
                <div class="carousel-item item" style="background-image: url('<?php echo $image[0]; ?>')">
					
                	<?php 
							$slideTitle = get_field('custom_slide_title');
							$link_text = get_field('link_text');
							
							if ($slideTitle){
								$slideTitle == $slideTitle;
							}else{
								$slideTitle = get_the_title();
							}
							
							$slideURL 	= get_field('link_for_slide');
							$slideText 	= get_field('text_for_slide');
							
						
							if (get_theme_mod('carousel-links', 'link-slide') == 'no-link') { //if no link	

		                			echo '<div class="slideDesc"><div class="slideDesc_inner">';
									echo '<span class="slideTitle">' . $slideTitle . '</span>';
		                			
		                			if($slideText){
										echo '<span class="slideText">' .$slideText. '</span>';
		                			}
									echo '</div></div>';
							

							} elseif (get_theme_mod('carousel-links', 'link-slide') == 'link-slide'){ //if linked whole slide	
									
									if ((get_field('add_link_to_slide') == 'Yes') && ($slideURL)){
										echo '<a href="' .$slideURL. '">';
									}
									
									echo '<div class="slideDesc"><div class="slideDesc_inner">';
									echo '<span class="slideTitle">' . $slideTitle . '</span>';
		                			
		                			if($slideText){
										echo '<span class="slideText">' .$slideText. '</span>';
		                			}

		                			echo '</div></div>';
									
									if ((get_field('add_link_to_slide') == 'Yes') && ($slideURL)){
										echo'</a>';
									}
							

							} elseif (get_theme_mod('carousel-links', 'link-slide') == 'link-button'){ //if linked with button	
							
		                			echo '<div class="slideDesc"><div class="slideDesc_inner">';
									echo '<span class="slideTitle">' . $slideTitle . '</span>';
		                			
		                			if($slideText){
										echo '<span class="slideText">' .$slideText. '</span>';
		                			}

		                			if ((get_field('add_link_to_slide') == 'Yes') && ($slideURL) && ($link_text)){
										echo '<a class="btn-mayecreate" href="' .$slideURL. '">'. $link_text .'</a>';
									}
									if ((get_field('add_link_to_slide') == 'Yes') && ($slideURL) && (!$link_text)){
										echo '<a class="btn-mayecreate" href="' .$slideURL. '">Read More</a>';
									}
									
									echo '</div></div>';
									
							
							} elseif (get_theme_mod('carousel-links', 'link-slide') == 'link-title'){ //if linked with title
									
		                			echo '<div class="slideDesc"><div class="slideDesc_inner">';
									
									if ((get_field('add_link_to_slide') == 'Yes') && ($slideURL)){
		                				echo '<a class="slideTitle" href="' .$slideURL. '">';
										echo $slideTitle;
										echo '</a>';
									}else{
										echo '<span class="slideTitle">' . $slideTitle . '</span>';
									}
									
									if($slideText){
										echo '<span class="slideText">' .$slideText. '</span>';
		                			}

		                			echo '</div></div>';
							} ?>
                </div><!-- item -->
    			<?php endwhile; wp_reset_postdata(); ?>
		
		
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