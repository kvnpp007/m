<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica 19</title>
</head>
<body>
    <center><h1>Pérez Pérez, Kevin Fernando. Cuarto Semestre de Programación.</h1></center>
    <p>Conversión a partir de Kilogramo(s)</p>
    <p>Unidades de Masa (peso):</p>
        <form action="index.php" method="post">
            <p><select name="conv" id="">
                <option value="1">Onza</option>
                <option value="2">Libra</option>
                <option value="3">Tonelada</option>
                <option value="4">Gramo</option>
                <option value="5">Miligramo</option>
                <option value="6">Microgramo</option>
                <option value="7">Nanogramo</option>
            </select></p>
            <p>Cantidad (kg): <input type="text" name="cantidad"></p>
            <p><input type="submit"></p>
        </form>
    <?php
        if(isset($_POST['conv']) && isset($_POST['cantidad'])){}
            if($_POST){
                $conversion = $_POST['conv'];
                $cant = $_POST['cantidad'];
                switch($conversion){
                    case 1:
                        echo $cant . " kilogramo(s) son: ";
                        echo $cant / 35.274;
                        number_format($cant, 2);
                        echo " Onza(s).";
                        break;
                    case 2:
                        echo $cant . " kilogramo(s) son: ";
                        echo $cant / 2.20462;
                        number_format($cant, 2);
                        echo " Libra(s).";
                        break;
                    case 3:
                        echo $cant . " kilogramo(s) son: ";
                        echo $cant / 1000;
                        number_format($cant, 2);
                        echo " Tonelada(s).";
                        break;
                    case 4:
                        echo $cant . " kilogramo(s) son: ";
                        echo $cant / 0.001;
                        number_format($cant, 2);
                        echo " Gramo(s).";
                        break;
                    case 5:
                        echo $cant . " kilogramo(s) son: ";
                        echo $cant / 1000000;
                        number_format($cant, 2);
                        echo " Miligramo(s).";
                        break;
                    case 6:
                        echo $cant . " kilogramo(s) son: ";
                        echo $cant / 1000000000;
                        number_format($cant, 2);
                        echo " Microgramo(s).";
                        break;
                    case 7:
                        echo $cant . " kilogramo(s) son: ";
                        echo $cant / 1000000000000;
                        number_format($cant, 2);
                        echo " Microgramo(s).";
                        break;
                    default:
                        break;
                }
            }
    ?>
</body>
</html>
<!-- Pérez Pérez, Kevin Fernando. Cuarto Semestre de Programación T.M.-->