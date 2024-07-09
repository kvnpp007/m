<?php 
include("funciones.php");
$id = $_GET['id'];
borrar('pacientes','id',$id);
header("location:index.php");
?>
<!-- Pérez Pérez, Kevin Fernando-->
<!-- Camacho Orantes, Ángel Isaac-->
<!-- Pérez Pérez, Kevin Fernando. Cuarto Semestre de Programación T.M.-->