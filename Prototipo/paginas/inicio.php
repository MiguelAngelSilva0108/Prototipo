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
  <br>
  <br>
  <br>
  <!--carrusel-->
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
  <!--SERVICIOS-->
  <div class="container inicio">
    <div class="flex-inicio">
      <div class="d-flex flex-column flex-md-row justify-content-between align-items-center">
        <div class="text-md-start mb-3 mb-md-0 me-md-5">
          <h2>SERVICIOS ESPECIALIZADOS EN CONDOMINIOS</h2>
          <p class="explicacion">
            Bienvenidos a nuestra empresa, líder en servicios de administración, mantenimiento y vigilancia para
            condominios. Nos dedicamos a proporcionar soluciones integrales para garantizar la tranquilidad y el
            bienestar de los residentes en su comunidad.
            Tenemos servicios de mantenimiento a los condominios, los cuales son:
          </p>
        </div>
        <div class="text-center">
          <img src="https://cdn-icons-png.flaticon.com/512/1477/1477623.png" alt="Mantenimiento industrial"
            class="Satisfaccion" height="150" width="150">
        </div>
      </div>
    </div>
  </div>
  <!--linea 1 de servicios -->
  <div class="container imagenes">
    <div class="flex-container">
      <div class="flex-item">
        <a href="/Prototipo/servicios/unitarios/explicacion.php?servicio=administracion">
          <img src="https://cdn-icons-png.flaticon.com/512/217/217853.png" alt="administracion" class="iconos">
          <p class="iconos-texto">Administración y recolección de recursos monetarios</p>
        </a>
      </div>
      <div class="flex-item">
        <a href="/Prototipo/servicios/unitarios/explicacion.php?servicio=albanileria">
          <img src="https://cdn-icons-png.flaticon.com/512/2421/2421989.png" alt="albañil" class="iconos">
          <p class="iconos-texto">Albañilería</p>
        </a>
      </div>
      <div class="flex-item">
        <a href="/Prototipo/servicios/unitarios/explicacion.php?servicio=camaras">
          <img src="https://cdn-icons-png.flaticon.com/512/36/36311.png" alt="Vigilancia" class="iconos">
          <p class="iconos-texto">Cámaras de vigilancia</p>
        </a>
      </div>
      <div class="flex-item">
        <a href="/Prototipo/servicios/unitarios/explicacion.php?servicio=comite">
          <img src="https://cdn-icons-png.flaticon.com/512/4420/4420377.png" alt="comite" class="iconos">
          <p class="iconos-texto">Comité de administración</p>
        </a>
      </div>
    </div>
  </div>

