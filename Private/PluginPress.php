<?php

namespace IamProgrammerLK\PluginPress;

use IamProgrammerLK\PluginPressAPI\PluginOptions\PluginOptions;

// If this file is called directly, abort. for the security purpose.
if ( ! defined( 'WPINC' ) )
{
    die;
}

class PluginPress
{

    private $pluginOptions;

    public function __construct()
    {
        $this->pluginOptions = PluginOptions::getInstance();
    }

    public function init()
    {
        // initiate all the plugin classes in  here. use this place as a entry point.
    }

}
