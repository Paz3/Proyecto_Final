<?php 
	

/**
 * Scripts Enqueue
 * Registers and Enqueue Scripts in footer or head
 *
 * @since   1.0
 * @version 1.2
 * @see     https://codex.wordpress.org/Plugin_API/Action_Reference/wp_enqueue_scripts
 * @see     https://developer.wordpress.org/reference/functions/wp_register_script/
 * @see     https://developer.wordpress.org/reference/functions/wp_deregister_script/
 * @see     https://developer.wordpress.org/reference/functions/get_theme_file_uri/
 * @see     https://developer.wordpress.org/reference/functions/get_parent_theme_file_uri/
 */

function dl_enqueue_scripts() {
	
	global $theme_options;
	$theme_data = wp_get_theme();

	/* Deregister Scripts */
	wp_deregister_script( 'jquery' );
	wp_deregister_script( 'jquery-migrate' );

	if ( $theme_options['jQuery'] || $theme_options['woocommerce_enabled'] || $theme_options['slider']['flexslider'] || $theme_options['slider']['flickity'] ) {

		wp_register_script('jquery', get_theme_file_uri('/assets/js/lib/jquery.min.js'), null, '3.3.1', true);
		wp_register_script('jquery-migrate', get_theme_file_uri('/assets/js/lib/jquery-migrate.min.js'), array('jquery'), '3.0.0', true);

	}

	/* Register Scripts */
	wp_register_script( 'flickity', get_theme_file_uri('/assets/js/lib/flickity.pkgd.js'), array('jquery-migrate'), '2.1.0', true );
	wp_register_script( 'flexslider', get_theme_file_uri('/assets/js/lib/jquery.flexslider.js'), array('jquery-migrate'), null, true );

	wp_register_script( 'bootstrap_js', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', null, null, true );
	wp_register_script( 'popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js', null, null, true );
	wp_register_script( 'mainJS', get_theme_file_uri('/assets/js/functions.js'), array('jquery-migrate'), $theme_data->get( 'Version' ), true);
	wp_register_script( 'app_js', get_theme_file_uri('/assets/js/app.js'), array('jquery-migrate'), null, null, true );
	wp_register_script( 'script_js', get_theme_file_uri('/assets/js/script.js'), array('jquery-migrate'), null, null, true );
	wp_register_script( 'map_google', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyDl7HM_dOUOIavqWs9xw8y7YgPsa4-b1Ak&callback=initMap', null, null, true );

	// Localize the script with new data
	$wp_data = array( 'url' => get_template_directory_uri() );
	wp_localize_script( 'app_js', 'wp_data', $wp_data );

	/* Enqueue Scripts */
	if ( $theme_options['slider']['flexslider'] ) {
		wp_enqueue_script( 'flexslider' );
	}

	if ( $theme_options['slider']['flickity'] ) {
		wp_enqueue_script( 'flickity' );
	}

	wp_enqueue_script('jquery');
	wp_enqueue_script('jquery-migrate');
	wp_enqueue_script('bootstrap_js');
	wp_enqueue_script('popper');
	wp_enqueue_script('mainJS');
	wp_enqueue_script('script_js');
	wp_enqueue_script('map_google');
	wp_enqueue_script('app_js');

}

add_action( 'wp_enqueue_scripts', 'dl_enqueue_scripts' );