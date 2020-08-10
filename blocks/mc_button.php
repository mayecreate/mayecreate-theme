<?php $button_text = esc_html(get_field("button_text")); ?>
<?php $button_link = esc_html(get_field("button_link")); ?>

<?php $large_button = ('Large' == get_field('button_type')); ?>
<?php $_blank = ('_blank' == get_field('target')); ?>
<?php $block = ('block' == get_field('additional_class_options')); ?>
<?php $center = ('center' == get_field('additional_class_options')); ?>

<a class="btn-mayecreate<?php if ($large_button) { ?> large<?php } ?><?php if (in_array('block', get_field('additional_class_options'))) { ?> block<?php } ?><?php if (in_array('center', get_field('additional_class_options'))) { ?> center<?php } ?>" href="<?php echo $button_link; ?>" <?php if ($_blank) { ?> target="_blank" <?php } ?>><?php echo $button_text; ?></a> 