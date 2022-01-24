<?php

/**
* Plugin Name: Dathrob's plugin
* Plugin URI: http://github.com/dathrob1
* Description: This plugin is developed for plugin replacement assignment 
* Version: 1.0.0
* Author: Misganaw ME.	x
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
	 add_menu_page('dathrobsocial','dathrob social','manage_options','dathrob_social_setting',array($this,'addLayout'),'dashicons-share-alt2',100);
}
function dathrob_main(){
	
	
	echo '
	<h1>Welcome to Dathrob social</h1>';
	include_once plugin_dir_path(__FILE__) .'includes/option1.php';
	wp_enqueue_style( 'option1css', plugin_dir_url(__FILE__) .'assets/css/option1.css');
	include_once plugin_dir_path(__FILE__) .'includes/option2.php';
	wp_enqueue_style( 'option2css', plugin_dir_url(__FILE__) .'assets/css/option2.css');
	include_once plugin_dir_path(__FILE__) .'includes/option3.php';
	wp_enqueue_style( 'option3css', plugin_dir_url(__FILE__) .'assets/css/option3.css');
	include_once plugin_dir_path(__FILE__) .'includes/option4.php';
	wp_enqueue_style( 'option4css', plugin_dir_url(__FILE__) .'assets/css/option4.css');
	

	
}
  
 function dathrob_setting(){
	add_settings_section('social_section',null,null,'dathrob_social_setting');
	add_settings_field('style_selection','Select Style',array($this,'style'),'dathrob_social_setting','social_section');
	register_setting('social_addresses','style_selection',array('santize_callback' => 'santize_text_field','default' =>'0'));

}

function style(){ ?>
	<select name="style_selection" >
		<option value="1"<?php selected(get_option('style_selection'),'1') ?>>Style 1</option>
		<option value="2"<?php selected(get_option('style_selection'),'2') ?>>Style 2</option>
		<option value="3"<?php selected(get_option('style_selection'),'3') ?>>Style 3</option>
		<option value="4"<?php selected(get_option('style_selection'),'4') ?>>Style 4</option>
	</select> 
<?php
}
function instagram(){

}
function twitter(){

}
function telegram(){

}
function github(){

}

function addLayout(){?>
	<div class="wrap">
		<h1>Dathrob Social Settings</h1>
		<form action="options.php" method="POST">
			<?php 
			settings_fields('social_addresses');
			do_settings_sections('dathrob_social_setting');
			submit_button();
			?>
		</form>
	</div>
<?php }
}
 


if( class_exists('Dathrobplugin')){
	$dathrobplugin = new Dathrobplugin();
}


 
?> 
