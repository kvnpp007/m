<?php
    if($_POST){
        $nombre = $_POST['txtNombre'];
        echo "Hola, $nombre!";
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica 3</title>
</head>
<body>
    <form action="index-1.php" method="post">
        Nombre:
        <input type="text" name="txtNombre"  id="">
        <br>
        <input type="submit" value="Enviar">
        <br><br>
        <h3><strong>Pérez Pérez, Kevin Fernando.</strong></h3>
        <h4>Cuarto Semestre de Programación.</h4>
</body>
</html>
