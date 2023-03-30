<?php
add_filter('woo_wallet_disallow_negative_transaction', '__return_false', 1);
add_filter('woo_wallet_payment_is_available', '__return_true');
