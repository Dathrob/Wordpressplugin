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
	 add_menu_page('dathrobsocial','dathrob social','manage_options','dathrob_menu',array($this,'addLayout'),'dashicons-share-alt2',100);
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
	add_settings_section('dathrob_social_section','SOCIAL ADDRESSES',null,'dathrob_social_setting');
	add_settings_section('dathrob_sample_section','STYLE SAMPLES',null,'dathrob_social_setting');

	add_settings_field('dathrob_social','Enter ur social addresses here!',array($this,'typeHTML'),'dathrob_social_setting','dathrob_social_section');
	add_settings_field('dathrob_social','here are the style types',array($this,'dathrob_main'),'dathrob_social_setting','dathrob_sample_section');
	//add_options_page('Welcome to Dathrob Social','dathrob setting','manage options','dathrob-social-setting',array($this,'addLayout'));
}
function typeHTML(){?>
	<style>
input{
	margin:10px;
}

	</style>
	<label for="fname">Facebook URI:</label>
  <input type="text" id="facebook_uri" name="facebook"><br>
  <label for="fname">Instagram URI:</label>
  <input type="text" id="instagram_uri" name="instagram"><br>
  <label for="fname">Twitter URI:</label>
  <input type="text" id="twitter_uri" name="twitter"><br>
  <label for="fname">Telegram URI:</label>
  <input type="text" id="telegram_uri" name="telegram"><br>
  <label for="fname">Github URI:</label>
  <input type="text" id="github_uri" name="github">
<?php }
function addLayout(){?>
	<div class="wrap">
		<h1>Dathrob Social</h1>
		<form action="options.php" method="POST">
			<?php
				settings_fields('Dathrob Social');
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
