<?php
/*
 * Plugin Name: Character Counter for Gutenberg
 * Version: 0.1
 * Plugin URI: TBD
 * Description: TBD
 * Author: Paul Ronga using Hugh Lashbrooke’s template
 * Author URI: https://paulronga.ch
 * Requires at least: 5.0
 * Tested up to: 5.0
 *
 * Text Domain: character-counter-for-gutenberg
 * Domain Path: /lang/
 *
 * @package WordPress
 * @author Paul Ronga
 * @since 0.1
 */

if ( ! defined( 'ABSPATH' ) ) exit;

// Load plugin class files
require_once( 'includes/class-character-counter-for-gutenberg.php' );
require_once( 'includes/class-character-counter-for-gutenberg-settings.php' );

// Load plugin libraries
require_once( 'includes/lib/class-character-counter-for-gutenberg-admin-api.php' );
require_once( 'includes/lib/class-character-counter-for-gutenberg-post-type.php' );
require_once( 'includes/lib/class-character-counter-for-gutenberg-taxonomy.php' );

/**
 * Returns the main instance of Character_Counter_for_Gutenberg to prevent the need to use globals.
 *
 * @since  1.0.0
 * @return object Character_Counter_for_Gutenberg
 */
function Character_Counter_for_Gutenberg () {
	$instance = Character_Counter_for_Gutenberg::instance( __FILE__, '1.0.0' );

	if ( is_null( $instance->settings ) ) {
		$instance->settings = Character_Counter_for_Gutenberg_Settings::instance( $instance );
	}

	return $instance;
}

Character_Counter_for_Gutenberg();
