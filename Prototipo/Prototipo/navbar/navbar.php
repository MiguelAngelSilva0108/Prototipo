<?php
if (!isset($_SESSION)) {
    session_start();
}


require __DIR__ . '/../database/database.php';


if (isset($_SESSION['user_id'])) {
    $records = $conn->prepare('SELECT id_users, Email, password FROM users WHERE id_users = :id_users');
    $records->bindParam(':id_users', $_SESSION['user_id']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $user = null;

    if (count($results) > 0) {
        $user = $results;
    }
}
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="/Prototipo/index.php">
            <img src="https://cdn.freebiesupply.com/logos/large/2x/s-bahn-1-logo-png-transparent.png" alt="Logo" width="50" height="50" class="d-inline-block align-text-top " style="margin-left: 5px;" />
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Inicio-->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/Prototipo/index.php">SmartCondo</a>
                </li>
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/Prototipo/index.php">Inicio</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Nuestros servicios
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="/Prototipo/paginas/planes.php">Planes</a></li>
                            <li><a class="dropdown-item" href="/Prototipo/paginas/servicios.php">Servicios Unitarios</a></li>
                        </ul>
                    </li>

                    <!-- Cambio en inicio de sesión -->

                    <?php if (!empty($user)) : ?>
                        <li class="nav-item">
                            <a class="nav-link" href="/Prototipo/index.php"> <?= $user['Email']; ?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/Prototipo/paginas/logout.php">Cerrar Sesión</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Facturación
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="./paginas/crearfactura.php">Crear Factura</a></li>
                                <li><a class="dropdown-item" href="#">Consultar Factura</a></li>
                            </ul>
                        </li>

                    <?php else : ?>
                        <li class="nav-item">
                            <a class="nav-link" href="/Prototipo/paginas/login.php">Iniciar sesión</a>
                        </li>
                    <?php endif; ?>






                </ul>
        </div>
    </div>
</nav>