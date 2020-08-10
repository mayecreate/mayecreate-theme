<?php
/*
* Collapsible Content Loop
*
* @since MayeCreate Mini Site 2.0
* @return void
*
*/ ?>

<div class="collapsingContent">
	<?php  $postCount = 1 ; ?>
	<?php  $collapseArgs = array(
			'category__in'		=> array(1), //change the category id to the categories you want to display in the collapsing content page. Using category__in prevents child categories. 
			'posts_per_page' 	=> '-1',
			);


	  //$the_query = new WP_Query( 'cat=1&posts_per_page=-1');

		$the_query = new WP_Query($collapseArgs); ?>

		<?php if ( $the_query->have_posts() ) : ?>
		<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
		
        
        <h2 class="collapsed" role="button" data-toggle="collapse" href="#collapse<?php echo $postCount; ?>" aria-expanded="false" aria-controls="collapse<?php echo $postCount; ?>">
			<?php echo the_title(); ?></h2>
        
        <div class="collapse" id="collapse<?php echo $postCount; ?>">
  			<?php the_content(); ?>
  		</div>
        
  
  		<?php  $postCount++ ; ?>
				
		<?php endwhile; ?>
		<?php wp_reset_postdata(); ?>
		<?php else : ?>
        	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php endif; ?>
</div>