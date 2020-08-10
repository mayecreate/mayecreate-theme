<div class="col-md-12">
<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post();?>
		<?php the_content(); ?>
	<?php endwhile; // end of the loop. ?>
					
	<?php else : ?>
		<?php get_template_part( 'no-results', 'content' ); ?>
<?php endif; ?>
</div>