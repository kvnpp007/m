<?php
    $num=rand(1,100);
    if ($num>= 50) {
        if ($num= 50) {
            echo"El valor aleatorio entre 1 y 100 fue $num y es igual a 50<br>";
            echo"<hr>";
        } else {
            echo "El valor aleatorio entre 1 y 100 fue $num y es mayor a 50<br>";
        }
    } else {
        echo "El valor aleatorio fue $num y es menor a 50<br>";
    }