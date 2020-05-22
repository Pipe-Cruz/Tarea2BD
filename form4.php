<?php include 'db_config.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $idprofesor = $_POST["idprofesor"];
    $idalumno = $_POST["idalumno"];
    $descripcion = $_POST["descripcion"];
    $recompensa = $_POST["recompensa"];
    $fecha = date("Y/m/d h:i:sa");
    $estado = 0;
    $sql = 'INSERT INTO mision (idprofesor,idalumno,descripcion,recompensa,fechaingreso,estado) VALUES ($1, $2, $3, $4, $5, $6)';
    if( pg_query_params($dbconn, $sql, array($idprofesor,$idalumno,$descripcion,$recompensa,$fecha,$estado)) !== FALSE ) {
        echo "Misión ingresada correctamente <br>";
        echo '<a href="lista4.php"> lista de datos </a> <br>';
        echo '<a href="formulariomision.php"> Ingresar más datos </a> <br>';
        pg_close($dbconn);
    } else {
        echo "Hubo un error al ingresar el dato";
        pg_close($dbconn);
    }
}
?>