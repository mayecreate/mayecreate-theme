<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">


<?php 

/**
 * ==========================================================
 * MayeCreate Title
 * ==========================================================
 */

	echo '<title>';
	
	/* Print the <title> tag based on what is being viewed. */
	global $page, $paged;
	
	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'skematik' ), max( $paged, $page ) );
	
	echo '</title>';
?>


<?php if (get_theme_mod('facebook_opengraph', 'not-include') == 'include') { 
		mayecreate_facebook_opengraph();
} ?>	






<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/html5.js"></script>
<![endif]-->
<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<!-- Fonts -->
	
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
<link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500' rel='stylesheet'>
<?php wp_head(); ?>
    
    

    
<div id="skip"><a href="#content">Skip to Main Content</a></div>

</head>



<?php global $containerWidth; ?> 

<body <?php body_class(); ?>>


<div id="pagewrapper">
<a id="top"></a>

<?php  
/**
 * ==========================================================
 * 	This conditional statement customizes the site navbar based on three settings in the customizer.
 *
 * 	Navbar Style: Changes the navbar to scroll with page (static) or stay attached to top of screen (fixed).
 * 	Top Navbar Visibility: Make a Second nav bar is display above the main menu.
 *	Navbar Stick On Scroll: Turns on the function that make the page swtich from scroll with screen to stick 
 * 	to top when the navbar reaches the top of the screen.
 *
 * ==========================================================
 *
 */

if (get_theme_mod('navbar_stick_on_scroll', 'navbar-static-scroll') == 'navbar-static-scroll') { ?>
		<?php get_template_part('partials/nav'); ?>	
		
		<?php if (is_front_page()) { ?>
				<div id="homeContentWrap">
		<?php } else { ?>
        		<div id="contentwrap">
        <?php } ?>	



<?php }elseif (get_theme_mod('navbar_stick_on_scroll', 'navbar-static-scroll') == 'navbar-fix-scroll') { ?>
		<?php get_template_part('partials/nav','scroll'); ?>
        
		<?php if (is_front_page()) { ?>
				<div id="homeContentWrap" class="scroll">
		<?php } else { ?>
                <div id="contentwrap" class="scroll">
        <?php } ?>		

<?php }?>


<div class="clear"></div>


<?php  
/**
 * ==========================================================
 * This conditional statement customizes the page header based on the page.  If it is front page it loads the 
 * carousel for the carousel custom post type.  If it is and internal page it loads the featured
 * image for that page.
 *
 * For live template remove all of line 164 except the 'if (is_front_page()){' part
 *
 * The width of the carousel on the home page is determined by the size of it containing element and the 
 * height is detemined by the slide proportionally. 
 *
 *
 * ==========================================================
 */

