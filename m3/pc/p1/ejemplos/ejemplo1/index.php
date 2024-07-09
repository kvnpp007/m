<?php

print "<center><h1>Esto es un ejemplo de variables </h1></center>";

// variables numéricas

$numero = 10;

echo "Ejemplo de variables numéricas --> " ,$numero+2, "<br>";
echo "Valor de la variable numero--> ", $numero,"<br>";
echo "tipo de dato de la variable numero --> ", var_dump($numero), "<br>";
print("------------------------------------------------------------------------<br><br>");


	


// ariables string

print( " Variables de tipo STRING <br><br>");

$cadena= "hola chicos, como estan?" ;
echo "<br>";

echo "Ejemplo de variables tipo string ---> ",$cadena, "<br>";
print("el tipo de dato de la variable cadena es --> ");
print(var_dump($cadena));
print("<br>");

print("___________________________________________________________<br><br>");

# Variables tipo Booleanas

$bandera = True;
echo "valor de la variable booleana--> ", $bandera, "<br>";
echo " Si el valor es verdadero arroja un 1 caso contrario manda un valor nulo o nada", "<br>";
print("el valor de la variable bandera de tipo booleano es --> ");
print(var_dump($bandera));
print("<br>");

print("___________________________________________________________<br><br>");



# variables tipo arreglo
print("Variables de tipo arreglo  <br><br>"); 

$semana = array("lunes","martes","miércoles","jueves","viernes","sabado","domingo" );

echo "este es el elemento número 6 -->  ",$semana[6],"<br>";

echo " aqui se despliegan todos utilizando foreach","<br>";

 // esta es una instrucción para recorrer un arreglo desde el primer elemento hasta el último de forma secuencial

foreach ($semana as  $dia) {
	echo $dia,"<br>";
}


print("________________________________________________________<br>");


# arreglos con propiedad


print("Tipo de arreglos con propiedad <br>");



$semanapro = array("dia1" =>"Lunes" ,"dia2" =>"martes","dia3"=>"miércoles","dia4"=>"jueves","dia5"=>"viernes","dia6"=>"sabado","dia7"=>"domingo" );

echo "esto es una variable de arreglo con propiedades dia 2 -->  $semanapro[dia2]<br>";
echo "Este es el dia 4 -->  $semanapro[dia4]","<br>";
echo "De despliega el tamaño del arreglo y la longitud de cada elemento -->",var_dump($semanapro);
echo"<br>";


print("________________________________________________________<br>");

# Variables de tipo objeto

print("Variables tipo objeto <br>");

$anio = (object)["mes1"=>"Enero", "mes2"=> "Febrero", "mes3"=>"Marzo"];

echo  "el primer mes o elemento del objeto anio es --> ", $anio->mes1,"<br>";
echo " Aqui se despliega el variable objeto anio <br>";
var_dump($anio);
echo "<br>";
echo "esto es una prueba de salto de linea ";
echo"nueva linea";
?>
