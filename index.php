<?php
/*
 * Plugin Name:       TeraWallet Negative Balance Add-on
 * Plugin URI:        https://DevelopistFix.com/
 * Description:       The customers have the ability to place orders using Tera Wallet even if they have no sufficient balance in their wallets.
 * Version:           1.0.0
 * Requires at least: 5.8
 * Tested up to:      6.1
 * WC requires at least: 6.0
 * WC tested up to:   7.3
 * Requires PHP:      7.2
 * Author:            Youssuf Abramo
 * Author URI:        https://Abramo.xyz/
 * Update URI:        https://DevelopistFix.com/
 * Text Domain:       TeraWallet-Negative-Balance
 * Domain Path:       /languages
 */

if (!function_exists('add_action')) {
  echo 'Seems like you stumbled here by an accident';
  exit;
}


add_filter('woo_wallet_disallow_negative_transaction', '__return_false', 1);
add_filter('woo_wallet_payment_is_available', '__return_true');
