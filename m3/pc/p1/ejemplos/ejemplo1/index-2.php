<html>
    <head>
        <title>Bucle While</title>
    </head>
    <body>
        <h1>Bucle While</h1>
        <?php
        $num="2";
        $power="4";
        $cycles="0";
        $saved="1";
        while($cycles < $power){
            $saved*=$num;
            $cycles++;
        }
        $result=pow($num,$power);
        echo"Resultado de ciclo While: $saved<br>";
        echo"El resultado es: $result";
        ?>
    </body>
</html>
