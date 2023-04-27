<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Crear Factura</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap">

</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
<link rel="stylesheet" href="../css/crearfactura.css">
<link rel="stylesheet" href="../css/navbar.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

<body>
  <?PHP require('../navbar/navbar.php'); ?>
  <a href="/LoginFactura/index.php">
    <img src="https://upload.wikimedia.org/wikipedia/commons/9/95/Logotipo_izzi_negativo.png" width="120" height="50"
      class="rounded mx-auto d-block" alt="...">
  </a>
  <div class="row">
    <div class="col-sm-6 col-lg-3 offset-15 mt-5 mx-auto">
      <div class="card pt-5" style="font-family: 'Poppins', sans-serif;">
        <div class="card-header">
          <h2 class="form-title" style="font-family: 'Poppins', sans-serif;">Generar Factura</h2>
        </div>
        <div class="card-body">
          <form action="../administrador/factura/factura.php" method="POST" class="form-register">
            <div class="form-group">
              <label for="mes_facturacion">Mes de facturación</label>
              <select name="mes_facturacion" id="mes_facturacion" class="form-control">
                <option value="">Seleccione un mes</option>
                <option value="Enero">Enero</option>
                <option value="Febrero">Febrero</option>
                <option value="Marzo">Marzo</option>
                <option value="Abril">Abril</option>
                <option value="Mayo">Mayo</option>
                <option value="Junio">Junio</option>
                <option value="Julio">Julio</option>
                <option value="Agosto">Agosto</option>
                <option value="Septiembre">Septiembre</option>
                <option value="Octubre">Octubre</option>
                <option value="Noviembre">Noviembre</option>
                <option value="Diciembre">Diciembre</option>
              </select>
            </div>
            <div class="form-group">
              <label for="anio_facturacion">Año de facturación</label>
              <select name="anio_facturacion" id="anio_facturacion" class="form-control">
                <option value="">Seleccione un año</option>
                <?php for ($i = 2016; $i <= 2022; $i++) { ?>
                  <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                <?php } ?>
              </select>
            </div>
            <button type="submit" class="btn btn-primary rounded style=" font-family: 'Poppins' , sans-serif;"">Generar
              factura</button>
          </form>
        </div>
      </div>
    </div>
  </div>




</body>

</html>