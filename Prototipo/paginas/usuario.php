<?php
if (!isset($_SESSION)) {
    session_start();
}

require __DIR__ . '/../database/database.php';

if (!empty($_POST['Nombres']) && !empty($_POST['AP']) && !empty($_POST['AM']) && !empty($_POST['Celular']) && !empty($_POST['Email']) && !empty($_POST['Servicio']) && !empty($_POST['Calle']) && !empty($_POST['Colonia']) && !empty($_POST['NumExt']) && !empty($_POST['Municipio']) && !empty($_POST['CP']) && !empty($_POST['Estado']) && !empty($_POST['RFC']) && !empty($_POST['Nombre_Condominio']) && !empty($_POST['Calle_Condominio']) && !empty($_POST['Colonia_Condominio']) && !empty($_POST['NumExt_Condominio']) && !empty($_POST['Municipio_Condominio']) && !empty($_POST['CP_Condominio']) && !empty($_POST['Estado_Condominio'])) {
    $updateStmt = $conn->prepare('UPDATE users SET Nombres = :nombres, AP = :ap, AM = :am, Celular = :celular, Email = :email, Servicio = :servicio, Calle = :calle, Colonia = :colonia, NumExt = :numExt, NumInt = :numInt, Municipio = :municipio, CP = :cp, Estado = :estado, RFC = :rfc, Nombre_Condominio = :nombreCondominio, Calle_Condominio = :calleCondominio, Colonia_Condominio = :coloniaCondominio, NumExt_Condominio = :numExtCondominio, Municipio_Condominio = :municipioCondominio, CP_Condominio = :cpCondominio, Estado_Condominio = :estadoCondominio WHERE id_users = :id_users');

    $updateStmt->bindParam(':nombres', $_POST['Nombres']);
    $updateStmt->bindParam(':ap', $_POST['AP']);
    $updateStmt->bindParam(':am', $_POST['AM']);
    $updateStmt->bindParam(':celular', $_POST['Celular']);
    $updateStmt->bindParam(':email', $_POST['Email']);
    $updateStmt->bindParam(':servicio', $_POST['Servicio']);
    $updateStmt->bindParam(':calle', $_POST['Calle']);
    $updateStmt->bindParam(':colonia', $_POST['Colonia']);
    $updateStmt->bindParam(':numExt', $_POST['NumExt']);
    $updateStmt->bindParam(':numInt', $_POST['NumInt']);
    $updateStmt->bindParam(':municipio', $_POST['Municipio']);
    $updateStmt->bindParam(':cp', $_POST['CP']);
    $updateStmt->bindParam(':estado', $_POST['Estado']);
    $updateStmt->bindParam(':rfc', $_POST['RFC']);
    $updateStmt->bindParam(':nombreCondominio', $_POST['Nombre_Condominio']);
    $updateStmt->bindParam(':calleCondominio', $_POST['Calle_Condominio']);
    $updateStmt->bindParam(':coloniaCondominio', $_POST['Colonia_Condominio']);
    $updateStmt->bindParam(':numExtCondominio', $_POST['NumExt_Condominio']);
    $updateStmt->bindParam(':municipioCondominio', $_POST['Municipio_Condominio']);
    $updateStmt->bindParam(':cpCondominio', $_POST['CP_Condominio']);
    $updateStmt->bindParam(':estadoCondominio', $_POST['Estado_Condominio']);
    $updateStmt->bindParam(':id_users', $_SESSION['user_id']);

    if ($updateStmt->execute()) {
        $message = 'Actualización exitosa';
    } else {
        $message = 'Error al actualizar los datos';
    }
}



