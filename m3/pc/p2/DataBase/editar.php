<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Editar Registros</title>
<link type="text/css" href="bootstrap.min.css" rel="stylesheet">
<link type="text/css" href="http://fontawesome.io/assets/font-awesome/css/font-awesome.css" rel="stylesheet">
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
<h1>Printerland... Todo un mundo en impresión</h1>
<br><br>
<?php 
include("funciones.php");

$id = $_GET['Clave'];

seleccionacampo('consumible','Clave',$id);
?>
<form action="" method="post">
	<?php echo "Clave"; echo "<br>";?>
	<input type="text" value="<?php echo $row->Clave;?>" name="Clave">
	<input type="text" value="<?php echo $row->Descripcion;?>" name="Descripcion">
	<input type="text" value="<?php echo $row->Moneda;?>" name="Moneda">
	<input type="text" value="<?php echo $row->Precio;?>" name="Precio">
	<input type="submit" name="submit">
</form>

<?php
	
	if(isset($_POST['submit'])){
		$campos = array("Clave"=>$_POST['Clave'], "Descripcion"=>$_POST['Descripcion'],"Moneda"=>$_POST['Moneda'],"Precio"=>$_POST['Precio']);
		$tbl = "consumible";
		editarf($tbl,$campos,'Clave',$id);
		header("location:indexeditar.php");
	}
?>
</div>
</body>
</html>