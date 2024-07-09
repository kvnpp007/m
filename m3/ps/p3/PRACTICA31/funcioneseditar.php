<?php
function conectar()
{
    $user = "root";
    $server = "localhost";
    $pass = "";
    $db = "veterinaria";
    $conexion = mysqli_connect($server,$user,$pass,$db) or die ("Error de la conexión");
    mysqli_set_charset($conexion, "utf8");
    return $conexion;
}
function consulta($query) {
    $conexion = conectar();
    $result = mysqli_query($conexion,$query);     //Función que realiza la sentencia ya sea borrado o edición
    return $result;
}
function editarf($tblname,$form_data,$field_id,$id){
	$sql = "UPDATE ".$tblname." SET ";   //Se declara una variable $sql y se concatena la cadena de inicio para el UPDATE
	$datos = array();  // se declara un arreglo llamado $data
	foreach($form_data as $column=>$value)    // ciclo para recorrer el arreglo enviado desde el formulario editar con los valores 
	//a modificados
	{
		$datos[] =$column."="."'".$value."'";   // se va creando el arreglo con el nombre del campo y el valor a actualizar
	}
	$sql .= implode(',',$datos);  // La función implode separa los datos de un arreglo $datos con comas
	$sql.=" where ".$field_id." = "."'".$id."'";  // se concatena el contenido de $sql mas la condicion y  el valor del campo llave en este caso la clave
	return  consulta($sql);   // se devuelve la sentencia $sql ya con toda la consulta sql  ejemplo UPDATE consumible SET Descripcion = 'dato modificado',Moneda='tipo moneda',Precio='precio' WHERE Clave='clave del articulo a modificar'
}
function seleccionacampo($tblname,$field_name,$field_id) //función para mostrar el registro a modificar
{   
	$sql = "Select * from ".$tblname." where ".$field_name." = ". "'".$field_id."'";  //sentencia sql a buscar el registro
	$db=consulta($sql);    // se invoca a la funcion consulta y retorna el registro encontrado
	$GLOBALS['row'] = mysqli_fetch_object($db); // arma o retorna el arreglo con la consulta resultado y lo mete en la variable $GLOBALS	  
	return $sql;
}

function borrar($tblname,$field_id,$id){ //Funcion para borrar registros
	$sql = "delete from ".$tblname." where ".$field_id."="."'".$id."'";   //Concatena la consulta con el operador . (punto)
	return consulta($sql);
}
?>