<!--linea 2 de servicios -->
<div class="container imagenes">
    <div class="flex-container">

    <div class="flex-item">
        <a href="/Prototipo/servicios/unitarios/explicacion.php?servicio=plagas">
          <img src="https://cdn-icons-png.flaticon.com/512/2636/2636843.png" alt="plagas"
            class="iconos">
          <p class="iconos-texto">Control de plagas</p>
        </a>
      </div>

      <div class="flex-item">
        <a href="/Prototipo/servicios/unitarios/explicacion.php?servicio=electricista">
          <img src="https://cdn-icons-png.flaticon.com/512/1983/1983275.png" alt="electricista" class="iconos">
          <p class="iconos-texto">Electricista</p>
        </a>
      </div>

      <div class="flex-item">
        <a href="/Prototipo/servicios/unitarios/explicacion.php?servicio=gobierno">
          <img src="https://cdn-icons-png.flaticon.com/512/5605/5605882.png" alt="gobierno" class="iconos">
          <p class="iconos-texto">Gestión de asuntos de gobierno y legales</p>
        </a>
      </div>

      <div class="flex-item">
        <a href="/Prototipo/servicios/unitarios/explicacion.php?servicio=impermeabilizacion">
          <img src="https://cdn-icons-png.flaticon.com/512/129/129817.png" alt="Impermeabilización" class="iconos">
          <p class="iconos-texto">Impermeabilización</p>
        </a>
      </div>
    </div>
  </div>

  <!--linea 3 de servicios -->
  <div class="container imagenes">
    <div class="flex-container">

      <div class="flex-item">
        <a href="/Prototipo/servicios/unitarios/explicacion.php?servicio=cisternas">
          <img src="https://cdn-icons-png.flaticon.com/512/3022/3022982.png" alt="cisternas" class="iconos">
          <p class="iconos-texto">Lavado y desinfección de Cisternas</p>
        </a>
      </div>

      <div class="flex-item">
        <a href="/Prototipo/servicios/unitarios/explicacion.php?servicio=tinacos">
          <img src="https://cdn-icons-png.flaticon.com/512/7608/7608679.png" alt="tinacos"
            class="iconos">
          <p class="iconos-texto">Lavado y desinfección de tinacos</p>
        </a>
      </div>

      <div class="flex-item">
        <a href="/Prototipo/servicios/unitarios/explicacion.php?servicio=albercas">
          <img src="https://cdn-icons-png.flaticon.com/512/78/78682.png" alt="albercas"
            class="iconos">
          <p class="iconos-texto">Limpieza de Albercas</p>
        </a>
      </div>

      <div class="flex-item">
        <a href="/Prototipo/servicios/unitarios/explicacion.php?servicio=limpieza">
          <img src="https://cdn-icons-png.flaticon.com/512/2866/2866900.png" alt="limpieza" class="iconos">
          <p class="iconos-texto">Limpieza de áreas comunes</p>
        </a>
      </div>
    </div>
  </div>

  <!--linea 4 de servicios -->
  <div class="container imagenes">
    <div class="flex-container">

    <div class="flex-item">
        <a href="/Prototipo/servicios/unitarios/explicacion.php?servicio=ventanales">
          <img src="https://cdn-icons-png.flaticon.com/512/6410/6410650.png" alt="ventanales"
            class="iconos">
          <p class="iconos-texto">Limpieza de ventanales</p>
        </a>
      </div>

      <div class="flex-item">
        <a href="/Prototipo/servicios/unitarios/explicacion.php?servicio=plomeria">
          <img src="https://cdn-icons-png.flaticon.com/512/4635/4635359.png" alt="plomeria" class="iconos">
          <p class="iconos-texto">Plomería</p>
        </a>
      </div>

      <div class="flex-item">
        <a href="/Prototipo/servicios/unitarios/explicacion.php?servicio=arboles">
          <img src="https://cdn-icons-png.flaticon.com/512/2174/2174132.png" alt="arboles" class="iconos">
          <p class="iconos-texto">Poda y adorno de arboles</p>
        </a>
      </div>

      <div class="flex-item">
        <a href="/Prototipo/servicios/unitarios/explicacion.php?servicio=pasto">
          <img src="https://cdn-icons-png.flaticon.com/512/7105/7105088.png" alt="pasto" class="iconos">
          <p class="iconos-texto">Poda de pasto</p>
        </a>
      </div>
    </div>
  </div>

  <!--linea 5 de servicios -->
  <div class="container imagenes">
    <div class="flex-container">
     
    <div class="flex-item">
        <a href="/Prototipo/servicios/unitarios/explicacion.php?servicio=pintura">
          <img src="https://cdn-icons-png.flaticon.com/512/1276/1276892.png" alt="pintura" class="iconos">
          <p class="iconos-texto">Pintura Interior y Exterior</p>
        </a>
      </div>

      <div class="flex-item">
        <a href="/Prototipo/servicios/unitarios/explicacion.php?servicio=puertas">
          <img src="https://cdn-icons-png.flaticon.com/512/2457/2457981.png" alt="puertas"
            class="iconos">
          <p class="iconos-texto">Puertas automáticas</p>
        </a>
      </div>

      <div class="flex-item">
        <a href="/Prototipo/servicios/unitarios/explicacion.php?servicio=pulido">
          <img src="https://cdn-icons-png.flaticon.com/512/16/16386.png" alt="pulido" class="iconos">
          <p class="iconos-texto">Pulido y limpieza de pisos</p>
        </a>
      </div>

      <div class="flex-item">
        <a href="/Prototipo/servicios/unitarios/explicacion.php?servicio=cuotas">
          <img src="https://cdn-icons-png.flaticon.com/512/2871/2871729.png" alt="cuotas" class="iconos">
          <p class="iconos-texto">Recudación cuotas de mantenimiento</p>
        </a>
      </div>
      
    </div>
  </div>

  <br>
  <div class="container inicio">
    <div class="flex-inicio">
      <div class="d-flex flex-column flex-md-row justify-content-between align-items-center">
        <div class="text-md-start mb-3 mb-md-0 me-md-5">
          <h2>PLANES ESPECIALIZADOS EN CONDOMINIOS</h2>
          <p class="explicacion">
            Ofrecemos tres planes de contratación adaptados a las necesidades de cada condominio. El plan básico, el
            plan medio y el plan completo
            Todos nuestros planes tienen descuentos al contratar de forma semestral y anual, lo que permite a los
            condominios ahorrar dinero y tener una gestión administrativa y de mantenimiento efectiva y eficiente a
            largo plazo.
          </p>
        </div>
        <div class="text-center">
          <img src="https://cdn-icons-png.flaticon.com/512/3930/3930204.png" alt="Mantenimiento industrial"
            class="Satisfaccion" height="150" width="150">
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="flex-container">
      <div class="flex-item">
        <a href="./servicios/planes/basico.php">
          <img src="https://cdn-icons-png.flaticon.com/512/263/263115.png" alt="Basico" class="iconos">
          <p class="iconos-texto">Plan Básico</p>
        </a>
      </div>
      <div class="flex-item">
        <a href="./servicios/planes/intermedio.php">
          <img src="https://cdn-icons-png.flaticon.com/512/916/916771.png" alt="Impermeabilización" class="iconos">
          <p class="iconos-texto">Plan Intermedio</p>
        </a>
      </div>
      <div class="flex-item">
        <a href="./servicios/planes/avanzado.php">
          <img src="https://cdn-icons-png.flaticon.com/512/2451/2451655.png" alt="Pintura" class="iconos">
          <p class="iconos-texto">Plan Servicio Completo</p>
        </a>
      </div>
    </div>
  </div>

  <br>
  <br>
  <br>

  <?PHP require('./footer/footer.php');
  ?>
</body>

</html>