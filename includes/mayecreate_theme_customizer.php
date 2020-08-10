<?php

/*
==================================================================
THEME CUSTOMIZER
Defines an array of options that will be saved as 'theme_mod'
settings in your options table.
==================================================================
*/

add_action('customize_register', 'mayecreate_customizer');
	function mayecreate_customizer($wp_customize) {
	global $wp_customize;

	/* Add a custom class for textarea */
	class Example_Customize_Textarea_Control extends WP_Customize_Control {
		public $type = 'textarea';
	
		public function render_content() {
			?>
			<label>
			<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
			<textarea rows="5" style="width:100%;" <?php $this->link(); ?>><?php echo esc_textarea( $this->value() ); ?></textarea>
			</label>
			<?php
		}
	}
do_action('mayecreate_add_to_customizer');
}




/*
==================================================================
NOW WE REGISTER ALL THE CORE THEME CUSTOMIZER OPTIONS AND ADD THEM
USING THE mayecreate_add_to_customizer ACTION HOOK. WE DO THIS SO
THAT THEY CAN BE EASILY REMOVED BY DEVELOPERS. IF YOU WANT
TO REGISTER YOUR OWN, SIMPLY COPY ANY OF THE SECTIONS BELOW INTO
YOUR OWN THEME OR PLUGIN AND EDIT FOR YOUR NEEDS. 
==================================================================
*/



/*
==================================================================
Reorders the default Wordpress Sections to allow me to collate 
in of custom sections in the order I want them in.
==================================================================
*/
function remove_styles_sections(){
    global $wp_customize;

	$wp_customize->get_section('title_tagline')->priority = 60;
	$wp_customize->get_section('static_front_page')->priority = 140;
	$wp_customize->get_panel('widgets')->priority = 180;


}

// Priority 20 so that we remove options only once they've been added
add_action( 'mayecreate_add_to_customizer', 'remove_styles_sections', 20 );



/*
==================================================================
Site Width
==================================================================
*/
add_action('mayecreate_add_to_customizer','mayecreate_sitecontainer_options');

function mayecreate_sitecontainer_options($wp_customize) {
		global $wp_customize;
		
		$wp_customize->add_section( 'container_settings', array(
			'title'          => 'Container',
			'priority'       => 20,
		));
		$wp_customize->add_setting( 'container_width', array(
			'default'       => 'fixed-width',
		));
		$wp_customize->add_control( 'container_width', array(
			'label'   		=> 'Choose Max Site Width:',
			'section' 		=> 'container_settings',
			'settings' 		=> 'container_width',
			'type'    		=> 'select',
			'priority'  	=> 10,
			'choices'   	=> array(
				'full-width' 	=> 'Fullwidth',
				'fixed-width'	=> 'Fixed Width',
			),
		));
}


/*
==================================================================
Logo
==================================================================
*/
add_action('mayecreate_add_to_customizer','mayecreate_logo_customizer_options');
function mayecreate_logo_customizer_options($wp_customize) {
	global $wp_customize;
	global $fontchoices;
	
	$wp_customize->add_section( 'site_logo_settings', array(
		'title'          => 'Logo',
		'priority'       => 80,
	) );

	/* Logo Image Upload */
	$wp_customize->add_setting( 'logo_image', array(
	) );
	
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'logo_image', array(
		'label'    => __( 'Logo Image', 'skematik'),
		'section'  => 'site_logo_settings',
		'settings' => 'logo_image',
	) ) );
	
	/* Logo Position */
	$wp_customize->add_setting( 'logo_image_position', array(
	'default'        => 'in-nav',
	) );
	
	$wp_customize->add_control( 'logo_image_position', array(
	'label'   => 'Logo Image Position:',
	'section' => 'site_logo_settings',
	'type'    => 'select',
	'priority'        => 20,
	'choices'    => array(
		'in-nav' 		=> 'In Navigation Bar',
		'outside-nav' 	=> 'Outside Navigation Bar',
		),
	) );

}



