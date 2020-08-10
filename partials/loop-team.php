
<div class="col-xs-12 col-sm-12 col-md-4 col-lg-3 team_wrapper">
	<a href="<?php the_permalink(); ?>" class="post_link_wrapper">
		<div class="team-members">
			<div class="team-box">
				<?php if ( has_post_thumbnail() ) { ?>
						<?php $image_id = get_post_thumbnail_id();
						$image_url = wp_get_attachment_image_src($image_id,'team', true); ?>
						<img src="<?php echo $image_url[0]; ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" />
					<?php } else { ?>
						<img src="<?php bloginfo('url'); ?>/wp-content/uploads/2019/12/staff_default-1.jpg" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" />
					<?php } ?>
			</div>
			
			<?php $teamtitle = esc_html(get_field("teamtitle")); ?>		
			<h2 class="team-name"><?php the_title(); ?></h2>
					
			<?php if ($teamtitle) { ?>
			<p class="team-title"><?php echo $teamtitle; ?></p>
			<?php } ?>				
				  
		</div>	
			
	</a>	
			                     			
</div>