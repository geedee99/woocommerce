<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

return apply_filters( 'woocommerce_tax_settings', array(

	array( 'title' => __( 'Tax Options', 'woocommerce' ), 'type' => 'title','desc' => '', 'id' => 'tax_options' ),

	array(
		'title'   => __( 'Enable Taxes', 'woocommerce' ),
		'desc'    => __( 'Enable taxes and tax calculations', 'woocommerce' ),
		'id'      => 'woocommerce_calc_taxes',
		'default' => 'no',
		'type'    => 'checkbox'
	),

	array(
		'title'    => __( 'Prices Entered With Tax', 'woocommerce' ),
		'id'       => 'woocommerce_prices_include_tax',
		'default'  => 'no',
		'type'     => 'radio',
		'desc_tip' =>  __( 'This option is important as it will affect how you input prices. Changing it will not update existing products.', 'woocommerce' ),
		'options'  => array(
			'yes' => __( 'Yes, I will enter prices inclusive of tax', 'woocommerce' ),
			'no'  => __( 'No, I will enter prices exclusive of tax', 'woocommerce' )
		),
	),

	array(
		'title'    => __( 'Calculate Tax Based On:', 'woocommerce' ),
		'id'       => 'woocommerce_tax_based_on',
		'desc_tip' =>  __( 'This option determines which address is used to calculate tax.', 'woocommerce' ),
		'default'  => 'shipping',
		'type'     => 'select',
		'options'  => array(
			'shipping' => __( 'Customer shipping address', 'woocommerce' ),
			'billing'  => __( 'Customer billing address', 'woocommerce' ),
			'base'     => __( 'Shop base address', 'woocommerce' )
		),
	),

	array(
		'title'    => __( 'Default Customer Address:', 'woocommerce' ),
		'id'       => 'woocommerce_default_customer_address',
		'desc_tip' =>  __( 'This option determines the customers default address (before they input their own).', 'woocommerce' ),
		'default'  => 'base',
		'type'     => 'select',
		'options'  => array(
			''     => __( 'No address', 'woocommerce' ),
			'base' => __( 'Shop base address', 'woocommerce' ),
		),
	),

	array(
		'title'    => __( 'Shipping Tax Class:', 'woocommerce' ),
		'desc'     => __( 'Optionally control which tax class shipping gets, or leave it so shipping tax is based on the cart items themselves.', 'woocommerce' ),
		'id'       => 'woocommerce_shipping_tax_class',
		'css'      => 'min-width:150px;',
		'default'  => 'title',
		'type'     => 'select',
		'options'  => array( '' => __( 'Shipping tax class based on cart items', 'woocommerce' ), 'standard' => __( 'Standard', 'woocommerce' ) ) + $classes_options,
		'desc_tip' =>  true,
	),

	array(
		'title'   => __( 'Rounding', 'woocommerce' ),
		'desc'    => __( 'Round tax at subtotal level, instead of rounding per line', 'woocommerce' ),
		'id'      => 'woocommerce_tax_round_at_subtotal',
		'default' => 'no',
		'type'    => 'checkbox',
	),

	array(
		'title'   => __( 'Additional Tax Classes', 'woocommerce' ),
		'desc'    => __( 'List additional tax classes below (1 per line). This is in addition to the default <code>Standard Rate</code>. Tax classes can be assigned to products.', 'woocommerce' ),
		'id'      => 'woocommerce_tax_classes',
		'css'     => 'width:100%; height: 65px;',
		'type'    => 'textarea',
		'default' => sprintf( __( 'Reduced Rate%sZero Rate', 'woocommerce' ), PHP_EOL )
	),

	array(
		'title'   => __( 'Display prices in the shop:', 'woocommerce' ),
		'id'      => 'woocommerce_tax_display_shop',
		'default' => 'excl',
		'type'    => 'select',
		'options' => array(
			'incl'   => __( 'Including tax', 'woocommerce' ),
			'excl'   => __( 'Excluding tax', 'woocommerce' ),
		)
	),

	array(
		'title'   => __( 'Price display suffix:', 'woocommerce' ),
		'id'      => 'woocommerce_price_display_suffix',
		'default' => '',
		'type'    => 'text',
		'desc'    => __( 'Define text to show after your product prices. This could be, for example, "inc. Vat" to explain your pricing. You can also have prices substituted here using one of the following: <code>{price_including_tax}, {price_excluding_tax}</code>.', 'woocommerce' ),
	),

	array(
		'title'   => __( 'Display prices during cart/checkout:', 'woocommerce' ),
		'id'      => 'woocommerce_tax_display_cart',
		'default' => 'excl',
		'type'    => 'select',
		'options' => array(
			'incl'   => __( 'Including tax', 'woocommerce' ),
			'excl'   => __( 'Excluding tax', 'woocommerce' ),
		),
		'autoload'      => false
	),

	array(
		'title'   => __( 'Display tax totals:', 'woocommerce' ),
		'id'      => 'woocommerce_tax_total_display',
		'default' => 'itemized',
		'type'    => 'select',
		'options' => array(
			'single'     => __( 'As a single total', 'woocommerce' ),
			'itemized'   => __( 'Itemized', 'woocommerce' ),
		),
		'autoload' => false
	),

	array( 'type' => 'sectionend', 'id' => 'tax_options' ),

) );
