<?php
/**
 * Music Collection Form template.
 *
 * @package    WPFormsFormTemplates
 * @author     WPForms
 * @since      1.0.0
 * @license    GPL-2.0+
 * @copyright  Copyright (c) 2017, WPForms LLC
 */
class WPForms_Template_Music_Collection extends WPForms_Template {

	/**
	 * Primary class constructor.
	 *
	 * @since 1.0.0
	 */
	public function init() {

		$this->name = __( 'Music Collection Form', 'wpforms-form-templates-pack' );
		$this->slug = 'music-collection';
		$this->data = array(
			'field_id' => 10,
			'fields' => array(
				1 => array(
					'id' => '1',
					'type' => 'text',
					'label' => __( 'Artist', 'wpforms-form-templates-pack' ),
					'size' => 'medium',
				),
				2 => array(
					'id' => '2',
					'type' => 'text',
					'label' => __( 'Album', 'wpforms-form-templates-pack' ),
					'size' => 'medium',
				),
				4 => array(
					'id' => '4',
					'type' => 'date-time',
					'label' => __( 'Release Date', 'wpforms-form-templates-pack' ),
					'format' => 'date',
					'size' => 'medium',
					'date_format' => 'm/d/Y',
					'date_type' => 'datepicker',
					'time_format' => 'g:i A',
					'time_interval' => '30',
				),
				5 => array(
					'id' => '5',
					'type' => 'text',
					'label' => __( 'Producer', 'wpforms-form-templates-pack' ),
					'size' => 'medium',
				),
				6 => array(
					'id' => '6',
					'type' => 'text',
					'label' => __( 'Record Label', 'wpforms-form-templates-pack' ),
					'size' => 'medium',
				),
				7 => array(
					'id' => '7',
					'type' => 'payment-single',
					'label' => __( 'Price', 'wpforms-form-templates-pack' ),
					'format' => 'user',
					'size' => 'medium',
				),
				8 => array(
					'id' => '8',
					'type' => 'textarea',
					'label' => __( 'Review', 'wpforms-form-templates-pack' ),
					'size' => 'medium',
				),
				9 => array(
					'id' => '9',
					'type' => 'select',
					'label' => __( 'Rating', 'wpforms-form-templates-pack' ),
					'choices' => array(
						1 => array(
							'label' => __( '1', 'wpforms-form-templates-pack' ),
						),
						2 => array(
							'label' => __( '2', 'wpforms-form-templates-pack' ),
						),
						3 => array(
							'label' => __( '3', 'wpforms-form-templates-pack' ),
						),
						4 => array(
							'label' => __( '4', 'wpforms-form-templates-pack' ),
						),
						5 => array(
							'label' => __( '5', 'wpforms-form-templates-pack' ),
						),
					),
					'size' => 'medium',
				),
			),
			'settings' => array(
				'honeypot' => '1',
				'confirmation_message_scroll' => '1',
				'submit_text_processing' => __( 'Sending...', 'wpforms-form-templates-pack' ),
			),
			'meta' => array(
				'template' => $this->slug,
			),
		);
	}
}
new WPForms_Template_Music_Collection;
