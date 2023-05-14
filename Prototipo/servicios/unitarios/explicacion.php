<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Plan Premium</title>
  <link rel="icon" href="https://cdn.freebiesupply.com/logos/large/2x/s-bahn-1-logo-png-transparent.png"
    type="image/png">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;500;700&display=swap" rel="stylesheet">
</head>

<?PHP require('../../navbar/navbar.php');
?>
<link rel="stylesheet" href="../../css/bootstrap.min.css" />
<link rel="stylesheet" href="../../css/navbar.css">
<link rel="stylesheet" href="../../css/footer.css">
<link rel="stylesheet" href="../../css/explicacion.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>




<body>




  <?php
  if (isset($_GET['servicio'])) {
    $servicio = $_GET['servicio'];
    switch ($servicio) {
      case 'administracion':
        $titulo = 'Administración y recolección de recursos monetarios';
        $descripcion = 'Descripcion administracion';
        $imagen = 'https://cdn-icons-png.flaticon.com/512/217/217853.png';
        $punto1 = 'Hola';
        $punto2 = 'Hola';
        $punto3 = 'Hola';
        $punto4 = 'Hola';
        $punto5 = 'Hola';
        break;
      case 'albanileria':
        $titulo = 'Albañilería';
        $descripcion = 'Ofrecemos servicios de albañilería de alta calidad a precios competitivos. Contáctanos para más información.';
        $imagen = 'https://cdn-icons-png.flaticon.com/512/2421/2421989.png';
        $punto1 = 'Hola';
        $punto2 = 'Hola';
        $punto3 = 'Hola';
        $punto4 = 'Hola';
        $punto5 = 'Hola';
        break;
      case 'camaras':
        $titulo = 'Cámaras de vigilancia';
        $descripcion = 'Instalamos cámaras de vigilancia de alta calidad para garantizar la seguridad de tus espacios. Contáctanos para más información.';
        $imagen = 'https://cdn-icons-png.flaticon.com/512/36/36311.png';
        $punto1 = 'Hola';
        $punto2 = 'Hola';
        $punto3 = 'Hola';
        $punto4 = 'Hola';
        $punto5 = 'Hola';
        break;
      case 'comite':
        $titulo = 'Comité de administración';
        $descripcion = 'Comité de administración';
        $imagen = 'https://cdn-icons-png.flaticon.com/512/4420/4420377.png';
        $punto1 = 'Hola';
        $punto2 = 'Hola';
        $punto3 = 'Hola';
        $punto4 = 'Hola';
        $punto5 = 'Hola';
        break;

      case "plagas":
        $titulo = "Control de plagas";
        $descripcion = 'Instalamos cámaras de vigilancia de alta calidad para garantizar la seguridad de tus espacios. Contáctanos para más información.';
        $imagen = "https://cdn-icons-png.flaticon.com/512/2636/2636843.png";
        $punto1 = 'Hola';
        $punto2 = 'Hola';
        $punto3 = 'Hola';
        $punto4 = 'Hola';
        $punto5 = 'Hola';
        break;
      case "electricista":
        $titulo = "Electricista";
        $descripcion = 'Instalamos cámaras de vigilancia de alta calidad para garantizar la seguridad de tus espacios. Contáctanos para más información.';
        $imagen = "https://cdn-icons-png.flaticon.com/512/1983/1983275.png";
        $punto1 = 'Hola';
        $punto2 = 'Hola';
        $punto3 = 'Hola';
        $punto4 = 'Hola';
        $punto5 = 'Hola';
        break;
      case "gobierno":
        $titulo = "Gestión de asuntos de gobierno y legales";
        $descripcion = 'Instalamos cámaras de vigilancia de alta calidad para garantizar la seguridad de tus espacios. Contáctanos para más información.';
        $imagen = "https://cdn-icons-png.flaticon.com/512/5605/5605882.png";
        $punto1 = 'Hola';
        $punto2 = 'Hola';
        $punto3 = 'Hola';
        $punto4 = 'Hola';
        $punto5 = 'Hola';
        break;
      case "impermeabilizacion":
        $titulo = "Impermeabilización";
        $descripcion = 'Instalamos cámaras de vigilancia de alta calidad para garantizar la seguridad de tus espacios. Contáctanos para más información.';
        $imagen = "https://cdn-icons-png.flaticon.com/512/129/129817.png";
        $punto1 = 'Hola';
        $punto2 = 'Hola';
        $punto3 = 'Hola';
        $punto4 = 'Hola';
        $punto5 = 'Hola';
        break;
      case "cisternas":
        $titulo = "Lavado y desinfección de Cisternas";
        $imagen = "https://cdn-icons-png.flaticon.com/512/3022/3022982.png";
        $descripcion = "Ofrecemos el servicio de lavado y desinfección de cisternas con equipos de alta tecnología y personal capacitado. Garantizamos la eliminación de cualquier tipo de residuo o contaminante que pueda afectar la calidad del agua en tu hogar o negocio.";
        $punto1 = "Lavado con agua a presión";
        $punto2 = "Aspirado de sedimentos";
        $punto3 = "Limpieza con productos desinfectantes";
        $punto4 = "Certificación de calidad del agua";
        break;
      case "tinacos":
        $titulo = "Lavado y desinfección de tinacos";
        $imagen = "https://cdn-icons-png.flaticon.com/512/7608/7608679.png";
        $descripcion = "Realizamos el lavado y desinfección de tinacos en casas y negocios. Utilizamos productos desinfectantes de alta calidad y equipo especializado para garantizar la eliminación de residuos y contaminantes que puedan afectar la calidad del agua.";
        $punto1 = "Limpieza manual con cepillos";
        $punto2 = "Desinfección con productos químicos";
        $punto3 = "Aspirado de sedimentos";
        $punto4 = "Certificación de calidad del agua";
        break;
      case "albercas":
        $titulo = "Limpieza de Albercas";
        $imagen = "https://cdn-icons-png.flaticon.com/512/78/78682.png";
        $descripcion = "Realizamos la limpieza y mantenimiento de albercas en casas y negocios. Contamos con personal capacitado y equipo especializado para mantener el agua de tu alberca limpia y cristalina.";
        $punto1 = "Limpieza de superficie y paredes";
        $punto2 = "Aspirado de sedimentos";
        $punto3 = "Verificación y ajuste de químicos";
        $punto4 = "Limpieza y mantenimiento de equipo de filtrado";
        $punto5 = "Reparaciones menores";
        break;
      case "limpieza":
        $titulo = "Limpieza de áreas comunes";
        $imagen = "https://cdn-icons-png.flaticon.com/512/2866/2866900.png";
        $descripcion = "Ofrecemos servicios de limpieza y mantenimiento de áreas comunes en edificios y condominios. Contamos con personal capacitado y productos de alta calidad para garantizar la limpieza y desinfección de áreas comunes como escaleras, pasillos y áreas verdes.";
        $punto1 = "Limpieza y desinfección de escaleras y pasillos";
        $punto2 = "Limpieza y mantenimiento de áreas verdes";
        $punto3 = "Recolección y disposición de basura";
        break;
      case 'ventanales':
        $titulo = "Limpieza de ventanales";
        $imagen = "https://cdn-icons-png.flaticon.com/512/6410/6410650.png";
        $descripcion = "Realizamos limpieza de ventanales en edificios y casas, contamos con equipo especializado y personal capacitado para ofrecer el mejor servicio.";
        $punto1 = "Utilizamos productos de alta calidad que no dañan los vidrios ni marcos.";
        $punto2 = "Eliminamos manchas difíciles, polvo y suciedad acumulada en los ventanales.";
        $punto3 = "Ofrecemos servicio a empresas y particulares, con horarios flexibles para adaptarnos a las necesidades de cada cliente.";
        break;
      case 'plomeria':
        $titulo = "Servicio de Plomería";
        $imagen = "https://cdn-icons-png.flaticon.com/512/4635/4635359.png";
        $descripcion = "Ofrecemos servicio de plomería para resolver cualquier problema relacionado con tuberías, desagües, grifos y sanitarios.";
        $punto1 = "Solucionamos fugas de agua en tuberías y llaves de paso.";
        $punto2 = "Desatascamos desagües y alcantarillas.";
        $punto3 = "Instalamos y reparamos sanitarios, grifos y lavaderos.";
        $punto4 = "Trabajamos con materiales de alta calidad y durabilidad.";
        $punto5 = "Ofrecemos servicio de emergencia las 24 horas.";
        break;
      case 'arboles':
        $titulo = "Poda y adorno de árboles";
        $imagen = "https://cdn-icons-png.flaticon.com/512/2174/2174132.png";
        $descripcion = "Realizamos poda y adorno de árboles para mantenerlos saludables y estéticamente atractivos.";
        $punto1 = "Contamos con personal capacitado y herramientas especializadas para realizar podas de alta calidad.";
        $punto2 = "Podamos árboles frutales, ornamentales y forestales.";
        $punto3 = "Realizamos tratamientos fitosanitarios para prevenir plagas y enfermedades en los árboles.";
        $punto4 = "Podamos los árboles de manera responsable, respetando su ciclo de vida y el medio ambiente.";
        break;
      case 'pasto':
        $titulo = "Poda de pasto";
        $imagen = "https://cdn-icons-png.flaticon.com/512/7105/7105088.png";
        $descripcion = "Realizamos poda de pasto para mantener los jardines y áreas verdes en excelentes condiciones.";
        $punto1 = "Contamos con maquinaria especializada para realizar poda de pasto de manera rápida y eficiente.";
        $punto2 = "Realizamos desbroce de maleza y recorte de bordes.";
        $punto3 = "Ofrecemos servicio de mantenimiento de jardines y áreas verdes.";
        break;

      case "pintura":
        $titulo = "Poda de pasto";
        $imagen = "https://cdn-icons-png.flaticon.com/512/1276/1276892.png";
        $descripcion = "Realizamos poda de pasto para mantener los jardines y áreas verdes en excelentes condiciones.";
        $punto1 = "Contamos con maquinaria especializada para realizar poda de pasto de manera rápida y eficiente.";
        $punto2 = "Realizamos desbroce de maleza y recorte de bordes.";
        $punto3 = "Ofrecemos servicio de mantenimiento de jardines y áreas verdes.";
        break;
      case "puertas":
        $titulo = "Poda de pasto";
        $imagen = "https://cdn-icons-png.flaticon.com/512/2457/2457981.png";
        $descripcion = "Realizamos poda de pasto para mantener los jardines y áreas verdes en excelentes condiciones.";
        $punto1 = "Contamos con maquinaria especializada para realizar poda de pasto de manera rápida y eficiente.";
        $punto2 = "Realizamos desbroce de maleza y recorte de bordes.";
        $punto3 = "Ofrecemos servicio de mantenimiento de jardines y áreas verdes.";
        break;
      case "pulido":
        $titulo = "Poda de pasto";
        $imagen = "https://cdn-icons-png.flaticon.com/512/16/16386.png";
        $descripcion = "Realizamos poda de pasto para mantener los jardines y áreas verdes en excelentes condiciones.";
        $punto1 = "Contamos con maquinaria especializada para realizar poda de pasto de manera rápida y eficiente.";
        $punto2 = "Realizamos desbroce de maleza y recorte de bordes.";
        $punto3 = "Ofrecemos servicio de mantenimiento de jardines y áreas verdes.";
        break;
      case "cuotas":
        $titulo = "Poda de pasto";
        $imagen = "https://cdn-icons-png.flaticon.com/512/2871/2871729.png";
        $descripcion = "Realizamos poda de pasto para mantener los jardines y áreas verdes en excelentes condiciones.";
        $punto1 = "Contamos con maquinaria especializada para realizar poda de pasto de manera rápida y eficiente.";
        $punto2 = "Realizamos desbroce de maleza y recorte de bordes.";
        $punto3 = "Ofrecemos servicio de mantenimiento de jardines y áreas verdes.";
        break;
      default:
        $titulo = 'Servicio no encontrado';
        $descripcion = 'Lo siento, el servicio que estás buscando no está disponible en este momento.';
    }
  } else {
    $titulo = 'Servicio no encontrado';
    $descripcion = 'Lo siento, el servicio que estás buscando no está disponible en este momento.';
  }
  ?>
  <div class="container">
    <div class="TextoTitulo">
      <p class="Titulo">
        <?php echo $titulo; ?>
      </p>
      <p class="Descripcion">
        <?php echo $descripcion; ?>
      </p>
    </div>
    <img src="<?php echo $imagen; ?>" alt="servicios" class="iconos" style="display: block; margin: 0 auto 20px;">
  </div>

  <div>
    <div class="flex-container">
      <div class="list-container">
        <ul>
          <li>
            <p>
              <?php echo $punto1; ?>
            </p>
          </li>
          <li>
            <p>
              <?php echo $punto2; ?>
            </p>
          </li>
          <li>
            <p>
              <?php echo $punto3; ?>
            </p>
          </li>
          <li>
            <p>
              <?php echo $punto4; ?>
            </p>
          </li>
          <li>
            <p>
              <?php echo $punto5; ?>
            </p>
          </li>
        </ul>
      </div>
    </div>
  </div>





  <?php
  if (!empty($user)) {
    $cotizacionUrl = 'cotizacion.php';
  } else {
    $cotizacionUrl = '../../paginas/login.php';
  }
  ?>
  <button type="button" class="btn btn-primary"
    onclick="<?php echo "window.location.href='" . $cotizacionUrl . "'"; ?>">¡Quiero una cita!</button>

  <br>
  <br>
  <br>



  <?PHP require('../../footer/footer.php');
  ?>
</body>


</html>