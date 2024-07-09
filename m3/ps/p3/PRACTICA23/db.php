<?php
function conn() {
    $user = "root";
    $server = "localhost";
    $pass = "";
    $db = "proyectoce";
    $conectar = mysqli_connect($server,$user,$pass,$db) or die ("Error de la conexión");
    mysqli_set_charset($conectar, "utf8");
    return $conectar;
}
?>
<!-- Pérez Pérez, Kevin Fernando. Cuarto Semestre de Programación T.M.-->