<div id="blogCatList" class="sidebarSection">
	<h3 class="sidebarTitle">Categories:</h3>
	<ul class="categoryList">

		<?php 
		    $args = array(
			'show_option_all'    => '',
			'orderby'            => 'name',
			'order'              => 'ASC',
			'style'              => 'list',
			'show_count'         => 0,
			'hide_empty'         => 1,
			'use_desc_for_title' => 1,
			'child_of'           => 0,
			'feed'               => '',
			'feed_type'          => '',
			'feed_image'         => '',
			'exclude'            => '',
			'exclude_tree'       => '',
			'include'            => '',
			'hierarchical'       => 0,

			'title_li'           => __( '' ),
			
			'show_option_none'   => __( '' ),
			'number'             => null,
			'echo'               => 1,
			'depth'              => 0,
			'current_category'   => 0,
			'pad_counts'         => 0,
			'taxonomy'           => 'category',
			'walker'             => null
		    );
		    wp_list_categories( $args ); 
		?>
	</ul>
</div>




<div id="blogArchiveList" class="sidebarSection">
	<h3 class="sidebarTitle">Archives:</h3>
	<ul class="archiveYearList">

		<?php
		/**/
		$years = $wpdb->get_col("SELECT DISTINCT YEAR(post_date)
		FROM $wpdb->posts WHERE post_status = 'publish'
		AND post_type = 'post' ORDER BY post_date DESC");
		foreach($years as $year) :
		?>
		<li><a href="JavaScript:void()"><?php echo $year; ?></a>

		    <ul class="archive-sub-menu" style="display: none;">
		        <?    $months = $wpdb->get_col("SELECT DISTINCT MONTH(post_date)
		        FROM $wpdb->posts WHERE post_status = 'publish' AND post_type = 'post'
		        AND YEAR(post_date) = '".$year."' ORDER BY post_date DESC");
		        foreach($months as $month) :
		        ?>
		            <li><a href="<?php echo get_month_link($year, $month); ?>">

		                <?php echo date( 'F', mktime(0, 0, 0, $month) );?></a>

		            </li>

		        <?php endforeach;?>

		    </ul>

		</li>

		<?php endforeach; ?>
	</ul>
</div>