<?php
$classes = array();
if( !empty($instance['hover']) ) $classes[] = 'ow-button-hover';
?>
<div class="ow-button-base ow-button-align-<?php echo esc_attr($instance['align']) ?>">
	<a href="<?php echo esc_url($instance['url']) ?>" <?php if(!empty($instance['new_window'])) echo 'target="_blank"' ?> class="<?php echo esc_attr(implode(' ', $classes)) ?>">
		<span>
			<?php
			if(!empty($instance['icon'])) {
				echo wp_get_attachment_image($instance['icon'], 'original');
			}
			?>
			<?php echo wp_kses_post($instance['text']) ?>
		</span>
	</a>
</div>