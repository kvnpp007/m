<?php
function conectar() {
    $user = "root";
    $server = "localhost";
    $pass = "";
    $db = "hospitaldb";
    $conexion = mysqli_connect($server,$user,$pass,$db) or die ("Error de la conexión");
    mysqli_set_charset($conexion, "utf8");
    return $conexion;
}
?>