/*
==================================================================
Navbar
==================================================================
*/
add_action('mayecreate_add_to_customizer','mayecreate_navbar_customizer_options');
function mayecreate_navbar_customizer_options($wp_customize) {
	global $wp_customize;
	
	$wp_customize->add_section( 'navbar_settings', array(
		'title'          => 'Navbar',
		'priority'       => 90,
	) );

	
	/* Navbar Style */
	$wp_customize->add_setting( 'navbar_style', array(
	'default'        => 'navbar-fixed-top',
	) );
		
	$wp_customize->add_control( 'navbar_style', array(
		'label'   		=> 'Navbar Style:',
		'section' 		=> 'navbar_settings',
		'type'    		=> 'select',
		'priority'      => 20,
		'choices'    => array(
			'navbar-fixed-top' => 'Fixed',
			'navbar-static-top' => 'Static',
			),
	) );
	
	/* Menu Fixed on Scroll */
	$wp_customize->add_setting( 'navbar_stick_on_scroll', array(
	'default'        => 'navbar-static-scroll',
	) );
	
	$wp_customize->add_control( 'navbar_stick_on_scroll', array(
		'label'   		=> 'Navbar Stick On Scroll:',
		'description' 	=> 'The Navbar Style setting must be set to Static',
		'section' => 'navbar_settings',
		'type'    => 'select',
		'priority'        => 10,
		'choices'    => array(
			'navbar-static-scroll' => 'No',
			'navbar-fix-scroll' => 'Yes',
			),
	) );
	
	
	/* Top Navbar */
	$wp_customize->add_setting( 'top_navbar_visibility', array(
	'default'        => 'top-navbar-hidden',
	) );
		
	$wp_customize->add_control( 'top_navbar_visibility', array(
		'label'   => 'Top Navbar Visibility:',
		'section' => 'navbar_settings',
		'type'    => 'select',
		'priority'        => 10,
		'choices'    => array(
			'top-navbar-hidden' => 'Hidden',
			'top-navbar-visible' => 'Visible',
			),
	) );

}// END NAVBAR SETTINGS

/*
==================================================================
Breadcrumb Naivgation
==================================================================
*/
add_action('mayecreate_add_to_customizer','mayecreate_breadcrumb_customizer_options');
function mayecreate_breadcrumb_customizer_options($wp_customize) {
	global $wp_customize;
	$wp_customize->add_section( 'breadcrumb_settings', array(
		'title'          => 'Breadcrumb Navigation',
		'priority'       => 90,
	) );

	/* Navbar Style */
	$wp_customize->add_setting( 'breadcrumb_nav', array(
		'default'        => 'no-breadcrumbs-nav',
	) );
	$wp_customize->add_control( 'breadcrumb_nav', array(
		'label'   		=> 'Show Breadcrumb Nav:',
		'section' 		=> 'breadcrumb_settings',
		'type'    		=> 'select',
		'priority'      => 20,
		'choices'    => array(
			'no-breadcrumbs-nav' => 'No',
			'breadcrumbs-nav' => 'Yes',
			),
	) );

}

