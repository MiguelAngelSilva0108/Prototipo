<?php
if(!isset($_SESSION)) {
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
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="/LoginFactura/index.php">
            <img src="https://upload.wikimedia.org/wikipedia/commons/9/95/Logotipo_izzi_negativo.png" alt="Logo"
                width="120" height="50" class="d-inline-block align-text-top" />
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/LoginFactura/index.php">Inicio</a>
                </li>

                <!-- Cambio en inicio de sesión --> 

                <?php if (!empty($user)): ?>
                    <li class="nav-item">
                    <a class="nav-link" href="/LoginFactura/index.php"> <?= $user['Email']; ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/LoginFactura/paginas/logout.php">Cerrar Sesión</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Facturación
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="./paginas/crearfactura.php">Crear Factura</a></li>
                        <li><a class="dropdown-item" href="#">Consultar Factura</a></li>
                    </ul>
                </li>

                <?php else: ?>
                    <li class="nav-item">
                    <a class="nav-link" href="/LoginFactura/paginas/login.php">Iniciar sesión</a>
                </li>
                <?php endif; ?>




                
                
            </ul>
        </div>
    </div>
</nav>