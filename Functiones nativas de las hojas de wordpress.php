/*
de la pagina donde se coleque esto muestra informacion propia de la
pagina de wordpress como titulo de la pagina y parrafo de la textarea
*/




<?php if (have_posts()) : while (have_posts()) : the_post();?>
<?php the_title();?>
<?php the_content(); ?>
<?php endwhile; endif; 