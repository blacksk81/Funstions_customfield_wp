<?php
//SIDEBAR PARA BLOG widget
add_action( 'widgets_init', 'theme_slug_widgets_init' );
function theme_slug_widgets_init() {
    register_sidebar( array(
        'name' => __( 'Sidebar para blog', 'theme-slug' ),
        'id' => 'nameWidget',// identificador unico
        'description' => __( 'Los widgets en esta área se mostrarán en todas las publicaciones y páginas..', 'theme-slug' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
  'after_widget'  => '</li>',
  'before_title'  => '<h2 class="widgettitle">',
  'after_title'   => '</h2>',
    ) );
}


// O TAMBIEN


//SIDEBAR WIDGET FOOTER
add_action( 'widgets_init', 'widget_footer' );
function widget_footer() {
    register_sidebar( array(
        'name' => __( 'widget Footer', 'theme-slug' ),
        'id' => 'nameWidget2',
        'description' => __( 'Widgets in this area will be shown on all posts and pages.', 'theme-slug' ),
    ) );
}


dynamic_sidebar('nameWidget'); // se colaca donde se mostrar el sidebar o widget en la plantilla

dynamic_sidebar('nameWidget2'); // se colaca donde se mostrar el sidebar o widget en la plantilla

?>