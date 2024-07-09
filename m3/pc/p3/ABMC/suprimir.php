<?php 
include("funciones.php");
$id = $_GET['Clave'];
borrar('consumible','Clave',$id);
header("location:index.php");
?>
<!-- Pérez Pérez, Kevin Fernando. Cuarto Semestre de Programación T.M.-->