<div class="col-md-6">
	<a href="<?php the_permalink(); ?>">
		<div class="card">
			<div class="card-image">
			<?php if ( has_post_thumbnail() ) {
					the_post_thumbnail('blog-card');
				} else {
					echo '<img src="' . get_bloginfo( 'stylesheet_directory' ) . '/images/blog-default.jpg" alt="<?php the_title(); ?> Featured Image" />';
				}
				?> 
					<h2 class="cardTitle"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php printf(__('Permanent Link to %s', 'kubrick'), the_title_attribute('echo=0')); ?>"><?php the_title(); ?></a></h2>
					<?php echo '<span class="postDate">' . get_the_time(__('F jS, Y', 'kubrick')) . '</span><br/>'; ?>
				    <?php echo '<span class="postCat">Posted in ' . get_the_category_list(', ') . '</span>'; ?>
			</div>

			<div class="card-content">
				<p><?php echo '<p>'. excerpt(70) . '</p>'; ?>
				<a class="button projectInfo" href="<?php the_permalink(); ?>">Read More</a>
			</div>
		                        
		</div>
	</a>
</div>