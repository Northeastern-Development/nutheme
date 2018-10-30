<?php
/**
 * Fundraiser Registration Form template.
 *
 * @package    WPFormsFormTemplates
 * @author     WPForms
 * @since      1.0.0
 * @license    GPL-2.0+
 * @copyright  Copyright (c) 2017, WPForms LLC
 */
class WPForms_Template_Fundraiser_Registration extends WPForms_Template {

	/**
	 * Primary class constructor.
	 *
	 * @since 1.0.0
	 */
	public function init() {

		$this->name = __( 'Fundraiser Registration Form', 'wpforms-form-templates-pack' );
		$this->slug = 'fundraiser-registration';
		$this->data = array(
			'field_id' => 12,
			'fields' => array(
				1 => array(
					'id' => '1',
					'type' => 'text',
					'label' => __( 'Event Name', 'wpforms-form-templates-pack' ),
					'size' => 'medium',
				),
				2 => array(
					'id' => '2',
					'type' => 'textarea',
					'label' => __( 'Event Description', 'wpforms-form-templates-pack' ),
					'size' => 'medium',
				),
				3 => array(
					'id' => '3',
					'type' => 'date-time',
					'label' => __( 'Event Date', 'wpforms-form-templates-pack' ),
					'format' => 'date',
					'size' => 'medium',
					'date_format' => 'm/d/Y',
					'date_type' => 'datepicker',
					'time_format' => 'g:i A',
					'time_interval' => '30',
				),
				4 => array(
					'id' => '4',
					'type' => 'divider',
					'label' => __( 'Company Information', 'wpforms-form-templates-pack' ),
					'label_disable' => '1',
				),
				5 => array(
					'id' => '5',
					'type' => 'text',
					'label' => __( 'Organization Name', 'wpforms-form-templates-pack' ),
					'size' => 'medium',
				),
				6 => array(
					'id' => '6',
					'type' => 'text',
					'label' => __( 'Non-Profit Federal Tax I.D.#', 'wpforms-form-templates-pack' ),
					'size' => 'medium',
				),
				7 => array(
					'id' => '7',
					'type' => 'address',
					'label' => __( 'Address', 'wpforms-form-templates-pack' ),
					'scheme' => 'us',
					'size' => 'medium',
				),
				8 => array(
					'id' => '8',
					'type' => 'name',
					'label' => __( 'Company Contact', 'wpforms-form-templates-pack' ),
					'format' => 'first-last',
					'required' => '1',
					'size' => 'medium',
				),
				9 => array(
					'id' => '9',
					'type' => 'email',
					'label' => __( 'Email', 'wpforms-form-templates-pack' ),
					'required' => '1',
					'size' => 'medium',
				),
				10 => array(
					'id' => '10',
					'type' => 'phone',
					'label' => __( 'Phone', 'wpforms-form-templates-pack' ),
					'format' => 'us',
					'size' => 'medium',
				),
				11 => array(
					'id' => '11',
					'type' => 'textarea',
					'label' => __( 'Comments or Questions', 'wpforms-form-templates-pack' ),
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
new WPForms_Template_Fundraiser_Registration;
