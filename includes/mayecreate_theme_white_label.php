<?php 
/*
 * White labels the theme login for first line of security
 * @return void
 */

function mayecreate_custom_login_logo() {
	echo '<style type="text/css">
	body.login {
		background: #ffffff;
	}
	#login {
		width: 95%;
		max-width:600px;
		padding: 70px 0 0 0;
		margin: auto;
	}
	.login h1 a {
		max-width: 400px !important;
		width:100% !important;
		height: 300px !important;
		background:url('.get_theme_file_uri().'/img/login-logo.png) !important;
		background-repeat: no-repeat !important;
		background-size: contain !important;
		margin-bottom: 0;
	}
	.login form {
		background: transparent;
		-webkit-box-shadow: none;
    	box-shadow: none;
		margin-top: 0;
		border:0 none;
	}
	.login label {
		/* Change the style of the login form labels here */
	}	
	.login form .forgetmenot label {
   		/* Change the remember me checkbox label here */
	}
	
	input[type=text]:focus, input[type=password]:focus, input[type=checkbox]:focus{
		/* Style the form field focus state */
		border-color: #6c9d30;
		-webkit-box-shadow: 0 0 12px rgba(108,157,48,.8);
		box-shadow: 0 0 12px rgba(108,157,48,.8);
	}
	.wp-core-ui .button-group.button-large .button, .wp-core-ui .button.button-large{
		padding: 18px 40px;
		line-height: 0;
		font-size: 18px;
	}
	.wp-core-ui .button-primary {
		background: #6c9d30;
		border-color: #5F9023;
		-webkit-box-shadow: none;
		box-shadow: none;
		color: #fff;
		text-decoration: none;
		text-shadow: none;
	}
	.wp-core-ui .button-primary:hover, .wp-core-ui .button-primary:active, .wp-core-ui .button-primary:focus {
		background: #5F9023;
		border-color: #5F9023;
		-webkit-box-shadow: none;
		box-shadow: none;
		color: #fff;
	}
	
</style>';
}
add_action('login_head', 'mayecreate_custom_login_logo'); 

function wpb_custom_logo() {
echo '
<style type="text/css">
#wpwrap h1 {
background-image: url(' . get_template_directory_uri() . '/img/login-logo1.png) !important;
background-position: left center !important;
background-repeat: no-repeat !important;
background-size: auto 100% !important;
padding: 0 0 5px 52px !important;
color: #23282d !important;
font-weight: 400 !important;
}
</style>
';
}
//hook into the administrative header output
add_action('wp_before_admin_bar_render', 'wpb_custom_logo');

add_action( 'wp_before_admin_bar_render', function() {
global $wp_admin_bar;
$wp_admin_bar->remove_menu('wp-logo');
}, 7 );

function my_login_logo_url() {
	return get_bloginfo( 'url' );
}
add_filter( 'login_headerurl', 'my_login_logo_url' );

function my_login_logo_url_title() {
return get_bloginfo( 'name' );
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' ); 

function remove_footer_admin () {
 
echo 'Fueled by <a href="http://www.wordpress.org" target="_blank">WordPress</a> | <a href="http://www.mayecreate.com/what-we-do/web-design/" target="_blank">Web Design by MayeCreate Design</a></p>';
 
}
  
add_filter('admin_footer_text', 'remove_footer_admin');


remove_action('welcome_panel', 'wp_welcome_panel');


