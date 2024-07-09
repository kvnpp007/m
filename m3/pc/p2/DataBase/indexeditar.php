<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Editar Mysql mediante Funcion</title>
<!-- <link type="text/css" href="bootstrap.min.css" rel="stylesheet"> -->
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
.main-wrapper{
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
<h1>Printerland... Todo un mundo en impresión </h1>
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
	$conexion=conectar();
	$sql="SELECT * FROM consumible"; 
	$resultado=mysqli_query($conexion,$sql);
	while (	$mostrar = mysqli_fetch_array($resultado))   //Arma la tabla mientras existan datos en el arreglo de la consulta
				{
?>
					<tr>
					<td><?php echo $mostrar['Clave']?></td>
					<td><?php echo $mostrar['Descripcion']?></td>
					<td><?php echo $mostrar['Moneda']?></td>
					<td><?php echo $mostrar['Precio']?></td>
					<td><a class="btn btn-primary" href="editar.php?Clave=<?php echo $mostrar['Clave'];?>"><i class="fa fa-pencil fa-lg" aria-hidden="true"></i></a></td>   

        </td>
	</tr>
	<?php } ?>
</table>
</div>
</body>
</html>