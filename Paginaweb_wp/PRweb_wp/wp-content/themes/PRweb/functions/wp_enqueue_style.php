<?php 
	
	function dl_enqueue_style() {
		$theme_data = wp_get_theme();

		/* Register Scripts */

		wp_register_style( 'fira', 'https://fonts.googleapis.com/css?family=Fira+Sans', null, $theme_data->get('Version'), 'screen' );

		wp_register_style( 'fontawesome', 'https://use.fontawesome.com/releases/v5.0.12/css/all.css', null, $theme_data->get('Version'), 'screen' );

		wp_register_style( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css', null, $theme_data->get('Version'), 'screen' );

		wp_register_style('mainStyle', get_parent_theme_file_uri('/assets/css/estilos.css'), array('fira', 'fontawesome', 'bootstrap'), $theme_data->get( 'Version' ), 'screen');
		
		/* Enqueue Scripts */
		wp_enqueue_style('fira');
		wp_enqueue_style('fontawesome');
		wp_enqueue_style('bootstrap');
		wp_enqueue_style('mainStyle');
		
	}
	add_action( 'wp_enqueue_scripts', 'dl_enqueue_style' );

?>