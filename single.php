<?php
/**
 * The single file.
 *
 * This page template is setup so that you can modify the number of columns and there widths.  There are 12 available columns.
 * For example if you want to have them setup 2/3 you will set it up with two divs one
 * with the class of span8 and one with a class of span4
*/
get_header(); ?>
        
        <div class="row">
            <div class="col-md-8 main left">
    
                <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
            
                    <h2><?php the_title(); ?></h2>
                                                        
                    <div class="clear"></div>
                    <?php the_content(); ?>
                
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
            
            </div><!-- 8 -->
            
            <div class="col-md-4 sidebar" role="complementary">
                <?php get_template_part('partials/sidebar','blog'); ?>
            </div> 

        </div>
        </div>
    </div>
<?php get_footer(); ?>