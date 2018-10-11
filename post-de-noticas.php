<?php


$args = array(
	'post_type' => 'post',
	'post_status' => 'publish',
	'post_per_page' => 3,
	'orderby' => 'title',
	'order' => 'ASC');
		$loop = new WP_Query($args);
		while($loop->have_posts()): $loop->the_post();

		/*
		
		Aqui las funciones Nativas de wordpress

							ó

		las que crees el custon fields para la entradas

		*/	

		endwhile; wp_reset_postdata(); 

?>