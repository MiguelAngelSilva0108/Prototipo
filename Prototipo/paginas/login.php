<?php
session_start();

if (isset($_SESSION['user_id'])) {
    header('Location: /Prototipo/index.php');
    exit;
}

require('../database/database.php');

$message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!empty($_POST['Email']) && !empty($_POST['password'])) {
        $records = $conn->prepare('SELECT id_users, Email, password FROM users WHERE Email = :Email');
        $records->bindParam(':Email', $_POST['Email']);
        $records->execute();
        $results = $records->fetch(PDO::FETCH_ASSOC);

        if (is_array($results) && count($results) > 0 && password_verify($_POST['password'], $results['password'])) {
            $_SESSION['user_id'] = $results['id_users'];
            header('Location: /Prototipo/index.php');
            exit;
        } elseif (is_array($results) && count($results) > 0) {
            $message = '<span style="color: red; font-weight: bold; font-family: Poppins; display: block; margin-top: 30px; text-align: center;">Correo o contraseña incorrecto</span>';
        } else {
            $message = '<span style="color: red; font-weight: bold; font-family: Poppins; display: block; margin-top: 30px; text-align: center;">Correo no encontrado, regístrese</span>';
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión</title>
    <link rel="icon" href="https://cdn.freebiesupply.com/logos/large/2x/s-bahn-1-logo-png-transparent.png" type="image/png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap">
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
<link rel="stylesheet" href="../css/login.css">
<link rel="stylesheet" href="../css/navbar.css">
<link rel="stylesheet" href="../css/footer.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

<body>
    <?php require('../navbar/navbar.php'); ?>

    <br>
    <br>
    <div class='imagen'>
        <img src="/Prototipo/imagenes/CondominoLogin.png" class="img-fluid" alt="Logo" width="320" height="206.5"></img>
    </div>
    <div class='texto'>
        CondoSmart, el futuro de los condominios
    </div>
    <form action="login.php" method="post">
        <div class="row">
            <div class="col-sm-4 offset-3 mt-5 mx-auto">
                <div class="card pt=5">
                    <div class="card-header">
                        Inicia sesión y continua esta gran experiencia
                    </div>
                    <div class="card-body">
                        <!-- Botón de usuario -->
                        <div class="input-group flex-nowrap">
                            <span class="input-group-text" id="addon-wrapping">📧</span>
                            <input type="email" class="form-control" name='Email' placeholder="Correo electrónico"
                                aria-label="Username" aria-describedby="addon-wrapping" oninput="clearErrorMessage()" />
                        </div>
                        <!-- Botón de contraseña -->
                        <div class="input-group flex-nowrap">
                            <span class="input-group-text" id="addon-wrapping2">🔑</span>
                            <input type="password" name='password' class="form-control" placeholder="Contraseña"
                                aria-label="password" aria-describedby="addon-wrapping" oninput="clearErrorMessage()" />
                        </div>
                        <?php if (!empty($message) && $_SERVER['REQUEST_METHOD'] === 'POST'): ?>
                            <span id="error-message" style="color: red; font-weight: bold; font-family: Poppins; display: block; margin-top: 30px; text-align: center;">
                                <?php echo $message; ?>
                            </span>
                            <br>
                        <?php endif; ?>
                        <div class="d-grid gap-2 mb-3">
                            <button class="btn btn-primary" type="submit">Iniciar sesión</button>
                        </div>

                        <div class="card-footer">
                            <span class="cuenta">¿No tienes cuenta? </span><br><a href="./registro.php"> Regístrate</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <br>
    <br>
    <br>
    <br>

    <?php require('../footer/footer.php'); ?>

    <script>
        function clearErrorMessage() {
            var errorMessage = document.getElementById("error-message");
            if (errorMessage) {
                errorMessage.style.display = "none";
            }
        }
    </script>
</body>

</html>
