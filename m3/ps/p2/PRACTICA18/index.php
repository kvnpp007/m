<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica 18</title>
</head>
<body>
    <center><h1>Pérez Pérez, Kevin Fernando. Cuarto Semestre de Programación.</h1></center>
        <form action="index.php" method="post">
            <p>Su nombre <input type="text" name="nombre"></p>
            <p>Su edad: <input type="text" name="edad"></p>
            <p><input type="submit"></p>
        </form>
        <?php
        if(isset($_POST['nombre']) && isset($_POST['edad'])){
            echo "Hola, " . htmlspecialchars($_POST['nombre']) . "<br>";
            echo "Usted tiene " . (int)$_POST['edad'] . " años."; } ?>
</body>
</html>
<!-- Pérez Pérez, Kevin Fernando. Cuarto Semestre de Programación T.M.-->