/*
==================================================================
HOME PAGE CAROUSEL OPTIONS
==================================================================
*/
add_action('mayecreate_add_to_customizer','mayecreate_carousel_options');
function mayecreate_carousel_options($wp_customize) {
	global $wp_customize;
	$wp_customize->add_section( 'home_carousel_settings', array(
		'title'          => 'Carousel Options',
		'priority'       => 160,
	) );
	
	/* Builds the chooser to choose style of slider
	================================================================== */
	$wp_customize->add_setting( 'carousel_type', array(
		'default'    => 'standard-posts',
	));
	$wp_customize->add_control( 'carousel_type', array(
			'label'   		=> 'Choose Carousel Type:',
			'section' 		=> 'home_carousel_settings',
			'settings' 		=> 'carousel_type',
			'type'    		=> 'select',
			'priority'  	=> 10,
			'choices'   	=> array(
				'standard-posts'	=> 'Standard Posts',
				'custom-post-types' => 'Custom Post Types',
				'no-carousel'		=> 'No Carousel',
			),
	));
	
	/* Gets the list of categories and builds the category chooser
	================================================================== */
	require_once dirname(__FILE__) . '/customizer/category-dropdown-custom-control.php';
	$wp_customize->add_setting( 'carousel_category', array(
		'default'        => '',
	));
	
	$wp_customize->add_control( new Category_Dropdown_Custom_Control( $wp_customize, 'category_dropdown_setting', array(
            'label'   		=> 'Choose Carousel Category:',
			'description' 	=> 'The Carousel Type setting must be set to Standard Posts for this setting to take effect. The category must have posts to display here.',
            'section' 		=> 'home_carousel_settings',
            'settings' 		=> 'carousel_category',
            'priority' => 20
       		) 
	));
	
	/* Sets up the slide layout options: Link Style
	================================================================== */
	$wp_customize->add_setting( 'carousel-links', array(
		'default'    => 'link-slide',
	));
	$wp_customize->add_control( 'carousel-links', array(
			'label'   		=> 'How are Slides Linked:',
			'description' 	=> 'Works for both Carousel Types.',
			'section' 		=> 'home_carousel_settings',
			'settings' 		=> 'carousel-links',
			'type'    		=> 'select',
			'priority'  	=> 20,
			'choices'   	=> array(
				'link-slide'	=> 'Link Whole Slide',
				'link-button'	=> 'Link With Button',
				'link-title'	=> 'Link Titles',
				'no-link'		=> 'No Link',
				
			),
	));
	
	
	
	/* Sets up the slide layout options: Carousel Excerpt
	================================================================== */
	$wp_customize->add_setting( 'carousel_layout_excerpt', array(
		'default'    => 'no-excerpt',
	));
	$wp_customize->add_control( 'carousel_layout_excerpt', array(
			'label'   		=> 'Display Excerpt:',
			'description' 	=> 'The Carousel Type setting must be set to Standard Posts for this setting to take effect.',
			'section' 		=> 'home_carousel_settings',
			'settings' 		=> 'carousel_layout_excerpt',
			'type'    		=> 'select',
			'priority'  	=> 20,
			'choices'   	=> array(
				'no-excerpt'	=> 'No',
				'yes-excerpt'	=> 'Yes',
			),
	));
	
	
	/* Sets up the slide layout options: Direction Navigation
	================================================================== */
	$wp_customize->add_setting( 'carousel_layout_dir_nav', array(
		'default'    => 'yes-arrows',
	));
	$wp_customize->add_control( 'carousel_layout_dir_nav', array(
			'label'   		=> 'Display Direction Navigation:',
			'description' 	=> 'Works for both Carousel Types.',
			'section' 		=> 'home_carousel_settings',
			'settings' 		=> 'carousel_layout_dir_nav',
			'type'    		=> 'select',
			'priority'  	=> 20,
			'choices'   	=> array(
				'yes-arrows'	=> 'Yes',
				'no-arrows'	=> 'No',
				
			),
	));
	
	/* Sets up the slide layout options: Position Indicators
	================================================================== */
	$wp_customize->add_setting( 'carousel-indicators', array(
		'default'    => 'yes-dots',
	));
	$wp_customize->add_control( 'carousel-indicators', array(
			'label'   		=> 'Display Position Indicators:',
			'description' 	=> 'Works for both Carousel Types.',
			'section' 		=> 'home_carousel_settings',
			'settings' 		=> 'carousel-indicators',
			'type'    		=> 'select',
			'priority'  	=> 20,
			'choices'   	=> array(
				'yes-dots'	=> 'Yes',
				'no-dots'	=> 'No',
				
			),
	));
	
	

	
	

}

