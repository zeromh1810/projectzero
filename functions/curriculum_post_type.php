<?php 
// Register Custom Post Type
function curriculum_post_type() {

	$labels = array(
		'name'                  => _x( 'curriculums', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'curriculum', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Curriculum', 'text_domain' ),
		'name_admin_bar'        => __( 'Curriculum', 'text_domain' ),
		'archives'              => __( 'Archivos de curriculum', 'text_domain' ),
		'attributes'            => __( 'Atributos de curriculum', 'text_domain' ),
		'parent_item_colon'     => __( 'curriculum principal', 'text_domain' ),
		'all_items'             => __( 'Todos los curriculum', 'text_domain' ),
		'add_new_item'          => __( 'Agregar nuevo curriculum', 'text_domain' ),
		'add_new'               => __( 'Agregar nuevo', 'text_domain' ),
		'new_item'              => __( 'Nuevo curriculum', 'text_domain' ),
		'edit_item'             => __( 'Editar curriculum', 'text_domain' ),
		'update_item'           => __( 'Actualizar curriculum', 'text_domain' ),
		'view_item'             => __( 'Ver curriculum', 'text_domain' ),
		'view_items'            => __( 'Ver curriculums', 'text_domain' ),
		'search_items'          => __( 'Buscar curriculum', 'text_domain' ),
		'not_found'             => __( 'No encontrado', 'text_domain' ),
		'not_found_in_trash'    => __( 'No encontrado en la papelera', 'text_domain' ),
		'featured_image'        => __( 'Imagen destacada', 'text_domain' ),
		'set_featured_image'    => __( 'Dejar como imagen destacada', 'text_domain' ),
		'remove_featured_image' => __( 'Remover imagen destacada', 'text_domain' ),
		'use_featured_image'    => __( 'Usar imagen destacada', 'text_domain' ),
		'insert_into_item'      => __( 'Insertar en curriculum', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Subir a curriculum', 'text_domain' ),
		'items_list'            => __( 'Lista de curriculum', 'text_domain' ),
		'items_list_navigation' => __( 'Lista de navegación de curriculums', 'text_domain' ),
		'filter_items_list'     => __( 'Filtrar lista de curriculums', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'curriculum', 'text_domain' ),
		'description'           => __( 'Post type para dejar los lugares donde he trabajado', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-format-aside',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'curriculum', $args );

}
add_action( 'init', 'curriculum_post_type', 0 );