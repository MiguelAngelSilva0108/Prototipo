<?php
require('../../database/database.php');

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

  <?php require('servicios.php');
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
            <?php
            function obtenerDatosServicio($id)
            {
              global $conn;
              $query = $conn->prepare("SELECT Nombre, precio, medida FROM services WHERE id_services = :id");
              $query->bindParam(":id", $id, PDO::PARAM_INT);
              $query->execute();
              $row = $query->fetch(PDO::FETCH_ASSOC);
              return $row;
            }
            foreach ($puntos as $punto) {
              $id_servicio = $punto['id'];
              $datos_servicio = obtenerDatosServicio($id_servicio);
              $nombre = $datos_servicio['Nombre'];
              $precio_unitario = $datos_servicio['precio'];
              $medida = $datos_servicio['medida'];
              ?>
              <tr>
                <td>
                  <?php echo $nombre; ?>
                </td>
                <td>$
                  <?php echo $precio_unitario; ?>
                </td>
                <td>
                  <?php echo $medida; ?>
                </td>
                <td>
                <input type="text" name="cotiza[]" placeholder="0" class="form-control input-sm rounded smaller-input" disabled oninput="validarNumero(this)" pattern="[0-9]+([.,][0-9]+)?" min="1" max="999">
                </td>
                <td>
                  <span class="subtotal"></span>
                </td>
                <td style="text-align: center;">
                  <input type="checkbox" name="interesa[]" value="<?php echo $nombre; ?>" onclick="toggleInput(this)">
                </td>
              </tr>
              <?php
            }
            ?>
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
        <?php if (!empty($user)): ?>
          <button id="btn-abrir-popup" class="btn btn-primary btn-abrir-popup">Quiero agendar una cita gratuita</button>
        <?php else: ?>
          <button onclick="window.location.href='../../paginas/login.php'" class="btn btn-primary btn-abrir-popup">Inicia
            Sesión</button>
        <?php endif; ?>
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