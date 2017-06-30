<?php
/**
 * Plugin Name:       Theme Sniffer
 * Plugin URI:        https://github.com/ernilambar/theme-sniffer
 * Description:       Theme Sniffer plugin which uses phpcs for automatic theme checking.
 * Version:           0.1.4
 * Author:            Nilambar Sharma
 * Author URI:        http://nilambar.net
 * Text Domain:       theme-sniffer
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 *
 * @package Theme_Sniffer
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

if ( version_compare( PHP_VERSION, '5.2', '<=' ) ) {
	deactivate_plugins( plugin_basename( __FILE__ ) );
	$error_message = '<p style="font-family:-apple-system,BlinkMacSystemFont,\'Segoe UI\',Roboto,Oxygen-Sans,Ubuntu,Cantarell,\'Helvetica Neue\',sans-serif;font-size: 13px;line-height: 1.5;color:#444;">' . __( 'This plugin requires php version greater than 5.2.', 'theme-sniffer' ) . '</p>';
	die( $error_message ); // WPCS: XSS ok.
}

define( 'THEME_SNIFFER_BASENAME', plugin_basename( __FILE__ ) );
define( 'THEME_SNIFFER_DIR', rtrim( plugin_dir_path( __FILE__ ), '/' ) );
define( 'THEME_SNIFFER_URL', rtrim( plugin_dir_url( __FILE__ ), '/' ) );

// Load helpers.
require_once THEME_SNIFFER_DIR . '/inc/helpers.php';

// Load admin.
require_once THEME_SNIFFER_DIR . '/inc/admin.php';
require_once THEME_SNIFFER_DIR . '/inc/checks.php';
