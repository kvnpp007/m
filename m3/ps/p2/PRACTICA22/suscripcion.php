<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleform.css">
    <link rel="icon" href="img/cimarron.png">
    <title>Formulario: Registro</title>
</head>
<body>
    <header>
        <div class="header">
                    <h1>Boletín Informativo</h1>
                    <p>"Centro de Bachillerato Tecnológico Industrial y de Servicios Número 230"</p>
        </div>
		<nav>
			<div class="topnav">
				<a href="index.html">REGRESAR</a>
				<a href="index.html" style="float:right">INDEX</a>
			</div>
		</nav>
    </header>
    <section>
		<div class="container">
			<div class="card">
				<div class="row">
					<h1>Sistema de registro</h1>
					<form action="registro.php" method="post">
						<div class="row">
							<div class="col-25">
								<label for="nombre">Nombre</label>
							</div>
							<div class="col-75">
								<input type="text" id="nombre" name="nombre" placeholder="Tú nombre...">
							</div>
						</div>
						<div class="row">
							<div class="col-25">
								<label for="ap-pat">Apellido Paterno</label>
							</div>
							<div class="col-75">
								<input type="text" id="ap-pat" name="ap-pat" placeholder="Tú apellido paterno...">
							</div>
						</div>
						<div class="row">
							<div class="col-25">
								<label for="ap-pat">Apellido Materno</label>
							</div>
							<div class="col-75">
								<input type="text" id="ap-mat" name="ap-mat" placeholder="Tú apellido materno...">
							</div>
						</div>
						<div class="row">
							<div class="col-25">
								<label for="telefono">Teléfono</label>
							</div>
							<div class="col-75">
								<input type="text" id="telefono" name="telefono" placeholder="Tú teléfono...">
							</div>
						</div>
						<div class="row">
							<div class="col-25">
								<label for="correo">Correo</label>
							</div>
							<div class="col-75">
								<input type="text" id="correo" name="correo" placeholder="Tú correo...">
							</div>
						</div>
						<div class="row">
							<div class="col-25">
								<label for="dia">Día de la semana</label>
							</div>
							<div class="col-75">
								<select name="dia" name="dia">
									<option selected disabled value="">Seleccione el día de la semana para el resumen de eventos</option>
									<option value="Lunes">lunes</option>
									<option value="Martes">martes</option>
									<option value="Miercoles">miercoles</option>
									<option value="Jueves">jueves</option>
									<option value="Viernes">viernes</option>
								</select>
							</div>
						</div>
						<br>
						<div class="row">
							<input type="submit" value="Grabar datos"> 
							<input type="reset" value="Borrar todo">
						</div>
					</form>
				</div>
			</div>
		</div>
    </section>
    <footer>
        <div class="footer">
        <h2>Pérez Pérez, Kevin Fernando.</h2>
        <h3>Cuarto Semestre de Programación.</h3>
        </div>
    </footer>
</body>
</html>
<!-- Pérez Pérez, Kevin Fernando. Cuarto Semestre de Programación T.M.-->