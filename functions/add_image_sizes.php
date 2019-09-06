<?php

/**
 * Custom Images Names
 * Adds custom images sizes ready to use on administrator
 *
 * @return array
 * @since  1.0
 */
function dl_image_sizes( $sizes ) {

	$add_sizes = array(
		'works'		=> __( 'Tamaño de trabajos' ),
		'custom_logo'	=> __( 'Tamaño personalizado del logo' ),
		'hero'	=> __( 'Tamaño personalizado del hero' ),
		'portrait'	=> __( 'Tamaño personalizado de la foto de perfil' ),
		'miniatura'	=> __( 'Tamaño personalizado de los thumbnails' ),
		'profile'	=> __( 'Tamaño personalizado de los perfil' ),
		'blog'	=> __( 'Tamaño personalizado de las miniaturas de los blog' )

	);

	return array_merge( $sizes, $add_sizes );

}


/**
 * Custom Images Sizes
 * Adds custom images sizes on posts
 *
 * @return void
 * @since  1.0
 * @see    https://developer.wordpress.org/reference/functions/add_image_size/
 * @see    https://codex.wordpress.org/Plugin_API/Filter_Reference/image_size_names_choose
 */
if ( function_exists( 'add_theme_support' ) ) {

	add_image_size( 'works', 434, 290, false );			// Personalización del tamaño de trabajos
	add_image_size( 'custom_logo', 800, 600, true );		// Personalización del tamaño del logo

	add_image_size( 'hero', 1920, 1080, true );		// Personalización del tamaño del hero
	add_image_size( 'portrait', 350, 350, true );		// Personalización del tamaño de la foto de perfil
	add_image_size( 'miniatura', 300, 146, true );		// Personalización del tamaño de los thumbnails
	add_image_size( 'profile', 370, 370, true );		// Personalización del tamaño de los thumbnails
	add_image_size( 'blog', 400, 195, false );		// Personalización del tamaño de los thumbnails

	add_filter( 'image_size_names_choose', 'dl_image_sizes' );

}
