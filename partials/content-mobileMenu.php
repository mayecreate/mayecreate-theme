<div id="drawer-menu" class="menu-mobile-menu-container">           
                

    <?php // Uncomment to add search to the drawer menu ?>
    <!-- <form role="search" method="get" id="searchform" class="navbar-form" action="<?php echo home_url( '/' ); ?>">
        <div class="form-group">
            <label class="screen-reader-text" for="s">Search for:</label>
            <input type="text" class="form-control" placeholder="Search" value="Search" name="s" id="s" onfocus="if(this.value == 'Search') { this.value = ''; }" />
            <button type="submit" class="btn btn-default"><i class="fa fa-search" aria-hidden="true"></i></button>
        </div>
    </form> -->


<?php 



/*
==========================================================
MOBILE MENU USED IN THE SLIDE OUT DRAWER
==========================================================
*/
// Visit http://codex.wordpress.org/Function_Reference/wp_nav_menu for explanation of how this works.
			
$mobileMenu = array(
					'theme_location'  => 'mobile-menu',
					'container'       => '',
					'container_class' => '',
					'container_id'    => 'drawer-menu',
					'menu_class'      => 'menu',
					'menu_id'         => '',
					'echo'            => true,
					'fallback_cb'     => 'wp_page_menu',
					'before'          => '',
					'after'           => '',
					'link_before'     => '<span>',
					'link_after'      => '</span>',
					'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
					'depth'           => 0,
					'walker'          => ''
					); ?>


<?php wp_nav_menu($mobileMenu); ?>


<?php echo '</div>'; ?>