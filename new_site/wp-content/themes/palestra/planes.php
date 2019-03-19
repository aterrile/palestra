<?php
/**
 * Template Name: Planes
 *
 */


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


if( $_POST['ir_a_pagar'] ){
    
    $tx_step = "Init";
    $amount = $_POST['valor_total'];
    $buyOrder = rand();
    $sessionId = uniqid();
    $urlReturn = "https://www.palestra.cl/planes/?action=getResult";
    $urlFinal  = "https://www.palestra.cl/planes/?action=end";

    $request = array(
        "amount"    => $amount,
        "buyOrder"  => $buyOrder,
        "sessionId" => $sessionId,
        "urlReturn" => $urlReturn,
        "urlFinal"  => $urlFinal
    );

    /** Iniciamos Transaccion */
    $result = $webpay->getNormalTransaction()->initTransaction($amount, $buyOrder, $sessionId, $urlReturn, $urlFinal);

    $the_token = $result->token;

    $_SESSION["todos"]= $_POST["nombre"]."**".
                        $_POST["apellido"]."**".
                        $_POST["email"]."**".
                        $_POST["telefono"]."**".
                        $_POST["direccion"]."**".
                        $_POST["plan_elegido"]."**".
                        $_POST["valor_total"]."**".
                        $_POST["atendido_por"]."**".
                        $_POST["fecha_inicio"];

    $wpdb->insert('WepPay', array(
        'web_token' => $the_token,
        'web_valor' => $_POST["valor_total"],
        'web_estado' => '0', // ... and so on
    ));
    ?>

    <!DOCTYPE html>
    <html>
    <head>
        <title> Palestra Sport - Checkout </title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    </head>
    <body>
        <form action="<?php echo $result->url; ?>" method="post" id="frm">
            <input type="hidden" name="token_ws" id="token_ws" value="<?php echo $the_token; ?>">
        </form>
        <script> $("#frm").submit(); </script>
    </body>
    </html>

    <?php
    exit();
}


get_header(); 

while( have_posts() ) : the_post();
?>

