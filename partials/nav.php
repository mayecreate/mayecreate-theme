<?php global $containerWidth; ?> 

<?php if (get_theme_mod('logo_image_position', 'in-nav') == 'outside-nav') { ?>
    	<div id="aboveNav">
    	<div class="<?php echo $containerWidth ;?> ">
    	<div class="row">
    	<div class="col-md-12">
      			<?php mayecreate_custom_logo(); ?>
			
      	</div>
      	</div>
      	</div>	
		</div>

<?php } ?>


<?php if (get_theme_mod('top_navbar_visibility', 'top-navbar-hidden') == 'top-navbar-visible') { ?>
        <div id="navbarTop" class="navbar <?php echo get_theme_mod( 'navbar_style', 'navbar-static-top' );?> navbar-default">
            <div class="<?php echo $containerWidth; ?>" > 
                <?php  // Visit http://codex.wordpress.org/Function_Reference/wp_nav_menu for explanation of how this works.
                    
                    $topMenu = array(
                        'theme_location'  => 'top-menu',
                        'container'       => 'nav',
                        'container_class' => '',
                        'container_id'    => 'top_nav',
                        'menu_class'      => 'menu pull-right',
                        'menu_id'         => '',
                        'echo'            => true,
                        'fallback_cb'     => '',
                        'before'          => '',
                        'after'           => '',
                        'link_before'     => '<span>',
                        'link_after'      => '</span>',
                        'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                        'depth'           => 3,
                        'walker'          => ''
                        ); ?>
    
                    <?php wp_nav_menu($topMenu); ?>
            </div>
        </div>
<?php } ?>
   

<div id="navbarBottom" class="navbar <?php echo get_theme_mod( 'navbar_style', 'navbar-static-top' );?> navbar-default ">
		<div class="<?php echo $containerWidth; ?>" > 
			<div class="navbar-header">
      			
      			<div id="mobile_menu">
              <a href="#drawer-menu" class="nav-button nav-button-x">
            <span>toggle menu</span>
          </a>
          </div>
				
				<?php if (get_theme_mod('logo_image_position', 'in-nav') == 'in-nav') { ?>
      			<?php mayecreate_custom_logo(); ?>
      			<?php } ?>
		
			</div>
			<form method="get" id="searchform" action="<?php bloginfo('url'); ?>">
				   <input class="text" type="text" value=" " name="s" id="s" placeholder="Search" />
				   <input type="submit" class="submit" name="submit" value="" />
				   </form>
			<?php  // Visit http://codex.wordpress.org/Function_Reference/wp_nav_menu for explanation of how this works.
			
				$mainMenu = array(
					'theme_location'  => 'main-menu',
					'container'       => 'nav',
					'container_class' => '',
					'container_id'    => 'main_nav',
					'menu_class'      => 'menu pull-right',
					'menu_id'         => '',
					'echo'            => true,
					'fallback_cb'     => '',
					'before'          => '',
					'after'           => '',
					'link_before'     => '<span>',
					'link_after'      => '</span>',
					'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
					'depth'           => 3,
					'walker'          => ''
					); ?>

				<?php wp_nav_menu($mainMenu); ?>
		</div>
	</div>
	