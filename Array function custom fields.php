/*
SIEMPRE ESTO DEBE ESTAR EN ARCHIVO FUNCTIONS.PHP DEL TEMA DE WORDPRESS...


*/


// CREAR CUSTOM POST TYPE 
add_action('init', 'wildrover_room');
	function wildrover_room() {
    $labels = array(
      	'name'             => _x('Room', 'wildrover'),
      	'singular_name'    => _x('Room', 'post type singular name', 'wildrover'),
      	'menu_name'        => _x('Room', 'admin menu', 'wildrover'),
      	'name_admin_bar'   => _x('Room', 'add new on admin bar', 'wildrover'),
      	'add_new'          => _x('Add New', 'book', 'wildrover'),
      	'add_new_item'     => __('Add New Room', 'wildrover'),
      	'new_item'         => __('New Rooms', 'wildrover'),
      	'edit_item'        => __('Edit Rooms', 'wildrover'),
      	'view_item'        => __('View Rooms', 'wildrover'),
      	'all_items'        => __('All Rooms', 'wildrover'),
      	'search_items'     => __('Search Rooms', 'wildrover'),
      	'parent_item_colon'=> __('Parent Rooms', 'wildrover'),
      	'not_found'        => __('No Rooms found.', 'wildrover'),
      	'not_found_in_trash'=>__('No Rooms found in Trash.', 'wildrover')

    );
    $args = array(
      	'labels'            => $labels,
      	'description'       => __( 'Description.', 'wildrover' ),
      	'public'            => true,
      	'publicly_queryable'=> true,
      	'show_ui'           => true,
      	'show_in_menu'      => true,
      	'query_var'         => true,
      	'rewrite'           => array( 'slug' => 'room'),
      	'capability_type'   => 'post',
      	'has_archive'       => true,
      	'hierarchical'      => false,
      	'menu_position'     => 6,
      	'supports'          => array( 'title', 'editor', 'thumbnail' ),
      	'taxonomies'        => array( 'category' ),
    );
    register_post_type( 'room', $args );
}


                    
<!--
  este array trae la informacion cread desde custob fields solot tiene que crear los campos y copiarlos como variable

  lo pegas en la pagina donde lo usaras
-->
<?php
    $args = array(
    'post_type' => 'room',
    'post_per_page' => -1,
    'orderby' => 'title',
    'order' => 'ASC',
    'category_name' => 'cuarto');
        $loop = new WP_Query($args);
        while($loop->have_posts()): $loop->the_post();?>
      <!-- aqui copias todas las variables sin pasarte de endwhile -->
      <?php the_title(); ?>
            <?php the_field('precio'); ?>
            <?php the_field('capacidad'); ?>
          <?php the_field('descripcion'); ?>
          <!-- hasta aqui -->
         <?php endwhile; wp_reset_postdata(); ?>    
?>
