<?php
/**
 * Template Name: Home
 *
 */


get_header(); 

while( have_posts() ) : the_post();

$promociones = get_field('promociones');
$rand_promo = rand(0,(count($promociones)-1));
$slider_home = get_field('slider_home');
$calugas = get_field('calugas');
$testimonios = get_field('testimonios');
$logos = get_field('logos');

?>

<section id="home"> 
    <div id="slider" class="owl-carousel">
        <?php foreach ($slider_home as $key => $slide) { ?>
        <div> 
            <?php if($slide['link']){ ?>
            <a href="<?php echo $slide['link'] ?>">
            <?php } ?>
            <img src="<?php echo $slide['foto']['url'] ?>" class="img-responsive"> 
            <?php if($slide['link']){ ?>
            </a>
            <?php } ?>
        </div>
        <?php } ?>
    </div>

    <div id="titulares">
        <div class="container small">
            <div class="row">
                <?php foreach ($calugas as $key => $item) { ?>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <a href="<?php echo $item['link'] ?>">
                        <h3> <?php echo $item['titulo'] ?> </h3>
                        <img src="<?php echo $item['foto']['url'] ?>" class="img-responsive">
                        <span class="boton">ver mas</span>
                    </a>
                </div>
                <?php } ?>

            </div>
        </div>
    </div>

    <?php if( $testimonios ): ?>
    <div id="testimonios">
        <div class="container small">
            <div id="carousel_testimonios" class="owl-carousel">
                <?php foreach ($testimonios as $key => $testimonio) { ?> 
                <div>
                    <img src="<?php echo $testimonio['foto']['sizes']['thumbnail'] ?>">
                    <h3><?php echo $testimonio['autor'] ?></h3>
                    <h4><?php echo $testimonio['procedencia'] ?></h4>
                    <p><?php echo $testimonio['testimonio'] ?></p>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <?php endif; ?>

    <div class="container small">
        <div id="brand">
            <div id="logos" class="owl-carousel">
                <?php foreach($logos as $logo) { ?>
                <div> <img src="<?php echo $logo['url'] ?>"> </div>
                <?php } ?>
            </div>
        </div>
    </div>

    <div class="promo_pop">
        <a href="#" class="closeme"><img src="<?php bloginfo('template_url') ?>/img/closeme.png"></a>
        <img src="<?php echo $promociones[$rand_promo]['foto']['url'] ?>" class="pop">
        <button  data-plan="Plan <?php echo $promociones[$rand_promo]['periodo_promo']; ?>" data-tipo="<?php echo $promociones[$rand_promo]['tipo_plan']; ?>" data-color="#2d3ba1" data-precio_formatted="<?php echo "$".number_format($promociones[$rand_promo]['precio'],0,',','.') ?>" data-valor_total="<?php echo $promociones[$rand_promo]['precio']; ?>" class="boton">Comprar</button>
    </div>

</section>
    
<?php 
endwhile;
get_footer(); 
?>
