<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Plan Intermedio</title>
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
<link rel="stylesheet" href="../../css/planessolos.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>




<body>

  <div class="container">
    <div class="TextoTitulo">
      <p class="Titulo">
        Plan Intermedio
      </p>
      <p class="Descripcion">
        ¡Recibe un descuento del 10% al contratar nuestros servicios por un año!
        <br>Este paquete incluye servicios administrativos, de mantenimiento y
        vigilancia esenciales y necesarios para garantizar la seguridad y el bienestar de su propiedad.
      </p>
      <p class="titulo2">
        ¿Qué incluye?
      </p>
      <img src="https://cdn-icons-png.flaticon.com/512/916/916771.png" alt="Impermeabilización" class="iconos"
        style="display: block; margin: 0 auto 20px;">
    </div>
  </div>

  <div class="tabla-plan" style="display: flex; justify-content: center;">
    <div class="flex-container">
      <div class="table-responsive">
        <table class="table">
          <thead>
            <th scope="col" class="text-center">Servicio</th>
            <th scope="col" class="text-center">Frecuencia</th>
            <th scope="col" class="text-center">Descripción</th>
          </thead>
          <tbody class="table-group-divider">
            <tr>
            </tr>
            <tr>
              <th scope="row" class="align-middle text-center">1. Todo lo que incluye el paquete básico</th>
              <td class="align-middle text-center"><a href="./basico.php">
                  Paquete básico
                </a></td>
              <td>
                <ul>
                  <li>Administración y recaudación de cuotas de mantenimientos</li>
                  <li>Control de acceso y salida en el condominio</li>
                  <li>Limpieza de áreas comunes</li>
                  <li>Limpieza y desinfección de tinacos y cisternas</li>
                  <li>Jardinería</li>
                  <li>Limpieza de Albercas con costo extra</li>
                </ul>
              </td>
            </tr>
            <tr>
              <th scope="row" class="align-middle text-center">2. Estado de ingresos y gastos</th>
              <td class="align-middle text-center">Mensual</td>
              <td>Proceso que implica la preparación y presentación de informes financieros detallados que resumen los
                ingresos y gastos asociados con la operación y mantenimiento de un condominio. Estos informes
                proporcionan una visión general del presupuesto y los gastos de la comunidad y ayudan a los
                administradores y residentes a tomar decisiones informadas sobre la gestión financiera.
              </td>
            </tr>
            <tr>
              <th scope="row" class="align-middle text-center">3. Limpieza de cristales</th>
              <td class="align-middle text-center">Cada mes.</td>
              <td>Limpieza de vidrios y fachadas en altura tanto interior, domos, estructuras,
                Gracias a la dedicación y tenacidad de nuestra empresa y personal capacitado logramos obtener la mejor
                satisfacción de nuestros clientes. A través de la mejora continua, la capacitación y dedicación de
                nuestros trabajadores ofrecemos a nuestros clientes la mejor alternativa para satisfacer sus necesidades
                de limpieza.
              </td>
            </tr>
            <tr>
              <th scope="row" class="align-middle text-center">4. Control de acceso y salida</th>
              <td class="align-middle text-center">24/7 los 365 días del año</td>
              <td>El acceso a fraccionamientos o condominios determina la tranquilidad en tu comunidad
                La entrada principal, tiene control de acceso, así mismo, se asigna 
              </td>
            </tr>
            <tr>
              <th scope="row" class="align-middle text-center">5. Vigilancia de estacionamiento</th>
              <td class="align-middle text-center">24/7 los 365 días del año</td>
              <td>
                No te preocupes porque roben las refacciones de tu auto. Siempre habrá un vigilante que
                estará cuidando de tu auto.
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <div class="total">
    <div class="flex-container text-right mr-3">
      <p class="total-texto">No importa el tamaño del condominio, nosotros nos ajustamos a tus preferencias</p>
      <p class="condiciones-texto">Contratación mínima de seis meses</p>
      <br>
    </div>
    <button type="button" class="btn btn-primary">¡Quiero una cotización!</button>
  </div>

  <br>
  <br>
  <br>




  <?PHP require('../../footer/footer.php');
  ?>
</body>


</html>