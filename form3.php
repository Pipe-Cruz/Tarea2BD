<?php include 'db_config.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $idprofesor = $_POST["idprofesor"];
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $especialidad = $_POST["especialidad"];
    $sql = 'INSERT INTO profesor (idprofesor,nombre,apellido,especialidad) VALUES ($1, $2, $3, $4)';
    if( pg_query_params($dbconn, $sql, array($idprofesor,$nombre,$apellido,$especialidad)) !== FALSE ) {
        echo "Profesor ingresado correctamente <br>";
        echo '<a href="lista3.php"> lista de datos </a> <br>';
        echo '<a href="formularioprofesor.php"> Ingresar más datos </a> <br>';
        pg_close($dbconn);
    } else {
        echo "Hubo un error al ingresar el dato";
        pg_close($dbconn);
    }
}
?>