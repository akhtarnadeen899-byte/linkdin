<?php
/**
 * Plugin Name: Nadeem VA Manager
 * Description: Amazon VA Service Management & Portfolio Hub for Nadeem Akhtar. Standalone React SPA Dashboard.
 * Version: 1.0.0
 * Author: Nadeem Akhtar
 */

if (!defined('ABSPATH')) {
    exit;
}

// Define Constants
define('NADEEM_VA_PATH', plugin_dir_path(__FILE__));
define('NADEEM_VA_URL', plugin_dir_url(__FILE__));

// Include necessary files
require_once NADEEM_VA_PATH . 'includes/cpt.php';
require_once NADEEM_VA_PATH . 'includes/api.php';
require_once NADEEM_VA_PATH . 'includes/dashboard-route.php';

// Disable admin bar on the standalone dashboard
add_action('wp', function() {
    if (get_query_var('va_dashboard')) {
        show_admin_bar(false);
    }
});

// Initialize CPTs and API
add_action('init', 'nadeem_va_init');
function nadeem_va_init() {
    nadeem_va_register_cpts();
}

add_action('rest_api_init', 'nadeem_va_register_rest_routes');
