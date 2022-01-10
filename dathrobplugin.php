<?php

/**
* Plugin Name: Dathrob's plugin
* Plugin URI: http://github.com/dathrob
* Description: This plugin is developed for plugin replacement assignment 
* Version: 1.0.0
* Author: Misganaw M.
* License: GPL2
*/

/*exit(deny) is accesed if accessed directly*/
if( ! defined ('ABSPATH')){
    exit;
}


function dt_get_social_profiles(){

    return apply_filters(
        'dt_social_profiles',
        array()
    );
}
function dt_register_default_social_profiles($profiles){
    //facebook profile
    $profiles['facebook'] = array(
        'id'     => 'dt_facebook_url',
        'label'  => __('Facebook URL','dt-social'),/*translatable */
        'class'  => 'facebook',
        'description' => __('Enter your Facebook profile  URL','dt-social'),
        'priority'   => 10,/*for ordering in the custumizer */
        'type'     => '',
        'sanitize_callback' => 'santize_text_field'
    );
    return $profiles;
}
?>