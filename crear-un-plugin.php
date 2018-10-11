<?php
/*
Plugin Name: Developers
Plugin URI: lbernal.com	
Description: plugin para crear un listado de programadores en su versio 1.0 creadopor luis Beral  lima - peru
Version: 1.0 beta
Author: luis alberto bernal	
Author URI: lbernal.com.ve
License: private
License URI: private
*/
add_action('init', 'wss_programdores');
  function wss_programdores() {
    $labels = array(
        'name'               => _x('Programador', 'wss'),
        'singular_name'      => _x('Programador', 'post type singular name', 'wss'),
        'menu_name'          => _x('Programador', 'admin menu', 'wss'),
        'name_admin_bar'     => _x('Programador', 'add new on admin bar', 'wss'),
        'add_new'            => _x('Nuevo Programador', 'book', 'wss'),
        'add_new_item'       => __('Agregar Nuevo Programador', 'wss'),
        'new_item'           => __('Nuevo Programador', 'wss'),
        'edit_item'          => __('Editar Programador', 'wss'),
        'view_item'          => __('Ver Programador', 'wss'),
        'all_items'          => __('Todos Programador', 'wss'),
        'search_items'       => __('Buscar Programador', 'wss')

    );
    $args = array(
        'labels'            => $labels,
        'description'       => __( 'Description.', 'wss' ),
        'public'            => true,
        'publicly_queryable'=> true,
        'show_ui'           => true,
        'show_in_menu'      => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'Programador'),
        'capability_type'   => 'post',
        'has_archive'       => true,
        'hierarchical'      => false,
        'menu_position'     => 7,
        'menu_icon'         => 'dashicons-editor-code',
        'supports'          => array( 'title', 'editor', 'thumbnail', 'revisions', ' view_item', 'page-attributes' ),
        'taxonomies'        => array( 'category' ),
    );
    register_post_type( 'Programador', $args );
}
?>