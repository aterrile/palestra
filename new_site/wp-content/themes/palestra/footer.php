
<div class="overlay"></div>
<div id="popup">
    <a href="#" class="cerrar"><i class="fa fa-times"></i></a>
    <div class="row">
        <div class="col-lg-12">
            <div class="box">
                <div class="box-header">
                    <h2 class="box-title">Ingrese sus datos para continuar</h2>
                </div>
                <div class="box-body">
                    <form action="" method="post">
                        <input type="hidden" name="ir_a_pagar" id="ir_a_pagar" value="1">
                        <input type="hidden" name="valor_total" id="valor_total">
                        <input type="hidden" name="plan_elegido" id="plan_elegido">

                        <input type="hidden" name="direccion" class="form-control" value="-">

                        <div class="col-lg-6 col-xs-12">
                            <label>Nombre</label>
                            <input type="text" name="nombre" class="form-control">
                        </div>
                        <div class="col-lg-6 col-xs-12">
                            <label>Apellido</label>
                            <input type="text" name="apellido" class="form-control">
                        </div>
                        <div class="col-lg-6 col-xs-12">
                            <label>Email</label>
                            <input type="text" name="email" class="form-control">
                        </div>
                        <div class="col-lg-6 col-xs-12">
                            <label>Telefono</label>
                            <input type="text" name="telefono" class="form-control">
                        </div>
                        <div class="col-lg-6 col-xs-12">
                            <label>Atendido por</label>
                            <input type="text" name="atendido_por" class="form-control">
                        </div>
                        <div class="col-lg-6 col-xs-12">
                            <label>Fecha Inicio Plan</label>
                            <input type="text" name="fecha_inicio" id="fecha_inicio" style="background: #fff" class="form-control" readonly>
                        </div>
                        <div class="col-lg-12 col-xs-12">
                            <button type="button" onclick="javascript: ingresamos()" class="boton pull-left"></button>
                            <img src="https://i.imgur.com/dX68GDo.png" class="pull-right" style="margin: 15px 0 0 0">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-xs-6">
                    <img src="<?php bloginfo('template_url') ?>/img/logo.png" class="logo">
                </div>
                <div class="col-lg-6 col-xs-6">
                    <img src="<?php bloginfo('template_url') ?>/img/logo_webpay.png" class="pull-right webpay">
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <p class="legal">© 2017. Todos los derechos reservados Palestra Sports.</p>
                </div>
            </div>
        </div>
    </footer>
</main>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?php bloginfo('template_url') ?>/js/bootstrap.min.js"></script>

<!-- Owl Carousel  -->
<script src='<?php bloginfo('template_url') ?>/js/owl.carousel.min.js'></script>

<!-- Datepicker -->
<script src="<?php bloginfo('template_url') ?>/js/bootstrap-datepicker.min.js"></script>

<script src="<?php bloginfo('template_url') ?>/js/custom.js"></script>

<?php wp_footer(); ?>
        
</body>
</html>

