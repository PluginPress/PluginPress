<?php

/*
** @project
** Project Name:        PluginPress
** Project Description: Skeleton framework for building object-oriented WordPress plugins. basic files and directory structure with the PluginPress APIs.
** Project Version:     1.0.0
** File Name:           PluginPress.php
** File Description:    This file is read by WordPress to generate the plugin information in the plugin admin area.
**                      This file also includes all of the dependencies used by the plugin, registers the activation
**                      and deactivation functions, and defines a function that starts the plugin.
** File Version:        1.0.0
** Last Change:         2021-08-16
**
** @wordpress-plugin
** Plugin Name:         PluginPress
** Short Name:          PluginPress
** Plugin Slug:         pluginpress
** Plugin Namespace:    PluginPress\PluginPress
** Title:               PluginPress
** Plugin URI:          https://pluginpress.github.io/PluginPress/
** Version:             1.0.0
** Description:         Skeleton framework for building object-oriented WordPress plugins. basic files and directory structure with the PluginPress APIs.
** Text Domain:         pluginpress
** Domain Path:         /Common/Languages
** Network:             
** Author:              I am Programmer
** Author URI:          https://iamprogrammer.lk
** Requires PHP:        7.0.0
** Requires at least:   5.6.0
** WP tested up to:     5.8.0
** License:             MIT
** License URI:         https://github.com/PluginPress/PluginPress/blob/main/LICENSE
**
** @copyrights
** Copyright:           Copyright (C) IamProgrammerLK - All Rights Reserved
** Copyright Note:      |
**
** @authors
** Author:              I am Programmer
** Author URL:          https://iamprogrammer.lk
** Since                1.0.0 (2021-07-26)
*/

namespace PluginPress\PluginPress;

// If this file is called directly, abort. for the security purpose.
if( ! defined( 'WPINC' ) )
{
    die;
}

// Dynamically include the classes.
require_once trailingslashit( dirname( __FILE__ ) ) . 'vendor/autoload.php';



// initiate the plugin
if( ! class_exists( 'PluginPress' ) )
{
    // @string - required - absolute path to the primary plugin file (this file).
    // @string - required - absolute path to the plugin options file.
    $test_plugin = new PluginPress( __FILE__, plugin_dir_path( __FILE__ ) . 'Configs/PluginOptions.php' );
    $test_plugin->init();
}
