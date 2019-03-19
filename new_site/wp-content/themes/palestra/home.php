<?php
/**
 * Template Name: Home
 *
 */


get_header(); 

while( have_posts() ) : the_post();
?>

<section id="home"> 
    <div id="slider" class="owl-carousel">
        <div> <img src="<?php bloginfo('template_url') ?>/fotos/slide1.jpg" class="img-responsive"> </div>
        <div> <img src="<?php bloginfo('template_url') ?>/fotos/slide1.jpg" class="img-responsive"> </div>
        <div> <img src="<?php bloginfo('template_url') ?>/fotos/slide1.jpg" class="img-responsive"> </div>
    </div>

    <div id="titulares">
        <div class="container small">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <a href="<?php url(); ?>/planes">
                        <h3> Compra tu plan </h3>
                        <img src="<?php bloginfo('template_url') ?>/img/caluga1.jpg" class="img-responsive">
                        <span class="boton">ver mas</span>
                    </a>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <a href="#">
                        <h3> tipos entrenamientos </h3>
                        <img src="<?php bloginfo('template_url') ?>/img/caluga2.jpg" class="img-responsive">
                        <span class="boton">ver mas</span>
                    </a>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <a href="<?php bloginfo('wpurl') ?>/actividades-dirigidas">
                        <h3> actividades dirigidas </h3>
                        <img src="<?php bloginfo('template_url') ?>/img/caluga3.jpg" class="img-responsive">
                        <span class="boton">ver mas</span>
                    </a>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <a href="<?php bloginfo('wpurl') ?>/horarios">
                        <h3> horarios clases </h3>
                        <img src="<?php bloginfo('template_url') ?>/img/caluga4.jpg" class="img-responsive">
                        <span class="boton">ver mas</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div id="testimonios">
        <div class="container small">
            <div id="carousel_testimonios" class="owl-carousel">
                <div>
                    <img src="<?php bloginfo('template_url') ?>/img/testigo.jpg">
                    <h3>fernandA redondo</h3>
                    <h4>comentario en facebook</h4>
                    <p>Lorem Ipsum is simply lores dummy text of the printing and typesetting industrylow. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                </div>
                <div>
                    <img src="<?php bloginfo('template_url') ?>/img/testigo.jpg">
                    <h3>fernandA redondo</h3>
                    <h4>comentario en facebook</h4>
                    <p>Lorem Ipsum is simply lores dummy text of the printing and typesetting industrylow. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                </div>
                <div>
                    <img src="<?php bloginfo('template_url') ?>/img/testigo.jpg">
                    <h3>fernandA redondo</h3>
                    <h4>comentario en facebook</h4>
                    <p>Lorem Ipsum is simply lores dummy text of the printing and typesetting industrylow. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container small">
        <div id="brand">
            <div id="logos" class="owl-carousel">
                <?php for ($i=1; $i <= 6 ; $i++) { ?>
                <div> <img src="<?php bloginfo('template_url') ?>/img/logo<?php echo $i; ?>.jpg"> </div>
                <?php } ?>
                <?php for ($i=1; $i <= 6 ; $i++) { ?>
                <div> <img src="<?php bloginfo('template_url') ?>/img/logo<?php echo $i; ?>.jpg"> </div>
                <?php } ?>
            </div>
        </div>
    </div>


    <div class="promo_pop">
        <a href="#" class="closeme"><img src="<?php bloginfo('template_url') ?>/img/closeme.png"></a>
        <img data-plan="Anual" data-tipo="Estandar" data-color="#2d3ba1" data-precio_formatted="$268.888" data-valor_total="268888" src="<?php bloginfo('template_url') ?>/img/popup.jpg" class="pop">
    </div>

</section>
    
<?php 
endwhile;
get_footer(); 
?>
