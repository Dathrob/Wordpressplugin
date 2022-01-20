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
		add_action('admin_init',array($this,'dathrob_setting'));
	}


 function dathrob_social_post_type() { 
	 register_post_type( 'social_icon',['public' => 'true']);
 }

 function dathrob_social(){
	 add_menu_page('dathrobsocial','dathrob social','manage_options','dathrob_menu',array($this,'dathrob_main'),'dashicons-share-alt2',100);
}
  
 function dathrob_setting(){
	add_settings_section('psp_first_section','Choose Scroll Type',null,'page-scroll-setting');
    add_settings_section('psp_second_section','choose page or post',null,'page-scroll-setting');
 } 
 function dathrob_main(){
	
	
	echo '
	<h1>Welcome to Dathrob social</h1>';
	include_once plugin_dir_path(__FILE__) .'includes/selectionform.php';
	wp_enqueue_style( 'selectioncss', plugin_dir_url(__FILE__) .'assets/css/selectionform.css');
	
	include_once plugin_dir_path(__FILE__) .'includes/option1.php';
	wp_enqueue_style( 'option1css', plugin_dir_url(__FILE__) .'assets/css/option1.css');
	include_once plugin_dir_path(__FILE__) .'includes/option2.php';
	wp_enqueue_style( 'option2css', plugin_dir_url(__FILE__) .'assets/css/option2.css');
	include_once plugin_dir_path(__FILE__) .'includes/option3.php';
	wp_enqueue_style( 'option3css', plugin_dir_url(__FILE__) .'assets/css/option3.css');
	include_once plugin_dir_path(__FILE__) .'includes/option4.php';
	wp_enqueue_style( 'option4css', plugin_dir_url(__FILE__) .'assets/css/option4.css');
	

	
}

}
if( class_exists('Dathrobplugin')){
	$dathrobplugin = new Dathrobplugin();
}


 
?> 