<section id="mensual">
    <h2> Plan mensual </h2>
    <div class="row">
        <div class="container">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="box" data-valor="39888">
                    <h3 class="estandar"> Estándar </h3>
                    <p>El entrenador de Staff te guía en la elección de la plantilla de ejercicios de acuerdo a tu objetivo y nivel, realizando una atención asistida, previa evaluación al momento de matricularte.</p>
                    <span class="precio"> <sup>$</sup>39.888 </span>
                    <a href="#" class="boton btnComprar">comprar</a>
                    <h4> 6 CUOTAS PRECIO CONTADO </h4>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="box" data-valor="59888">
                    <h3 class="plus"> plus </h3>
                    <p>El entrenador de staff realiza un programa específico para ti, entregando una atención más dirigida y con una evaluación mensual.</p>
                    <span class="precio"> <sup>$</sup>59.888 </span>
                    <a href="#" class="boton btnComprar">comprar</a>
                    <h4> 6 CUOTAS PRECIO CONTADO </h4>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="box" data-valor="198000">
                    <h3 class="personalizado"> Personalizado </h3>
                    <p>Entrenamiento para alcanzar tus metas en el menor tiempo posible, el entrenador personal entrega una atención 100% para ti, con un programa específico y variado, sin límites de evaluaciones.</p>
                    <span class="precio"> <sup>$</sup>198.000 </span>
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
                <div class="box" data-valor="89888">
                    <h3 class="estandar"> Estándar </h3>
                    <p>El entrenador de Staff te guía en la elección de la plantilla de ejercicios de acuerdo a tu objetivo y nivel, realizando una atención asistida, previa evaluación al momento de matricularte.</p>
                    <span class="precio"> <sup>$</sup>89.888 </span>
                    <a href="#" class="boton btnComprar">comprar</a>
                    <h4> 6 CUOTAS PRECIO CONTADO </h4>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="box" data-valor="149888">
                    <h3 class="plus"> plus </h3>
                    <p>El entrenador de staff realiza un programa específico para ti, entregando una atención más dirigida y con una evaluación mensual.</p>
                    <span class="precio"> <sup>$</sup>149.888 </span>
                    <a href="#" class="boton btnComprar">comprar</a>
                    <h4> 6 CUOTAS PRECIO CONTADO </h4>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="box" data-valor="567000">
                    <h3 class="personalizado"> personalizado </h3>
                    <p>Entrenamiento para alcanzar tus metas en el menor tiempo posible, el entrenador personal entrega una atención 100% para ti, con un programa específico y variado, sin límites de evaluaciones.</p>
                    <span class="precio"> <sup>$</sup>567.000 </span>
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
                    <h3 class="estandar" data-valor="164888"> Estándar </h3>
                    <p>El entrenador de Staff te guía en la elección de la plantilla de ejercicios de acuerdo a tu objetivo y nivel, realizando una atención asistida, previa evaluación al momento de matricularte.</p>
                    <span class="precio"> <sup>$</sup>164.888 </span>
                    <a href="#" class="boton btnComprar">comprar</a>
                    <h4> 6 CUOTAS PRECIO CONTADO </h4>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="box" data-valor="284888">
                    <h3 class="plus"> plus </h3>
                    <p>El entrenador de staff realiza un programa específico para ti, entregando una atención más dirigida y con una evaluación mensual.</p>
                    <span class="precio"> <sup>$</sup>284.888 </span>
                    <a href="#" class="boton btnComprar">comprar</a>
                    <h4> 6 CUOTAS PRECIO CONTADO </h4>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="box" data-valor="1088000">
                    <h3 class="personalizado"> personalizado </h3>
                    <p>Entrenamiento para alcanzar tus metas en el menor tiempo posible, el entrenador personal entrega una atención 100% para ti, con un programa específico y variado, sin límites de evaluaciones.</p>
                    <span class="precio"> <sup>$</sup>1.088.000 </span>
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
                <div class="box" data-valor="298888">
                    <h3 class="estandar"> Estándar </h3>
                    <p>El entrenador de Staff te guía en la elección de la plantilla de ejercicios de acuerdo a tu objetivo y nivel, realizando una atención asistida, previa evaluación al momento de matricularte.</p>
                    <span class="precio"> <sup>$</sup>298.888 </span>
                    <a href="#" class="boton btnComprar">comprar</a>
                    <h4> 6 CUOTAS PRECIO CONTADO </h4>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="box" data-valor="538888">
                    <h3 class="plus"> plus </h3>
                    <p>El entrenador de staff realiza un programa específico para ti, entregando una atención más dirigida y con una evaluación mensual.</p>
                    <span class="precio"> <sup>$</sup>538.888 </span>
                    <a href="#" class="boton btnComprar">comprar</a>
                    <h4> 6 CUOTAS PRECIO CONTADO </h4>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="box" data-valor="2088000">
                    <h3 class="personalizado"> personalizado </h3>
                    <p>Entrenamiento para alcanzar tus metas en el menor tiempo posible, el entrenador personal entrega una atención 100% para ti, con un programa específico y variado, sin límites de evaluaciones.</p>
                    <span class="precio"> <sup>$</sup>2.088.000 </span>
                    <a href="#" class="boton btnComprar">comprar</a>
                    <h4> 6 CUOTAS PRECIO CONTADO </h4>
                </div>
            </div>
        </div>
    </div>
</section>






<script>
<?php 

