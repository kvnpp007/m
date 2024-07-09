<?php
    $num=rand(1,10);
    $cycles="0";
    $saved="1";
    while($cycles <= 20){
        $saved=$num*$cycles;
        echo"$num x $cycles = $saved<br>";
        $cycles++;
    }