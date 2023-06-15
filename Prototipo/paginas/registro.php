<?php

require '../database/database.php';

$message = '';


//Recibiendo numInt
if (!empty($_POST['Nombres']) && !empty($_POST['AP']) && !empty($_POST['AM']) && !empty($_POST['Celular']) && !empty($_POST['Email']) && !empty($_POST['password']) && !empty($_POST['Servicio']) && !empty($_POST['Calle']) && !empty($_POST['Colonia']) && !empty($_POST['NumExt']) && !empty($_POST['Municipio']) && !empty($_POST['CP']) && !empty($_POST['Estado']) && !empty($_POST['RFC']) && !empty($_POST['Nombre_Condominio']) && !empty($_POST['Calle_Condominio']) && !empty($_POST['Colonia_Condominio']) && !empty($_POST['NumExt_Condominio']) && !empty($_POST['Municipio_Condominio']) && !empty($_POST['CP_Condominio']) && !empty($_POST['Estado_Condominio'])) {
    $sql = "INSERT INTO users (Nombres, AP, AM, Celular, Email, password, Servicio, Calle, Colonia, NumExt, NumInt, Municipio, CP, Estado, RFC, Nombre_Condominio, Calle_Condominio, Colonia_Condominio, NumExt_Condominio, Municipio_Condominio, CP_Condominio, Estado_Condominio) VALUES (:Nombres, :AP, :AM, :Celular, :Email, :password, :Servicio, :Calle, :Colonia, :NumExt, :NumInt, :Municipio, :CP, :Estado, :Nombre_Condominio, :RFC, :Calle_Condominio, :Colonia_Condominio, :NumExt_Condominio, :Municipio_Condominio, :CP_Condominio, :Estado_Condominio)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':Nombres', $_POST['Nombres']);
    $stmt->bindParam(':AP', $_POST['AP']);
    $stmt->bindParam(':AM', $_POST['AM']);
    $stmt->bindParam(':Celular', $_POST['Celular']);
    $stmt->bindParam(':Email', $_POST['Email']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $stmt->bindParam(':password', $password);
    $stmt->bindParam(':Servicio', $_POST['Servicio']);
    $stmt->bindParam(':Calle', $_POST['Calle']);
    $stmt->bindParam(':Colonia', $_POST['Colonia']);
    $stmt->bindParam(':NumExt', $_POST['NumExt']);
    if (!empty($_POST['NumInt'])) {
        $stmt->bindParam(':NumInt', $_POST['NumInt']);
    } else {
        $stmt->bindValue(':NumInt', null, PDO::PARAM_NULL);
    }
    $stmt->bindParam(':Municipio', $_POST['Municipio']);
    $stmt->bindParam(':CP', $_POST['CP']);
    $stmt->bindParam(':Estado', $_POST['Estado']);
    //Datos de condominio
    $stmt->bindParam(':Nombre_Condominio', $_POST['Nombre_Condominio']);
    $stmt->bindParam(':RFC', $_POST['RFC']);
    $stmt->bindParam(':Calle_Condominio', $_POST['Calle_Condominio']);
    $stmt->bindParam(':Colonia_Condominio', $_POST['Colonia_Condominio']);
    $stmt->bindParam(':NumExt_Condominio', $_POST['NumExt_Condominio']);
    $stmt->bindParam(':Municipio_Condominio', $_POST['Municipio_Condominio']);
    $stmt->bindParam(':CP_Condominio', $_POST['CP_Condominio']);
    $stmt->bindParam(':Estado_Condominio', $_POST['Estado_Condominio']);

    if ($stmt->execute()) {
        $message = 'Usuario creado, inicie sesión';
    } else {
        $message = 'Ya hay un usuario registrado con estos mismo datos. Inicie Sesión';
    }


}




?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="icon" href="https://cdn.freebiesupply.com/logos/large/2x/s-bahn-1-logo-png-transparent.png"
        type="image/png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap">
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
<link rel="stylesheet" href="../css/registro.css">
<link rel="stylesheet" href="../css/navbar.css">
<link rel="stylesheet" href="../css/footer.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

<body>
    <?PHP require('../navbar/navbar.php'); ?>
    <div>
        <br>
        <br>
        <br>
        <a href="/Prototipo/index.php">

            <img src="https://cdn.freebiesupply.com/logos/large/2x/s-bahn-1-logo-png-transparent.png" alt="Logo"
                width="50" height="50" class="rounded mx-auto d-block" />
        </a>

        <?php if (!empty($message)): ?>
            <p>
                <?= $message ?>
            </p>
        <?php endif; ?>

        <p class="text-center" style="font-family: Poppins; font-size: 24px;">CondoSmart 24/7 para ti</p>


        <div class='registro'>
            <form action="registro.php" method="POST">
                <div class="row">
                    <div class="col-sm-6 col-lg-3 offset-15 mt-5 mx-auto">
                        <div class="card pt=5">
                            <div class="card-header">
                                ¡Sólo te tomará un par de minutos!
                            </div>
                            <div class="card-body">
                                <div class="card-header">
                                    Datos del Administrador
                                </div>
                                <!--Nombres-->
                                <div class="form-floating mb-3">
                                    <input type="text" name='Nombres' class="form-control" id="floatingInput"
                                        placeholder="name@example.com" required />
                                    <label htmlFor="floatingInput">Nombres</label>
                                </div>
                                <!--Apellido Paterno-->
                                <div class="form-floating mb-3">
                                    <input type="text" name='AP' class="form-control" id="floatingInput"
                                        placeholder="name@example.com" required />
                                    <label htmlFor="floatingInput">Apellido Paterno</label>
                                </div>
                                <!--AP-->
                                <div class="form-floating mb-3">
                                    <input type="text" name='AM' class="form-control" id="floatingInput"
                                        placeholder="name@example.com" />
                                    <label htmlFor="floatingInput">Apellido Materno</label>
                                </div>
                                <!--Celular-->
                                <div>
                                    <div class="form-floating mb-3">
                                        <input type="text" name="Celular" class="form-control" id="floatingInput"
                                            placeholder="name@example.com" />
                                        <label htmlFor="floatingInput">Teléfono Celular</label>
                                    </div>
                                </div>

                                <!--Email-->
                                <div class="form-floating mb-3">
                                    <input type="email" name='Email' class="form-control" id="floatingInputValue"
                                        placeholder="name@example.com" />
                                    <label htmlFor="floatingInputValue">Correo electrónico</label>
                                </div>


                                <!--Botón de contraseña-->
                                <div class="form-floating mb-3">
                                    <input type="password" name='password' class="form-control" id="floatingPassword"
                                        placeholder="Password" />
                                    <label htmlFor="floatingPassword">Contraseña</label>
                                </div>

                                <!--Botón de confirmar contraseña-->
                                <div class="form-floating mb-3">
                                    <input type="password" name='confirmpassword' class="form-control"
                                        id="floatingPassword" placeholder="Password" />
                                    <label htmlFor="floatingPassword">Confirma contraseña</label>
                                </div>


                                <!--Servicio deseado-->
                                <div class="form-floating mb-3">
                                    <select class="form-select" name='Servicio' id="floatingSelect"
                                        aria-label="Floating label select example"
                                        defaultValue="Seleccione un Servicio">
                                        <option value="">Seleccione el tamaño de condominio</option>
                                        <option value="Internet + Telefonía 30 MB">De 15 a 30 departamentos</option>
                                        <option value="Internet + Telefonía 50 MB">De 30 a 50 departamentos</option>
                                        <option value="Internet + Telefonía 100MB">50 o más departamentos</option>
                                    </select>
                                    <label htmlFor="floatingSelect">Servicio contratado o deseado</label>
                                </div>


                                <!--Dirección-->
                                <!--Calle y Colonia-->
                                <div class="row g-2">
                                    <div class="col-md">
                                        <div class="form-floating mb-3">
                                            <input type="text" name='Calle' class="form-control" id="floatingInputGrid"
                                                placeholder="name@example.com" />
                                            <label htmlFor="floatingInputGrid">Calle</label>
                                        </div>
                                    </div>
                                    <div class="col-md">
                                        <div class="form-floating mb-3">
                                            <input type="text" name='Colonia' class="form-control"
                                                id="floatingInputGrid" placeholder="name@example.com" />
                                            <label htmlFor="floatingInputGrid">Colonia</label>
                                        </div>
                                    </div>
                                </div>

                                <!--Número ext e int-->
                                <div class="row g-2">
                                    <div class="col-md">
                                        <div class="form-floating mb-3">
                                            <input type="text" name='NumExt' class="form-control" id="floatingInputGrid"
                                                placeholder="name@example.com" />
                                            <label htmlFor="floatingInputGrid">Num ext</label>
                                        </div>
                                    </div>
                                    <div class="col-md">
                                        <div class="form-floating mb-3">
                                            <input type="text" name='NumInt' class="form-control" id="floatingInputGrid"
                                                placeholder="name@example.com" />
                                            <label htmlFor="floatingInputGrid">Num int</label>
                                        </div>
                                    </div>
                                </div>

                                <!--Municipio y CP-->
                                <div class="row g-2">
                                    <div class="col-md">
                                        <div class="form-floating mb-3">
                                            <input type="text" name='Municipio' class="form-control"
                                                id="floatingInputGrid" placeholder="name@example.com" />
                                            <label htmlFor="floatingInputGrid">Alcaldia o Municipio</label>
                                        </div>
                                    </div>
                                    <div class="col-md">
                                        <div class="form-floating mb-3">
                                            <input type="text" name='CP' class="form-control" id="floatingInputGrid"
                                                placeholder="name@example.com" />
                                            <label htmlFor="floatingInputGrid">C.P.</label>
                                        </div>
                                    </div>
                                </div>

                                <!--Estado*-->
                                <div class="form-floating mb-3">
                                    <select class="form-select" name='Estado' id="floatingSelect"
                                        aria-label="Floating label select example" defaultValue="">

                                        <option value="">Seleccione un Estado</option>
                                        <option value="Aguascalientes">Aguascalientes</option>
                                        <option value="Baja California">Baja California</option>
                                        <option value="Baja California Sur">Baja California Sur</option>
                                        <option value="Campeche">Campeche</option>
                                        <option value="Chiapas">Chiapas</option>
                                        <option value="Chihuahua">Chihuahua</option>
                                        <option value="Ciudad de México">Ciudad de México</option>
                                        <option value="Coahuila">Coahuila</option>
                                        <option value="Colima">Colima</option>
                                        <option value="Durango">Durango</option>
                                        <option value="Guanajuato">Guanajuato</option>
                                        <option value="Guerrero">Guerrero</option>
                                        <option value="Hidalgo">Hidalgo</option>
                                        <option value="Jalisco">Jalisco</option>
                                        <option value="México">México</option>
                                        <option value="Michoacán">Michoacán</option>
                                        <option value="Morelos">Morelos</option>
                                        <option value="Nayarit">Nayarit</option>
                                        <option value="Nuevo León">Nuevo León</option>
                                        <option value="Oaxaca">Oaxaca</option>
                                        <option value="Puebla">Puebla</option>
                                        <option value="Querétaro">Querétaro</option>
                                        <option value="Quintana Roo">Quintana Roo</option>
                                        <option value="San Luis Potosí">San Luis Potosí</option>
                                        <option value="Sinaloa">Sinaloa</option>
                                        <option value="Sonora">Sonora</option>
                                        <option value="Tabasco">Tabasco</option>
                                        <option value="Tamaulipas">Tamaulipas</option>
                                        <option value="Tlaxcala">Tlaxcala</option>
                                        <option value="Veracruz">Veracruz</option>
                                        <option value="Yucatán">Yucatán</option>
                                        <option value="Zacatecas">Zacatecas</option>
                                    </select>
                                    <label For="floatingSelect">Estado</label>
                                </div>

                                <!--RFC-->
                                <div class="form-floating mb-3">
                                    <input type="text" name='RFC' class="form-control" id="floatingInput"
                                        placeholder="name@example.com" required />
                                    <label htmlFor="floatingInput">RFC</label>
                                </div>
                                <div class="card-header">
                                    Datos del condominio
                                </div>


                                <!--Dirección CONDOMINIO-->

                                <!--Nombres-->
                                <div class="form-floating mb-3">
                                    <input type="text" name='Nombre_Condominio' class="form-control" id="floatingInput"
                                        placeholder="name@example.com" required />
                                    <label htmlFor="floatingInput">Nombre del condominio</label>
                                </div>

                                <!--Calle y Colonia-->
                                <div class="row g-2">
                                    <div class="col-md">
                                        <div class="form-floating mb-3">
                                            <input type="text" name='Calle_Condominio' class="form-control"
                                                id="floatingInputGrid" placeholder="name@example.com" />
                                            <label htmlFor="floatingInputGrid">Calle</label>
                                        </div>
                                    </div>
                                    <div class="col-md">
                                        <div class="form-floating mb-3">
                                            <input type="text" name='NumExt_Condominio' class="form-control"
                                                id="floatingInputGrid" placeholder="name@example.com" />
                                            <label htmlFor="floatingInputGrid">Num ext</label>

                                        </div>
                                    </div>
                                </div>

                                <!--Número ext e int-->
                                <div class="form-floating mb-3">
                                    <input type="text" name='Colonia_Condominio' class="form-control" id="floatingInputGrid"
                                        placeholder="name@example.com" />
                                    <label htmlFor="floatingInputGrid">Colonia</label>
                                </div>


                                <!--Municipio y CP-->
                                <div class="row g-2">
                                    <div class="col-md">
                                        <div class="form-floating mb-3">
                                            <input type="text" name='Municipio_Condominio' class="form-control"
                                                id="floatingInputGrid" placeholder="name@example.com" />
                                            <label htmlFor="floatingInputGrid">Alcaldia o Municipio</label>
                                        </div>
                                    </div>
                                    <div class="col-md">
                                        <div class="form-floating mb-3">
                                            <input type="text" name='CP_Condominio' class="form-control"
                                                id="floatingInputGrid" placeholder="name@example.com" />
                                            <label htmlFor="floatingInputGrid">C.P.</label>
                                        </div>
                                    </div>
                                </div>

                                <!--Estado*-->
                                <div class="form-floating mb-3">
                                    <select class="form-select" name='Estado_Condominio' id="floatingSelect"
                                        aria-label="Floating label select example" defaultValue="">

                                        <option value="">Seleccione un Estado</option>
                                        <option value="Aguascalientes">Aguascalientes</option>
                                        <option value="Baja California">Baja California</option>
                                        <option value="Baja California Sur">Baja California Sur</option>
                                        <option value="Campeche">Campeche</option>
                                        <option value="Chiapas">Chiapas</option>
                                        <option value="Chihuahua">Chihuahua</option>
                                        <option value="Ciudad de México">Ciudad de México</option>
                                        <option value="Coahuila">Coahuila</option>
                                        <option value="Colima">Colima</option>
                                        <option value="Durango">Durango</option>
                                        <option value="Guanajuato">Guanajuato</option>
                                        <option value="Guerrero">Guerrero</option>
                                        <option value="Hidalgo">Hidalgo</option>
                                        <option value="Jalisco">Jalisco</option>
                                        <option value="México">México</option>
                                        <option value="Michoacán">Michoacán</option>
                                        <option value="Morelos">Morelos</option>
                                        <option value="Nayarit">Nayarit</option>
                                        <option value="Nuevo León">Nuevo León</option>
                                        <option value="Oaxaca">Oaxaca</option>
                                        <option value="Puebla">Puebla</option>
                                        <option value="Querétaro">Querétaro</option>
                                        <option value="Quintana Roo">Quintana Roo</option>
                                        <option value="San Luis Potosí">San Luis Potosí</option>
                                        <option value="Sinaloa">Sinaloa</option>
                                        <option value="Sonora">Sonora</option>
                                        <option value="Tabasco">Tabasco</option>
                                        <option value="Tamaulipas">Tamaulipas</option>
                                        <option value="Tlaxcala">Tlaxcala</option>
                                        <option value="Veracruz">Veracruz</option>
                                        <option value="Yucatán">Yucatán</option>
                                        <option value="Zacatecas">Zacatecas</option>
                                    </select>
                                    <label For="floatingSelect">Estado</label>
                                </div>


                                <!--Fin de formulario-->

                                <div class="d-grid gap-2 mb-3">
                                    <button class="btn btn-primary" type="submit">Iniciar sesión</button>
                                </div>

                                <div class="card-footer">
                                    <span>¿Ya tienes una cuenta?</span> <a
                                        href="http://localhost/Prototipo/paginas/login.php">Inicie Sesión</a>
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
</body>
<?PHP require('../footer/footer.php');
    ?>
</html>