/*
==================================================================
BACKGROUND
==================================================================
*/
add_action('mayecreate_add_to_customizer','mayecreate_background_customizer_options');
function mayecreate_background_customizer_options($wp_customize) {
	global $wp_customize;
	$wp_customize->add_section( 'site_background_settings', array(
		'title'          => 'Background',
		'priority'       => 40,
	) );

	/* Background Color */
	$wp_customize->add_setting( 'site_background_color', array(
		'default'        => '',
	) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'site_background_color', array(
		'label'   => 'Background Color',
		'section' => 'site_background_settings',
		'settings'   => 'site_background_color',
	) ) );

	/* Background Image Upload */
	$wp_customize->add_setting( 'site_background_image', array(
	) );
	
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'site_background_image', array(
		'label'    => __( 'Background Image' , 'skematik'),
		'section'  => 'site_background_settings',
		'settings' => 'site_background_image',
	) ) );

	/* Background Image Repeat */
	$wp_customize->add_setting( 'site_background_repeat', array(
		'default'        => 'repeat',
	) );
	
	$wp_customize->add_control( 'site_background_repeat', array(
		'label'   => 'Background Image Repeat:',
		'section' => 'site_background_settings',
		'type'    => 'select',
		'choices'    => array(
			'repeat' => 'Repeat',
			'repeat-x' => 'Repeat Horizontally',
			'repeat-y' => 'Repeat Vertically',
			'no-repeat' => 'No Repeat',
			),
	) );
	
	/* Background Image Position */
	$wp_customize->add_setting( 'site_background_position', array(
		'default'        => 'top center',
	) );
	
	$wp_customize->add_control( 'site_background_position', array(
		'label'   => 'Background Image Position:',
		'section' => 'site_background_settings',
		'type'    => 'select',
		'choices'    => array(
			'top center' => 'Top Center',
			'top left' => 'Top Left',
			'top right' => 'Top Right',
			'bottom center' => 'Bottom Center',
			'bottom left' => 'Bottom Left',
			'bottom right' => 'Bottom Right',
			),
	) );
	
	/* Background Image Attachment */
	$wp_customize->add_setting( 'site_background_attachment', array(
		'default'        => 'scroll',
	) );
	
	$wp_customize->add_control( 'site_background_attachment', array(
		'label'   => 'Background Image Attachment:',
		'section' => 'site_background_settings',
		'type'    => 'select',
		'choices'    => array(
			'scroll' => 'Scroll (moves with the content)',
			'fixed' => 'Fixed (remains static behind content)',
			),
	) );
}// END BACKGROUND SETTINGS



/*
==================================================================
FOOTER
==================================================================
*/
add_action('mayecreate_add_to_customizer','mayecreate_footer_customizer_options');
function mayecreate_footer_customizer_options($wp_customize) {
	global $wp_customize;
	/* Add footer section and color styles to customizer */
	$wp_customize->add_section( 'footer_settings', array(
		'title'          => 'Footer',
		'priority'       => 200,
	) );
	
	
	
	/* Footer Widgets */
	$wp_customize->add_setting( 'footer_widgets_number', array(
		'default'        => 4,
	) );	
	
	$wp_customize->add_control( 'footer_widgets_number', array(
		'label'   => 'Number of Footer Widgets:',
		'section' => 'footer_settings',
		'type'    => 'select',
		'choices'    => array(
			0 => '0',
			1 => '1',
			2 => '2',
			3 => '3',
			4 => '4',
			),
	'priority'       => 6,
	) );

	/* Footer Background Color */
	$wp_customize->add_setting( 'footer_bg_color', array(
		'default'        => '',
	) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_bg_color', array(
		'label'   => 'Footer Background Color',
		'section' => 'footer_settings',
		'settings'   => 'footer_bg_color',
		'priority'       => 10,
	) ) );
	
	/* Background Image Upload */
	$wp_customize->add_setting( 'footer_background_image', array(
	) );
	
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'footer_background_image', array(
		'label'    => __( 'Footer Background Image' , 'mayecreate'),
		'section'  => 'footer_settings',
		'settings' => 'footer_background_image',
		'priority'       => 15,
	) ) );

}// END FOOTER SETTINGS

