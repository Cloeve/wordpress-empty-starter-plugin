<?php
/*
Plugin Name: WordPress Empty Starter Plugin
description: A simple & empty starter project for a custom WordPress plugin.
Version: 1.0
Author: Cloeve Tech
Author URI: https://cloeve.com/tech
*/

// prevent direct access
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

// require upgrade
require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );


class WordPress_Empty_Starter_Plugin {

    // class instance
    static $instance;

    // class constructor
    public function __construct() {
        // TODO: add plugin filters, actions, shortcodes, etc
    }

    /** Singleton instance */
    public static function get_instance() {
        if ( ! isset( self::$instance ) ) {
            self::$instance = new self();
        }

        return self::$instance;
    }

}


// load plugin
add_action( 'plugins_loaded', function () {
    WordPress_Empty_Starter_Plugin::get_instance();
} );