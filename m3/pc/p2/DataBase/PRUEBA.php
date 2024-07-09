<?php

$array = array('apellido', 'email', 'teléfono');

foreach ($array as  $elem) {
	echo $elem,"<br>";
}
$separado_por_comas = implode(",", $array);

echo $separado_por_comas; // apellido,email,teléfono

echo "<br>";
echo "<br>";
// Devuelve un string vacío si se usa un array vacío:
var_dump(implode('hola', array())); // string(0) ""

echo "<br>";
echo "<br>";
$semanapro = array("dia1" =>"Lunes" ,"dia2" =>"martes" );

echo "esto es una variable de arreglo con propiedades $semanapro[dia2]<br>";
echo "$semanapro[dia1]","<br>";
var_dump($semanapro);
echo"<br>";

$anio = (object)["mes1"=>"Enero", "mes2"=> "Febrero", "mes3"=>"Marzo"];

echo $anio->mes1,"<br>";

$datos=array();
foreach($anio as $column=> $value)
{

	$datos[]=$column."="."'".$value."'";
}

$cadena = implode(",", $datos);
echo "$cadena";


?>