
<a href="<?php the_permalink(); ?>" class="post_link_wrapper wide">
	<span class="img_wrapper">
		<?php if ( has_post_thumbnail() ) { ?>
			<?php $image_id = get_post_thumbnail_id();
			$image_url = wp_get_attachment_image_src($image_id,'blog', true); ?>
			<img src="<?php echo $image_url[0]; ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" />
		<?php } else { ?>
			<img src="<?php bloginfo('url'); ?>/wp-content/uploads/2016/03/86480546-700x300.jpg" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" />
		<?php } ?> 
	</span>
	<h3><?php the_title(); ?></h3>
	<?php echo '<p>'. excerpt(25) . '</p>'; ?>
	<span class="btn-mayecreate">READ MORE</span>
</a>