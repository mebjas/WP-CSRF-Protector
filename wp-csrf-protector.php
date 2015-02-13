<?php
/**
 * Plugin Name: WP CSRF Protector
 * Description: Cross Site Request Forgery (CSRF) is a common attack and several plugins in this repository are vulnerable to it. Installing this, help you mitigate CSRF in your wordpress weblog.
 * Version: 0.0.1
 * Author: Minhaz 
 * Author URI: http://cistoner.org/meinhaz
 * Text Domain: http://cistoner.org/projects/wp-csrf-protector
 * Domain Path: Optional. Plugin's relative directory path to .mo files. Example: /locale/
 * Network: false
 * License: GPL2
 */

/*
    2014 Minhaz minhazav@gmail.com

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 */

// Make sure this file is not directly called
defined( 'ABSPATH' ) or die( 'Trying to read CSRFP, not that easy kiddo!' );



// --------------- adding administrative menu ----------------------------------------
add_action( 'admin_menu', 'csrf_plugin_menu' );

function csrf_plugin_menu() {
	add_options_page( 'WP CSRF Protector Options', 'WP CSRFP options', 'manage_options', 'csrfp_option_menu', 'csrfp_plugin_options' );
}

function csrfp_plugin_options() {
	if ( !current_user_can( 'manage_options' ) )  {
		wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
	}
	echo '<div class="wrap">';
	echo '<p>WP CSRFP Options yey</p>';
	echo '</div>';
}

// -------------- things done by CSRF Protector ---------------------------------------
function csrfp_init() {
    $csrfp_js_file_url = plugins_url('csrfp/js/csrfprotector.js', __FILE__);
    include __DIR__ .'/csrfp/libs/csrf/csrfprotector.php';
    csrfProtector::init($csrfp_js_file_url);
    header("X-CSRFP-Version: 0.0.1");
}

// Add the init hook if this is admin panel
if (is_admin()) {
    add_action('init', 'csrfp_init', -100, 0);
}