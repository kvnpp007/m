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
			<h1>Biblioteca</h1>
            <p>Base de Datos</p>
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
					<main>
						<form action="registrar.php" method="post">
							<div class="row">
								<div class="col-25">
									<label for="cve">Identificador</label>
								</div>
								<div class="col-75">
									<input type="number" id="id" name="id" placeholder="Identificador... " required>
								</div>
							</div>
							<div class="row">
								<div class="col-25">
									<label for="clasif">Clasificación</label>
								</div>
								<div class="col-75">
									<input type="number" id="clasif" name="clasif" placeholder="Clasificación... " required>
								</div>
							</div>
							<div class="row">
								<div class="col-25">
									<label for="nombre">Nombre</label>
								</div>
								<div class="col-75">
									<input type="text" id="nombre" name="nombre" placeholder="Nombre..." required>
								</div>
							</div>
							<div class="row">
								<div class="col-25">
									<label for="edicion">Edición</label>
								</div>
								<div class="col-75">
									<input type="number" id="edicion" name="edicion" placeholder="Edición...">
								</div>
							</div>
							<div class="row">
								<div class="col-25">
									<label for="autor">Autor</label>
								</div>
								<div class="col-75">
									<input type="text" id="autor" name="autor" placeholder="Autor...">
								</div>
							</div>
							<div class="row">
								<div class="col-25">
									<label for="year">Año</label>
								</div>
								<div class="col-75">
									<input type="number" id="year" name="year" placeholder="Año...">
								</div>
							</div>
							<div class="row">
								<div class="col-25">
									<label for="ejemplares">Ejemplares</label>
								</div>	
								<div class="col-75">
									<input type="number" id="ejemplares" name="ejemplares" placeholder="Número de ejemplares...">
								</div>
							</div>
							<div class="row">
								<div class="col-25">
									<label for="genero">Genero</label>
								</div>
								<div class="col-75">
									<input type="text" id="genero" name="genero" placeholder="Genero literario...">
								</div>
							</div>
							<br>
							<div class="row">
								<input type="submit" value="Grabar datos"> 
								<input type="reset" value="Borrar todo">
							</div>
						</form>
					</main>
				</div>
			</div>
		</div>
    </section>
    <footer>
        <div class="footer">
        <h2>Pérez Pérez, Kevin Fernando.</h2>
        <h3>Camacho Orantes, Ángel Isaac.</h3>
        <h3>Cuarto Semestre de Programación.</h3>
        </div>
    </footer>
</body>
</html>
<!-- Pérez Pérez, Kevin Fernando. Cuarto Semestre de Programación T.M.-->