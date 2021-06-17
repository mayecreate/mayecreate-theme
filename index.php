<?php
/**
 *  The main template file.
 *
 *  This page template is setup so that you can modify the number of columns and there widths.  There are 12 available columns.
 *  For example if you want to have them setup 2/3 you will set it up with two divs one
 *  with the class of col-md-8 and one with a class of col-md-4.
 *
 *  The columns will always collapse and stack with the right column falling below the left column. If you would like more control to change
 *  widths based on size of viewport the "md" in the class above can be modified to one of four different settings and appended to the end of the *  class list.  
 *
 *  For example a class like "col-xs-6 col-md-12 col-lg-8" will make the div be 50% wide on mobile, full 
 *  width on tablet, and 2/3 width on desktop.
 *  
 *  xs - mobile
 *  sm - tablet portrait
 *  md - tablet landscape
 *  lg -desktop
 *
 */
get_header(); ?>

        
        <div class="row">
                
				<?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
            	
                <div class="col-md-12">
					<?php get_template_part('partials/loop','blog'); ?>
				</div>
			
                <?php endwhile; ?>
                
                <?php
                    $prev_link = get_previous_posts_link(__('&laquo; Newer Entries', 'kubrick'));
                    $next_link = get_next_posts_link(__('Older Entries &raquo;', 'kubrick'));
                ?>
                                                
                <?php if ($prev_link || $next_link): ?>
                                                
                    <div class="col-md-12">
						<div class="post_nav_wrapper">
							<?php echo $prev_link; ?>
							<?php echo $next_link; ?>
						</div>
                    </div>                    

                <?php endif; ?>
                <?php else : ?>
                    <div class="col-md-12">
						<h2>Sorry, nothing has been posted in this category yet.</h2>
					</div>
                                            
                <?php endif; ?>
            

        </div>
	</div>
</div>
<?php get_footer(); ?>