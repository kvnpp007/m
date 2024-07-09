a<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link  rel="stylesheet" href="styles.css"/>
    <title>Comprobar datos</title>
</head>
<body background="imgs/impression-header.png">
    <div class="containers">
        <div class="titles">
        <center>
            <h1>Construcción</h1>
        </center>
        </div>
        <p>
            <center>
                <img class="imgs" src="imgs/Construccion.png" alt="">
            </center>
            <div class="descripcion">
                <h1>Aquí encontrarás...</h1>
                <p class="justificado">"Si está buscando..."</p>
            </div>
        </p>7
    </div>
    <div class="containers">
    <div class="titles"><h1><center>Datos Recibidos: </center></h1></div>
    <div class="containers">
    <p>
        Esto son los datos que nos has enviado:
    </p>
    <?php
    echo "Nombre Completo:", " ", $_REQUEST["nombre"];
    echo " ", $_REQUEST["apellido"];
    echo "<br>";
    echo "Dirección:", "", $_REQUEST["direccion"];
    echo "<br>";
    echo "Número Teléfonico:", "", $_REQUEST["telefono"];
    echo "<br>";
    echo "Correo Electrónico:", "", $_REQUEST["correo"];
    echo "<br>";
    echo "sexo:"; echo $_REQUEST['rdb1']; echo "</br>";
    echo "Especialidad:";
    echo "<br>";
    if (isset($_REQUEST["rdb2"])) {
        echo $_REQUEST['rdb2']; echo"<br>";
    }
    echo "<hr>";
    echo "Tu comentario: "; echo $_REQUEST['Antecedentes']; echo "<br>";
    ?>
    <p>
        Comprueba tus datos antes de enviarlos, si no estan bien vuelve a escribirlos.
    </p>
    <p>
        Los datos son correctos: <a href="index-1.php">Enviar</a>
    </p>
    <p>
        Los datos no son correctos: <a href="index.php">volver a escribirlos.</a>
    </p>
    </div>
    </div>
</body>
</html>
