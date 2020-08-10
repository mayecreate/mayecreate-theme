<div class="container">
<div class="row">
<h2>This is the Slider Title</h2>
</div>


<div class="row">
<?php 	
/*
*
*	This is a featured slider.  It displays featured images and titles of posts from a specified category, 
*	custom post type, or whatever else you can query for using the new WP_Query object in WordPress.
*
*/

$sliderArgs =  array(
		'post_type' => 'post', //change to custom post type of custom post type if custom post type is needed.
    	'cat' => array(1), //change to specific category of post if that is what you are trying to target.
		'posts_per_page' => -1, 
	);

$sliderQuery = new WP_Query($sliderArgs); ?>	

<ul id="lightSlider">

	<?php if ( $sliderQuery->have_posts() ) : ?>
		<?php while ( $sliderQuery->have_posts() ) : $sliderQuery->the_post(); ?>
            			
        	<li>
        		<a href="<?php the_permalink(); ?>">
        		<?php the_post_thumbnail('featuredItemSlider'); ?> 
        		</a>    	
            </li>

        <?php endwhile; ?>
       	<?php wp_reset_postdata(); ?>
    <?php else : ?>
        <p><?php _e( 'Sorry, nothing to show yet. Check back later.' ); ?></p>
    <?php endif; ?>

</ul>
<button type="button" id="goToPrevSlide">Prev</button>
<button type="button" id="goToNextSlide">Next</button>

</div>
</div>