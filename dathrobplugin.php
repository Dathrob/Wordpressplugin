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
        'priority'   => 10,/*for ordering in the custumizer  */
        'type'     => '',
        'sanitize_callback' => 'santize_text_field'
    );
    return $profiles;
}
add_filter('dt_social_profiles','dt_register_default_social_profiles',10,1);

function dt_register_social_customizer_settings($wp_customize){

    $social_profiles = dt_get_social_profiles();

    if(! empty( $social_profiles)){

        $wp_customize->add_section(
            'dt_social',
            array(
                'title'  => __(' Social Profiles'),
                'description'    => __( 'Add social media profiles here.' ),
				'priority'       => 160,
				'capability'     => 'edit_theme_options',
			)
		);

		// loop through each progile.
		foreach ( $social_profiles as $social_profile ) {

			// add the customizer setting for this profile.
			$wp_customize->add_setting(
				$social_profile['id'],
				array(
					'default'           => '',
					'sanitize_callback' => $social_profile['sanitize_callback'],
				)
			);

			// add the customizer control for this profile.
			$wp_customize->add_control(
				$social_profile['id'],
				array(
					'type'        => $social_profile['type'],
					'priority'    => $social_profile['priority'],
					'section'     => 'dt_social',
					'label'       => $social_profile['label'],
					'description' => $social_profile['description'],
				)
			);

		}

	}

}
add_action( 'customize_register', 'dt_register_social_customizer_settings' );
 
?> 