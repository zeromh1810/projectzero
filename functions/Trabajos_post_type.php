<?php 
// Register Custom Post Type
function trabajos_post_type() {

	$labels = array(
		'name'                  => _x( 'trabajos', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'trabajo', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Trabajos', 'text_domain' ),
		'name_admin_bar'        => __( 'Trabajos', 'text_domain' ),
		'archives'              => __( 'Archivos de Trabajos', 'text_domain' ),
		'attributes'            => __( 'Atributos de Trabajos', 'text_domain' ),
		'parent_item_colon'     => __( 'Trabajo Principal', 'text_domain' ),
		'all_items'             => __( 'Todos los Trabajos', 'text_domain' ),
		'add_new_item'          => __( 'Agregar nuevo Trabajo', 'text_domain' ),
		'add_new'               => __( 'Agregar nuevo', 'text_domain' ),
		'new_item'              => __( 'Nuevo Trabajo', 'text_domain' ),
		'edit_item'             => __( 'Editar Trabajo', 'text_domain' ),
		'update_item'           => __( 'Actualizar Trabajo', 'text_domain' ),
		'view_item'             => __( 'Ver Trabajo', 'text_domain' ),
		'view_items'            => __( 'Ver Trabajos', 'text_domain' ),
		'search_items'          => __( 'Buscar Trabajo', 'text_domain' ),
		'not_found'             => __( 'No se encuentra', 'text_domain' ),
		'not_found_in_trash'    => __( 'No se encuentra en la papelera', 'text_domain' ),
		'featured_image'        => __( 'Imagen Principal', 'text_domain' ),
		'set_featured_image'    => __( 'Dejar como imagen principal', 'text_domain' ),
		'remove_featured_image' => __( 'Remover como imagen principal', 'text_domain' ),
		'use_featured_image'    => __( 'Usar como imagen principal', 'text_domain' ),
		'insert_into_item'      => __( 'Inserta en Trabajo', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Subir a Trabajo', 'text_domain' ),
		'items_list'            => __( 'Lista de Trabajos', 'text_domain' ),
		'items_list_navigation' => __( 'Navegación de lista de Trabajos', 'text_domain' ),
		'filter_items_list'     => __( 'Filtrar lista de Trabajos', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'trabajo', 'text_domain' ),
		'description'           => __( 'Post dedicado a postear los trabajos', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'excerpt', 'thumbnail' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-editor-paste-text',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
        'capability_type'       => 'page',
        'show_in_rest' => true
	);
	register_post_type( 'trabajo', $args );

}
add_action( 'init', 'trabajos_post_type', 0 );