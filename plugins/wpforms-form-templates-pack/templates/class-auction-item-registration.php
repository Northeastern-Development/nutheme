<?php
/**
 * Auction Item Registration Form template.
 *
 * @package    WPFormsFormTemplates
 * @author     WPForms
 * @since      1.0.0
 * @license    GPL-2.0+
 * @copyright  Copyright (c) 2017, WPForms LLC
 */
class WPForms_Template_Auction_Item_Registration extends WPForms_Template {

	/**
	 * Primary class constructor.
	 *
	 * @since 1.0.0
	 */
	public function init() {

		$this->name = __( 'Auction Item Registration Form', 'wpforms-form-templates-pack' );
		$this->slug = 'auction-item-registration';
		$this->data = array(
			'field_id' => 10,
			'fields' => array(
				1 => array(
					'id' => '1',
					'type' => 'name',
					'label' => __( 'Name', 'wpforms-form-templates-pack' ),
					'format' => 'first-last',
					'required' => '1',
					'size' => 'medium',
				),
				2 => array(
					'id' => '2',
					'type' => 'email',
					'label' => __( 'Email', 'wpforms-form-templates-pack' ),
					'required' => '1',
					'size' => 'medium',
				),
				3 => array(
					'id' => '3',
					'type' => 'phone',
					'label' => __( 'Phone', 'wpforms-form-templates-pack' ),
					'format' => 'us',
					'size' => 'medium',
				),
				4 => array(
					'id' => '4',
					'type' => 'address',
					'label' => __( 'Address', 'wpforms-form-templates-pack' ),
					'scheme' => 'us',
					'size' => 'medium',
				),
				5 => array(
					'id' => '5',
					'type' => 'divider',
					'label' => __( 'Auction Item Information', 'wpforms-form-templates-pack' ),
					'label_disable' => '1',
				),
				6 => array(
					'id' => '6',
					'type' => 'text',
					'label' => __( 'Item Name', 'wpforms-form-templates-pack' ),
					'size' => 'medium',
				),
				7 => array(
					'id' => '7',
					'type' => 'payment-single',
					'label' => __( 'Estimated Value', 'wpforms-form-templates-pack' ),
					'format' => 'user',
					'size' => 'medium',
				),
				8 => array(
					'id' => '8',
					'type' => 'file-upload',
					'label' => __( 'Image', 'wpforms-form-templates-pack' ),
				),
				9 => array(
					'id' => '9',
					'type' => 'textarea',
					'label' => __( 'Detailed Description', 'wpforms-form-templates-pack' ),
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
new WPForms_Template_Auction_Item_Registration;
