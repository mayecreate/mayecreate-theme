<div id="myCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">


<?php
		
		/* If Position Indicators are to be displayed, display them
		===========================================================*/
		if(get_theme_mod('carousel-indicators', 'yes-dots') == 'yes-dots') {
			echo '<div class="carousel-indicators">';
			$slide_to = '0';
			$slide_label = '1';
			/* The Query for the First Indicator Dot.
			===========================================================*/ 
			$the_query = new WP_Query(array(
				'post_type' => 'carousel_slides',
				'posts_per_page' => 10,
				'orderby' => 'menu_order',
				'order' => 'ASC', 
				));
			
				while ($the_query->have_posts() ) : $the_query->the_post();
					if( $the_query->current_post == 0 && !is_paged() ) {
						$active_class = 'class="active"  aria-current="true"';
					} else {
						$active_class = '';
					}
					
                	echo '<button type="button" data-bs-target="#myCarousel" data-bs-slide-to="'.$slide_to++.'" '.$active_class.' aria-label="Slide '.$slide_label++.'"></button>';
    		
            	endwhile; wp_reset_postdata();

      		echo '</div>';
		} 
		?>
		
        <!-- Carousel items -->
        <div class="carousel-inner">
    		
  		<?php $the_query = new WP_Query(array(
				'post_type' => 'carousel_slides',
				'posts_per_page' => 1,
				'orderby' => 'menu_order' 
				));
				while ($the_query->have_posts() ) : $the_query->the_post();
				?>
    				
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
         
         
		 <?php $the_query = new WP_Query(array(
				'post_type' => 'carousel_slides',
				'posts_per_page' => 4,
				'offset' => 1, 
				'orderby' => 'menu_order' 
				));
				while ($the_query->have_posts() ) : $the_query->the_post();
				?>
    				
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
		if(get_theme_mod('carousel_layout_dir_nav', 'yes-arrows') == 'yes-arrows') { ?>
			<!-- // Carousel Navigation
        	echo '<a class="carousel-control left" href="#myCarousel" data-slide="prev"><span class="icon-left-open"></span></a>';
        	echo '<a class="carousel-control right" href="#myCarousel" data-slide="next"><span class="icon-right-open"></span></a>'; -->

			
			<button class="carousel-control-prev left" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Previous</span>
			</button>
			<button class="carousel-control-next right" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Next</span>
			</button>
		<?php } ?>
</div>

<?php wp_reset_query(); ?>