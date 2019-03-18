<?php
/**
 * Template Name: Actividades
 *
 */


get_header(); 

while( have_posts() ) : the_post();
?>

<section id="actividades"> 
    <div class="section_header">
        <img src="<?php bloginfo('template_url') ?>/img/bg_actividades.jpg" class="heading">
        <h2> Actividades dirigidas </h2>
    </div>

    <div class="container">
        <div class="actividades_list">
            <?php foreach ([1,2,3,4,5,6,7] as $key => $item) { ?>
            <div class="row actividad_item">
                <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12">
                    <img src="<?php bloginfo('template_url') ?>/img/actividad<?php echo $item ?>.png" class="img-resposive">
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="horarios">
                        <h4>dias y horarios</h4>
                        <ul>
                            <li>
                                <strong>Lunes</strong> (Manuel) <br>
                                9:00 am / 10:00 am
                            </li>
                            <li>
                                <strong>Martes</strong> (Manuel) <br>
                                9:00 am / 10:00 am
                            </li>
                            <li>
                                <strong>Miércoles</strong> (Manuel) <br>
                                9:00 am / 10:00 am
                            </li>
                            <li>
                                <strong>Jueves</strong> (Manuel) <br>
                                9:00 am / 10:00 am
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <p>Su característica principal es que se trasladan las pesas de la sala de musculación a las clases de aeróbica para conseguir así una mezcla de ejercicios muy satisfactoria.</p>
                    <p>Los movimientos de la clase son simples y sencillos lo que hace del BodyPump una clase muy accesible para todos los que desean realizar deporte sin tener que seguir coreografías difíciles ni sufrir con posturas que requieran un proceso de aprendizaje largo.</p>
                    <p>“Todos los ejercicios se realizan con una resistencia añadida mediante una barra y unos discos de peso variable que permiten trabajar el músculo con más intensidad. El peso variará según el grupo muscular que se trabaje y según la capacidad del alumno que lo practique”.</p>
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
