<?php

echo 'TestOptionPageTemplate';


$plugin_data = get_plugin_data( $this->plugin_options->get( 'plugin_file_path' ) );
$plugin_version = $plugin_data[ 'Version' ];

echo '<pre> '; print_r( get_plugins() ); echo ' </pre>'; die();