switch($_GET['action']){

    case "end":

        $_SESSION['carro'] = "";
        $post_array = true;
        $tx_step = "End";
        $request = "";
        $result = $_POST;

        if(isset($result["TBK_TOKEN"])){
           $result["token_ws"] =  $result["TBK_TOKEN"];
        }
        $row = $wpdb->get_results( 'SELECT * FROM WepPay WHERE web_token = "'.$result["token_ws"].'"', OBJECT );

        if($row[0]->web_estado==0 || $row[0]->web_estado==3){
            $wpdb->update('WepPay', array(
                'web_estado'=>'3',
                'buyOrder'=>$result["TBK_ORDEN_COMPRA"],
                ), array('web_token'=>$result["TBK_TOKEN"]));
        ?>
            $("#popup h2").text('Transacción Anulada');    
            $("#popup .cerrar").remove();
            $("#popup label, #popup input").remove();
            $("#popup .boton").replaceWith('<button type="button" class="boton" onclick="location.href=\'https://www.palestra.cl/planes\'">Volver a intentar</button>');
            $("#popup, .overlay").show();
        
        <?php 
        } else { 
            $message = "";
            $fecha_ = explode("T",$row[0]->transactionDate);
            
            $fec = explode("-",$fecha_[0]);
            $fecha_final = $fec[2]."-".$fec[1]."-".$fec[0];

            $hora = explode(".",$fecha_[1]);
            $hora_final = $hora[0];
            
            $tarjeta = explode("***", $row[0]->cardDetail);
        ?>

            $("#popup h2").text('Compra realizada con Exito!');    
            $("#popup .cerrar").remove();
            $("#popup label, #popup input").remove();
            $("#popup .boton").replaceWith('<button type="button" class="boton" onclick="location.href=\'https://www.palestra.cl\'">Ir a www.palestra.cl</button>');
            $("#popup, .overlay").show();

        <?php } 
        break;


    case "getResult":

        if (!isset($_POST["token_ws"]))
            break;

        /** Token de la transacción */
        $token = filter_input(INPUT_POST, 'token_ws');
        $request = array(
            "token" => filter_input(INPUT_POST, 'token_ws')
        );

        /** Rescatamos resultado y datos de la transaccion */
        $result = $webpay->getNormalTransaction()->getTransactionResult($token);


        /** Verificamos resultado  de transacción */
        if ($result->detailOutput->responseCode === 0) {
            $next_page = $result->urlRedirection;
            $wpdb->update('WepPay', array(
                'web_estado'=>'1',
                'accountingDate'=>$result->accountingDate,
                'buyOrder'=>$result->buyOrder,
                'cardDetail'=>$result->cardDetail->cardNumber."***".$result->cardDetail->cardExpirationDate,
                'authorizationCode'=>$result->detailOutput->authorizationCode,
                'TypeCode'=>$result->detailOutput->paymentTypeCode,
                'sharesNumber'=>$result->detailOutput->sharesNumber,
                'commerceCode'=>$result->detailOutput->commerceCode,
                'transactionDate'=>$result->transactionDate,
                'VCI'=>$result->VCI,
            ), array('web_token'=>$_POST["token_ws"]));

            $datos_comprador = explode("**",$_SESSION["todos"]);
            $last_id = $wpdb->insert('webpay_pedidos', array(
                'ped_nombre' => $datos_comprador[0],
                'ped_apellido' => $datos_comprador[1],
                'ped_mail' => $datos_comprador[2],
                'ped_telefono' => $datos_comprador[3],
                'ped_direccion' => $datos_comprador[4],
                'ped_productos' => $datos_comprador[5],
                'ped_atendido_por' => $datos_comprador[7],
                'ped_fecha_inicio' => $datos_comprador[8],
                'ped_token' => $_POST["token_ws"],
                'ped_total' => $datos_comprador[6],
                'ped_estado' => '1',
            ));

            






            $imgCorporativa = "https://www.palestra.cl/wp-content/uploads/2016/06/logo_palestra_web.png";
            $colorCorporativo = "333789";
            $telefonoCorporativo = "Palestra Sport";
            $direccionCorporativa = "Palestra Sport";
            
            $body = '
            <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
            <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

            <head>
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
            <title>HTML - OMONA - newsletter 1</title>
            <meta name="description" content="" />
            <meta name="keywords" content="" />
            <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
            <style type="text/css">


            body {background-color: #ECECEC; min-width: 100% !important; margin: 0; padding: 0; -webkit-text-size-adjust: none;}
            table td {border-collapse: collapse; mso-table-lspace: 0; mso-table-rspace: 0;}
            table {border-collapse: collapse; mso-table-lspace: 0; mso-table-rspace: 0;}
            td {border-collapse: collapse; mso-table-lspace: 0; mso-table-rspace: 0;}
            img {border-collapse: collapse; border: none; margin: 0; padding: 0;}
            a {color: #A09FA5 !important; text-decoration: none !important;}
            p, h1, h2, h3, h4, h5, h6 {line-height: 20px; margin: 0px; padding: 0px;}
            ul {margin: 0px; padding: 0px; list-style-position: inside;}
            li {margin: 0px; padding: 0px; list-style-position: inside;}
            .yshortcuts {color: #A09FA5 !important; text-decoration: none !important; border-bottom: none !important;}
            .ReadMsgBody {background-color: #ECECEC; width: 100%;}
            .ExternalClass {background-color: #ECECEC; width: 100%; line-height: 100%;}
            .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td {line-height: 100%;}
            td[class=contentholdingtable] {min-width: 600px; width: 600px;}

            /* Responsivnes settings */

            @media screen and (max-width: 599px)
            {
            /* Main responsive elements */
            body {min-width: 100% !important;}
            table[class=holdingtable] {width: 300px !important;}
            td[class=contentholdingtable] {min-width: 0px !important; width: 300px !important; display: block !important;}
            td[class=spacercol] {float: left !important;}
            td[class=spacercolDELformobile] {display: none !important;}
            td[class=centerme] {text-align: center !important;}
            td[class=deletepaddingtop] {padding-top: 0px !important;}
            td[class=deletepaddingbottom] {padding-bottom: 0px !important;}
            td[class=fixpaddingtop8] {padding-top: 8px !important;}
            td[class=fixpaddingbottom24] {padding-bottom: 24px !important;}
            td[class=fixlogopaddingbottom] {padding-bottom: 12px !important;}
            td[class=fixlogopaddingtop] {padding-top: 12px !important;}
            td[class=strecher] {width: 276px !important;}
            td[class=fullwidthcontenttable] {width: 300px !important;}
            td[class=fullwidthcontenttableinset] {width: 276px !important;}
            td[class=splited2contenttableinset] {width: 276px !important; float: left !important;}
            td[class=splited3contenttableinset] {width: 276px !important; float: left !important;}
            td[class=splited4contenttableinset] {width: 132px !important; float: left !important;}
            td[class=splited1in3contenttableinset] {width: 276px !important; float: left !important;}
            td[class=splited2in3contenttableinset] {width: 276px !important; float: left !important;}
            td[class=splited2contenttableconected] {width: 300px !important; float: left !important;}
            td[class=splited4contenttableconected] {width: 150px !important; float: left !important;}
            td[class=splited1in3contenttableconected] {width: 300px !important; float: left !important;}
            td[class=splited2in3contenttableconected] {width: 300px !important; float: left !important;}
            td[class=splited3contenttableinsetconected] {width: 276px !important; float: left !important;}
            img[class=img-600] {width: 300px !important; height: auto !important;}
            img[class=img-380] {width: 276px !important; height: auto !important;}
            img[class=img-300] {width: 300px !important; height: auto !important;}
            img[class=img-282] {width: 276px !important; height: auto !important;}
            }
            </style>
            </head>

            <body bgcolor="#ECECEC" style="padding: 0px; margin: 0px;">

            <!--START main table-->
            <table bgcolor="#ECECEC" width="100%" border="0" cellpadding="0" cellspacing="0" style="background: #ECECEC; padding: 0px; margin: 0px; border-collapse: collapse;">

            <!--START module / Header 1 / Logo with social icons and navi links on top-->
            <tr>
            <td align="center" style="padding-top: 12px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; margin: 0px; border-collapse: collapse;">
            <table class="holdingtable" width="600" border="0" cellpadding="0" cellspacing="0" style="padding: 0px; margin: 0px; border-collapse: collapse;">
              <tr>
              <td class="contentholdingtable" bgcolor="#ffffff" width="600" align="center" style="padding: 0px; margin: 0px; border-collapse: collapse;">
                <table border="0" cellpadding="0" cellspacing="0" style="padding: 0px; margin: 0px; border-collapse: collapse;">

                  <!--START content holding table row / logo with social links-->
                  <tr>
                  <td align="center" style="border-bottom: solid 4px #'.$colorCorporativo.'; padding-top: 24px; padding-right: 12px; padding-bottom: 0px; padding-left: 12px; margin: 0px; border-collapse: collapse;">
                    <table border="0" cellpadding="0" cellspacing="0" style="padding: 0px; margin: 0px; border-collapse: collapse;">
                      <tr>
                      <!--START LEFT CONTENT column-->
                      <td class="splited1in3contenttableinset" width="184" align="center" valign="middle" style="padding: 0px; margin: 0px; border-collapse: collapse;">
                        <table width="100%" border="0" cellpadding="0" cellspacing="0" style="padding: 0px; margin: 0px; border-collapse: collapse;">
                          <tr>
                          <td class="fixlogopaddingbottom" align="center" style="font-size: 0px; line-height: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 24px; padding-left: 0px; margin: 0px; border-collapse: collapse;">
                          <!--Logo 165 goes here--><img src="'.$imgCorporativa.'" width="165" alt="image 165" border="no" style="margin: 0px; padding: 0px; display: block; border: none; max-width: 165px;"/>
                          </td>
                          </tr>
                        </table>
                      </td>
                      <!--END LEFT CONTENT column-->
                      <!--SPACER COLUMN do not delete--><td class="spacercolDELformobile" width="12" align="center" style="padding: 0px; margin: 0px; border-collapse: collapse;">&nbsp;</td>
                      <!--START RIGHT CONTENT column-->
                      <td class="splited2in3contenttableinset" width="380" align="center" valign="middle" style="padding: 0px; margin: 0px; border-collapse: collapse;">
                        <table width="100%" border="0" cellpadding="0" cellspacing="0" style="padding: 0px; margin: 0px; border-collapse: collapse;">
                          <tr>
                          <td align="right" style="padding-top: 0px; padding-right: 0px; padding-bottom: 24px; padding-left: 0px; margin: 0px; border-collapse: collapse;">
                            <table border="0" cellpadding="0" cellspacing="0" style="padding: 0px; margin: 0px; border-collapse: collapse;">
                              <tr>
                              <td class="strecher" align="center" style="padding-top: 0px; padding-right: 12px; padding-bottom: 0px; padding-left: 12px; margin: 0px; border-collapse: collapse;">
                                <table border="0" cellpadding="0" cellspacing="0" style="padding: 0px; margin: 0px; border-collapse: collapse;">
                                  <tr>
                                  <!--Column with icon 1-->
                                  <td align="center" valign="middle" style="font-size: 16px; line-height: 0px; padding-top: 0px; padding-right: 2px; padding-bottom: 0px; padding-left: 2px; margin: 0px; color:#ababab; font-family: Arial, Helvetica, sans-serif;">
                                  '.$telefonoCorporativo.'
                                  </td>
                                  </tr>
                                </table>
                              </td>
                              </tr>
                            </table>
                          </td>
                          </tr>
                        </table>
                      </td>
                      <!--END RIGHT CONTENT column-->
                      </tr>
                    </table>
                  </td>
                  </tr>
                  <!--END content holding table row / logo with social links-->
                </table>
              </td>
              </tr>
            </table>
            </td>
            </tr>
            <!--END module-->

            <!--START module / one column FULL / Image, title and text-->
            <tr>
            <td align="center" style="padding: 0px; margin: 0px; border-collapse: collapse;">

            <table class="holdingtable" width="600" border="0" cellpadding="0" cellspacing="0" style="padding: 0px; margin: 0px; border-collapse: collapse;">
              <tr>
              <td class="contentholdingtable" bgcolor="#FFFFFF" width="600" align="center" style="border-bottom: solid 1px #ECECEC; padding: 0px; margin: 0px; border-collapse: collapse;">
                <table border="0" cellpadding="0" cellspacing="0" style="padding: 0px; margin: 0px; border-collapse: collapse;">
                  <tr>
                  <td align="center" style="padding: 0px; margin: 0px; border-collapse: collapse;">
            <!--START content holding TABLE-->
                    <table border="0" cellpadding="0" cellspacing="0" style="padding: 0px; margin: 0px; border-collapse: collapse;">
                      <tr>
                      <!--START CONTENT column-->
                      <td class="fullwidthcontenttable" width="600" align="center" valign="top" style="padding: 0px; margin: 0px; border-collapse: collapse;">
                        <table width="100%" border="0" cellpadding="0" cellspacing="0" style="padding: 0px; margin: 0px; border-collapse: collapse;">
                          <!--Table row with text content and borders on left-->
                          <tr>
                          <td style="padding-top: 24px; padding-right: 12px; padding-bottom: 24px; padding-left: 12px; margin: 0px; border-collapse: collapse;">
                            <table width="100%" border="0" cellpadding="0" cellspacing="0" style="padding: 0px; margin: 0px; border-collapse: collapse;">
                              <!--Table row with title-->
                              <tr>
                              <td align="left" style="border-left: 2px solid #ffffff; color: #A09FA5; font-family: Arial, Helvetica, sans-serif; font-size: 18px; font-weight: normal; line-height: 24px; padding-top: 0px; padding-right: 12px; padding-bottom: 0px; padding-left: 12px; margin: 0px; border-collapse: collapse;">
                              Se ha realizado una compra desde el sitio web www.palestra.cl/planes
                              </td>
                              </tr>
                              <tr>
                              <td align="left" style="border-left: 2px solid #ffffff; color: #000; font-family: Arial, Helvetica, sans-serif; font-size: 12px; font-weight: normal; line-height: 24px; padding-top: 0px; padding-right: 12px; padding-bottom: 0px; padding-left: 12px; margin: 0px; border-collapse: collapse;">
                                Enviado el '.date("d/m/Y").' 
                              </td>
                              </tr>
                              <!--Table row with text-->
                              <tr>
                              <td align="left" style="color: #A09FA5; font-family: Arial, Helvetica, sans-serif; font-size: 12px; font-weight: normal; line-height: 20px; padding-top: 8px; padding-right: 12px; padding-bottom: 16px; padding-left: 12px; margin: 0px; border-collapse: collapse;">
                                <br>
                              <!--Text goes here--><h3>DETALLE FORMULARIO</h3>
                                                    <br />
                                                    
                                                    <h4 style="color:#'.$colorCorporativo.'">DATOS</h4>
                                                    
                                                    <table border="0" cellspacing="0" cellpadding="0" width="100%">
                                                    
                                                      
                                                      <tr>
                                                        <td style="color:#31313b; text-transform:uppercase; 
                                font-size:11px; border-bottom: solid 1px #ECECEC; 
                                font-weight:bold; padding:4px;">Nombre</td>
                                                        <td style="font-size:11px; border-bottom: solid 1px #ECECEC; 
                                padding:4px;">'.$datos_comprador[0].'</td>
                                                      </tr>
                                                      
            <tr>
                                                        <td style="color:#31313b; text-transform:uppercase; 
                                font-size:11px; border-bottom: solid 1px #ECECEC; 
                                font-weight:bold; padding:4px;">Apellido</td>
                                                        <td style="font-size:11px; border-bottom: solid 1px #ECECEC; 
                                padding:4px;">'.$datos_comprador[1].'</td>
                                                      </tr>
                                                      
                                                      
                                                      <tr>
                                                        <td style="color:#31313b; text-transform:uppercase; font-size:11px;
                                 border-bottom: solid 1px #ECECEC; font-weight:bold; padding:4px;">E-mail</td>
                                                        <td style="font-size:11px; border-bottom: solid 1px #ECECEC; padding:4px;">
                                '.$datos_comprador[2].'</td>
                                                      </tr>
                                                     
                                                     <tr>
                                                        <td style="color:#31313b; text-transform:uppercase; font-size:11px; 
                                border-bottom: solid 1px #ECECEC; font-weight:bold; padding:4px;">
                                Teléfono</td>
                                                        <td style="font-size:11px; border-bottom: solid 1px #ECECEC; padding:4px;">
                                '.$datos_comprador[3].'</td>
                                                      </tr>

                                                        <tr>
                                                        <td style="color:#31313b; text-transform:uppercase; font-size:11px; 
                                border-bottom: solid 1px #ECECEC; font-weight:bold; padding:4px;">
                                Atendido por</td>
                                                        <td style="font-size:11px; border-bottom: solid 1px #ECECEC; padding:4px;">
                                '.$datos_comprador[7].'</td>
                                                      </tr>
                                                      <tr>
                                                        <td style="color:#31313b; text-transform:uppercase; font-size:11px; 
                                border-bottom: solid 1px #ECECEC; font-weight:bold; padding:4px;">
                                Fecha de Inicio del Plan</td>
                                                        <td style="font-size:11px; border-bottom: solid 1px #ECECEC; padding:4px;">
                                '.$datos_comprador[8].'</td>
                                                      </tr>

                                    </table>


                                    <br>
                                    <h4 style="color:#'.$colorCorporativo.'">Detalle Compra</h4>

                                    <table border="1" cellspacing="0" cellpadding="10" width="100%">
                                    <thead>
                                    <tr>
                                      <th>Plan Elegido</th>
                                      <th>Valor Pagado</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td align="center">'. $datos_comprador[5] .'</td>
                                            <td align="center">$ '. number_format($datos_comprador[6],0,',','.') .'</td>
                                        </tr>
                                    </tbody>
                                    </table>
                                    <tr >
                          </tr>
                        </table>
                      </td>
                      <!--END CONTENT column-->
                      </tr>
                    </table>
            <!--END content holding TABLE-->
                  </td>
                  </tr>
                </table>
              </td>
              </tr>
            </table>
            </td>
            </tr>

            <!--END module-->


            <!--START module / Bottom footer copyright text-->
            <tr>

            <td align="center" style="padding: 0px; margin: 0px; border-collapse: collapse;">
            <table class="holdingtable" width="600" border="0" cellpadding="0" cellspacing="0" style="padding: 0px; margin: 0px; border-collapse: collapse;">
              <tr>
              <td class="contentholdingtable" width="600" align="center" style="padding: 0px; margin: 0px; border-collapse: collapse;">
                <table border="0" cellpadding="0" cellspacing="0" style="padding: 0px; margin: 0px; border-collapse: collapse;">
                  <tr>
                  <td align="center" style="border-top: solid 1px #D7D7D7; padding: 0px; margin: 0px; border-collapse: collapse;">
            <!--START content holding TABLE-->
                    <table border="0" cellpadding="0" cellspacing="0" style="padding: 0px; margin: 0px; border-collapse: collapse;">
                      <tr>
                      <!--START CONTENT column-->
                      <td class="fullwidthcontenttable" width="600" align="center" valign="top" style="padding: 0px; margin: 0px; border-collapse: collapse;">
                        <table width="100%" border="0" cellpadding="0" cellspacing="0" style="padding: 0px; margin: 0px; border-collapse: collapse;">
                          <!--Table row with text-->
                          <tr>
                          <td align="center" style="color: #A09FA5; font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal; line-height: 20px; padding-top: 12px; padding-right: 12px; padding-bottom: 12px; padding-left: 12px; margin: 0px; border-collapse: collapse;">
                          <!--Text goes here-->'.$direccionCorporativa.'</td>
                          </tr>
                        </table>
                      </td>
                      <!--END CONTENT column-->
                      </tr>
                    </table>
            <!--END content holding TABLE-->
                  </td>
                  </tr>
                </table>
              </td>
              </tr>
            </table>
            </td>
            </tr>
            <!--END module-->

            </table>
            <!--END main table-->

            </body>
            </html>
            ';
            // Función de envío de admin 
            mail ("gimnasio@palestra.cl", "Aviso: Nueva Compra. Orden Nro. 0000" . $last_id, $body, 
            "From: gimnasio@palestra.cl \nContent-Type: text/html; charset=utf-8\nContent-Transfer-Encoding: 8bit");

            // Función de envío de e-mail al cliente
            mail ($datos_comprador[2], "Gracias por su compra: Envío de Comprobante", $body, 
            "From: gimnasio@palestra.cl\nContent-Type: text/html; charset=utf-8\nContent-Transfer-Encoding: 8bit");

            /*********FIN ENVÍO MAIL*************/









            ?>


            $("#popup h2").text('Compra realizada con Exito!');    
            $("#popup .cerrar").remove();
            $("#popup label, #popup input").remove();
            $("#popup form").prepend('<p class="text-center"><br><br>Hemos enviado un comprobante a la dirección de correo electrónico ingresada anteriormente.  </p>');
            $("#popup .boton").replaceWith('<button type="button" class="boton" onclick="location.href=\'https://www.palestra.cl\'">Ir a www.palestra.cl</button>');
            $("#popup, .overlay").show();


        <?php
        } else { 
            $wpdb->update('WepPay', array(
                'web_estado'=>'2',
                'accountingDate'=>$result->accountingDate,
                'buyOrder'=>$result->buyOrder,
                'cardDetail'=>$result->cardDetail->cardNumber."***".$result->cardDetail->cardExpirationDate,
                'authorizationCode'=>$result->detailOutput->authorizationCode,
                'TypeCode'=>$result->detailOutput->paymentTypeCode,
                'sharesNumber'=>$result->detailOutput->sharesNumber,
                'commerceCode'=>$result->detailOutput->commerceCode,
                'transactionDate'=>$result->transactionDate,
                'VCI'=>$result->VCI,
            ), array('web_token'=>$_POST["token_ws"]));

            $wpdb->insert('webpay_pedidos', array(
                'ped_nombre' => $datos_comprador[0],
                'ped_apellido' => $datos_comprador[1],
                'ped_mail' => $datos_comprador[2],
                'ped_telefono' => $datos_comprador[3],
                'ped_direccion' => $datos_comprador[4],
                'ped_productos' => $datos_comprador[5],
                'ped_atendido_por' => $datos_comprador[7],
                'ped_fecha_inicio' => $datos_comprador[8],
                'ped_token' => $_POST["token_ws"],
                'ped_total' => $datos_comprador[6],
                'ped_estado' => '0',
            ));

            ?>
            $("#popup h2").text('Pago Rechazado por Webpay');    
            $("#popup .cerrar").remove();
            $("#popup label, #popup input").remove();
            $("#popup .boton").replaceWith('<button type="button" class="boton" onclick="location.href=\'https://www.palestra.cl/planes\'">Volver a intentar</button>');
            $("#popup, .overlay").fadeIn(500);

        <?php 
        }

        break;


}
?>


</script>

    
<?php 
endwhile;
get_footer(); 
?>
