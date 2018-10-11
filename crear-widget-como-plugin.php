<?php
/*
Plugin Name: footerwidget
Plugin URI: www.lbernal.com.ve
Description: plugins de widget para el footer
Version: 1.0
Author: luis bernal	
Author URI: Lbernal.com.ve
License: PRIVATE
License URI: www.lbernal.com.ve
*/

/*
Plugin para crear widget para pegar en cualquier seccion
1.- en la carpeta plugin creas unas carperta con el nombre de tu plugin
y solo pegas estos y crearas un widget como plugin
*/

//SIDEBAR WIDGET FOOTER
add_action( 'widgets_init', 'widget_footer' );
function widget_footer() {
    register_sidebar( array(
        'name' => __( 'widget Footer', 'theme-slug' ),
        'id' => 'footer_1',
        'description' => __( 'Widgets in this area will be shown on all posts and pages.', 'theme-slug' ),
    ) );
}


?>