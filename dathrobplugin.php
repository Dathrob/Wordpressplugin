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
		add_action('admin_menu',array($this,'dathrob_social'));
	}


 function dathrob_social_post_type() { 
	 register_post_type( 'social_icon',['public' => 'true']);
 }

 function dathrob_social(){
	 add_menu_page('dathrobsocial','dathrob social','manage_options','dathrob_menu',array($this,'dathrob_main'),'dashicons-share-alt2',100);
}
  
 /*function dathrob_main(){
	return array($this,'option1');
 } */
 function dathrob_main(){
	include_once plugin_dir_path(__FILE__) .'includes/option1.php';
	wp_enqueue_style( 'option1css', plugin_dir_url(__FILE__) .'assets/css/option1.css');
	include_once plugin_dir_path(__FILE__) .'includes/option2.php';
	wp_enqueue_style( 'option2css', plugin_dir_url(__FILE__) .'assets/css/option2.css');
	echo '
	<h1>this is from the function </h1>';
}

 
}
if( class_exists('Dathrobplugin')){
	$dathrobplugin = new Dathrobplugin();
}


 
?> 
