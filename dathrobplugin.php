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
  
 function dathrob_main(){
	echo'
	<style>  
	body {
		display: flex;
		flex-direction: column;
		justify-content: center;
		align-items: center;
		height: 500vh;
		width: 50vw;
		margin: -8px;
		background: #e0e5ec;
	  }
	  
	  
	  .frame{
		display: flex;
		flex-direction: row;
		justify-content: space-around;
		align-items: center;
		margin: 20px;
		height: 80px;
		width: 350px;
		position: relative;
		 box-shadow:
		 -7px -7px 20px 0px #fff9,
		 -4px -4px 5px 0px #fff9,
		 7px 7px 20px 0px #0002,
		 4px 4px 5px 0px #0001,
		 inset 0px 0px 0px 0px #fff9,
		 inset 0px 0px 0px 0px #0001,
		 inset 0px 0px 0px 0px #fff9,        inset 0px 0px 0px 0px #0001;
	   transition:box-shadow 0.6s cubic-bezier(.79,.21,.06,.81);
		 border-radius: 10px;
	  }
	  
	  .btn{
		height: 35px;
		width: 35px;
		border-radius: 3px;
		background: #e0e5ec;
		display: flex;
		flex-direction: column;
		justify-content: center;
		align-items: center;
		-webkit-tap-highlight-color: rgba(0,0,0,0);
		-webkit-tap-highlight-color: transparent;
		box-shadow:
		 -7px -7px 20px 0px #fff9,
		 -4px -4px 5px 0px #fff9,
		 7px 7px 20px 0px #0002,
		 4px 4px 5px 0px #0001,
		 inset 0px 0px 0px 0px #fff9,
		 inset 0px 0px 0px 0px #0001,
		 inset 0px 0px 0px 0px #fff9,        inset 0px 0px 0px 0px #0001;
	   transition:box-shadow 0.6s cubic-bezier(.79,.21,.06,.81);
		font-size: 16px;
		color: rgba(42, 52, 84, 1);
		text-decoration: none;
	  }
	  .btn:active{
		box-shadow:  4px 4px 6px 0 rgba(255,255,255,.5),
					-4px -4px 6px 0 rgba(116, 125, 136, .2), 
		  inset -4px -4px 6px 0 rgba(255,255,255,.5),
		  inset 4px 4px 6px 0 rgba(116, 125, 136, .3);
	  }
	</style>

	<head>
<link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
</head>

<body>
  <h1>option 1</h1>
  <div class ="frame">
    <a href="#" class="btn">
 <i class="fab fa-facebook-f" style="color: #3b5998;"></i>
</a>
    <a href="#" class="btn">
  <i class="fab fa-twitter" style="color: #00acee;"></i>
</a>
    <a href="#" class="btn">
 <i class="fab fa-dribbble" style="color: #ea4c89;"></i>
</a>
    <a href="#" class="btn">
 <i class="fab fa-linkedin-in" style="color:#0e76a8;"></i>
</a>
    <a href="#" class="btn">
 <i class="fab fa-get-pocket" style="color:#ee4056;"></i>
</a>
    <a href="#" class="btn">
 <i class="far fa-envelope"></i>
</a>
</div>
</body>';
 } 
 
}
if( class_exists('Dathrobplugin')){
	$dathrobplugin = new Dathrobplugin();
}


 
?> 
