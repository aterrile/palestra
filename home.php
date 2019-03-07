<?php  
function url(){
    echo 'https://www.palestra.cl';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Palestra</title>
    <!-- Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Owl Carousel -->
    <link href="css/owl.carousel.min.css" rel="stylesheet" type="text/css" />

    <link href="css/style.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="icon" href="img/favicon.png" type="image/png" />

</head>
<body class="page-home">

<main>
    <!-- Static navbar -->
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">
                    <img src="img/logo.png">
                </a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="<?php url(); ?>">Home</a></li>
                    <li><a href="<?php url(); ?>/planes">Planes</a></li>
                    <li><a href="<?php url(); ?>/actividades-y-fitness/">Actividades</a></li>
                    <li><a href="<?php url(); ?>/ByA/">Belleza</a></li>
                    <li><a href="<?php url(); ?>/promociones-2/">Promociones</a></li>
                    <li><a href="<?php url(); ?>/contacto-2">Contacto  </a></li>
                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
        <!--/.container-fluid -->
    </nav>

    <section id="home"> 
        <div id="slider" class="owl-carousel">
            <div> <img src="fotos/slide1.jpg" class="img-responsive"> </div>
            <div> <img src="fotos/slide1.jpg" class="img-responsive"> </div>
            <div> <img src="fotos/slide1.jpg" class="img-responsive"> </div>
        </div>

        <div id="titulares">
            <div class="container small">
                <div class="row">
                    <?php for ($i=1; $i <= 4 ; $i++) { ?>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <a href="#">
                            <h3> Compra tu plan </h3>
                            <img src="img/caluga<?php echo $i; ?>.jpg" class="img-responsive">
                            <span class="boton">ver mas</span>
                        </a>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>

        <div class="container small">
            <div id="brand">
                <h2>Convenios palestra</h2>
                <div id="logos" class="owl-carousel">
                    <?php for ($i=1; $i <= 6 ; $i++) { ?>
                    <div> <img src="img/logo<?php echo $i; ?>.jpg"> </div>
                    <?php } ?>
                    <?php for ($i=1; $i <= 6 ; $i++) { ?>
                    <div> <img src="img/logo<?php echo $i; ?>.jpg"> </div>
                    <?php } ?>
                </div>
            </div>
        </div>

    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-xs-6">
                    <img src="img/logo.png" class="logo">
                </div>
                <div class="col-lg-6 col-xs-6">
                    <img src="img/logo_webpay.png" class="pull-right webpay">
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
                    <form action="<?php echo $result->url; ?>" method="post">
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
                        <div class="col-lg-12 col-xs-12">
                            <label>Dirección</label>
                            <input type="text" name="direccion" class="form-control">
                        </div>
                        <div class="col-lg-12 col-xs-12">
                            <input type="hidden" name="token_ws" value="<?php echo $result->token; ?>">
                            <button type="submit" class="boton"></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>

<!-- Owl Carousel  -->
<script src='js/owl.carousel.min.js'></script>

<script src="js/custom.js"></script>


</body>
</html>
