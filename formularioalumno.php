<?php include 'db_config.php';?>
<!DOCTYPE html>
<html>
<head>
<title>Formulario alumno</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<h1 style="color:red">Formulario alumno</h1>
<form action="form.php" method="POST">
    <div class="form-group">
      <label for="rol">Rol:</label>
      <input type="text" class="form-control" name="rol" placeholder="Ingresa tu rol" id="rol">
    </div>
    <div class="form-group">
      <label for="nombre">Nombre:</label>
      <input type="text" class="form-control" name="nombre" placeholder="Ingresa tu nombre" id="nombre">
    </div>
    <div class="form-group">
      <label for="apellido">Apellido:</label>
      <input type="text" class="form-control" name="apellido" placeholder="Ingresa tu apellido" id="apellido">
    </div>
    <div class="form-group">
      <label for="anio_ingreso">Año de ingreso:</label>
      <input type="number" class="form-control" name="anio_ingreso" placeholder="Ingresa el año en que ingresaste" id="anio_ingreso">
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
</form> 

</body>
</html> 