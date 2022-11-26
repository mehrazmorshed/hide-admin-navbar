<?php

/**
 * Plugin Name:       Hide Admin Navbar
 * Plugin URI:        https://wordpress.org/plugins/hide-admin-navbar/
 * Description:       Hide the admin navbar from the front end.
 * Version:           1.0.1
 * Tested Up to:      6.1.1
 * Author:            Mehraz Morshed
 * Author URI:        https://profiles.wordpress.org/mehrazmorshed/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       hide-admin-navbar
 */

/**
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.

 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <https://www.gnu.org/licenses/>.
 */

// Restrict access the file directly
if ( !function_exists( 'add_action' ) ) {
	echo 'You do not have permission to access this file and / or folder directly.';
	exit;
}

// Version
define( 'HIDE_ADMIN_NAVBAR_VERSION', '1.0' );

// Remove the admin bar from the front end
add_filter( 'show_admin_bar', '__return_false' );


