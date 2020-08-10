<?php

function add_theme_caps() {
    
	// find out how to add and remove capabilities here: https://codex.wordpress.org/Roles_and_Capabilities
	
	// gets the role
    $role = get_role( 'editor' );

    // add capabilities to above role
    $role->remove_cap( 'install_themes' );
	$role->remove_cap( 'switch_themes' );
	$role->remove_cap( 'update_themes' );
	 
	
}
add_action( 'admin_init', 'add_theme_caps');