/*
==================================================================
Social Media
==================================================================
*/
add_action('mayecreate_add_to_customizer','mayecreate_socialMedia_options');

function mayecreate_socialMedia_options($wp_customize) {
		global $wp_customize;
		
		$wp_customize->add_section( 'social_media', array(
			'title'		=> 'Social Media',
			'priority'  => 220,
		));
		$wp_customize->add_setting( 'social_twitter', array(
        	'default' 	=> '',
    	));
		$wp_customize->add_control('social_twitter', array(
        	'label' 	=> 'Twitter URL',
        	'section' 	=> 'social_media',
        	'settings'   => 'social_twitter',
        	'type' 		=> 'text',
   		));
   		$wp_customize->add_setting( 'social_facebook', array(
        	'default' 	=> '',
    	));
		$wp_customize->add_control('social_facebook', array(
        	'label' 	=> 'Facebook URL',
        	'section' 	=> 'social_media',
        	'settings'  => 'social_facebook',
        	'type' 		=> 'text',
   		));
   		$wp_customize->add_setting( 'social_linkedin', array(
        	'default' 	=> '',
    	));
		$wp_customize->add_control('social_linkedin', array(
        	'label' 	=> 'LinkedIn URL',
        	'section' 	=> 'social_media',
        	'settings'  => 'social_linkedin',
        	'type' 		=> 'text',
   		));
   		$wp_customize->add_setting( 'social_instagram', array(
        	'default' 	=> '',
    	));
		$wp_customize->add_control('social_instagram', array(
        	'label' 	=> 'Instagram URL',
        	'section' 	=> 'social_media',
        	'settings'  => 'social_instagram',
        	'type' 		=> 'text',
   		));
   		$wp_customize->add_setting( 'social_pinterest', array(
        	'default' 	=> '',
    	));
		$wp_customize->add_control('social_pinterest', array(
        	'label' 	=> 'Pinterest URL',
        	'section' 	=> 'social_media',
        	'settings'  => 'social_pinterest',
        	'type' 		=> 'text',
   		));
   		$wp_customize->add_setting( 'social_vimeo', array(
        	'default' 	=> '',
    	));
		$wp_customize->add_control('social_vimeo', array(
        	'label' 	=> 'Vimeo URL',
        	'section' 	=> 'social_media',
        	'settings'  => 'social_vimeo',
        	'type' 		=> 'text',
   		));
}

/*
==================================================================
Facebook Sharing
==================================================================
*/
add_action('mayecreate_add_to_customizer','mayecreate_facebook_opengraph_options');

function mayecreate_facebook_opengraph_options($wp_customize) {
		global $wp_customize;
		
		$wp_customize->add_section( 'facebook_opengraph_settings', array(
			'title'          => 'Facebook Sharing',
			'priority'       => 240,
		));
		$wp_customize->add_setting( 'facebook_opengraph', array(
			'default'       => 'not-include',
		));
		$wp_customize->add_control( 'facebook_opengraph', array(
			'label'   		=> 'Include Facebook Open Graph Code:',
			'description' 	=> 'This will include the facebook opengraph code in the head of the website. A plugin is still required to do the sharing.  MayeCreate recommends Simple Share Buttons.',
			'section' 		=> 'facebook_opengraph_settings',
			'settings' 		=> 'facebook_opengraph',
			'type'    		=> 'select',
			'priority'  	=> 10,
			'choices'   	=> array(
				'not-include' 	=> 'No',
				'include'		=> 'Yes',
			),
		));
		/* Logo Image Upload */
		$wp_customize->add_setting( 'facebook_image', array() );
	
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'facebook_image', array(
			'label'    		=> __('Default Share Image', 'skematik'),
			'description' 	=> 'This is the image that will be shared when Facebook can not find any other image to share. The minimum image size is 200 x 200 pixels.',
			'section'  		=> 'facebook_opengraph_settings',
			'settings' 		=> 'facebook_image',
		) ) );
}