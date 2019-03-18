<?php
/**
 * Template Name: Contacto
 *
 */


get_header(); 

while( have_posts() ) : the_post();
?>

<section id="contacto"> 
    <div class="section_header">
        <img src="<?php bloginfo('template_url') ?>/img/bg_contacto.jpg" class="heading">
        <h2> Contacto Palestra</h2>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <ul>
                    <li>  
                        <img src="<?php bloginfo('template_url') ?>/img/icons/home.png">
                        <span>Avenida Cachapoal 195 <br>
                        Rancagua.</span>
                    </li>
                    <li>
                        <img src="<?php bloginfo('template_url') ?>/img/icons/phone.png">
                        <span>(72) 223 8032</span>
                    </li>
                    <li>
                        <img src="<?php bloginfo('template_url') ?>/img/icons/mail.png">
                        <span>contacto@palestra.cl</span>
                    </li>
                </ul>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <form method="post">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <label>Nombre</label>
                                <input type="text" name="nombre" class="input-control">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <label>Apellido</label>
                                <input type="text" name="apellido" class="input-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <label>Correo Electrónico</label>
                                <input type="text" name="email" class="input-control">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <label>Teléfono</label>
                                <input type="text" name="telefono" class="input-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label>Mensaje</label>
                                <textarea name="mensaje" class="input-control"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <button class="boton">Enviar</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-12 col-xs-12">
                <div id="mapa"></div>
            </div>
        </div>
    </div>

</section>
    

<script>
    
function initMap() {

    var map = new google.maps.Map(document.getElementById('mapa'), {
      center: {lat: -34.1767258, lng: -70.7436747},
      zoom: 16,
      styles: [{"featureType":"water","elementType":"geometry","stylers":[{"color":"#e9e9e9"},{"lightness":17}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":21}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#dedede"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]}]
    });

    var marker = new google.maps.Marker({
        position: {lat: -34.1767258, lng: -70.7436747},
        map: map,
        title: 'Palestra'
    });
}

window.onload = function() {
  initMap();
};

</script>

<?php 
endwhile;
get_footer(); 
?>
