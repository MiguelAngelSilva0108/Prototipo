<?php

ob_start();


?>
<?php
require('../../database/database.php');

// Verificar si el usuario ha iniciado sesión
session_start();
if (!isset($_SESSION['user_id'])) {
  header('Location: /LoginFactura/login.php');
}

$mes_facturacion = $_POST['mes_facturacion'];
$anio_facturacion = $_POST['anio_facturacion'];


// Obtener los datos del usuario correspondiente a la sesión
$userId = $_SESSION['user_id'];
$records = $conn->prepare('SELECT * FROM users WHERE id_users = :userId');
$records->bindParam(':userId', $userId);
$records->execute();
$user = $records->fetch(PDO::FETCH_ASSOC);

//Así llamas a una función
//Nombre: <?php echo $user['Nombres']; 
//<p><img class="codigo-barras"  width="130.15625" height="86.71875" alt=""></p>
?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Factura</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
  <link rel="stylesheet" href="/LoginFactura/css/factura.css">
  <style>

@page {
    size: letter;
    margin: 0;
  }
    .img-pago {
  margin-top: 10px;
  float: left;
  min-height: 50px;
  object-fit: contain;
}

.nombre-apellido {
  font-family: 'Poppins', sans-serif;
  font-weight: bold;
  font-size: 1.2em;
  margin-bottom: 25px;
}

.full-width {
  width: 100%;
  padding-right: 15px;
  padding-left: 15px;
  margin-right: auto;
  margin-left: auto;
}

.container-fluid {
  margin-top: 40px;
}

.col-divider {
  border-left: 2.5px solid black;
  height: 150px;
}

.texto-abajo {
  font-family: 'Poppins', sans-serif;
  font-size: 15px;
  text-align: justify;
  margin-left: 25px;
  font-weight: normal;
  /* Elimina la negrita */
}

.nombre-apellido .texto-abajo {
  margin-bottom: 0rem;
  /* ajusta aquí el valor del margen inferior */
}

.barras {
  font-family: 'Poppins', sans-serif;
  font-weight: bold;
  font-size: 1.1em;
  display: flex;
  flex-direction: column;
  align-items: center;
  margin-bottom: 25px;

}

.QR {
  font-family: 'Poppins', sans-serif;
  font-weight: bold;
  font-size: 1em;
  margin-bottom: 25px;
}

.large {
  font-size: 2em;
}

.border-bottom {
  border-bottom: 10px solid #00CED1 !important;
}

.linea-bottom {
  border-bottom: 10px solid #F6BA6F !important;
}

.negra-bottom {
  border-bottom: 5px solid black !important;
  margin-bottom: -30px;
}

.titulo-medio {
  font-family: 'Poppins', sans-serif;
  font-weight: bold;
  font-size: 1.4em;
  text-align: center;
  background-color: #000;
  color: #fff;
  padding: 0.50;
  width: 97%;
  margin-right: 25px;
  margin-left: 25px;
  margin-top: 10px;
  letter-spacing: 0.1em;
  border-radius: 10px;
  margin-bottom: -25px;
}

.texto-fiscal {
  font-family: 'Poppins', sans-serif;
  font-size: 15px;
  line-height: 0.9;
  /* Ajusta este valor según tus necesidades */
  text-align: left;
  font-weight: normal;
  margin-left: 10px;
}

.texto-fiscal2 {
  font-family: 'Poppins', sans-serif;
  font-size: 15px;
  line-height: 0.9;
  /* Ajusta este valor según tus necesidades */
  text-align: left;
  font-weight: normal;
  margin-left: 10px;
}

.texto-fiscal3 {
  font-family: 'Poppins', sans-serif;
  font-size: 15px;
  line-height: 0.9;
  /* Ajusta este valor según tus necesidades */
  text-align: left;
  font-weight: bold;
}

.margen-superior {
  margin-bottom: 5px;
}

.division {
  border: none;
  border-top: 10px solid black !important;
  /* aquí puedes ajustar el color naranja cambiando el valor hexadecimal */
  margin: 20px 0;
}

