<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica 17</title>
</head>
<body>
    <center><h1>Pérez Pérez, Kevin Fernando. Cuarto Semestre de Programación.</h1></center>
    <p>Tipos de conversión:</p>
    <p>1. Euros 2. Dólares</p>
        <form action="index.php" method="post">
            <p>Conversión: <input type="text" name="conv"></p>
            <p>Cantidad: <input type="text" name="cantidad"></p>
            <p><input type="submit"></p>
        </form>
    <?php
        if(isset($_POST['conv']) && isset($_POST['cantidad'])){}
            if($_POST){
                $conversion = $_POST['conv'];
                $divisa = $_POST['cantidad'];
                switch($conversion){
                    case 1:
                        echo "$" . $divisa. " peso(s) mexicano(s) son: ";
                        echo $divisa / 17.67;
                        number_format($divisa, 2);
                        echo " euro(s).";
                        break;
                    case 2:
                        echo "$" . $divisa. " peso(s) mexicano(s) son: ";
                        echo $divisa / 16.44;
                        number_format($divisa, 2);
                        echo " dólar(es).";
                        break;
                    default:
                        break;
                }
            }
    ?>
</body>
</html>
<!-- Pérez Pérez, Kevin Fernando. Cuarto Semestre de Programación T.M.-->