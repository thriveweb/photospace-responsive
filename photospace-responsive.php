<?php
/*
Plugin Name: Photospace Responsive
Plugin URI: https://thriveweb.com.au/the-lab/photospace-responsive/
Description: Responsive image galleries with a large main image, thumbnail navigation and captions, built using Galleriffic.
Author: Dean Oakley
Author URI: https://deanoakley.com/
Version: 2.2.3
Text Domain: photospace-responsive
Requires at least: 3.0
*/

/*  Copyright 2010  Dean Oakley  (email : dean@thriveweb.com.au)

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

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/** Keep the plugin header and asset version in sync. */
define( 'PHOTOSPACE_RESPONSIVE_VERSION', '2.2.3' );

// Load plugin class files.
require_once 'includes/class-photospace-responsive-gallery.php';
require_once 'includes/class-photospace-responsive-gallery-settings.php';

// Load plugin libraries.
require_once 'includes/lib/class-photospace-responsive-gallery-admin-api.php';
require_once 'includes/lib/class-photospace-responsive-gallery-post-type.php';
require_once 'includes/lib/class-photospace-responsive-gallery-taxonomy.php';

/**
 * Returns the main instance of Photospace_Responsive_Gallery to prevent the need to use globals.
 *
 * @since  1.0.0
 * @return object Photospace_Responsive_Gallery
 */
function photospace_responsive_gallery() {
	$instance = Photospace_Responsive_Gallery::instance( __FILE__, PHOTOSPACE_RESPONSIVE_VERSION );

	if ( is_null( $instance->settings ) ) {
		$instance->settings = Photospace_Responsive_Gallery_Settings::instance( $instance );
	}
	return $instance;
}

photospace_responsive_gallery();
