<?php

/*
Plugin Name:  Gravity Forms Payfast Aggregation Add-On (Modified)
Plugin URI:   https://github.com/Payfast/gravityforms-aggregation
Description:  Integrates Gravity Forms with Payfast Aggregation, a South African payment gateway.
Version:      2.0.1
Author:       Payfast (Pty) Ltd
Author URI:   https://payfast.io
Text Domain:  gravityformspayfast
Domain Path:  /languages
*/

add_action( 'gform_loaded', array( 'GF_PayFast_Bootstrap', 'load' ), 5 );

class GF_PayFast_Bootstrap {
	public static function load() {
		if ( ! method_exists( 'GFForms', 'include_payment_addon_framework' ) ) {
			return;
		}

		require_once( 'class-gf-payfast.php' );

		GFAddOn::register( 'GFPayFast' );
	}
}

function gf_payfast() {
	return GFPayFast::get_instance();
}
