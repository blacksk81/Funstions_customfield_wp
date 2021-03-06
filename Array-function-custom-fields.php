<?php

    /*

    SIEMPRE ESTO DEBE ESTAR EN ARCHIVO FUNCTIONS.PHP DEL TEMA DE WORDPRESS...

    O 

    CON EL PLUGINS Pluginception CREAS EL PLUGINS Y PEGAS LO DE ABAJO...

    */

    // CREAR CUSTOM POST TYPE 
    add_action('init', 'wss_Portafolio');
      function wss_Portafolio() {
        $labels = array(
            'name'               => _x('Portafolio', 'wss'),
            'singular_name'      => _x('Portafolio', 'post type singular name', 'wss'),
            'menu_name'          => _x('Portafolio', 'admin menu', 'wss'),
            'name_admin_bar'     => _x('Portafolio', 'add new on admin bar', 'wss'),
            'add_new'            => _x('Nuevo Portafolio', 'book', 'wss'),
            'add_new_item'       => __('Agregar Nuevo Portafolio', 'wss'),
            'new_item'           => __('Nuevos Portafolios', 'wss'),
            'edit_item'          => __('Editar Portafolios', 'wss'),
            'view_item'          => __('Ver Portafolio', 'wss'),
            'all_items'          => __('Todos Portafolio', 'wss'),
            'search_items'       => __('Buscar Portafolio', 'wss')

        );
        $args = array(
            'labels'            => $labels,
            'description'       => __( 'Description.', 'wss' ),
            'public'            => true,
            'publicly_queryable'=> true,
            'show_ui'           => true,
            'show_in_menu'      => true,
            'query_var'         => true,
            'rewrite'           => array( 'slug' => 'Portafolio'), // preURLS
            'capability_type'   => 'post',
            'has_archive'       => true,
            'hierarchical'      => false,
            'menu_position'     => 6,
            'menu_icon'         => 'dashicons-format-gallery',
            'supports'          => array( 'title', 'editor', 'thumbnail' ),
            'taxonomies'        => array( 'category' ),
        );
        register_post_type( 'Portafolios', $args ); 
        //nombre portafolios de esta linea tiene que ser igual al post_type del array de abajo
    }


?>   

    <!--
      este array trae la informacion cread desde custob fields solot tiene que crear los campos y copiarlos como variable
      lo pegas en la pagina donde lo usaras
    -->

<?php

    /*
    ESTO LO PEGAS EN LA PAGINA QUE VAYA A LLAMAR A LOS DATOS NATIVO O LOS GENERADO POR EL CUSTOM FILEDS
    */

    $args = array(
    'post_type' => 'Portafolios', // el post type tambiense usa para llamas a los post de entrada o declarar a lo que se llama en el custom type
    'post_per_page' => -1,
    'orderby' => 'title',
    'order' => 'ASC',
    'category_name' => 'categoria'); //filtrado de categoria
        $loop = new WP_Query($args);
        while($loop->have_posts()): $loop->the_post();?>
      <!-- aqui copias todas las variables sin pasarte de endwhile -->
        <?php the_title(); ?> <!-- Titulo del Documento  -->
        <?php the_content(); ?> // toman el contenido de textaeres 
        <?php the_excerpt(); ?> // muestra un extrapto del textarea
        <?php the_post_thumbnail(); ?> // llama a la imagen destacada

    <!-- O tambien agreagr los campos de los custum fields -->

    <!-- hasta aqui -->
<?php endwhile; wp_reset_postdata(); ?>    
