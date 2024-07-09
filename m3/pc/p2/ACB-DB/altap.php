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
					<h1>Alta: Producto</h1>
					<form action="grabarp.php" method="post">
						<div class="row">
							<div class="col-25">
								<label for="id">Clave del producto</label>
							</div>
							<div class="col-75">
								<input type="number" id="id" name="id" placeholder="Identificador de producto..." required>
							</div>
						</div>
						<div class="row">
							<div class="col-25">
								<label for="description">Descripcción</label>
							</div>
							<div class="col-75">
								<input type="text" id="description" name="description" placeholder="Descripción del producto...">
							</div>
						</div>
						<div class="row">
							<div class="col-25">
								<label for="price">Precio del producto</label>
							</div>
							<div class="col-75">
								<input type="text" id="price" name="price" placeholder="Precio del producto...">
							</div>
						</div>
						<div class="row">
							<div class="col-25">
								<label for="unit">Unidades por presentación</label>
							</div>
							<div class="col-75">
								<input type="text" id="unit" name="unit" placeholder="Unidades por producto...">
							</div>
						</div>
						<div class="row">
							<div class="col-25">
								<label for="quantity">Cantidad de producto</label>
							</div>
							<div class="col-75">
								<input type="text" id="quantity" name="quantity" placeholder="Cantidad de producto...">
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