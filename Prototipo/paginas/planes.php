<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planes</title>
    <link rel="icon" href="https://cdn.freebiesupply.com/logos/large/2x/s-bahn-1-logo-png-transparent.png" type="image/png">
    <link rel="icon" href="img/logo.png" type="image/png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap">
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
<link rel="stylesheet" href="../css/planes.css">
<link rel="stylesheet" href="../css/navbar.css">
<link rel="stylesheet" href="../css/footer.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

<body>
    <?PHP require('../navbar/navbar.php'); ?>




    <div class="container">
        <div class="TextoTitulo">
            <p class="Titulo">
                Planes para condominios
            </p>
            <p class="Descripcion">
                Ya no tendrás que ocuparte de administrar el condominio en el que vives.
                Deja de preocuparte por conseguir dinero, conseguir material o trabajadores, ¡nosotros haremos todo por
                ti!
            </p>
        </div>
    </div>

    <br>

    <div class="container">
        <div class="flex-iconos">
            <div class="flex-container">
                <div class="flex-item">
                    <a href="/Prototipo/servicios/planes/basico.php">
                        <img src="https://cdn-icons-png.flaticon.com/512/263/263115.png" alt="Basico" class="iconos">
                        <p class="iconos-texto">Plan Básico</p>
                    </a>
                </div>
                <div class="flex-item">
                    <a href="/Prototipo/servicios/planes/intermedio.php">
                        <img src="https://cdn-icons-png.flaticon.com/512/916/916771.png" alt="Impermeabilización" class="iconos">
                        <p class="iconos-texto">Plan Intermedio</p>
                    </a>
                </div>
                <div class="flex-item">
                    <a href="/Prototipo/servicios/planes/avanzado.php">
                        <img src="https://cdn-icons-png.flaticon.com/512/2451/2451655.png" alt="Pintura" class="iconos">
                        <p class="iconos-texto">Plan Premium</p>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="flex-inicio">
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-center">
                <div class="text-md-start mb-3 mb-md-0 me-md-5">
                    <div class="titulo-texto-derecha">
                        <p class="titulo-servicios">Paquete básico</p>
                        <div class="lista">
                            <ul>
                                <li>Administración y recaudación de cuotas de mantenimientos</li>
                                <li>Control de acceso y salida en el condominio</li>
                                <li>Limpieza de áreas comunes</li>
                                <li>Limpieza y desinfección de tinacos y cisternas</li>
                                <li>Jardinería</li>
                                <li>Limpieza de Albercas con costo extra</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <img src="https://cdn-icons-png.flaticon.com/512/263/263115.png" style="margin-right: 250px" alt="Mantenimiento industrial" class="muestra-derecha" height="150" width="150">
                </div>
            </div>
            <a href="/Prototipo/servicios/planes/basico.php" class="btn btn-primary">¡Quiero saber más!</a>
        </div>
    </div>
   
    <div class="container">
        <div class="flex-inicio">
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-center">
                <div class="text-md-start mb-3 mb-md-0 me-md-5">
                    <img src="https://cdn-icons-png.flaticon.com/512/916/916771.png" alt="Mantenimiento industrial" class="muestra" height="150" width="150">
                </div>
                <div class="text-md-start mb-3 mb-md-0 me-md-5">
                    <div class="titulo-texto">
                        <p class="titulo-servicios">Paquete Medio</p>
                        <div class="lista">
                            <ul>
                                <li>¡Todo lo que tiene el paquete básico!</li>
                                <li>Estado de ingresos y gastos</li>
                                <li>Limpieza de cristales del edificio</li>
                                <li>Vigilancia en los estacionamientos 24/7</li>
                                <li>Mantenimiento de tanques de gas</li>
                                <li>Limpieza de Albercas con costo extra</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <a href="/Prototipo/servicios/planes/intermedio.php" class="btn btn-primary">¡Quiero saber más!</a>
        </div>
    </div>


    <div class="container">
        <div class="flex-inicio">
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-center">
                <div class="text-md-start mb-3 mb-md-0 me-md-5">
                    <div class="titulo-texto-derecha">
                        <p class="titulo-servicios">Paquete completo</p>
                        <div class="lista">
                            <ul>
                            <li>¡Todo lo que tiene el paquete básico e intermedio!</li>
                                <li>Impermeabilización</li>
                                <li>Pintura Exterior e interior de áreas comunes</li>
                                <li>Vigilancia Nocturna</li>
                                <li>Cámaras de seguridad vigilando 24/7</li>
                                <li>Limpieza de Albercas con costo extra</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <img src="https://cdn-icons-png.flaticon.com/512/1027/1027251.png" style="margin-right: 250px" alt="Mantenimiento industrial" class="muestra-derecha" height="150" width="150">
                </div>
            </div>
            <a href="/Prototipo/servicios/planes/avanzado.php" class="btn btn-primary">¡Quiero saber más!</a>
        </div>
    </div>
</body>
<?PHP require('../footer/footer.php');
?>

</html>