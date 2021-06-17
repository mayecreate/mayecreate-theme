<?php $optional_title = esc_html(get_field("optional_title")); ?>
<?php $post_category = esc_html(get_field("post_category")); ?>
<?php $optional_button_link = esc_html(get_field("optional_button_link")); ?>
<?php $optional_button_link_text = esc_html(get_field("optional_button_link_text")); ?>
<?php if ($optional_button_link_text) { 
	$optional_button_link_text = $optional_button_link_text;
} else {
	$optional_button_link_text = "Learn More";
} ?>
<?php if ($optional_title) { ?>
	<div class="row">
		<div class="col-md-12">
			<h2><?php echo $optional_title; ?></h2>
		</div>
	</div>
<?php } ?>
<?php if (is_admin()) { ?>
	<p class="center" style="color: #FF0004"><strong>============== Featured post from your selected category will show here ==============</strong></p>
	<?php if ($optional_button_link) { ?>
		<span class="btn-mayecreate"><?php echo $optional_button_link_text; ?></span>
	<?php } ?>
<?php } else { ?>
	<?php if ('one' == get_field('number_of_columns')) {
		$bootstrap_columns = "col-md-12";
		$post_number = "1";
	} elseif ('two' == get_field('number_of_columns')) {
		$bootstrap_columns = "col-md-6";
		$post_number = "2";
	} elseif ('three' == get_field('number_of_columns')) {
		$bootstrap_columns = "col-md-6 col-lg-4";
		$post_number = "3";
	} elseif ('four' == get_field('number_of_columns')) {
		$bootstrap_columns = "col-md-6 col-lg-3";
		$post_number = "4";
	} ?>
	<div class="row justify-content-center">
		<?php // args
		$args = array(
		'posts_per_page'	=> $post_number,
		'order'			=> 'DESC', // ASC = OLDEST EVENT FIRST, DESC= NEWEST EVENT FIRST 
		'post_type' => 'post',
		'paged' => $paged,
		); ?>

		<?php // query
		$wp_query = new WP_Query( $args );

		// loop
		while( $wp_query->have_posts() )
		{
		$wp_query->the_post();

		?>
			<div class="<?php echo $bootstrap_columns; ?>">
				<?php if ('one' == get_field('number_of_columns')) { ?>
					<?php get_template_part('partials/loop','blog'); ?>
				<?php } else { ?>
					<?php get_template_part('partials/loop','blog-card'); ?>
				<?php } ?>
			</div>
		<?php } // end the loop ?>
		<!--Reset Query-->
		<?php wp_reset_query();?>
	</div>
	<?php if ($optional_button_link) { ?>
		<div class="row">
			<div class="col-md-12">
				<a class="btn-mayecreate" href="<?php echo $optional_button_link; ?>" target="_blank"><?php echo $optional_button_link_text; ?></a>
			</div>
		</div>
	<?php } ?>
	
<?php } ?>