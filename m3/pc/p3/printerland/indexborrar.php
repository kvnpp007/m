

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Eliminar Registros con Función PHPn</title>
<link type="text/css" href="bootstrap.min.css" rel="stylesheet">
<link type="text/css" href="http://fontawesome.io/assets/font-awesome/css/font-awesome.css" rel="stylesheet">
<script src="https://use.fontawesome.com/d753ff1474.js"></script> 
<style>
table {
    border-collapse: collapse;
    width: 100%;
}
th, td {
    text-align: left;
    padding: 4px;
}
tr:nth-child(even){background-color: #f2f2f2}
th {
    background-color: #4CAF50;
    color: white;
}
.main-wrapper{					/* estilo  en proporción y color de fondo */
	width:100%;
	
	background:#E0E4E5;
	border:1px solid #292929;
	padding:25px;
}
hr {
    margin-top: 5px;
    margin-bottom: 5px;
    border: 0;
    border-top: 1px solid #eee;
}
</style>
</head>

<body>
<div class="main-wrapper">
<h1><center>Printerland... Todo un mundo de color en impresión </center></h1>
<br><br>

<?php
	include("funciones.php");

	
?>
<table border="1" width="80%">
	<tr>
		<th width="10%">Clave</th>
		<th width="50%">Descripción</th>
		<th width="5%">Moneda</th>
		<th width="10%">Precio</th>
		<th width="5%">Opción</th>
	</tr>
<?php 
		$conexion= conectar();
		$sql="SELECT * FROM consumible";   //Consulta para mostrar todos los regstros
		$resultado=mysqli_query($conexion,$sql);     

				while (	$mostrar = mysqli_fetch_array($resultado))   //Arma la tabla mientras existan datos en el arreglo de la consulta
				{
?>
					<tr>
					<td><?php echo $mostrar['Clave']?></td>
					<td><?php echo $mostrar['Descripcion']?></td>
					<td><?php echo $mostrar['Moneda']?></td>
					<td><?php echo $mostrar['Precio']?></td>
					<td><a class="btn btn-primary" href="borrar.php?Clave=<?php echo $mostrar['Clave'];?>"><i class="fa fa-trash-o fa-lg" aria-hidden="true"></i></a></td>   
					<!-- Manda llamar al archivo borrar.php mediante el icono de reciclaje que funciona como un boton de la clase boton primaro-->
			</tr>
<?php 	} 

?>
</table>	
</div>
				<a href="index.html">Regresar</a>
</body>
</html>