$nombreUsuario = isset($user) ? $user['Nombres'] . ' ' . $user['AP'] . ' ' . $user['AM'] : 'Invitado';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php echo $nombreUsuario; ?> - Servicios Unitarios
    </title>
    <link rel="icon" href="https://cdn.freebiesupply.com/logos/large/2x/s-bahn-1-logo-png-transparent.png"
        type="image/png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/registro.css">
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/footer.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <?php require('../navbar/navbar.php'); ?>

    <br>
    <br>
    <br>
    <a href="/Prototipo/index.php">
        <img src="https://cdn.freebiesupply.com/logos/large/2x/s-bahn-1-logo-png-transparent.png" alt="Logo" width="50"
            height="50" class="rounded mx-auto d-block" />
    </a>

    <?php if (!empty($message)): ?>
        <p>
            <?= $message ?>
        </p>
    <?php endif; ?>

    <p class="text-center" style="font-family: Poppins; font-size: 24px;">CondoSmart 24/7 para ti</p>



    <div class="update">
        <form action="usuario.php" method="POST">
            <div class="row">
                <div class="col-sm-6 col-lg-3 offset-15 mt-5 mx-auto">
                    <div class="card pt-5">
                        <div class="card-header">
                            Modifica tus datos
                        </div>
                        <div class="card-body">
                            <div class="card-header">
                                Datos del Administrador
                            </div>

                            <!--Nombres-->
                            <div class="form-floating mb-3">
                                <input type="text" name="Nombres" class="form-control" id="floatingNombres"
                                    placeholder="name@example.com" required
                                    value="<?php echo isset($user['Nombres']) ? $user['Nombres'] : ''; ?>" />
                                <label for="floatingNombres">Nombres</label>
                            </div>

                            <!--Apellido Paterno-->
                            <div class="form-floating mb-3">
                                <input type="text" name="AP" class="form-control" id="floatingAP"
                                    placeholder="name@example.com" required
                                    value="<?php echo isset($user['AP']) ? $user['AP'] : ''; ?>" />
                                <label for="floatingAP">Apellido Paterno</label>
                            </div>

                            <!--Apellido Materno-->
                            <div class="form-floating mb-3">
                                <input type="text" name="AM" class="form-control" id="floatingAM"
                                    placeholder="name@example.com" required
                                    value="<?php echo isset($user['AM']) ? $user['AM'] : ''; ?>" />
                                <label for="floatingAM">Apellido Materno</label>
                            </div>

                            <!--Celular-->
                            <div class="form-floating mb-3">
                                <input type="text" name="Celular" class="form-control" id="floatingCelular"
                                    placeholder="name@example.com" required
                                    value="<?php echo isset($user['Celular']) ? $user['Celular'] : ''; ?>" />
                                <label for="floatingCelular">Teléfono Celular</label>
                            </div>

                            <!--Email-->
                            <div class="form-floating mb-3">
                                <input type="email" name="Email" class="form-control" id="floatingEmail"
                                    placeholder="name@example.com" required
                                    value="<?php echo isset($user['Email']) ? $user['Email'] : ''; ?>" />
                                <label for="floatingEmail">Correo electrónico</label>
                            </div>


                            <!--Servicio deseado-->
                            <div class="form-floating mb-3">
                                <select class="form-select" name="Servicio" id="floatingSelect"
                                    aria-label="Floating label select example" required>
                                    <option value="">Seleccione el tamaño de condominio</option>
                                    <option value="De 15 a 30 departamentos" <?php if (isset($user['Servicio']) && $user['Servicio'] === 'De 15 a 30 departamentos')
                                        echo 'selected'; ?>>De 15 a 30
                                        departamentos</option>
                                    <option value="De 30 a 50 departamentos" <?php if (isset($user['Servicio']) && $user['Servicio'] === 'De 30 a 50 departamentos')
                                        echo 'selected'; ?>>De 30 a 50
                                        departamentos</option>
                                    <option value="50 o más departamentos" <?php if (isset($user['Servicio']) && $user['Servicio'] === '50 o más departamentos')
                                        echo 'selected'; ?>>50 o más
                                        departamentos</option>
                                </select>
                                <label for="floatingSelect">Servicio contratado o deseado</label>
                            </div>


                            <!--Dirección-->
                            <!--Calle y Colonia-->
                            <div class="row g-2">
                                <div class="col-md">
                                    <div class="form-floating mb-3">
                                        <input type="text" name='Calle' class="form-control" id="floatingInputGrid"
                                            placeholder="name@example.com" required
                                            value="<?php echo isset($user['Calle']) ? $user['Calle'] : ''; ?>" />
                                        <label htmlFor="floatingInputGrid">Calle</label>
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-floating mb-3">
                                        <input type="text" name='Colonia' class="form-control" id="floatingInputGrid"
                                            placeholder="name@example.com" required
                                            value="<?php echo isset($user['Colonia']) ? $user['Colonia'] : ''; ?>" />
                                        <label htmlFor="floatingInputGrid">Colonia</label>
                                    </div>
                                </div>
                            </div>

                            <!--Número ext e int-->
                            <div class="row g-2">
                                <div class="col-md">
                                    <div class="form-floating mb-3">
                                        <input type="text" name='NumExt' class="form-control" id="floatingInputGrid"
                                            placeholder="name@example.com" required
                                            value="<?php echo isset($user['NumExt']) ? $user['NumExt'] : ''; ?>" />
                                        <label htmlFor="floatingInputGrid">Num ext</label>
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-floating mb-3">
                                        <input type="text" name='NumInt' class="form-control" id="floatingInputGrid"
                                            placeholder="name@example.com"
                                            value="<?php echo isset($user['NumInt']) ? $user['NumInt'] : ''; ?>" />
                                        <label htmlFor="floatingInputGrid">Num int</label>
                                    </div>
                                </div>
                            </div>

                            <!--Municipio y CP-->
                            <div class="row g-2">
                                <div class="col-md">
                                    <div class="form-floating mb-3">
                                        <input type="text" name='Municipio' class="form-control" id="floatingInputGrid"
                                            placeholder="name@example.com" required
                                            value="<?php echo isset($user['Municipio']) ? $user['Municipio'] : ''; ?>" />
                                        <label htmlFor="floatingInputGrid">Alcaldia o Municipio</label>
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-floating mb-3">
                                        <input type="text" name='CP' class="form-control" id="floatingInputGrid"
                                            placeholder="name@example.com" required
                                            value="<?php echo isset($user['CP']) ? $user['CP'] : ''; ?>" />
                                        <label htmlFor="floatingInputGrid">C.P.</label>
                                    </div>
                                </div>
                            </div>

                            <!--Estado*-->
                            <div class="form-floating mb-3">
                                <select class="form-select" name='Estado' id="floatingSelect"
                                    aria-label="Floating label select example" defaultValue="" required>
                                    <option value="">Seleccione un Estado</option>
                                    <option value="Aguascalientes" <?php if (isset($user['Estado']) && $user['Estado'] === 'Aguascalientes')
                                        echo 'selected'; ?>>Aguascalientes</option>
                                    <option value="Baja California" <?php if (isset($user['Estado']) && $user['Estado'] === 'Baja California')
                                        echo 'selected'; ?>>Baja California
                                    </option>
                                    <option value="Baja California Sur" <?php if (isset($user['Estado']) && $user['Estado'] === 'Baja California Sur')
                                        echo 'selected'; ?>>Baja California Sur
                                    </option>
                                    <option value="Campeche" <?php if (isset($user['Estado']) && $user['Estado'] === 'Campeche')
                                        echo 'selected'; ?>>Campeche</option>
                                    <option value="Chiapas" <?php if (isset($user['Estado']) && $user['Estado'] === 'Chiapas')
                                        echo 'selected'; ?>>Chiapas</option>
                                    <option value="Chihuahua" <?php if (isset($user['Estado']) && $user['Estado'] === 'Chihuahua')
                                        echo 'selected'; ?>>Chihuahua</option>
                                    <option value="Ciudad de México" <?php if (isset($user['Estado']) && $user['Estado'] === 'Ciudad de México')
                                        echo 'selected'; ?>>Ciudad de México
                                    </option>
                                    <option value="Coahuila" <?php if (isset($user['Estado']) && $user['Estado'] === 'Coahuila')
                                        echo 'selected'; ?>>Coahuila</option>
                                    <option value="Colima" <?php if (isset($user['Estado']) && $user['Estado'] === 'Colima')
                                        echo 'selected'; ?>>Colima</option>
                                    <option value="Durango" <?php if (isset($user['Estado']) && $user['Estado'] === 'Durango')
                                        echo 'selected'; ?>>Durango</option>
                                    <option value="Guanajuato" <?php if (isset($user['Estado']) && $user['Estado'] === 'Guanajuato')
                                        echo 'selected'; ?>>Guanajuato</option>
                                    <option value="Guerrero" <?php if (isset($user['Estado']) && $user['Estado'] === 'Guerrero')
                                        echo 'selected'; ?>>Guerrero</option>
                                    <option value="Hidalgo" <?php if (isset($user['Estado']) && $user['Estado'] === 'Hidalgo')
                                        echo 'selected'; ?>>Hidalgo</option>
                                    <option value="Jalisco" <?php if (isset($user['Estado']) && $user['Estado'] === 'Jalisco')
                                        echo 'selected'; ?>>Jalisco</option>
                                    <option value="México" <?php if (isset($user['Estado']) && $user['Estado'] === 'México')
                                        echo 'selected'; ?>>México</option>
                                    <option value="Michoacán" <?php if (isset($user['Estado']) && $user['Estado'] === 'Michoacán')
                                        echo 'selected'; ?>>Michoacán</option>
                                    <option value="Morelos" <?php if (isset($user['Estado']) && $user['Estado'] === 'Morelos')
                                        echo 'selected'; ?>>Morelos</option>
                                    <option value="Nayarit" <?php if (isset($user['Estado']) && $user['Estado'] === 'Nayarit')
                                        echo 'selected'; ?>>Nayarit</option>
                                    <option value="Nuevo León" <?php if (isset($user['Estado']) && $user['Estado'] === 'Nuevo León')
                                        echo 'selected'; ?>>Nuevo León</option>
                                    <option value="Oaxaca" <?php if (isset($user['Estado']) && $user['Estado'] === 'Oaxaca')
                                        echo 'selected'; ?>>Oaxaca</option>
                                    <option value="Puebla" <?php if (isset($user['Estado']) && $user['Estado'] === 'Puebla')
                                        echo 'selected'; ?>>Puebla</option>
                                    <option value="Querétaro" <?php if (isset($user['Estado']) && $user['Estado'] === 'Querétaro')
                                        echo 'selected'; ?>>Querétaro</option>
                                    <option value="Quintana Roo" <?php if (isset($user['Estado']) && $user['Estado'] === 'Quintana Roo')
                                        echo 'selected'; ?>>Quintana Roo</option>
                                    <option value="San Luis Potosí" <?php if (isset($user['Estado']) && $user['Estado'] === 'San Luis Potosí')
                                        echo 'selected'; ?>>San Luis Potosí
                                    </option>
                                    <option value="Sinaloa" <?php if (isset($user['Estado']) && $user['Estado'] === 'Sinaloa')
                                        echo 'selected'; ?>>Sinaloa</option>
                                    <option value="Sonora" <?php if (isset($user['Estado']) && $user['Estado'] === 'Sonora')
                                        echo 'selected'; ?>>Sonora</option>
                                    <option value="Tabasco" <?php if (isset($user['Estado']) && $user['Estado'] === 'Tabasco')
                                        echo 'selected'; ?>>Tabasco</option>
                                    <option value="Tamaulipas" <?php if (isset($user['Estado']) && $user['Estado'] === 'Tamaulipas')
                                        echo 'selected'; ?>>Tamaulipas</option>
                                    <option value="Tlaxcala" <?php if (isset($user['Estado']) && $user['Estado'] === 'Tlaxcala')
                                        echo 'selected'; ?>>Tlaxcala</option>
                                    <option value="Veracruz" <?php if (isset($user['Estado']) && $user['Estado'] === 'Veracruz')
                                        echo 'selected'; ?>>Veracruz</option>
                                    <option value="Yucatán" <?php if (isset($user['Estado']) && $user['Estado'] === 'Yucatán')
                                        echo 'selected'; ?>>Yucatán</option>
                                    <option value="Zacatecas" <?php if (isset($user['Estado']) && $user['Estado'] === 'Zacatecas')
                                        echo 'selected'; ?>>Zacatecas</option>
                                </select>
                                <label for="floatingSelect">Estado</label>
                            </div>

                            <!--RFC-->
                            <div class="form-floating mb-3">
                                <input type="text" name='RFC' class="form-control" id="floatingInput"
                                    placeholder="name@example.com" required 
                                    value="<?php echo isset($user['RFC']) ? $user['RFC'] : ''; ?>" />
                                <label htmlFor="floatingInput">RFC</label>
                            </div>
                            <div class="card-header">
                                Datos del condominio
                            </div>


                            <!--Dirección CONDOMINIO-->

                            <!--Nombres-->
                            <div class="form-floating mb-3">
                                <input type="text" name='Nombre_Condominio' class="form-control" id="floatingInput"
                                    placeholder="name@example.com" required 
                                    value="<?php echo isset($user['Nombre_Condominio']) ? $user['Nombre_Condominio'] : ''; ?>" />
                                <label htmlFor="floatingInput">Nombre del condominio</label>
                            </div>

                            <!--Calle y Colonia-->
                            <div class="row g-2">
                                <div class="col-md">
                                    <div class="form-floating mb-3">
                                        <input type="text" name='Calle_Condominio' class="form-control"
                                            id="floatingInputGrid" placeholder="name@example.com" required
                                            value="<?php echo isset($user['Calle_Condominio']) ? $user['Calle_Condominio'] : ''; ?>" />
                                        <label htmlFor="floatingInputGrid">Calle</label>
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-floating mb-3">
                                        <input type="text" name='NumExt_Condominio' class="form-control"
                                            id="floatingInputGrid" placeholder="name@example.com" required 
                                            value="<?php echo isset($user['NumExt_Condominio']) ? $user['NumExt_Condominio'] : ''; ?>"/>
                                        <label htmlFor="floatingInputGrid">Num ext</label>

                                    </div>
                                </div>
                            </div>

                            <!--Número ext e int-->
                            <div class="form-floating mb-3">
                                <input type="text" name='Colonia_Condominio' class="form-control" id="floatingInputGrid"
                                    placeholder="name@example.com" required 
                                    value="<?php echo isset($user['Colonia_Condominio']) ? $user['Colonia_Condominio'] : ''; ?>"/>
                                <label htmlFor="floatingInputGrid">Colonia</label>
                            </div>


                            <!--Municipio y CP-->
                            <div class="row g-2">
                                <div class="col-md">
                                    <div class="form-floating mb-3">
                                        <input type="text" name='Municipio_Condominio' class="form-control"
                                            id="floatingInputGrid" placeholder="name@example.com" required 
                                            value="<?php echo isset($user['Municipio_Condominio']) ? $user['Municipio_Condominio'] : ''; ?>"/>
                                        <label htmlFor="floatingInputGrid">Alcaldia o Municipio</label>
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-floating mb-3">
                                        <input type="text" name='CP_Condominio' class="form-control"
                                            id="floatingInputGrid" placeholder="name@example.com" required 
                                            value="<?php echo isset($user['CP_Condominio']) ? $user['CP_Condominio'] : ''; ?>"/>
                                        <label htmlFor="floatingInputGrid">C.P.</label>
                                    </div>
                                </div>
                            </div>

                            <!--Estado*-->
                            <div class="form-floating mb-3">
                                <select class="form-select" name='Estado_Condominio' id="floatingSelect"
                                    aria-label="Floating label select example" defaultValue="" required>

                                    <option value="">Seleccione un Estado</option>
                                    <option value="Aguascalientes" <?php if (isset($user['Estado_Condominio']) && $user['Estado_Condominio'] === 'Aguascalientes')
                                        echo 'selected'; ?>>
                                        Aguascalientes</option>
                                    <option value="Baja California" <?php if (isset($user['Estado_Condominio']) && $user['Estado_Condominio'] === 'Baja California')
                                        echo 'selected'; ?>>Baja
                                        California</option>
                                    <option value="Baja California Sur" <?php if (isset($user['Estado_Condominio']) && $user['Estado_Condominio'] === 'Baja California Sur')
                                        echo 'selected'; ?>>Baja
                                        California Sur</option>
                                    <option value="Campeche" <?php if (isset($user['Estado_Condominio']) && $user['Estado_Condominio'] === 'Campeche')
                                        echo 'selected'; ?>>Campeche</option>
                                    <option value="Chiapas" <?php if (isset($user['Estado_Condominio']) && $user['Estado_Condominio'] === 'Chiapas')
                                        echo 'selected'; ?>>Chiapas</option>
                                    <option value="Chihuahua" <?php if (isset($user['Estado_Condominio']) && $user['Estado_Condominio'] === 'Chihuahua')
                                        echo 'selected'; ?>>Chihuahua</option>
                                    <option value="Ciudad de México" <?php if (isset($user['Estado_Condominio']) && $user['Estado_Condominio'] === 'Ciudad de México')
                                        echo 'selected'; ?>>Ciudad de
                                        México</option>
                                    <option value="Coahuila" <?php if (isset($user['Estado_Condominio']) && $user['Estado_Condominio'] === 'Coahuila')
                                        echo 'selected'; ?>>Coahuila</option>
                                    <option value="Colima" <?php if (isset($user['Estado_Condominio']) && $user['Estado_Condominio'] === 'Colima')
                                        echo 'selected'; ?>>Colima</option>
                                    <option value="Durango" <?php if (isset($user['Estado_Condominio']) && $user['Estado_Condominio'] === 'Durango')
                                        echo 'selected'; ?>>Durango</option>
                                    <option value="Guanajuato" <?php if (isset($user['Estado_Condominio']) && $user['Estado_Condominio'] === 'Guanajuato')
                                        echo 'selected'; ?>>Guanajuato
                                    </option>
                                    <option value="Guerrero" <?php if (isset($user['Estado_Condominio']) && $user['Estado_Condominio'] === 'Guerrero')
                                        echo 'selected'; ?>>Guerrero</option>
                                    <option value="Hidalgo" <?php if (isset($user['Estado_Condominio']) && $user['Estado_Condominio'] === 'Hidalgo')
                                        echo 'selected'; ?>>Hidalgo</option>
                                    <option value="Jalisco" <?php if (isset($user['Estado_Condominio']) && $user['Estado_Condominio'] === 'Jalisco')
                                        echo 'selected'; ?>>Jalisco</option>
                                    <option value="México" <?php if (isset($user['Estado_Condominio']) && $user['Estado_Condominio'] === 'México')
                                        echo 'selected'; ?>>México</option>
                                    <option value="Michoacán" <?php if (isset($user['Estado_Condominio']) && $user['Estado_Condominio'] === 'Michoacán')
                                        echo 'selected'; ?>>Michoacán</option>
                                    <option value="Morelos" <?php if (isset($user['Estado_Condominio']) && $user['Estado_Condominio'] === 'Morelos')
                                        echo 'selected'; ?>>Morelos</option>
                                    <option value="Nayarit" <?php if (isset($user['Estado_Condominio']) && $user['Estado_Condominio'] === 'Nayarit')
                                        echo 'selected'; ?>>Nayarit</option>
                                    <option value="Nuevo León" <?php if (isset($user['Estado_Condominio']) && $user['Estado_Condominio'] === 'Nuevo León')
                                        echo 'selected'; ?>>Nuevo León
                                    </option>
                                    <option value="Oaxaca" <?php if (isset($user['Estado_Condominio']) && $user['Estado_Condominio'] === 'Oaxaca')
                                        echo 'selected'; ?>>Oaxaca</option>
                                    <option value="Puebla" <?php if (isset($user['Estado_Condominio']) && $user['Estado_Condominio'] === 'Puebla')
                                        echo 'selected'; ?>>Puebla</option>
                                    <option value="Querétaro" <?php if (isset($user['Estado_Condominio']) && $user['Estado_Condominio'] === 'Querétaro')
                                        echo 'selected'; ?>>Querétaro</option>
                                    <option value="Quintana Roo" <?php if (isset($user['Estado_Condominio']) && $user['Estado_Condominio'] === 'Quintana Roo')
                                        echo 'selected'; ?>>Quintana Roo
                                    </option>
                                    <option value="San Luis Potosí" <?php if (isset($user['Estado_Condominio']) && $user['Estado_Condominio'] === 'San Luis Potosí')
                                        echo 'selected'; ?>>San Luis
                                        Potosí</option>
                                    <option value="Sinaloa" <?php if (isset($user['Estado_Condominio']) && $user['Estado_Condominio'] === 'Sinaloa')
                                        echo 'selected'; ?>>Sinaloa</option>
                                    <option value="Sonora" <?php if (isset($user['Estado_Condominio']) && $user['Estado_Condominio'] === 'Sonora')
                                        echo 'selected'; ?>>Sonora</option>
                                    <option value="Tabasco" <?php if (isset($user['Estado_Condominio']) && $user['Estado_Condominio'] === 'Tabasco')
                                        echo 'selected'; ?>>Tabasco</option>
                                    <option value="Tamaulipas" <?php if (isset($user['Estado_Condominio']) && $user['Estado_Condominio'] === 'Tamaulipas')
                                        echo 'selected'; ?>>Tamaulipas
                                    </option>
                                    <option value="Tlaxcala" <?php if (isset($user['Estado_Condominio']) && $user['Estado_Condominio'] === 'Tlaxcala')
                                        echo 'selected'; ?>>Tlaxcala</option>
                                    <option value="Veracruz" <?php if (isset($user['Estado_Condominio']) && $user['Estado_Condominio'] === 'Veracruz')
                                        echo 'selected'; ?>>Veracruz</option>
                                    <option value="Yucatán" <?php if (isset($user['Estado_Condominio']) && $user['Estado_Condominio'] === 'Yucatán')
                                        echo 'selected'; ?>>Yucatán</option>
                                    <option value="Zacatecas" <?php if (isset($user['Estado_Condominio']) && $user['Estado_Condominio'] === 'Zacatecas')
                                        echo 'selected'; ?>>Zacatecas</option>
                                </select>
                                <label For="floatingSelect">Estado</label>
                            </div>


                            <!--Fin de formulario-->

                            <div class="d-grid gap-2 mb-3">
                                <button class="btn btn-primary" type="submit">Modificar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </form>

    </div>
    </div>
    <br>
    <br>
    <br>
    <br>


</html>