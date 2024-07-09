<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comprobar datos</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }
        .container {
            max-width: 90%;
            margin: 2.5% auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .titles {
            max-width: 90%;
            margin: 2.5% auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #333;
        }
        .form-group {
            margin-bottom: 20px;
            display: flex;
            flex-direction: column;
        }
        input[type="text"], input[type="password"], input[type="submit"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
    </style>
</head>
<body background="imagenes/wallpaper.png">
    <div class="titles"><h1><center>Datos Recibidos: </center></h1></div>
    <div class="container">
    <p>
        Esto son los datos que nos has endiado:
    </p>
    <?php
    echo "Nombre:", " ", $_REQUEST["nombre"];
    echo " ", $_REQUEST["apellido"];
    echo "<br>";
    echo "Correo Electrónico:", "", $_REQUEST["correo"];
    echo "Contraseña:", " ", $_REQUEST["password"];
    echo "<br>";
    echo "sexo:"; echo $_REQUEST['rdb1']; echo "</br>";
    echo "Los temas de interés seleccionados son:";
    echo "<br>";
    if (isset($_REQUEST["chk1"])) {
        echo $_REQUEST['chk1']; echo"<br>";
    }
    if (isset($_REQUEST["chk2"])) {
        echo $_REQUEST['chk2']; echo"<br>";
    }
    if (isset($_REQUEST["chk3"])) {
        echo $_REQUEST['chk3']; echo"<br>";
    }
    if (isset($_REQUEST["chk4"])) {
        echo $_REQUEST['chk4']; echo"<br>";
    }
    if (isset($_REQUEST["chk5"])) {
        echo $_REQUEST['chk5']; echo"<br>";
    }
    echo "<hr>";
    echo "Tu comentario: "; echo $_REQUEST['comentario']; echo "<br>";
    ?>
    <p>
        Comprueba tus datos antes de enviarlos, si no estan bien vuelve a escribirlos.
    </p>
    <p>
        Los datos son correctos: <a href="index-2.php">Enviar</a>
    </p>
    <p>
        Los datos no son correctos: <a href="index.php">volver a escribirlos.</a>
    </p>
    </div>
</body>
</html>
