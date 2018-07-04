<?php
	//Enqueue Styles and Scripts
	function bsc_enqueue_styles_scripts() {
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/bootstrap/css/bootstrap.css');
    wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.css');
    wp_enqueue_style( 'custom', get_template_directory_uri() . '/css/custom.css');
    wp_enqueue_style( 'updates', get_template_directory_uri() . '/css/updates.css');
    wp_enqueue_style( 'animations', get_template_directory_uri() . '/css/animations.css');
    wp_enqueue_style( 'loader', get_template_directory_uri() . '/css/loader.css');
    wp_enqueue_style( 'color-mustard', get_template_directory_uri() . '/css/color-mustard.css');
    
    wp_enqueue_script( 'html5shiv.min', '//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js' ); //HTML5 Shiv
		wp_script_add_data( 'html5shiv.min', 'conditional', 'lt IE 9' ); //Get HTML Shiv if less than IE9
		wp_enqueue_script( 'respond.min', '//oss.maxcdn.com/respond/1.4.2/respond.min.js' ); //Respond JS
		wp_script_add_data( 'respond.min', 'conditional', 'lt IE 9' ); //Get Respond JS if less than IE9
     
    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', get_template_directory_uri(). '/js/jquery-2.1.1.min.js');
    wp_enqueue_script ('jquery');
    wp_enqueue_script ('modernizr', get_template_directory_uri(). '/js/modernizr.js' );
    wp_enqueue_script ('jquery.waypoints', get_template_directory_uri(). '/js/jquery.waypoints.js' );        
    wp_enqueue_script ('bootstrap', get_template_directory_uri(). '/bootstrap/js/bootstrap.js' );
    wp_enqueue_script ('jquery.validate', get_template_directory_uri(). '/js/jquery.validate.js' );		
    wp_enqueue_script ('jquery-validate.bootstrap-tooltip', get_template_directory_uri(). '/js/jquery-validate.bootstrap-tooltip.js' );
    wp_enqueue_script ('less', get_template_directory_uri(). '/less/less.js' ); 
    wp_enqueue_script ('custom', get_template_directory_uri(). '/js/custom.js' );
    
    } 
		
	if (!is_admin()) add_action( 'wp_enqueue_scripts', 'bsc_enqueue_styles_scripts' ); //Load styles and scripts on non-admin screens

//Allow labels to be hidden
add_filter( 'gform_enable_field_label_visibility_settings', '__return_true' );
?>
