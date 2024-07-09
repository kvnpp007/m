<?php
    $especialidades = array("Alimentos","Construcción","Electrónica","Programación");
    echo "Especialidades: [ ", print_r($especialidades), " ]";
    echo "<br><br>";
    echo "Número de especialidades: ", count($especialidades), ".";
    echo "<br><br>";
    echo "Listado de especialidades:<br>";
    foreach($especialidades as $especialidad){
        echo "<br>", $especialidad.".<br>";
    }
    echo "<br><br>Pérez Pérez, Kevin Fernando. Cuarto Semestre de Programación.";