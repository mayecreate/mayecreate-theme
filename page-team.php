<?php
/*
* Template Name: Page of Team Members
*
*/
get_header(); ?>

        <div class="row">
			<div class="col-md-12">
		
				<?php $page_slug = $post->post_name; ?>
				<?php // args
				$args = array(
				'posts_per_page'	=> -1,
				'order'			=> 'DEC', // ASC = OLDEST EVENT FIRST, DESC= NEWEST EVENT FIRST 
				'cat' => $page_slug,
				'post_type' => 'team',
				'paged' => $paged
				); ?>

				<?php // query
				$wp_query = new WP_Query( $args );
				if( $wp_query->have_posts() )
				{
				// loop
				while( $wp_query->have_posts() )
				{
				$wp_query->the_post();

				?>
        
                	<?php get_template_part('partials/loop','team'); ?>

				<?php } // end the loop ?>
				<!--Reset Query-->
				<?php wp_reset_query();?> 
				
				<?php } else { // end if ?>
				<h3>Sorry, nothing to show.</h3>
				<?php } ?>
        
        
			</div>
        
    	</div><!-- / row -->
	</div><!-- / hfeed site container -->
</div><!-- / page -->


<?php get_footer(); ?>