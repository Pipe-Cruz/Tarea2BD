<?php include 'db_config.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $idmision4 = $_POST["idmision4"];
    $rolayudante = $_POST["rolayudante"];
    $sql = 'INSERT INTO asignacion (idmision,rolayudante) VALUES ($1, $2)';
    $result = pg_query_params($dbconn, $sql, array($idmision4,$rolayudante));
    echo '<a href="formulariomision.php"> Asignar más misiones </a> <br>';
    echo '<a href="lista6.php"> Revisar datos actualizados </a> <br>';
    pg_close($dbconn);
}
?>