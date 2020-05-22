<?php include 'db_config.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $idmision2 = $_POST["idmision2"];
    $sql = "SELECT * FROM mision WHERE idmision = $idmision2";
    $result = pg_query_params($dbconn, $sql, array());
    $row = pg_fetch_assoc($result);
    if ($row["estado"] == 0 ){
        $sql = "UPDATE mision SET estado = 1 WHERE idmision = $idmision2";
        $result = pg_query_params($dbconn, $sql, array());
        echo '<a href="formulariomision.php"> Modificar más estados </a> <br>';
        echo '<a href="lista5.php"> Revisar datos actualizados </a> <br>';
    }
    else {
        $sql = "UPDATE mision SET estado = 0 WHERE idmision = $idmision2";
        $result = pg_query_params($dbconn, $sql, array());
        echo '<a href="formulariomision.php"> Modificar más estados </a> <br>';
        echo '<a href="lista5.php"> Revisar datos actualizados </a> <br>';    
    }
    pg_close($dbconn);

}
?>