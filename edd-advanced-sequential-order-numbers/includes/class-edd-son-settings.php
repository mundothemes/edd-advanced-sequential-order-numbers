<?php
class EDD_Son_Settings{
	public static function setting_tabs( $tabs )
	{
		$tabs['edd_son'] = __('Order Numbers', EDD_SON_LANG );

		return $tabs;
	}

	public static function remove_edd_settings( $settings )
	{
		unset( $settings['enable_sequential'] );
		unset( $settings['sequential_start'] );
		unset( $settings['sequential_prefix'] );
		unset( $settings['sequential_postfix'] );

		return $settings;
	}

	/**
	 * Add settings
	 *
	 * @access      public
	 * @since       1.0.0
	 * @param       array $settings The existing EDD settings array
	 * @return      array The modified EDD settings array
	 */
	public static function settings( $settings ) {
		$settings['edd_son'] = array(
			array(
				'id' => 'edd_son_active',
				'name' => __('Enable', EDD_SON_LANG),
				'desc' => __('Enable Advanced Sequential Order Numbers', EDD_SON_LANG ),
				'type' => 'checkbox'
			),

			array(
				'id' => 'edd_son_free_number_series',
				'name' => __('Free Orders number series', EDD_SON_LANG),
				'desc' => __('Enable the number series for free orders.', EDD_SON_LANG ),
				'type' => 'checkbox'
			),

			/** Order number prefixes **/
			/***************************/
			array(
				'id'    => 'edd_son_settings_prefixes',
				'name'  => '<strong>' . __( 'Number Series Prefixes', EDD_SON_LANG ) . '</strong>',
				'desc'  => __( 'Define prefixes for all number series.', EDD_SON_LANG ),
				'type'  => 'header'
			),
			array(
				'id' => 'edd_son_prefix_temp',
				'name' => __('Temp. Prefix', EDD_SON_LANG),
				'desc' => __('Enter the prefix used for temporary order numbers (like pending orders)', EDD_SON_LANG ),
				'type' => 'text',
				'size' => 'medium'
			),
			array(
				'id' => 'edd_son_prefix_free',
				'name' => __('Free Prefix', EDD_SON_LANG),
				'desc' => __('Enter the prefix used for free orders', EDD_SON_LANG ),
				'type' => 'text',
				'size' => 'medium'
			),
			array(
				'id' => 'edd_son_prefix_completed',
				'name' => __('Completed Prefix', EDD_SON_LANG),
				'desc' => __('Enter the prefix used for completed orders, which are not free.', EDD_SON_LANG ),
				'type' => 'text',
				'size' => 'medium'
			),

			/** Order number postfixes **/
			/****************************/
			array(
				'id'    => 'edd_son_settings_postfixes',
				'name'  => '<strong>' . __( 'Number Series Postfixes', EDD_SON_LANG ) . '</strong>',
				'desc'  => __( 'Define postfixes for all number series.', EDD_SON_LANG ),
				'type'  => 'header'
			),
			array(
				'id' => 'edd_son_postfix_temp',
				'name' => __('Temp. Postfix', EDD_SON_LANG),
				'desc' => __('Enter the postfix used for temporary order numbers (like pending orders)', EDD_SON_LANG ),
				'type' => 'text',
				'size' => 'medium'
			),
			array(
				'id' => 'edd_son_postfix_free',
				'name' => __('Free Postfix', EDD_SON_LANG),
				'desc' => __('Enter the postfix used for free orders', EDD_SON_LANG ),
				'type' => 'text',
				'size' => 'medium'
			),
			array(
				'id' => 'edd_son_postfix_completed',
				'name' => __('Completed Postfix', EDD_SON_LANG),
				'desc' => __('Enter the postfix used for completed orders, which are not free.', EDD_SON_LANG ),
				'type' => 'text',
				'size' => 'medium'
			),

			/** Order number padding **/
			/**************************/
			array(
				'id'    => 'edd_son_settings_padding',
				'name'  => '<strong>' . __( 'Order number padding', EDD_SON_LANG ) . '</strong>',
				'desc'  => '',
				'type'  => 'header'
			),
			array(
				'id' => 'edd_son_number_padding_type',
				'name' => __('Pad order numbers', EDD_SON_LANG),
				'desc' => __('Add padding before, after or not at all, to order numbers.', EDD_SON_LANG ),
				'type' => 'radio',
				'std' => 'no_padding',
				'options' => array(
					'no_padding' => __( 'No padding', EDD_SON_LANG ),
					'pad_left' => __( 'Pad left', EDD_SON_LANG ),
					'pad_right'  => __( 'Pad right', EDD_SON_LANG )
				)
			),
			array(
				'id' => 'edd_son_number_padding_char',
				'name' => __('Pad with', EDD_SON_LANG),
				'desc' => __('The character which will be used for padding order numbers.', EDD_SON_LANG ),
				'type' => 'text',
				'size' => 'small'
			),

			array(
				'id' => 'edd_son_number_padding_length',
				'name' => __('Order number length', EDD_SON_LANG),
				'desc' => __('How long should the order number be? Eg. a length of 5, and order number 123, can produce XX123.', EDD_SON_LANG ),
				'type' => 'text',
				'size' => 'small'
			),

			/** Order numbers **/
			/*******************/
			array(
				'id'    => 'edd_son_settings_numbers',
				'name'  => '<strong>' . __( 'Next order numbers', EDD_SON_LANG ) . '</strong>',
				'desc'  => '',
				'type'  => 'header'
			),
			array(
				'id' => 'edd_son_number_temp',
				'name' => __('Temp #', EDD_SON_LANG),
				'desc' => __('Next temporary order number.', EDD_SON_LANG ),
				'type' => 'number',
				'size' => 'small',
				'min' => 1,
				'step' => 1
			),
			array(
				'id' => 'edd_son_number_free',
				'name' => __('Free #', EDD_SON_LANG),
				'desc' => __('Next free order number.', EDD_SON_LANG ),
				'type' => 'number',
				'size' => 'small',
				'min' => 1,
				'step' => 1
			),
			array(
				'id' => 'edd_son_number_completed',
				'name' => __('Completed #', EDD_SON_LANG),
				'desc' => __('Next completed order number.', EDD_SON_LANG ),
				'type' => 'number',
				'size' => 'small',
				'min' => 1,
				'step' => 1
			),
		);
		return $settings;
	}
}