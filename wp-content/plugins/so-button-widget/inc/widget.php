<?php

class SiteOrigin_Widget_Button_Widget extends SiteOrigin_Widget {
	function __construct() {
		parent::__construct(
			'sow-button',
			__('SiteOrigin Button', 'sow-button'),
			array(
				'description' => __('A customizable button widget.', 'sow-button'),
				'help' => 'http://siteorigin.com/'
			),
			array(

			),
			array(
				'text' => array(
					'type' => 'text',
					'label' => __('Title', 'sow-button'),
				),

				'icon' => array(
					'type' => 'media',
					'label' => __('Icon', 'sow-button'),
				),

				'align' => array(
					'type' => 'select',
					'label' => __('Align', 'sow-button'),
					'options' => array(
						'left' => __('Left', 'sow-button'),
						'right' => __('Right', 'sow-button'),
						'center' => __('Center', 'sow-button'),
						'justify' => __('Justify', 'sow-button'),
					),
				),

				'url' => array(
					'type' => 'text',
					'sanitize' => 'url',
					'label' => __('Destination URL', 'sow-button'),
				),

				'new_window' => array(
					'type' => 'checkbox',
					'default' => false,
					'label' => __('Open in New Window', 'sow-button'),
				),

				'theme' => array(
					'type' => 'select',
					'label' => __('Button Theme', 'sow-button'),
					'default' => 'atom',
					'options' => array(
						'atom' => __('Atom', 'sow-button'),
						'flat' => __('Flat', 'sow-button'),
						'wire' => __('Wire', 'sow-button'),
					),
				),


				'button_color' => array(
					'type' => 'color',
					'label' => __('Button Color', 'sow-button'),
				),

				'text_color' => array(
					'type' => 'color',
					'label' => __('Text Color', 'sow-button'),
				),

				'hover' => array(
					'type' => 'checkbox',
					'default' => true,
					'label' => __('Use Hover Effects', 'sow-button'),
				),

				'font_size' => array(
					'type' => 'select',
					'label' => __('Font Size', 'sow-button'),
					'options' => array(
						'1' => __('Normal', 'sow-button'),
						'1.15' => __('Medium', 'sow-button'),
						'1.3' => __('Large', 'sow-button'),
						'1.45' => __('Extra Large', 'sow-button'),
					),
				),

				'rounding' => array(
					'type' => 'select',
					'label' => __('Rounding', 'sow-button'),
					'default' => '0.25',
					'options' => array(
						'0' => __('None', 'sow-button'),
						'0.25' => __('Slight Rounding', 'sow-button'),
						'0.5' => __('Very Rounded', 'sow-button'),
						'1.5' => __('Completely Rounded', 'sow-button'),
					),
				),

				'padding' => array(
					'type' => 'select',
					'label' => __('Padding', 'sow-button'),
					'default' => '1',
					'options' => array(
						'0.5' => __('Low', 'sow-button'),
						'1' => __('Medium', 'sow-button'),
						'1.4' => __('High', 'sow-button'),
						'1.8' => __('Very High', 'sow-button'),
					),
				),

			),
			plugin_dir_path(__FILE__).'../'
		);
	}

	function get_style_hash($instance) {
		return substr( md5( serialize( $this->get_less_variables( $instance ) ) ), 0, 12 );
	}

	function get_template_name($instance) {
		return 'base';
	}

	function get_style_name($instance) {
		if(empty($instance['theme'])) return 'atom';
		return $instance['theme'];
	}

	function get_less_variables($instance){
		return array(
			'button_color' => $instance['button_color'],
			'text_color' => $instance['text_color'],

			'font_size' => $instance['font_size'] . 'em',
			'rounding' => $instance['rounding'] . 'em',
			'padding' => $instance['padding'] . 'em',
		);
	}
}

function sow_button_register_widget(){
	register_widget('SiteOrigin_Widget_Button_Widget');
}
add_action('widgets_init', 'sow_button_register_widget');