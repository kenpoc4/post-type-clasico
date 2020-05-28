<?php
// Plugin name: Post type Clásico de la semana
// Descripction: Post type creado para reseña semanal "Clásico de la semana".
// Version: 1.0.0
// Author: Kenny Poncio
// Author URI: https://github.com/kenpoc4

if(!defined('ABSPATH'))die();

// Registrar Custom Post Type
function kmir_clasico_semana_post_type() {

	$labels = array(
		'name'                  => _x( 'Clásico de la semana', 'kenpoc4' ),
		'singular_name'         => _x( 'Clásico de la semana','kenpoc4' ),
		'menu_name'             => __( 'Clásico de la semana', 'kenpoc4' ),
		'name_admin_bar'        => __( 'Clásico', 'kenpoc4' ),
		'archives'              => __( 'Archivo', 'kenpoc4' ),
		'attributes'            => __( 'Atributos', 'kenpoc4' ),
		'parent_item_colon'     => __( 'Clásico Padre', 'kenpoc4' ),
		'all_items'             => __( 'Todos Los Clásicos', 'kenpoc4' ),
		'add_new_item'          => __( 'Agregar Clásico', 'kenpoc4' ),
		'add_new'               => __( 'Agregar Clásico', 'kenpoc4' ),
		'new_item'              => __( 'Nuevo Clásico', 'kenpoc4' ),
		'edit_item'             => __( 'Editar Clásico', 'kenpoc4' ),
		'update_item'           => __( 'Actualizar Clásico', 'kenpoc4' ),
		'view_item'             => __( 'Ver Clásico', 'kenpoc4' ),
		'view_items'            => __( 'Ver Clásicos', 'kenpoc4' ),
		'search_items'          => __( 'Buscar Clásico', 'kenpoc4' ),
		'not_found'             => __( 'No Encontrado', 'kenpoc4' ),
		'not_found_in_trash'    => __( 'No Encontrado en Papelera', 'kenpoc4' ),
		'featured_image'        => __( 'Imagen Destacada', 'kenpoc4' ),
		'set_featured_image'    => __( 'Guardar Imagen destacada', 'kenpoc4' ),
		'remove_featured_image' => __( 'Eliminar Imagen destacada', 'kenpoc4' ),
		'use_featured_image'    => __( 'Utilizar como Imagen Destacada', 'kenpoc4' ),
		'insert_into_item'      => __( 'Insertar en Clásico', 'kenpoc4' ),
		'uploaded_to_this_item' => __( 'Agregado en Clásico', 'kenpoc4' ),
		'items_list'            => __( 'Lista de Clásicos', 'kenpoc4' ),
		'items_list_navigation' => __( 'Navegación de Clásicos', 'kenpoc4' ),
		'filter_items_list'     => __( 'Filtrar Clásicos', 'kenpoc4' ),
	);
	$args = array(
		'label'                 => __( 'Clásico', 'kenpoc4' ),
		'description'           => __( 'Clásicos para el Sitio Web', 'kenpoc4' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
        'menu_position'         => 6,
        'menu_icon'             => 'dashicons-editor-video',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'kmir_clasicos', $args );

}
add_action( 'init', 'kmir_clasico_semana_post_type', 0 );