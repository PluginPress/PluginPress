<?php

namespace PluginPress\PluginPress;

use PluginPress\PluginPressAPI\PluginOptions\PluginOptions;

// If this file is called directly, abort. for the security purpose.
if( ! defined( 'WPINC' ) )
{
    die;
}

class PluginActivationSequence
{

    protected $plugin_options;

    public function __construct( PluginOptions $plugin_options )
    {
        $this->plugin_options = $plugin_options;
    }

    public function init()
    {
    }

}