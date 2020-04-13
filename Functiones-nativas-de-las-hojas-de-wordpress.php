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


<?php
    $args = array(
      'post_type' => 'expertos_all', <-- CTP name
      'posts_per_page' => 9999 ); 

      $loop = new WP_Query($args);
      while($loop->have_posts()): $loop->the_post();?> 

          <?php the_post_thumbnail_url(); ?>
          <?php the_permalink(); ?>
          <?php echo get_template_directory_uri(); ?>/img/play-button.png">
          <?php the_permalink(); ?>
          <?php the_title(); ?>
          <?php the_excerpt(); ?></div>

  <?php  endwhile; wp_reset_postdata();?>
