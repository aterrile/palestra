<?php  
ini_set('error_reporting', E_ALL); 
ini_set('display_errors', 1);
//include '../wp-load.php';
require_once('vendor/transbank/transbank-sdk/init.php');

use Transbank\Webpay\Configuration;
use Transbank\Webpay\Webpay;

require_once( 'integration.php' );

$transbank_vars = get_option('woocommerce_transbank_settings');


/** Configuracion parametros de la clase Webpay */
$configuration = new Configuration();
$configuration->setEnvironment($transbank_vars['webpay_test_mode']);
$configuration->setCommerceCode($transbank_vars['webpay_commerce_code']);
$configuration->setPrivateKey($transbank_vars['webpay_private_key']);
$configuration->setPublicCert($transbank_vars['webpay_public_cert']);
$configuration->setWebpayCert($transbank_vars['webpay_webpay_cert']);

/** Creacion Objeto Webpay */
$webpay = new Webpay($configuration);

$tx_step = "Init";
$amount = 10;
$buyOrder = rand();
$sessionId = uniqid();
$urlReturn = "https://www.palestra.cl/landing/?action=getResult";
$urlFinal  = "https://www.palestra.cl/landing/?action=end";

$request = array(
    "amount"    => $amount,
    "buyOrder"  => $buyOrder,
    "sessionId" => $sessionId,
    "urlReturn" => $urlReturn,
    "urlFinal"  => $urlFinal
);

/** Iniciamos Transaccion */
$result = $webpay->getNormalTransaction()->initTransaction($amount, $buyOrder, $sessionId, $urlReturn, $urlFinal);

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
    <link href="css/style.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="icon" href="img/favicon.png" type="image/png" />

</head>
<body>

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

    <section id="mensual">
        <h2> Plan mensual </h2>
        <div class="row">
            <div class="container">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="box">
                        <h3 class="personalizado"> Personalizado </h3>
                        <p>Lorem Ipsum is simply lores dummy text of the printing and typesetting industrylow. Lorem Ipsum has been the industry's standard dummy</p>
                        <span class="precio"> <sup>$</sup>190.000 </span>
                        <a href="#" class="boton btnComprar">comprar</a>
                        <h4> 6 CUOTAS PRECIO CONTADO </h4>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="box">
                        <h3 class="plus"> plus </h3>
                        <p>Lorem Ipsum is simply lores dummy text of the printing and typesetting industrylow. Lorem Ipsum has been the industry's standard dummy</p>
                        <span class="precio"> <sup>$</sup>59.900 </span>
                        <a href="#" class="boton btnComprar">comprar</a>
                        <h4> 6 CUOTAS PRECIO CONTADO </h4>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="box">
                        <h3 class="lite"> lite </h3>
                        <p>Lorem Ipsum is simply lores dummy text of the printing and typesetting industrylow. Lorem Ipsum has been the industry's standard dummy</p>
                        <span class="precio"> <sup>$</sup>39.000 </span>
                        <a href="#" class="boton btnComprar">comprar</a>
                        <h4> 6 CUOTAS PRECIO CONTADO </h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="trimestral">
        <h2> Plan Trimestral </h2>
        <div class="row">
            <div class="container">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="box">
                        <h3 class="personalizado"> Personalizado </h3>
                        <p>Lorem Ipsum is simply lores dummy text of the printing and typesetting industrylow. Lorem Ipsum has been the industry's standard dummy</p>
                        <span class="precio"> <sup>$</sup>190.000 </span>
                        <a href="#" class="boton btnComprar">comprar</a>
                        <h4> 6 CUOTAS PRECIO CONTADO </h4>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="box">
                        <h3 class="plus"> plus </h3>
                        <p>Lorem Ipsum is simply lores dummy text of the printing and typesetting industrylow. Lorem Ipsum has been the industry's standard dummy</p>
                        <span class="precio"> <sup>$</sup>59.900 </span>
                        <a href="#" class="boton btnComprar">comprar</a>
                        <h4> 6 CUOTAS PRECIO CONTADO </h4>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="box">
                        <h3 class="lite"> lite </h3>
                        <p>Lorem Ipsum is simply lores dummy text of the printing and typesetting industrylow. Lorem Ipsum has been the industry's standard dummy</p>
                        <span class="precio"> <sup>$</sup>39.000 </span>
                        <a href="#" class="boton btnComprar">comprar</a>
                        <h4> 6 CUOTAS PRECIO CONTADO </h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="semestral">
        <h2> Plan Semestral </h2>
        <div class="row">
            <div class="container">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="box">
                        <h3 class="personalizado"> Personalizado </h3>
                        <p>Lorem Ipsum is simply lores dummy text of the printing and typesetting industrylow. Lorem Ipsum has been the industry's standard dummy</p>
                        <span class="precio"> <sup>$</sup>190.000 </span>
                        <a href="#" class="boton btnComprar">comprar</a>
                        <h4> 6 CUOTAS PRECIO CONTADO </h4>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="box">
                        <h3 class="plus"> plus </h3>
                        <p>Lorem Ipsum is simply lores dummy text of the printing and typesetting industrylow. Lorem Ipsum has been the industry's standard dummy</p>
                        <span class="precio"> <sup>$</sup>59.900 </span>
                        <a href="#" class="boton btnComprar">comprar</a>
                        <h4> 6 CUOTAS PRECIO CONTADO </h4>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="box">
                        <h3 class="lite"> lite </h3>
                        <p>Lorem Ipsum is simply lores dummy text of the printing and typesetting industrylow. Lorem Ipsum has been the industry's standard dummy</p>
                        <span class="precio"> <sup>$</sup>39.000 </span>
                        <a href="#" class="boton btnComprar">comprar</a>
                        <h4> 6 CUOTAS PRECIO CONTADO </h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="anual">
        <h2> Plan Anual </h2>
        <div class="row">
            <div class="container">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="box">
                        <h3 class="personalizado"> Personalizado </h3>
                        <p>Lorem Ipsum is simply lores dummy text of the printing and typesetting industrylow. Lorem Ipsum has been the industry's standard dummy</p>
                        <span class="precio"> <sup>$</sup>190.000 </span>
                        <a href="#" class="boton btnComprar">comprar</a>
                        <h4> 6 CUOTAS PRECIO CONTADO </h4>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="box">
                        <h3 class="plus"> plus </h3>
                        <p>Lorem Ipsum is simply lores dummy text of the printing and typesetting industrylow. Lorem Ipsum has been the industry's standard dummy</p>
                        <span class="precio"> <sup>$</sup>59.900 </span>
                        <a href="#" class="boton btnComprar">comprar</a>
                        <h4> 6 CUOTAS PRECIO CONTADO </h4>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="box">
                        <h3 class="lite"> lite </h3>
                        <p>Lorem Ipsum is simply lores dummy text of the printing and typesetting industrylow. Lorem Ipsum has been the industry's standard dummy</p>
                        <span class="precio"> <sup>$</sup>39.000 </span>
                        <a href="#" class="boton btnComprar">comprar</a>
                        <h4> 6 CUOTAS PRECIO CONTADO </h4>
                    </div>
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
<script src="js/custom.js"></script>


<script>
<?php if($_GET['action'] == 'end'){ ?>
$("#popup h2").text('Transacción Anulada');    
$("#popup .cerrar").remove();
$("#popup label, #popup input").remove();
$("#popup .boton").replaceWith('<button type="button" class="boton" onclick="location.reload()">Volver a intentar</button>');
$("#popup, .overlay").fadeIn(500);
<?php } ?>    
</script>

</body>
</html>
