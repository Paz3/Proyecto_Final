<?php 

/**
 * Style Enqueue
 * Registers and Enqueue Styles in head
 *
 * @since   1.0
 * @version 1.2
 * @see     https://codex.wordpress.org/Plugin_API/Action_Reference/wp_enqueue_scripts
 * @see     https://developer.wordpress.org/reference/functions/wp_register_style/
 * @see     https://developer.wordpress.org/reference/functions/wp_deregister_style/
 * @see     https://developer.wordpress.org/reference/functions/get_theme_file_uri/
 * @see     https://developer.wordpress.org/reference/functions/get_parent_theme_file_uri/
 */
	
function dl_enqueue_style() {

	global $theme_options;
	$theme_data = wp_get_theme();

	/* Register Scripts */

	wp_register_style( 'fira', 'https://fonts.googleapis.com/css?family=Fira+Sans', null, $theme_data->get('Version'), 'screen' );
	wp_register_style( 'fontawesome', 'https://use.fontawesome.com/releases/v5.0.12/css/all.css', null, $theme_data->get('Version'), 'screen' );
	wp_register_style( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css', null, $theme_data->get('Version'), 'screen' );
	wp_register_style('mainStyle', get_parent_theme_file_uri('/assets/css/estilos.css'), array('fira', 'fontawesome', 'bootstrap'), $theme_data->get( 'Version' ), 'screen');
	
	/* Enqueue Scripts */
	if ( $theme_options['slider']['flexslider'] ) {
		wp_enqueue_style( 'flexslider' );
	}

	if ( $theme_options['slider']['flickity'] ) {
		wp_enqueue_style( 'flickity' );
	}

	wp_enqueue_style('fira');
	wp_enqueue_style('fontawesome');
	wp_enqueue_style('bootstrap');
	wp_enqueue_style('mainStyle');

}

add_action( 'wp_enqueue_scripts', 'dl_enqueue_style' );
