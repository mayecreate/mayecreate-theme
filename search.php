<?php
/**
 *  The main template file.
 *
 *  This page template is setup so that you can modify the number of columns and there widths.  There are 12 available columns.
 *  For example if you want to have them setup 2/3 you will set it up with two divs one
 *  with the class of col-md-8 and one with a class of col-md-4.
 *
 *  The columns will always collapse and stack with the right column falling 
 *  below the left column. If you would like more control to change
 *  widths based on size of viewport the "md" in the class above can be modified to one
 *  of four different settings and appended to the end of the *  class list.  
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
            <div class="col-md-8 main left">
            	<?php $postcount = 1; //sets post counter to add a new row every # posts ?>
                
                <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                
                
                <?php get_template_part('partials/loop','blog'); ?>
                <?php //get_template_part('partials/loop','blog-card'); //this line of code is here to provide a quick way to modify the blog layout to a card style if that look is required. ?>
                    
                
                
                
                <?php $postcount++; //interates the post counter ?>
                <?php endwhile; ?>
                
                <?php
                    $prev_link = get_previous_posts_link(__('Newer Entries &raquo;', 'kubrick'));
                    $next_link = get_next_posts_link(__('&laquo; Older Entries', 'kubrick'));
                ?>
                                                
                <?php if ($prev_link || $next_link): ?>
                                                
                    <nav>
                        <ul class="pager">
                            <li><?php echo $next_link; ?></li>
                            <li><?php echo $prev_link; ?></li>
                        </ul>
                    </nav>                    

                <?php endif; ?>
                <?php else : ?>
                    
                    <h2>Not Found</h2>
                    <p>Sorry, nothing to show yet.</p>
                                            
                <?php endif; ?>
            
            

            </div><!-- row -->
        
           <div class="col-md-4 sidebar" role="complementary">
                <?php get_template_part('partials/sidebar','blog'); ?>
            </div>  
</div><!-- 9 -->
        </div>
        </div>
    </div>
<?php get_footer(); ?>