<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica 20</title>
</head>
<body>
<center><h1>Pérez Pérez, Kevin Fernando. Cuarto Semestre de Programación.</h1></center>
    <form action="index.php" method="post">
    <p>Nombre: <input type="text" name="name"></p>
    <label for="time">Selecciona una hora:</label>
    <input type="time" name="time" min="00:00" max="24:00" step="3600" value="12:00">
    <p><input type="submit" name="button"></p>
    </form>
</body>
</html>
<?php
    if(isset($_POST['name']) && isset($_POST['time'])){
        $n = $_POST['name'];
        $t = $_POST['time'];
        switch ($t) {
            case ($t>5 && $t<12):
                echo "Hola ". $n. ", buenos días";
                break;
            case ($t>11 && $t<18):
                echo "Hola ". $n. ", buenas tardes";
                break;
            case ($t>19 && $t<25):
                echo "Hola ". $n. ", buenas noches";
                break;
            case ($t>0 && $t<6):
                echo "Hola ". $n. ", buenas noches";
                break;
            default:
                echo "Esa hora es invalida.";
                break;
        }
    }
?>
<!-- Pérez Pérez, Kevin Fernando. Cuarto Semestre de Programación T.M.-->