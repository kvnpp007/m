<?php 
include("funciones.php");
$id = $_GET['id'];
borrar('mascotas','id',$id);
header("location:index.php");
?>
<!-- Pérez Pérez, Kevin Fernando. Cuarto Semestre de Programación T.M.-->