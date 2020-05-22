<?php include 'db_config.php';?>
<!DOCTYPE html>
<html>
<head>
<title>Formulario profesor</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<h1 style="color:red">Formulario profesor</h1>
<form action="form3.php" method="POST">
    <div class="form-group">
      <label for="idprofesor">ID profesor:</label>
      <input type="number" class="form-control" name="idprofesor" placeholder="Ingresa tu ID" id="idprofesor">
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
      <label for="especialidad">Especialidad:</label>
      <input type="text" class="form-control" name="especialidad" placeholder="Ingresa tu especialidad" id="especialidad">
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
</form> 

</body>
</html> 