<?php
/**
 * Template Name: Belleza y Armonia
 *
 */


get_header(); 

while( have_posts() ) : the_post();
?>

<section id="belleza"> 
    <?php foreach ([1,2,3,4,5] as $key => $value) { ?>
    <div class="belleza_item">
        <div class="container small">
            <div class="row">
                <div class="col-lg-7 col-md-7 col-sm-6 col-xs-12">
                    <h3>Tratamiento reductivo <strong>anticelulitico</strong></h3>
                    <p>El objetivo de este tratamiento de endermoterapia y termo-estimulación es trabajar la movilización de las grasas del cuerpo, obteniendo efectos reductores, de drenaje y desintoxicación, logrando así una disminución del tejido adiposo, reducción de la talla, de la celulitis en sus grados 1, 2 y 3,  modela y reafirma el cuerpo estilizando tu figura.</p>
                    <p>
                        <strong>
                        Tiempo: 1:15 <br>
                        Código: N/D <br>
                        Categoría: Tratamiento Corporal
                        </strong>
                    </p>

                </div>
                <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12">
                    <form>
                        <img src="<?php bloginfo('template_url') ?>/img/foto_sesion_belleza.jpg">
                        <select class="form-control">
                            <option value="">¿Cuántas Sesiones?</option>
                            <?php for ($i=1; $i<=12 ; $i++) { ?> 
                            <option value="<?php echo $i; ?>"><?php echo $i; ?> Sesiones</option>
                            <?php } ?>
                        </select>
                        <h4><sup>$</sup>0</h4>
                        <button>comprar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php } ?>
</section>
    
<?php 
endwhile;
get_footer(); 
?>
