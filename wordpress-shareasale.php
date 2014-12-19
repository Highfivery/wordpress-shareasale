<?php
/**
 * Plugin Name: WordPress ShareASale
 * Plugin URI: http://www.benmarshall.me/wordpress-shareasale-plugin
 * Description: The WordPress ShareASale plugin integrates with the ShareASale API to generate detailed reports you can view and download from your WordPress site.
 * Version: 1.0.0
 * Author: Ben Marshall
 * Author URI: http://www.benmarshall.me
 * License: GPL2
 */

/*  Copyright 2014  Ben Marshall  (email : me@benmarshall.me)

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

/**
 * Security Note: Blocks direct access to the plugin PHP files.
 */
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

// Define constants.
if( ! defined( 'SHAREASALE_ROOT' ) ) {
  define( 'SHAREASALE_ROOT', plugin_dir_path( __FILE__ ) );
}

if( ! defined( 'SHAREASALE_PLUGIN' ) ) {
  define( 'SHAREASALE_PLUGIN', __FILE__ );
}

/**
 * Used to detect installed plugins.
 */
include_once( ABSPATH . 'wp-admin/includes/plugin.php' );

/**
 * Include the caching class.
 */
require_once( SHAREASALE_ROOT . 'lib/cache-blocks.class.php' );

/**
 * Include the plugin class.
 */
require_once( SHAREASALE_ROOT . 'lib/wordpress-shareasale.class.php' );

// Initialize the plugin class.
$wordpress_shareasell = WordPress_ShareASale::get_instance();


