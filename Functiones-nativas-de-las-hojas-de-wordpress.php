/*
de la pagina donde se coleque esto muestra informacion propia de la
pagina de wordpress como titulo de la pagina y parrafo de la textarea
*/




<?php if (have_posts()) : while (have_posts()) : the_post();?>
<?php the_title();?> // toman el titulo de la pagina 
<?php the_content();?> // toman el contenido de textaeres
<?php the_excerpt();?> // muestra un extrapto del textarea
<?php the_post_thumbnail();?> // llama a la imagen destacada
<?php endwhile; endif; ?>
