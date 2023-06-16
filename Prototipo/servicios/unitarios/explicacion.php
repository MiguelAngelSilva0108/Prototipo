<?php
require('../../database/database.php');

function obtenerPrecioUnitario($id)
{
  global $conn;
  $query = $conn->prepare("SELECT precio FROM services WHERE id_services = :id");
  $query->bindParam(":id", $id, PDO::PARAM_INT);
  $query->execute();
  $row = $query->fetch(PDO::FETCH_ASSOC);
  return $row['precio'];
}

function obtenerMedida($id)
{
  global $conn;
  $query = $conn->prepare("SELECT medida FROM services WHERE id_services = :id");
  $query->bindParam(":id", $id, PDO::PARAM_INT);
  $query->execute();
  $row = $query->fetch(PDO::FETCH_ASSOC);
  return $row['medida'];
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Servicios Unitarios</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
      case "pintura":
        $titulo = "Pintura interior y exterior";
        $imagen = "https://cdn-icons-png.flaticon.com/512/1276/1276892.png";
        $descripcion = "Si estás considerando renovar el aspecto de tu inmueble, te ayudamos pintar tu inmueble.";
        $puntos = array(
          array("id" => 1, "nombre" => "Pintura y repintado de áreas comunes"),
          array("id" => 2, "nombre" => "Pintura antigrafitti"),
          array("id" => 3, "nombre" => "Retoque de pintura"),
          array("id" => 4, "nombre" => "Pintura a herrería")
        );
        break;
      case "impermeabilizacion":
        $titulo = "Impermeabilización";
        $descripcion = 'Si te gustaría proteger tu inmueble frente a las diversas condiciones meteorológicas, la impermeabilización es la alternativa perfecta.';
        $imagen = "https://cdn-icons-png.flaticon.com/512/129/129817.png";
        $puntos = array(
          array("id" => 5, "nombre" => "Impermeabilización de techos del condominio (Caucho)"),
          array("id" => 6, "nombre" => "Impermeabilización de techos del condominio (Terracota)"),
          array("id" => 7, "nombre" => "Servicio de reparación de filtraciones"),
          array("id" => 8, "nombre" => "Servicio de impermeabilización de paredes")
        );
        break;
      case "cisternas":
        $titulo = "Lavado y desinfección de Cisternas";
        $imagen = "https://cdn-icons-png.flaticon.com/512/3022/3022982.png";
        $descripcion = "Ofrecemos el servicio de lavado y desinfección de cisternas con equipos de alta tecnología y personal capacitado. Garantizamos la eliminación de cualquier tipo de residuo o contaminante que pueda afectar la calidad del agua en tu hogar o negocio.";
        $puntos = array(
          array("id" => 9, "nombre" => "1200 L"),
          array("id" => 10, "nombre" => "2800 L"),
          array("id" => 11, "nombre" => "5000 L"),
          array("id" => 12, "nombre" => "10000 L")
        );
        break;
      case "tinacos":
        $titulo = "Lavado y desinfección de tinacos";
        $imagen = "https://cdn-icons-png.flaticon.com/512/7608/7608679.png";
        $descripcion = "Realizamos el lavado y desinfección de tinacos en casas y negocios. Utilizamos productos desinfectantes de alta calidad y equipo especializado para garantizar la eliminación de residuos y contaminantes que puedan afectar la calidad del agua.";
        $puntos = array(
          array("id" => 13, "nombre" => "De 450L a 600L"),
          array("id" => 14, "nombre" => "De 600L a 1100L"),
          array("id" => 15, "nombre" => "De 1100L a 2500L")
        );
        break;
      case "albercas":
        $titulo = "Limpieza de Albercas";
        $imagen = "https://cdn-icons-png.flaticon.com/512/78/78682.png";
        $descripcion = "Realizamos la limpieza y mantenimiento de albercas en casas y negocios. Contamos con personal capacitado y equipo especializado para mantener el agua de tu alberca limpia y cristalina.
        Desinfectamos el agua, aspiramos los asentamiento, verificamos el pH y limpiamos tu equipo de filtrado";
        $punto1 = "Limpieza de superficie y paredes";
        $punto2 = "Aspirado de sedimentos";
        $punto3 = "Verificación y ajuste de químicos";
        $punto4 = "Limpieza y mantenimiento de equipo de filtrado";
        $punto5 = "Reparaciones menores";
        break;
      case 'administracion':
        $titulo = 'Administración y recolección de recursos monetarios';
        $descripcion = 'Gestión y control de los  recursos monetarios asociados con el mantenimiento y operación del condominio.';
        $imagen = 'https://cdn-icons-png.flaticon.com/512/217/217853.png';
        $punto1 = 'Planificación de presupuesto';
        $punto2 = 'Seguimiento de presupuesto';
        $punto3 = 'Gestión de pagos a proveedores';
        $punto4 = 'Administración efectiva de los recursos';
        $punto5 = 'Asegura la sostenibilidad del condominio';
        break;
      case 'albanileria':
        $titulo = 'Albañilería';
        $descripcion = 'Ofrecemos servicios de albañilería de alta calidad a precios competitivos. Contáctanos para más información.';
        $imagen = 'https://cdn-icons-png.flaticon.com/512/2421/2421989.png';
        $punto1 = 'Reparación y mantenimiento de estructura';
        $punto2 = 'Reparación y mantenimiento de paredes';
        $punto3 = ' Instalación y reparación de pisos y revestimientos';
        $punto4 = 'Construcción y reparación de muros';
        $punto5 = 'Construcción y reparación de columnas';
        break;
      case 'camaras':
        $titulo = 'Cámaras de vigilancia';
        $descripcion = 'Instalamos cámaras de vigilancia de alta calidad para garantizar la seguridad de tus espacios. Contáctanos para más información.';
        $imagen = 'https://cdn-icons-png.flaticon.com/512/36/36311.png';
        $punto1 = ' Instalación de cámaras de seguridad para el condominio';
        $punto2 = 'Monitoreo de cámaras de seguridad para el condominio';
        $punto3 = 'Mantenimiento de sistemas de videovigilancia';
        $punto4 = 'Reparación de sistemas de videovigilancia';
        $punto5 = 'Mantenimiento de las cámaras';
        break;
      case 'comite':
        $titulo = 'Comité de administración';
        $descripcion = 'Comité de administración';
        $imagen = 'https://cdn-icons-png.flaticon.com/512/4420/4420377.png';
        $punto1 = 'Organización y coordinación de reuniones del comité';
        $punto2 = 'Comunicación comunitaria';
        $punto3 = 'Organización de eventos y actividades';
        $punto4 = 'Servicio de mediación y resolución de conflictos';
        $punto5 = ' Participación comunitaria';
        break;

      case "plagas":
        $titulo = "Control de plagas";
        $descripcion = 'Control y exterminio de plagas como insectos, roedores u otros animales no deseados en el condominio.';
        $imagen = "https://cdn-icons-png.flaticon.com/512/2636/2636843.png";
        $punto1 = 'Prevención y asesoramiento para evitar la proliferación de plagas';
        $punto2 = 'Inspección y evaluación';
        $punto3 = 'Control de insectos';
        $punto4 = 'Control de roedores';
        $punto5 = 'Control de plagas de jardín';
        break;
      case "electricista":
        $titulo = "Electricista";
        $descripcion = 'Instalamos cámaras de vigilancia de alta calidad para garantizar la seguridad de tus espacios. Contáctanos para más información.';
        $imagen = "https://cdn-icons-png.flaticon.com/512/1983/1983275.png";
        $punto1 = 'Instalación eléctrica en áreas comunes';
        $punto2 = 'Mantenimiento eléctrico en áreas comunes';
        $punto3 = 'Reparación de fallas eléctricas y cortocircuito';
        $punto4 = 'Solución de problemas eléctricos';
        $punto5 = 'Asesoramiento y recomendaciones para promover el ahorro energético';
        break;
      case "gobierno":
        $titulo = "Gestión de asuntos de gobierno y legales";
        $descripcion = 'Gestión de todos los asuntos legales y regulatorios relacionados con la administración y operación de la comunidad.';
        $imagen = "https://cdn-icons-png.flaticon.com/512/5605/5605882.png";
        $punto1 = 'Cumplimiento de las leyes';
        $punto2 = 'Cumplimiento de regulaciones locales';
        $punto3 = 'Cumplimiento de regulaciones estatales';
        $punto4 = 'Gestión efectiva de los asuntos legales y gubernamentales';
        $punto5 = 'Garantia de la protección de los intereses y derechos';
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

      case "puertas":
        $titulo = "Puertas automáticas";
        $imagen = "https://cdn-icons-png.flaticon.com/512/2457/2457981.png";
        $descripcion = "Cuidado de las puertas del condominio al mejor precio";
        $punto1 = " Instalación de puertas de acceso al condominio";
        $punto2 = "Mantenimiento de puertas de acceso al condominio";
        $punto3 = "Reparación de las puerta";
        break;
      case "pulido":
        $titulo = "Pulido de Pisos";
        $imagen = "https://cdn-icons-png.flaticon.com/512/16/16386.png";
        $descripcion = "Para que tú condominios siempre luzcan presentables está es una muy buena opción, con nuestro equipo especializado verá buenos resultados.";
        $punto1 = "Pulido de pisos de áreas comunes";
        $punto2 = "Abrillantado de pisos de áreas comunes";
        $punto3 = "Mantenimiento de superficies pulidas como mármol o granito";
        break;
      case "cuotas":
        $titulo = "Recolección de Cuotas";
        $imagen = "https://cdn-icons-png.flaticon.com/512/2871/2871729.png";
        $descripcion = "Recolección de efectivo en la unidad";
        $punto1 = "Pagos de cuotas de mantenimiento mediante transferencia";
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
          <?php for ($i = 1; $i <= 10; $i++): ?>
            <?php $punto = 'punto' . $i; ?>
            <?php if (isset($$punto)): ?>
              <li>
                <p>
                  <?php echo $$punto; ?>
                </p>
              </li>
            <?php endif; ?>
          <?php endfor; ?>
        </ul>
      </div>
    </div>
  </div>


<!-- TABLA DE COTIZACIÓN -->
<?php if ($servicio == 'impermeabilizacion' || $servicio == 'pintura' || $servicio == 'tinacos' || $servicio == 'cisternas'): ?>
  <div class="tabla-cotizar">
    <h2 class="titulo2">Cotización Preliminar</h2>
    <div class="table-responsive">
      <table class="table">
        <thead>
          <tr>
            <th>Servicio</th>
            <th>Precio Unitario</th>
            <th>Medida</th>
            <th>Cotiza</th>
            <th>Subtotal</th>
            <th>Me interesa</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($puntos as $punto): ?>
            <tr>
              <td>
                <?php echo $punto['nombre']; ?>
              </td>
              <td>$
                <?php echo obtenerPrecioUnitario($punto['id']); ?>
              </td>
              <td>
                <?php echo obtenerMedida($punto['id']); ?>
              </td>
              <td>
                <input type="text" name="cotiza[]" placeholder="0" class="form-control input-sm rounded smaller-input">
              </td>
              <td>
                <span class="subtotal"></span>
              </td>
              <td style="text-align: center;">
                <input type="checkbox" name="interesa[]" value="<?php echo $punto['nombre']; ?>"
                  onclick="toggleInput(this)">
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
        <tfoot>
          <tr>
            <td colspan="5" style="text-align: right; font-weight: bold; font-size: 1.3rem;">Cotización Preliminar:</td>
            <td id="Cotizar" style="font-weight: bold; font-size: 1.3rem;">$0.00</td>
          </tr>
        </tfoot>
      </table>
    </div>
  </div>
  <script src="tabla.js"></script>
<?php endif; ?>
<!-- CIERRE DE TABLA DE COTIZACIÓN -->




<!-- POPUP -->
<!-- Formulario -->
<div class="form-no-calculo">
  <div class="contenedor">
    <article>
      <button id="btn-abrir-popup" class="btn btn-primary btn-abrir-popup">Quiero agendar una cita gratuita</button>
      <?php if ($servicio == 'impermeabilizacion' || $servicio == 'pintura' || $servicio == 'tinacos' || $servicio == 'cisternas'): ?>
        <div class="info">
          *Este es un costo meramente informativo. El costo real, lo entregará el agente al final de su visita.
        </div>
      <?php endif; ?>
    </article>
    <div class="overlay" id="overlay">
      <div class="popup container" id="popup">
        <button id="btn-cerrar-popup" class="btn-close" aria-label="Close"></button>
        <h3>Agenda una cita completamente gratis</h3>
        <h4>Nosotros te visitamos, estamos a tu servicio</h4>
        <form action="" id="formulario-cita" onsubmit="return validarFormulario()">
          <div class="row g-2">
            <div class="col-md">
              <label for="fecha">Fecha de Visita:</label>
              <?php date_default_timezone_set('America/Mexico_City'); // Establecer la zona horaria adecuada ?>
              <?php $tomorrow = date('Y-m-d', strtotime('+1 day')); // Obtener la fecha actual + 1 día ?>
              <input type="date" id="fecha" class="form-control" min="<?php echo $tomorrow; ?>" required>
            </div>
            <div class="col-md">
              <label for="hora">Hora de Visita:</label>
              <select required name="Hora" class="form-select" id="hora" aria-label="Default select example">
                <option value="">Selecciona una hora</option>
                <option value="09:00">09:00 AM</option>
                <option value="09:30">09:30 AM</option>
                <option value="10:00">10:00 AM</option>
                <option value="10:30">10:30 AM</option>
                <option value="11:00">11:00 AM</option>
                <option value="11:30">11:30 AM</option>
                <option value="12:00">12:00 PM</option>
                <option value="12:30">12:30 PM</option>
                <option value="13:00">01:00 PM</option>
                <option value="13:30">01:30 PM</option>
                <option value="14:00">02:00 PM</option>
                <option value="14:30">02:30 PM</option>
                <option value="15:00">03:00 PM</option>
                <option value="15:30">03:30 PM</option>
                <option value="16:00">04:00 PM</option>
                <option value="16:30">04:30 PM</option>
                <option value="17:00">05:00 PM</option>
                <option value="17:30">05:30 PM</option>
                <option value="18:00">06:00 PM</option>
              </select>
            </div>
          </div>
          <button type="submit" class="btn btn-primary">¡Quiero una cita!</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- FIN DE FORMULARIO -->

<script src="popup.js"></script>
<!-- FIN DE POPUP -->




  <br>
  <br>
  <br>



  <?PHP require('../../footer/footer.php');
  ?>
</body>


</html>