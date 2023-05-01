<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SmartCondo</title>
  <link rel="icon" href="https://cdn.freebiesupply.com/logos/large/2x/s-bahn-1-logo-png-transparent.png"
    type="image/png">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;500;700&display=swap" rel="stylesheet">
</head>
<?PHP require('./navbar/navbar.php');
?>
<link rel="stylesheet" href="./css/bootstrap.min.css" />
<link rel="stylesheet" href="./css/navbar.css">
<link rel="stylesheet" href="./css/footer.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>




<body>

  <div class="carousel-container">
    <div class="row">
      <div class="col-lg-10 mx-auto">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="/Prototipo/imagenes/comercio.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="/Prototipo/imagenes/admin.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="/Prototipo/imagenes/mantenimiento.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="/Prototipo/imagenes/seguridad.png" class="d-block w-100" alt="...">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </div>
  </div>

  <div class="container inicio">
    <div class="flex-inicio">
      <div class="d-flex flex-column flex-md-row justify-content-between align-items-center">
        <div class="text-md-start mb-3 mb-md-0 me-md-5">
          <h2>SERVICIOS ESPECIALIZADOS EN CONDOMINIOS</h2>
          <p class="explicacion">
            Diagnosticamos, prevenimos y diseñamos soluciones de mantenimiento industrial, tanto preventivo como
            correctivo para cualquier sector industrial. Sobre todo, siempre buscamos optimizar todos los recursos
            humanos, materiales y económicos. De igual manera, nos anticipamos y medimos los riesgos para ejecutar cada
            proyecto en tiempo, forma y con la máxima seguridad. Como resultado, cubrimos las necesidades de cada
            cliente. Los servicios de mantenimiento industrial incluyen:
          </p>
        </div>
        <div class="text-center">
          <img src="https://cdn-icons-png.flaticon.com/512/1477/1477623.png" alt="Mantenimiento industrial"
            class="Satisfaccion" height="150" width="150">
        </div>
      </div>
    </div>
  </div>

  <div class="container imagenes">
    <div class="flex-container">
      <div class="flex-item">
        <img src="https://cdn-icons-png.flaticon.com/512/36/36296.png" alt="Vigilancia" class="iconos">
        <p class="iconos-texto">Vigilancia 24/7</p>
      </div>
      <div class="flex-item">
        <a class="text-decoration-none" href="./servicios/unitarios/impermeabilizacion.php">
        <img src="https://cdn-icons-png.flaticon.com/512/129/129817.png" alt="Impermeabilización" class="iconos">
        <p class="iconos-texto">Impermeabilización</p>
        </a>
      </div>
      <div class="flex-item">
        <img src="https://cdn-icons-png.flaticon.com/512/1276/1276892.png" alt="Pintura" class="iconos">
        <p class="iconos-texto">Pintura Interior y Exterior</p>
      </div>
      <div class="flex-item">
        <img src="https://cdn-icons-png.flaticon.com/512/6568/6568508.png" alt="Descripción de la imagen" class="iconos">
        <p class="iconos-texto">Limpieza de Albercas</p>
      </div>
    </div>
  </div>

  <?PHP require('./footer/footer.php');
  ?>
</body>

</html>