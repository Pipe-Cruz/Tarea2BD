<?php include 'db_config.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $rol = $_POST["rol"];
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $anio_ingreso = $_POST["anio_ingreso"];
    $sql = 'INSERT INTO alumno (rolalumno,nombre,apellido,annoingreso) VALUES ($1, $2, $3, $4)';
    if( pg_query_params($dbconn, $sql, array($rol,$nombre,$apellido,$anio_ingreso)) !== FALSE ) {
        echo "Alumno ingresado correctamente <br>";
        echo '<a href="lista.php"> lista de datos </a> <br>';
        echo '<a href="formularioalumno.php"> Ingresar más datos </a> <br>';
        pg_close($dbconn);
    } else {
        echo "Hubo un error al ingresar el dato";
        pg_close($dbconn);
    }
}
?>