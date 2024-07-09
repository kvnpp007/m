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
                    <h1>Comentario</h1>
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
					<h1>Sistema de comentarios</h1>
					<form action="registrar.php" method="post">
						<div class="row">
							<div class="col-25">
								<label for="nombre">Nombre (Alías)</label>
							</div>
							<div class="col-75">
								<input type="text" id="nombre" name="nombre" placeholder="Tú nombre..." required>
							</div>
						</div>
						<div class="row">
							<div class="col-25">
								<label for="correo">Correo Electrónico</label>
							</div>
							<div class="col-75">
								<input type="text" id="correo" name="correo" placeholder="Tú correo..." required>
							</div>
						</div>
						<div class="row">
							<div class="col-25">
								<label for="comment">Correo Electrónico</label>
							</div>
							<div class="col-75">
								<textarea name="comment" id="comment" placeholder="Tú comentario..." required></textarea>
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