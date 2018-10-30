<?php
/**
 * House Inventory Form template.
 *
 * @package    WPFormsFormTemplates
 * @author     WPForms
 * @since      1.0.0
 * @license    GPL-2.0+
 * @copyright  Copyright (c) 2017, WPForms LLC
 */
class WPForms_Template_House_Inventory extends WPForms_Template {

	/**
	 * Primary class constructor.
	 *
	 * @since 1.0.0
	 */
	public function init() {

		$this->name = __( 'House Inventory Form', 'wpforms-form-templates-pack' );
		$this->slug = 'house-inventory';
		$this->data = array(
			'field_id' => 10,
			'fields' => array(
				1 => array(
					'id' => '1',
					'type' => 'text',
					'label' => __( 'Item', 'wpforms-form-templates-pack' ),
					'size' => 'medium',
				),
				2 => array(
					'id' => '2',
					'type' => 'textarea',
					'label' => __( 'Description', 'wpforms-form-templates-pack' ),
					'size' => 'small',
				),
				3 => array(
					'id' => '3',
					'type' => 'payment-single',
					'label' => __( 'Appraised Value', 'wpforms-form-templates-pack' ),
					'format' => 'user',
					'size' => 'medium',
				),
				4 => array(
					'id' => '4',
					'type' => 'date-time',
					'label' => __( 'Date Purchased', 'wpforms-form-templates-pack' ),
					'format' => 'date',
					'size' => 'medium',
					'date_format' => 'm/d/Y',
					'date_type' => 'dropdown',
					'time_format' => 'g:i A',
					'time_interval' => '30',
				),
				9 => array(
					'id' => '9',
					'type' => 'text',
					'label' => __( 'Manufacturer', 'wpforms-form-templates-pack' ),
					'size' => 'medium',
				),
				5 => array(
					'id' => '5',
					'type' => 'text',
					'label' => __( 'Model', 'wpforms-form-templates-pack' ),
					'size' => 'medium',
				),
				6 => array(
					'id' => '6',
					'type' => 'text',
					'label' => __( 'Model Number', 'wpforms-form-templates-pack' ),
					'size' => 'medium',
				),
				7 => array(
					'id' => '7',
					'type' => 'select',
					'label' => __( 'Condition', 'wpforms-form-templates-pack' ),
					'choices' => array(
						1 => array(
							'label' => __( 'Like New', 'wpforms-form-templates-pack' ),
						),
						2 => array(
							'label' => __( 'Used', 'wpforms-form-templates-pack' ),
						),
						3 => array(
							'label' => __( 'Poor', 'wpforms-form-templates-pack' ),
						),
					),
					'size' => 'medium',
				),
				8 => array(
					'id' => '8',
					'type' => 'radio',
					'label' => __( 'Condition', 'wpforms-form-templates-pack' ),
					'choices' => array(
						1 => array(
							'label' => __( 'Yes', 'wpforms-form-templates-pack' ),
						),
						2 => array(
							'label' => __( 'No', 'wpforms-form-templates-pack' ),
						),
						3 => array(
							'label' => __( 'I don\'t know', 'wpforms-form-templates-pack' ),
						),
					),
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
new WPForms_Template_House_Inventory;
