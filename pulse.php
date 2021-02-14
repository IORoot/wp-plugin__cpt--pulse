<?php

/*
 * @wordpress-plugin
 * Plugin Name:       _ANDYP - Labs - CPT - Pulse
 * Plugin URI:        http://londonparkour.com
 * Description:       <strong>📬CPT</strong> | Adds Labs CPT - Pulse
 * Version:           1.0.0
 * Author:            Andy Pearson
 * Author URI:        https://londonparkour.com
 * Domain Path:       /languages
 */


define( 'ANDYP_LABS_CPT_PULSE_PATH', __DIR__ );
define( 'ANDYP_LABS_CPT_PULSE_URL', plugins_url( '/', __FILE__ ) );
define( 'ANDYP_LABS_CPT_PULSE_PLUGIN_FILE',  __FILE__ );

//  ┌─────────────────────────────────────────────────────────────────────────┐
//  │                    Register with ANDYP Plugins                          │
//  └─────────────────────────────────────────────────────────────────────────┘
require __DIR__.'/src/acf/andyp_plugin_register.php';


// ┌─────────────────────────────────────────────────────────────────────────┐
// │                         Use composer autoloader                         │
// └─────────────────────────────────────────────────────────────────────────┘
require __DIR__.'/vendor/autoload.php';

// ┌─────────────────────────────────────────────────────────────────────────┐
// │                    Plugin Activation - once only.    		             │
// └─────────────────────────────────────────────────────────────────────────┘
new andyp\labs\cpt\pulse\setup\activate;


// ┌─────────────────────────────────────────────────────────────────────────┐
// │                        	   Initialise    		                     │
// └─────────────────────────────────────────────────────────────────────────┘
(new andyp\labs\cpt\pulse\initialise)->run();

