<?php 
include("funciones.php");
$id = $_GET['Clave'];
borrar('consumible','Clave',$id);  //Manda llamar la función borrar enviando como parámtero la clave del producto
header("location:indexborrar.php");  //Refrescar la pantalla mandando llamar de nuevo a la página indexborrar.php
?>