<?php include 'db_config.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $idmision3 = $_POST["idmision3"];
    $recompensa2 = $_POST["recompensa2"];
    //echo '<br>' . "$recompensa2" . '<br>'; //Verificamos y recibe bien el parámetro.
    $sql = "SELECT * FROM mision WHERE idmision = $idmision3";
    $result = pg_query_params($dbconn, $sql, array());
    $row = pg_fetch_assoc($result);
    if ($row["idmision"] == $idmision3 ){
        $sql = "UPDATE mision SET recompensa = $recompensa2 WHERE idmision = $idmision3";
        $result = pg_query_params($dbconn, $sql, array());
        echo '<a href="formulariomision.php"> Modificar más estados </a> <br>';
        echo '<a href="lista5.php"> Revisar datos actualizados </a> <br>';
    }
    else {
        echo 'La misión no existe <br>';
        echo '<a href="formulariomision.php"> Modificar más estados </a> <br>';
            
    }
    pg_close($dbconn);

}
?>