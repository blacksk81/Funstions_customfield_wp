<?php
	/*
    SIEMPRE ESTO DEBE ESTAR EN ARCHIVO FUNCTIONS.PHP DEL TEMA DE WORDPRESS...

    O CON EL PLUGINS Pluginception CREAS EL PLUGINS Y PEGAS LO DE ABAJO...

    */

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
	/*
	id: como identificador unico para el widget
	name: nombre del widget que se aprecia en el apartado de plugins.

		Y tambien lo encuentras en los widget. Aperiencia-> widget
	*/

	dynamic_sidebar('nameWidget'); // se colaca donde se mostrar el sidebar o widget en la plantilla



	//TAMBIEN OTROS FORMA DE COLOCAR WL WIDGET

	
	add_action( 'widgets_init', 'widget_footer' );
	function widget_footer() {
	    register_sidebar( array(
	        'name' => __( 'widget Footer', 'theme-slug' ),
	        'id' => 'nameWidget',
	        'description' => __( 'Widgets in this area will be shown on all posts and pages.', 'theme-slug' ),
	    ) );
	}

?>