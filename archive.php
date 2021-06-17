<?php
/**
 * The archive template file.
 *
 * This page template is setup so that you can modify the number of columns and there widths.  There are 12 available columns.
 * For example if you want to have them setup 2/3 you will set it up with two divs one
 * with the class of span8 and one with a class of span4
*/
get_header();
?> 

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