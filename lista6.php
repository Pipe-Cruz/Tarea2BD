<?php include 'db_config.php';?>
<!DOCTYPE html>
<html>
<head>
<title>Formulario Asignación</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<?php
$sql = "SELECT * FROM asignacion";
$result = pg_query_params($dbconn, $sql, array());
if( pg_num_rows($result) > 0 ) {
    while($row = pg_fetch_assoc($result)) {
        echo '<br>' . " ID de la misión: " . $row["idmision"] . " / Rol ayudante: " . $row["rolayudante"] . '<br>';
    }
    pg_close($dbconn);
} else {
    echo "Hubo un error al solicitar los datos";
    pg_close($dbconn);
}
echo '<a href="formulariomision.php"> Ingresar más datos </a>';
?>
</body>
</html> 