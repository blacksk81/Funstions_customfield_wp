<!-- 
Iteraciones es cuando tienes un row con dos columnas y cada columna,
tiene un estilo distinto dentro del mismo row



by for miguel machado
-->



<?php

if( have_rows('what_to_list') ):

  $i=0;

while ( have_rows('what_to_list') ) : the_row();?>

  <?php if ($i==0){ ?>

    <div align="left">
      <div class="col-md-8 col-sm-12 packin_wrap">
        <img src="<?php  the_sub_field('what_to_imagen'); ?>" class="img-responsive">
      <div class="text_packin">
        <h2><?php  the_sub_field('what_to_item'); ?></h2>
        <p><?php  the_sub_field('what_to_descripcion'); ?></p>
      </div>
      </div>
    </div>

  <?php $i=1; ?>
    
  <?php }else{ ?>

    <div>
      <div class="col-md-8 col-md-offset-4  col-sm-12 list_conten packin_wrap" align="right">
        <div class="text_packin">
          <h2><?php  the_sub_field('what_to_item'); ?></h2>
          <p><?php  the_sub_field('what_to_descripcion'); ?></p>
        </div>
        <img src="<?php  the_sub_field('what_to_imagen'); ?>" class="img-responsive">
      </div>
    </div>

    <?php $i=0; ?>

  <?php } ?>

  <!-- cicle loops-->
    
<?php    endwhile; else : // no rows found
	endif;
?>