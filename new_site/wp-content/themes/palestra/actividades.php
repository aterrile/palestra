<?php
/**
 * Template Name: Actividades
 *
 */


get_header(); 

while( have_posts() ) : the_post();

$actividades = get_field('actividades');

?>

<section id="actividades"> 
    <div class="section_header">
        <img src="<?php bloginfo('template_url') ?>/img/bg_actividades.jpg" class="heading">
        <h2> Actividades dirigidas </h2>
    </div>

    <div class="container">
        <div class="actividades_list">
            <?php foreach ($actividades as $key => $act) { ?>
            <div class="row actividad_item">
                <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12">
                    <img src="<?php echo $act['foto']['url'] ?>" class="img-resposive">
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="horarios">
                        <h4>dias y horarios</h4>
                        <ul>
                            <?php 
                            $horarios = $act['horarios'];
                            foreach ($horarios as $h) { 
                            ?>
                            <li>
                                <strong><?php echo $h['dia'] ?></strong> (<?php echo $h['instructor'] ?>) <br>
                                <?php echo $h['hora'] ?>
                            </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <?php echo $act['descripcion'] ?>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>

</section>
    
<?php 
endwhile;
get_footer(); 
?>
