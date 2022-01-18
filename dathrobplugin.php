<?php

/**
* Plugin Name: Dathrob's plugin
* Plugin URI: http://github.com/dathrob1
* Description: This plugin is developed for plugin replacement assignment 
* Version: 1.0.0
* Author: Misganaw ME.
* License: GPL2
*/

/*exit(deny) is accesed if accessed directly*/
if( ! defined ('ABSPATH')){
    exit;
}
class Dathrobplugin
{

	function __construct(){
		add_action('init',array( $this,'dathrob_social_post_type'));
	}


 function dathrob_social_post_type() { 
	 register_post_type( 'social_icon',['public' => 'true']);
 }

 
}
if( class_exists('Dathrobplugin')){
	$dathrobplugin = new Dathrobplugin();
}


 
?> 
