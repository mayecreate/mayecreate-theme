<?php 
/*
==========================================================
FOOTER Menu, Social Media Bar and Credits
==========================================================
*/

global $containerWidth;
?>

<div class="<?php echo $containerWidth; ?>" >
	<div class="row">
		
		<div class="col-md-4 col-md-push-8">
			<?php get_template_part('partials/content','social'); ?>
		</div>

		<div class="col-md-8 col-md-pull-4">
			<?php  // Visit http://codex.wordpress.org/Function_Reference/wp_nav_menu for explanation of how this works.
			
					$footerMenu = array(
						'theme_location'  => 'footer-menu',
						'container'       => 'nav',
						'container_class' => '',
						'container_id'    => 'footer_nav',
						'menu_class'      => 'menu',
						'menu_id'         => '',
						'echo'            => true,
						'fallback_cb'     => '',
						'before'          => '',
						'after'           => '',
						'link_before'     => '<span>',
						'link_after'      => '</span>',
						'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
						'depth'           => 1,
						'walker'          => ''
						); ?>

					<?php wp_nav_menu($footerMenu); ?>


			<div id="credits">
			<p><?php printf( __( '&copy;', 'skematik' )); ?> <a href="<?php echo bloginfo('url');?>"><?php echo bloginfo('name');?></a> <?php echo date('Y');?> <span>|</span> <a href="http://www.mayecreate.com/what-we-do/web-design/" target="_blank">Web Design by MayeCreate Design</a></p>
          	</div>
		</div>
		
	</div>	
</div>