if ( (is_front_page()) || (is_page(211)) || (is_page(214)) || (is_page(217)) || (is_page(520)) ){ ?>

	<div id="homefeatured">
	
    	<?php if(get_theme_mod('carousel_type', 'standard-posts') == 'standard-posts') { 
			
			get_template_part('partials/content','carouselStandard');
			
		} elseif(get_theme_mod('carousel_type', 'standard-posts') == 'custom-post-types') {
			
			get_template_part('partials/content','carouselPosts');
		
		} elseif(get_theme_mod('carousel_type', 'standard-posts') == 'no-carousel') { 
			
			//echo nothing;
		
		} ?>
        
    </div><!-- homefeatured -->
    
<?php } elseif (is_home()) { ?>
        <div class="pagehead" id="internalfeatured" style=" max-height: 600px; background-image: url('<?php bloginfo('url'); ?>/wp-content/uploads/2015/12/86480546.jpg')">
            <div class="container">
                <?php mayecreate_page_title();?>
            </div>
        </div>
<?php } elseif (is_404()) { ?>
		<div class="pagehead" id="internalfeatured" style=" max-height: 600px; background-image: url('<?php bloginfo('url'); ?>/wp-content/uploads/2015/12/86480546.jpg')">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-12 page-header">
                                <h1 class="entry-title">ERROR 404</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php } elseif (is_search()) { ?>
		<div class="pagehead" id="internalfeatured" style=" max-height: 600px; background-image: url('<?php bloginfo('url'); ?>/wp-content/uploads/2015/12/86480546.jpg')">
            <div class="container">
				<div class="row">
					<div class="col-md-12 page-header">
						<h1 class="entry-title">Search Results for: <span><?php  echo get_search_query(); ?></span></h1>
					</div>
				</div>
			</div>
		</div>
<?php } elseif (is_archive()) { ?>
		<div class="pagehead" id="internalfeatured" style=" max-height: 600px; background-image: url('<?php bloginfo('url'); ?>/wp-content/uploads/2015/12/86480546.jpg')">
            <div class="container">
				<div class="row">
					<div class="col-md-12 page-header">
						<h1 class="entry-title">
							<?php						
								if (taxonomy_exists('wpsc_product_category')){
									_e( 'Products in the', 'skematik' );

								} elseif ( is_category() ) {
									printf( __( '%s', 'skematik' ), '<span>' . single_cat_title( '', false ) . '</span>' );

								} elseif ( is_tag() ) {
									printf( __( 'Tag Archives: %s', 'skematik' ), '<span>' . single_tag_title( '', false ) . '</span>' );

								} elseif ( is_author() ) {
									/* Queue the first post, that way we know
									* what author we're dealing with (if that is the case).
									*/
									the_post();
									printf( __( 'Author Archives: %s', 'skematik' ), '<span class="vcard"><a class="url fn n" href="' . get_author_posts_url( get_the_author_meta( "ID" ) ) . '" title="' . esc_attr( get_the_author() ) . '" rel="me">' . get_the_author() . '</a></span>' );
									/* Since we called the_post() above, we need to
									* rewind the loop back to the beginning that way
									* we can run the loop properly, in full.
									*/
									rewind_posts();

								} elseif ( is_day() ) {
									printf( __( 'Daily Archives: %s', 'skematik' ), '<span>' . get_the_date() . '</span>' );

								} elseif ( is_month() ) {
									printf( __( 'Monthly Archives: %s', 'skematik' ), '<span>' . get_the_date( 'F Y' ) . '</span>' );

								} elseif ( is_year() ) {
									printf( __( 'Yearly Archives: %s', 'skematik' ), '<span>' . get_the_date( 'Y' ) . '</span>' );

								} elseif (taxonomy_exists('wpsc_product_category')){
									_e( 'Products in the', 'skematik' );

								} else {
									printf( __( '%s', 'skematik' ), '<span>' . single_cat_title( '', false ) . '</span>' );

								}
								?>
						</h1>
					</div>
				</div>
			</div>
		</div>	
<?php } elseif(is_page(1690)) { ?>
    <div class="resources_header">
        <div class="container">
            <?php mayecreate_page_title();?>
        </div>
    </div>
<?php } else { ?>
	
	<?php if (has_post_thumbnail() ) { ?>
	<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id(), 'head' ); ?>
		<div class="pagehead" id="internalfeatured" style=" max-height: 600px; background-image: url('<?php echo $image[0]; ?>')">
            <div class="container">
              <?php mayecreate_page_title();?>
            </div>
        </div>
	<?php } else { ?>
		<div class="pagehead" id="internalfeatured" style=" max-height: 600px; background-image: url('<?php bloginfo('url'); ?>/wp-content/uploads/2015/12/86480546.jpg')">
            <div class="container">
                <?php mayecreate_page_title();?>
            </div>
        </div>
    <?php } ?>
           

		
        <?php } ?>

<div id="page"> <!--Begin Page -->
<div class="pagebreak_fix">
<div class="hfeed site <?php echo $containerWidth; ?>">
<main id="content">
