<?php include 'db_config.php';?>
<!DOCTYPE html>
<html>
<head>
<title>Formulario Misión</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<h1 style="color:red">Formulario misión</h1>
<form action="form4.php" method="POST">
    <div class="form-group">
      <label for="idprofesor">ID Profesor:</label>
      <input type="number" class="form-control" name="idprofesor" placeholder="Ingresa la ID del profesor" id="idprofesor">
    </div>
    <div class="form-group">
      <label for="idalumno">ID Alumno:</label>
      <input type="text" class="form-control" name="idalumno" placeholder="Ingresa la ID del alumno" id="idalumno">
    </div>
    <div class="form-group">
      <label for="descripcion">Descripción de la misión:</label>
      <input type="text" class="form-control" name="descripcion" placeholder="Ingresa una descripción de la misión" id="descripcion">
    </div>
    <div class="form-group">
      <label for="recompensa">Recompensa:</label>
      <input type="text" class="form-control" name="recompensa" placeholder="Ingresa la recompensa" id="recompensa">
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

<h1 style="color:blue">Actualizar estado de la misión</h1>
<form action="form5.php" method="POST">
    <div class="form-group">
      <label for="idmision2">Cambiar estado misión:</label>
      <input type="number" class="form-control" name="idmision2" placeholder="Ingrese la ID de la misión que quiere cambiar" id="idmision2">
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

<h1 style="color:green">Actualizar recompensa</h1>
<form action="form6.php" method="POST">
    <div class="form-group">
      <label for="recompensa2">Cambiar recompensa:</label>
      <input type="text" class="form-control" name="recompensa2" placeholder="Ingrese la nueva recompensa: (Solo acepta números)" id="recompensa2">
    </div>
    <div class="form-group">
      <label for="idmision3">ID Mision:</label>
      <input type="number" class="form-control" name="idmision3" placeholder="Ingresa la ID de la misión: " id="idmision3">
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

<h1 style="color:black">Asignar misión</h1>
<form action="form7.php" method="POST">
    <div class="form-group">
      <label for="idmision4">Ingrese el ID de la misión a asignar:</label>
      <input type="number" class="form-control" name="idmision4" placeholder="Ingrese la ID de la misión que quiere asignar" id="idmision4">
    </div>
    <div class="form-group">
      <label for="rolayudante">Ingrese el rol del ayudante para asignarle la misión:</label>
      <input type="text" class="form-control" name="rolayudante" placeholder="Ingrese el rol del ayudante" id="rolayudante">
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

</body>
</html> 