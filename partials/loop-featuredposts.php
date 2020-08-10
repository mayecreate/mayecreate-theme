<div id="featuredPosts" class="row">
<?php 

$the_query = new WP_Query( 'cat=1&posts_per_page=3'  );

if ( $the_query->have_posts() ) :
	while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
	
		
		
		
		
		<div class="col-md-4">
		
		
                	<a href="<?php the_permalink(); ?>">
                    <div class="card">
                  		<div class="card-image">
                           <?php if ( has_post_thumbnail() ) {
                                    the_post_thumbnail('blog-card');
                                } else {
                                    echo '<img src="' . get_bloginfo( 'stylesheet_directory' ) . '/images/blog-default.jpg" />';
                                }
                                ?> 
                            <h2 class="cardTitle"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php printf(__('Permanent Link to %s', 'kubrick'), the_title_attribute('echo=0')); ?>"><?php the_title(); ?></a><?php echo $postcount;?></h2>
                            <?php echo '<span class="postDate">' . get_the_time(__('F jS, Y', 'kubrick')) . '</span><br/>'; ?>
                            <?php echo '<span class="postCat">Posted in ' . get_the_category_list(', ') . '</span>'; ?>
                        </div>
                        <div class="card-content">
                            <p><?php echo '<p>'. excerpt(40) . '</p>'; ?> 
							<a class="button projectInfo" href="<?php the_permalink(); ?>">Project Info &raquo;</a>
                        </div>
                        
                    </div>
                    </a>
		
		
		
		</div>
	



<?php 
endwhile;
wp_reset_postdata();
else :

echo '<p>' . _e( 'Sorry, no posts matched your criteria.' ) . '</p>';

endif; 

?>
</div>



                
            