<?php
/**
 * The single file.
 *
 * This page template is setup so that you can modify the number of columns and there widths.  There are 12 available columns.
 * For example if you want to have them setup 2/3 you will set it up with two divs one
 * with the class of span8 and one with a class of span4
*/
get_header(); ?>
        <?php $email = esc_html(get_field("email")); ?>	
		<?php $phone = esc_html(get_field("phone")); ?>
        <div class="row">
			<div class="col-md-3">
			<div class="team-single">
				<?php if ( has_post_thumbnail() ) { ?>
						<?php $image_id = get_post_thumbnail_id();
						$image_url = wp_get_attachment_image_src($image_id,'team', true); ?>
						<img src="<?php echo $image_url[0]; ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" />
					<?php } else { ?>
						<img src="<?php bloginfo('url'); ?>/wp-content/uploads/2019/12/staff_default-1.jpg" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" />
					<?php } ?>
			</div>
				
				<div class="clear"></div>
			<div class="contact-team">
						<?php if ($email) { ?>
							<p class="email"><a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></p>
						<?php } ?>				
				  
						<?php if ($phone) { ?>
							<p class="phone"><?php echo $phone; ?></p>
						<?php } ?>
			</div>
			</div>
            <div class="col-md-9">
    
                <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
            
                    <div class="post">
                    <div class="post-body">
                    <div class="post article">


                    <?php $teamtitle = esc_html(get_field("teamtitle")); ?>
						<h2 class="blue"><?php the_title(); ?></h2>

						<?php if ($teamtitle) { ?>
							<h3 class="teamtitle"><?php echo $teamtitle; ?></h3>
						<?php } ?>
                                                        
                    <div class="cleared"></div>
                                                       
                    <?php if (!is_page()): ?>
					
                    <?php endif; ?>
						
                    <div class="postContent">
                        <p><?php the_content(); ?></p>
                        
                    </div>
                    </div>
                    </div>
                    </div>
                
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
            
            </div>

        </div>

        </div>
    </div>
<?php get_footer(); ?>