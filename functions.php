<?php 

/**
 * Import functions folder
 * Imports all the files inside the functions folder 
 * and adds them into functions file
 *
 * @return  void
 * @since   1.0
 * @version 1.3
 */
require_once get_template_directory() . '/functions/__get_files_from.php';
$files = get_files_from( $theme_options['functions'] );

foreach($files as $file) {
	require_once $file;
}


/**
 * Check Minimum WP version
 * This theme only works in WordPress 4.8 or later.
 *
 * @return  void
 * @since   1.0
 */
if ( version_compare( $GLOBALS['wp_version'], $theme_options['wp_min_version'], '<' ) ) {
	require get_template_directory() . '/functions/back-compat.php';
	return;
}


/**
 * Avoid "Notice: ob_end_flush()" Error
 * Uncomment in case of needed
 *
 * @return  void
 * @since   1.6.0
 * @version 1.0
 */
// remove_action( 'shutdown', 'wp_ob_end_flush_all', 1 );

// add_shortcode( 'misha_uploader', 'misha_uploader_callback' );
 
function misha_uploader_callback(){
	return '<form action="' . get_stylesheet_directory_uri() . '/process_upload.php" method="post" enctype="multipart/form-data">
	Your Photo: <input type="file" name="profilepicture" size="25" />
	<input type="submit" name="submit" value="Submit" />
	</form>';
}

require_once('bs4navwalker.php');

function add_additional_class_on_li($classes, $item, $args) {
	if($args->add_li_class) {
			$classes[] = $args->add_li_class;
	}
	return $classes;
}
// add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);