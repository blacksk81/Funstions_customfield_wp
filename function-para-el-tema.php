
<?php 

//ESTOS LO PEGAS EN LA CARPETA FUNCTION.PHP DEL TEMA QUE CREES

// Vincular estilo 
	get_template_directory_uri();  nos ubica en nuetro directorio raiz para ubicar la clase que deseamos llamas


	function wpdocs_theme_name_style() {

		wp_enqueue_style( 'agency.css', get_template_directory_uri() . '/css/agency.css' );

	}
	add_action( 'wp_enqueue_scripts', 'wpdocs_theme_name_style' );

	// Vincular script 
	function wpdocs_theme_name_scripts() {

		wp_enqueue_script( 'jquery.min.js', get_template_directory_uri() . '/js/jquery.min.js', '', '', true );	

		//el argunmento true nos indica que la posicion de script estara al final de nuestra hoja.

	}
	add_action( 'wp_enqueue_scripts', 'wpdocs_theme_name_scripts' );

?>