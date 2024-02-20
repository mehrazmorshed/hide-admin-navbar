<?php

/**
 * Plugin Name:       Hide Admin Navbar - Disable Admin Bar, Remove Admin Toolbar from Frontend
 * Plugin URI:        https://wordpress.org/plugins/hide-admin-navbar/
 * Description:       Disable admin bar and remove admin toolbar from the frontend.
 * Version:           1.5.2
 * Tested Up to:      6.4.2
 * Requires at least: 4.4
 * Requires PHP:      7.0
 * Author:            Mehraz Morshed
 * Author URI:        https://profiles.wordpress.org/mehrazmorshed/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       hide-admin-navbar
 * Domain Path:       /languages
 */

/**
 * Hide Admin Bar is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 * 
 * Hide Admin Bar is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <https://www.gnu.org/licenses/>.
 */

defined( 'ABSPATH' ) or die( 'Access denied.' );

require_once plugin_dir_path( __FILE__ ) . 'functions.php';

add_action( 'init', 'hide_admin_navbar_load_textdomain' );

add_filter( 'show_admin_bar', 'hide_admin_navbar_main' );

register_activation_hook( __FILE__, 'hide_admin_navbar_activation_hook' );

add_action( 'admin_notices', 'hide_admin_navbar_activation_notification' );

add_action( 'admin_notices', 'custom_admin_notice' );

add_action( 'wp_ajax_dismiss_custom_plugin_notice', 'dismiss_custom_plugin_notice' );
