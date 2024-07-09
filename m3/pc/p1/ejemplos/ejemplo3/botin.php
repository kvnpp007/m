<!DOCTYPE html>
<html>
<head>
	<title>Suscripcción Boletín</title>
	<meta http-esquiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>
	<h1><center>Ejemplo sobre la utilización de tablas.
	</center></h1>

	<form action="datos.php" method="GET">
		<?php
		echo "NOTA: Los datos quí recabdos serán utilizados solo para enviar información a nuestros clientes";
		echo"<br>";
		echo"<br>";
		?>

		Nombre:<input type = "text" name= "nombre>">
		Apellidos: <input type = "text" name="apellidos">
		Correo electrónico:<input type = "text" name="correo"><br><br>
		Contraseña:<input type = "password" name="password"><br>

		<table>

			<tr>
				<td>
					Sexo<br/>
					<input type="radio" name="rdb1" value="Femenino"/>Femenino<br/>
					<input type="radio" name="rdb1" value="Masculino"/>Masculino<br/>
				</td>

				<td>
					Nivel de estudios<br/>
					<input type="radio" name="rdb2" value="Secundaria"/> Nivel Secundaria<br/>
					<input type="radio" name="rdb2" value="Barchillerato"/> Barchillerato<br/>
					<input type="radio" name="rdb2" value="Licenciatura"/>Licenciatura<br/>
					<input type="radio" name="rdb2" value="Diplomado"/> Nivel Diplomado<br/>
					<input type="radio" name="rdb2" value="Maestría"/> Maestría o Doctorado<br/>
				</td>
				<td>
					Interesado en los siguientes temas:<br/>
					<input type="checkbox" name="chk1" value="Música">Música<br/>
					<input type="checkbox" name="chk2" value="Deportes">Deportes<br/>
					<input type="checkbox" name="chk3" value="Cine">Cine<br/>
					<input type="checkbox" name="chk4" value="Libros">Libros<br/>
					<input type="checkbox" name="chk5" value="Ciencia">Ciencia<br/>
				</td>
			</tr>
		</table> 
		<p>Día de la semana que le interesa recibirlo:</p>
		<select name="lista">


</body>
</html>