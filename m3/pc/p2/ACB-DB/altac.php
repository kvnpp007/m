<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleform.css">
    <link rel="icon" href="img/cimarron.png">
    <title>Formulario: Alta</title>
</head>
<body>
    <header>
        <div class="header">
                    <h1>Base de Datos</h1>
                    <p>"SISTEMA DE ALTA / BAJA / CONSULTA"</p>
        </div>
		<nav>
			<div class="topnav">
				<a href="index.php">REGRESAR</a>
				<a href="http://localhost/c/pc/p2/" style="float:right">INDEX</a>
			</div>
		</nav>
    </header>
    <section>
		<div class="container">
			<div class="card">
				<div class="row">
					<h1>Alta: Cliente</h1>
					<form action="grabarc.php" method="post">
						<div class="row">
							<div class="col-25">
								<label for="id">ID</label>
							</div>
							<div class="col-75">
								<input type="number" id="id" name="id" placeholder="Tú identificación... " required>
							</div>
						</div>
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
								<label for="rfc">RFC</label>
							</div>
							<div class="col-75">
								<input type="text" id="rfc" name="rfc" placeholder="Tú RFC...">
							</div>
						</div>
						<div class="row">
							<div class="col-25">
								<label for="appat">Apellido Paterno</label>
							</div>
							<div class="col-75">
								<input type="text" id="appat" name="appat" placeholder="Tú apellido paterno...">
							</div>
						</div>
						<div class="row">
							<div class="col-25">
								<label for="apmat">Apellido Materno</label>
							</div>
							<div class="col-75">
								<input type="text" id="apmat" name="apmat" placeholder="Tú apellido materno...">
							</div>
						</div>
						<div class="row">
							<div class="col-25">
								<label for="direccion">Dirección</label>
							</div>
							<div class="col-75">
								<input type="text" id="direccion" name="direccion" placeholder="Tú dirección...">
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