.cuenta-texto {
  font-family: 'Poppins', sans-serif;
  font-weight: bold;
  font-size: 1.5em;
  margin-top: 10px;
  text-align: center;
}

.total {
  font-family: 'Poppins', sans-serif;
  color: white;
  background-color: turquoise;
  text-align: right;
  padding: 10px;
  font-size: 20px;
  font-weight: bold;
}
  </style>
</head>

<body>
  <!--Logo-->
  <a href="/LoginFactura/index.php">
    <img src="https://upload.wikimedia.org/wikipedia/commons/9/95/Logotipo_izzi_negativo.png" width="150" height="62.5"
      class="img-fluid img-pago" alt="...">
  </a>
  <br>
  <br>
  <div>
    <div>
      <!--Encabezado-->
      <div class="container-fluid text-center border-bottom">
        <div class="row justify-content-center align-items-center">
          <div class="col-md-4 nombre-apellido">
            <?php echo $user['Nombres']; ?>
            <?php echo $user['AP']; ?>
            <?php echo $user['AM']; ?>
            <p class="texto-abajo">RFC:
              <?php echo $user['RFC']; ?>
            </p>
            <p class="texto-abajo">
              <?php echo $user['Calle']; ?> No.
              <?php echo $user['NumExt']; ?>
              <?php if (!empty($user['NumInt'])) {
                echo " #" . $user['NumInt'];
              } ?>
            </p>
            <p class="texto-abajo">Col.
              <?php echo $user['Colonia']; ?>
            </p>
            <p class="texto-abajo">
              <?php echo $user['Municipio']; ?>
            </p>
            <p class="texto-abajo">C.P.
              <?php echo $user['CP']; ?>,
              <?php echo $user['Estado']; ?>
            </p>
          </div>
          <div class="col col-divider barras">
            Realiza tu pago escaneando este código
            <img src="https://www.consumoteca.com/wp-content/uploads/codigo-de-barras.png" class="img-fluid"
              width="180.234375" height="130.078125" alt="...">
          </div>
          <div class="col col-divider QR">
            Paga fácilmente con IZZI app
            <p><img src="https://es.mailpro.com/blog/image.axd?picture=/QRCODES.png" class="img-fluid" width="130"
                height="130" alt="..."></p>
          </div>
        </div>
      </div>
      <!--DatosFacturación-->
      <div>
        <p class="titulo-medio">Datos facturación</p>
        <div class="container-fluid text-center linea-bottom">
          <div class="row justify-content-center align-items-center">
            <div class="col">
              <p class="QR">
                Domicilio Fiscal
              </p>
              <!--DatosFiscales -->
              <div>
                <p class="texto-fiscal">
                  <?php echo $user['Calle_Fiscal']; ?> No.
                  <?php echo $user['NumExt_Fiscal']; ?>
                  <?php if (!empty($user['NumInt_Fiscal'])) {
                    echo " #" . $user['NumInt_Fiscal'];
                  } ?>
                </p>
                <p class="texto-fiscal">Col.
                  <?php echo $user['Colonia_Fiscal']; ?>
                </p>
                <p class="texto-fiscal">
                  <?php echo $user['Municipio_Fiscal']; ?>
                </p>
                <p class="texto-fiscal">C.P.
                  <?php echo $user['CP_Fiscal']; ?>,
                  <?php echo $user['Estado_Fiscal']; ?>
                </p>
              </div>
            </div>
            <div class="col">
              <p class="QR">
                Datos de servicio
              </p>
              <p class="texto-fiscal2">Teléfono:
                <?php echo $user['Celular']; ?>
              </p>
              <p class="texto-fiscal2">No.Cuenta:
                <?php echo $user['id_users']; ?>
              </p>
              <p class="texto-fiscal2">Paquete:
                <?php echo $user['Servicio']; ?>
              </p>
              <p class="texto-fiscal2">
                Periodo de Facturación:
                <?php echo $mes_facturacion . '-' . $anio_facturacion; ?>
              </p>
            </div>
            <div class="col">
              <p>
                <img class="domiizilia margen-superior"
                  src="https://pbs.twimg.com/tweet_video_thumb/D3p2p78W0AYCXjP.jpg" class="img-fluid" alt="..."
                  width="200" height="200" alt="...">
              </p>
            </div>
          </div>
        </div>
      </div>
      <!--Cuenta -->
      <div>
        <div>
          <p class="cuenta-texto">Detalle de tus servicios contratados y facturados </p>
        </div>
        <div>
          <div class="container-fluid text-center negra-bottom">
            <div class="row justify-content-center align-items-center">
              <!--Columna 1-->
              <div class="col-md-6">
                <p class="texto-fiscal3">Paquete:
                  <?php echo $user['Servicio']; ?>
                </p>
                <p class="texto-fiscal2">
                  Extensiones
                </p>
                <p class="texto-fiscal2">
                  Complementos de video
                </p>
                <p class="texto-fiscal2">
                  Complementos de internet
                </p>
              </div>
              <!--Columna 2 subtotal-->
              <div class="col-md-3">
                <br>
              </div>
              <!--Columna 3 precio-->
              <div class="col-md-3">
                <p class="texto-fiscal2">
                  <?php
                  $precio_internet_telefonia_30_mb = 400;
                  $precio_internet_telefonia_50_mb = 550;
                  $precio_internet_telefonia_100_mb = 650;
                  $precio_internet_telefonia_izzitv_50_mb = 700;

                  switch ($user['Servicio']) {
                    case 'Internet + Telefonía 30 MB':
                      $precio = $precio_internet_telefonia_30_mb;
                      break;
                    case 'Internet + Telefonía 50 MB':
                      $precio = $precio_internet_telefonia_50_mb;
                      break;
                    case 'Internet + Telefonía 100MB':
                      $precio = $precio_internet_telefonia_100_mb;
                      break;
                    case 'Internet + Telefonía + izzitv 50MB':
                      $precio = $precio_internet_telefonia_izzitv_50_mb;
                      break;
                    default:
                      $precio = 0; // Si no se encuentra en ninguna de las opciones anteriores, se asigna un precio de cero
                  }
                  ?>
                  $
                  <?php echo $precio; ?>.00
                </p>
                <p class="texto-fiscal2">
                  $0.00
                </p>
                <p class="texto-fiscal2">
                  $0.00
                </p>
                <p class="texto-fiscal2">
                  $0.00
                </p>
              </div>
            </div>
          </div>
        </div>
        <!--Columna 2 subtotal-->
        <div>
          <div class="container-fluid text-center">
            <div class="row justify-content-center align-items-center">
              <div class="col-md-6">
                <br>
              </div>
              <div class="col-md-3">
                <p class="texto-fiscal2">
                  Subtotal
                </p>
              </div>
              <div class="col-md-3">
                <p class="texto-fiscal2">
                  $
                  <?php echo $precio; ?>.00
                </p>
              </div>
            </div>
          </div>
        </div>
        <!--Total-->
        <div class="container">
          <br>
          <p class="total">
            Total de cargos del periodo: $
            <?php echo $precio; ?>.00
          </p>
        </div>
        

      </div>
    </div>
  </div>
</body>

</html>


<?php
$html = ob_get_clean();

$css_file = dirname(__FILE__) . '/css/factura.css';
$html_with_css = '<link rel="stylesheet" type="text/css" href="' . $css_file . '">'.$html;
require_once '../Libreria/autoload.inc.php';
use Dompdf\Dompdf;
$dompdf = new Dompdf();


$options = $dompdf->getOptions();
$options->set(array(
    'isRemoteEnabled' => true,
    'isHtml5ParserEnabled' => true
));
$dompdf->setOptions($options);

$options = $dompdf->getOptions();
$options->set(array('isRemoteEnabled' => true));
$dompdf->setOptions($options);

$dompdf->loadHTML("$html");

$dompdf->setPaper('letter', 'portrait');



$dompdf->render();

$dompdf->stream("factura.pdf", array("Attachament" => false));
?>
