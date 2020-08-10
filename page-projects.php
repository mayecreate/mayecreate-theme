<?php
/*
* Template Name: Projects
*
*/
get_header(); ?>

        <div class="row">
			<div class="col-md-12">
				<h2>Option One</h2>
				<?php // args
				$args = array(
				'posts_per_page'	=> -1,
				'order'			=> 'DESC', // ASC = OLDEST EVENT FIRST, DESC= NEWEST EVENT FIRST 
				'post_type' => 'projects',
				'paged' => $paged
				); ?>

				<?php // query
				$wp_query = new WP_Query( $args );

				// loop
				while( $wp_query->have_posts() )
				{
				$wp_query->the_post();

				?>
				
				<?php get_template_part('partials/loop','projects'); ?>

				<?php } // end the loop ?>
				<!--Reset Query-->
				<?php wp_reset_query();?> 
				
				<div class="clear"></div>
				
				<h2>Option Two</h2>
				<?php // args
				$args = array(
				'posts_per_page'	=> -1,
				'order'			=> 'DESC', // ASC = OLDEST EVENT FIRST, DESC= NEWEST EVENT FIRST 
				'post_type' => 'projects',
				'paged' => $paged
				); ?>

				<?php // query
				$wp_query = new WP_Query( $args );

				// loop
				while( $wp_query->have_posts() )
				{
				$wp_query->the_post();

				?>
				
				<?php get_template_part('partials/loop','projects-alt'); ?>

				<?php } // end the loop ?>
				<!--Reset Query-->
				<?php wp_reset_query();?>  
				
				<div class="clear"></div>
				
				<h2>Option Three</h2>
				<?php // args
				$args = array(
				'posts_per_page'	=> -1,
				'order'			=> 'DESC', // ASC = OLDEST EVENT FIRST, DESC= NEWEST EVENT FIRST 
				'post_type' => 'projects',
				'paged' => $paged
				); ?>

				<?php // query
				$wp_query = new WP_Query( $args );

				// loop
				while( $wp_query->have_posts() )
				{
				$wp_query->the_post();

				?>
				
				<?php get_template_part('partials/loop','projects-alt-alt'); ?>

				<?php } // end the loop ?>
				<!--Reset Query-->
				<?php wp_reset_query();?> 
        
			</div><!-- / maincolumn -->
        
    	</div><!-- / row -->
	</div><!-- / hfeed site container -->
</div><!-- / page -->


<?php get_footer(); ?>