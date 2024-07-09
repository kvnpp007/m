<?php
    echo"<center><h1>Ejemplos de For y Foreach</h1></center><br>";
    date_default_timezone_set("America/Chihuahua");
    $fecha=date("F j, Y, g:i a");
    echo"La fecha de hoy es $fecha","<br>";
    $semana=array("Lunes","Martes","Miércoles","Jueves","Viernes","Sábado","Domingo");
    foreach($semana as $dia){
        echo "$dia <br>";
    }
    echo "<hr>";
    for($x=6;$x>=0;$x--){
        echo "$semana[$x]","<br>";
    }