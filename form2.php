<?php include 'db_config.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $rolayudante = $_POST["rolayudante"];
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $cantsemestres = $_POST["cantsemestres"];
    $sql = 'INSERT INTO ayudante (rolayudante,nombre,apellido,cantidadsemestres) VALUES ($1, $2, $3, $4)';
    if( pg_query_params($dbconn, $sql, array($rolayudante,$nombre,$apellido,$cantsemestres)) !== FALSE ) {
        echo "Ayudante ingresado correctamente <br>";
        echo '<a href="lista2.php"> lista de datos </a> <br>';
        echo '<a href="formularioayudante.php"> Ingresar más datos </a> <br>';
        pg_close($dbconn);
    } else {
        echo "Hubo un error al ingresar el dato";
        pg_close($dbconn);
    }
}
?>