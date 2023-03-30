<?php
/**
 * WooCommerce TeraWallet Negative Balance Add-on Uninstall
 *
 * Uninstalling TeraWallet Negative Balance Add-on, tables, and options.
 *
 * @author      Youssuf Abramo
 * @version     1.0.0
 *
 * @package     TeraWallet Negative Balance Add-on
 */

if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
	exit;
}

global $wpdb, $wp_version;

/*
 * Only remove ALL plugins data if WALLET_REMOVE_ALL_DATA constant is set to true in user's
 * wp-config.php. This is to prevent data loss when deleting the plugin from the backend
 * and to ensure only the site owner can perform this action.
 */
if ( defined( 'WALLET_REMOVE_ALL_DATA' ) && true === WALLET_REMOVE_ALL_DATA ) {
	// Tables.
	$wpdb->query( "DROP TABLE IF EXISTS {$wpdb->base_prefix}twnb" );

	// Delete options.
	$wpdb->query( "DELETE FROM $wpdb->options WHERE option_name LIKE '_twnb\_%';" );
	$wpdb->query( "DELETE FROM $wpdb->options WHERE option_name LIKE '_woo_twnb\_%';" );

	// Clear any cached data that has been removed.
	wp_cache_flush();
}