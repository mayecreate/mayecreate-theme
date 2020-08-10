<?php $full_width = ('Full Width' == get_field('page_break_style')); ?>
<?php $left_img = ('Left Image' == get_field('page_break_style')); ?>
<?php $right_img = ('Right Image' == get_field('page_break_style')); ?>

<?php $background_color = esc_html(get_field("background_color")); ?>
<?php $page_break_background = esc_html(get_field("page_break_background")); ?>
<?php $page_break_content = get_field("page_break_content"); ?>
<?php $additional_pagebreak_classes = get_field("additional_pagebreak_classes"); ?>

</div>
</div>
</div>
</div>


<?php if ($full_width) { ?>

	<?php if ($background_color && !$page_break_background) { ?>
	<div class="pagebreak <?php if ($additional_pagebreak_classes) { echo $additional_pagebreak_classes; } ?>" style="background-color:<?php echo $background_color; ?>;">
	<?php } elseif($page_break_background) { ?>
	<div class="pagebreak <?php if ($additional_pagebreak_classes) { echo $additional_pagebreak_classes; } ?>" style="background-image:url(<?php echo $page_break_background; ?>);">
	<?php } else { ?>
	<div class="pagebreak <?php if ($additional_pagebreak_classes) { echo $additional_pagebreak_classes; } ?>" style="background-color:#eee;">
	<?php } ?>
		<?php if ($background_color && $page_break_background) { ?>
		<div class="pagebreak_inner" style="background-color:<?php echo $background_color; ?>;"></div>
		<?php } ?>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<?php echo $page_break_content; ?>
					
<?php } elseif ($left_img) { ?>
					
	<?php if ($background_color) { ?>
	<div class="pagebreak pagebreak_left <?php if ($additional_pagebreak_classes) { echo $additional_pagebreak_classes; } ?>" style="background-color:<?php echo $background_color; ?>;">
	<?php } else { ?>
	<div class="pagebreak pagebreak_left <?php if ($additional_pagebreak_classes) { echo $additional_pagebreak_classes; } ?>">
	<?php } ?>
		<?php if ($background_color && !$page_break_background) { ?>
		<div class="pagebreak_left_img" style="background-color:<?php echo $background_color; ?>;"></div>
		<?php } elseif($page_break_background) { ?>
		<div class="pagebreak_left_img" style="background-image:url(<?php echo $page_break_background; ?>);"></div>
		<?php } else { ?>
		<div class="pagebreak_left_img" style="background-color:#eee;"></div>
		<?php } ?>
		<div class="pagebreak_left_content">
			<div class="container">
				<div class="pagebreak_container_inner">
					<?php echo $page_break_content; ?>
					
<?php } elseif ($right_img) { ?>
					
	<?php if ($background_color) { ?>
	<div class="pagebreak pagebreak_right <?php if ($additional_pagebreak_classes) { echo $additional_pagebreak_classes; } ?>" style="background-color:<?php echo $background_color; ?>;">
	<?php } else { ?>
	<div class="pagebreak pagebreak_right <?php if ($additional_pagebreak_classes) { echo $additional_pagebreak_classes; } ?>">
	<?php } ?>
		<?php if ($background_color && !$page_break_background) { ?>
		<div class="pagebreak_right_img" style="background-color:<?php echo $background_color; ?>;"></div>
		<?php } elseif($page_break_background) { ?>
		<div class="pagebreak_right_img" style="background-image:url(<?php echo $page_break_background; ?>);"></div>
		<?php } else { ?>
		<div class="pagebreak_right_img" style="background-color:#eee;"></div>
		<?php } ?>
		<div class="pagebreak_right_content">
			<div class="container">
				<div class="pagebreak_container_inner">
					<?php echo $page_break_content; ?>
<?php } ?>
		
				</div>
			</div>
		</div>
	</div>

<div class="pagebreak_fix"><div class="container"><div class="row"><div class="col-md-12">