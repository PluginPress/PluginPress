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

    public function __construct( object $pluginOptions )
    {
        $this->pluginOptions = $pluginOptions;
    }

    public function init()
    {
        // initiate all the plugin classes in  here. use this place as a entry point.
        echo '<pre> '; var_dump( $this->pluginOptions->get('namespace') ); echo ' </pre>';
        $this->pluginOptions->set('namespace', 'ssssssssssssssssssssssssssssssssssssss') ;
    }

}
