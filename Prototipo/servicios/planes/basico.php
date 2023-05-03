<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Plan Básico</title>
  <link rel="icon" href="https://cdn.freebiesupply.com/logos/large/2x/s-bahn-1-logo-png-transparent.png" type="image/png">
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
        Plan Básico
      </p>
      <p class="Descripcion">
        ¡Recibe un descuento del 10% al contratar nuestros servicios por un año!
        <br>Este paquete incluye servicios administrativos, de mantenimiento y
        vigilancia esenciales para garantizar la seguridad y el bienestar de su propiedad.
      </p>
      <p class="titulo2">
        ¿Qué incluye?
      </p>
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
              <th scope="row" class="align-middle text-center">Administración de Recursos Monetarios</th>
              <td class="align-middle text-center">Cada mes.</td>
              <td>Gestión y control de los recursos monetarios asociados con el mantenimiento y operación del condominio.
                Esto implica la planificación y el seguimiento del presupuesto y la gestión de los pagos a proveedores.
                La administración efectiva de los recursos monetarios de un condominio es esencial para mantener
                la calidad de vida de los residentes y asegurar la sostenibilidad financiera a largo plazo del condominio.</td>
            </tr>
            <tr>
              <th scope="row" class="align-middle text-center">Recaudación de cuotas de mantenimiento</th>
              <td class="align-middle text-center">Cada mes.</td>
              <td>Proceso que implica la gestión y cobro de las cuotas de mantenimiento que deben pagar los residentes
                de un condominio o comunidad. Este servicio se encarga de enviar recordatorios de pago,
                procesar los pagos recibidos y llevar un registro detallado de las cuentas de cada residente.
                La recaudación de cuotas de mantenimiento es un componente crítico de la administración financiera de una
                comunidad, ya que ayuda a mantener el presupuesto y financiar los gastos necesarios para el mantenimiento y
                operación del condominio.</td>
            </tr>
            <tr>
              <th scope="row" class="align-middle text-center">Lavado y desinfección de tinacos</th>
              <td class="align-middle text-center">5 tinacos, 1 vez c/u por cada 6 meses.</td>
              <td>Se realizará la limpieza de tinacos, desinfección a través de hipoclorito y tallado manual.
                Cuenta con un plomero experto y un ayudante </td>
            </tr>
            <tr>
              <th scope="row" class="align-middle text-center">Lavado y desinfección de cisternas</th>
              <td class="align-middle text-center">2 cisternas de 30 m3, 1 vez c/u por cada 6 meses </td>
              <td>Se realizará la limpieza de cisterna, desinfección a través de hipoclorito y tallado manual.
                Cuenta con un plomero experto y un ayudante
              </td>
            </tr>
            <tr>
              <th scope="row" class="align-middle text-center">Poda de árboles</th>
              <td class="align-middle text-center">20 árboles de 5 a 10 m, una vez cada mes</td>
              <td>Todos los árboles requieren de cierto mantenimiento y es importante que sean tratados por manos expertas.
                La poda es una actividad necesaria para mantener los árboles sanos y en perfecto estado.
                De hecho, es una tarea fundamental en cuanto al mantenimiento de un jardín.</td>
            </tr>

            <tr>
              <th scope="row" class="align-middle text-center">Poda de pasto</th>
              <td class="align-middle text-center">300 m2, una vez cada mes</td>
              <td>Para tener un pasto saludable, es importante cortarlo de forma periódica. Si no prestamos atención a esta tarea,
                es fácil que nuestro jardín adquiera un aspecto un poco descuidado.
                Nuestros jardineros colaboradores cuentan con experiencia a la hora de recortar y mantener todo tipo de pastos.
              </td>
            </tr>

            <tr>
              <th scope="row" class="align-middle text-center">Control de acceso y de salida</th>
              <td class="align-middle text-center">24 horas</td>
              <td>El acceso a fraccionamientos o condominios determina la tranquilidad en tu comunidad. Es por eso que
                Asignamos a vigilantes, para la tranquilidad de tu hogar
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
   </div>
  
   <div class="total">
  <div class="flex-container text-right mr-3">
    <p class="total-texto">Todo por $54,400 al mes</p>
    <p class="condiciones-texto">Contratación mínima de seis meses</p>
  </div>
</div>


    <?PHP require('../../footer/footer.php');
    ?>
</body>


</html>