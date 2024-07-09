<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica 3</title>
</head>
<body>
<h3><strong>Pérez Pérez, Kevin Fernando.</strong></h3>
        <h4>Cuarto Semestre de Programación.</h4>
        <br><br>
    <h2>Ingrese su edad</h2>
    <form action="index-1.php" method="post">
        Edad: <input type="number" name="txtedad" min="0">
        <input type="submit" value="Verificar">
    </form>
    <br>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $miedad = $_POST['txtedad'];
    if($miedad>15){
        echo"Mi edad es mayor a 15";
    }else if($miedad==20){
        echo "Tu edad es 20";
    }else{
        echo "No puedo adivinar tu edad";
    }
}
?>