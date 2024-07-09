<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@40,400,0,0" />
    <link rel="stylesheet" href="styleform.css">
    <link rel="icon" href="img/cimarron.png">
    <title>Formulario: Alta</title>
	<style>
        .icon-button-db {
            background-color: black;
            color: gray;
            border: none;
            padding: 10px;
            margin: 5px;
            border-radius: 100%;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .icon-button-add {
            background-color: gainsboro;
            color: black;
            border: none;
            padding: 10px;
            margin: 5px;
            border-radius: 100%;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .icon-button-delete {
            background-color: crimson;
            color: white;
            border: none;
            padding: 10px;
            margin: 5px;
            border-radius: 100%;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .icon-button-edit {
            background-color:mediumseagreen;
            color: white;
            border: none;
            padding: 10px;
            margin: 5px;
            border-radius: 100%;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .icon-button-edit-add, .icon-button-edit, .icon-button-delete, .material-symbols-outlined {
            font-size: 24px;
        }
    </style>
</head>
<body>
    <header>
        <div class="header">
			<h1>Printerland</h1>
            <p>Base de Datos</p>
            <div style="text-align:center; text-decoration: none; display: flex;">
                <form action="agregar.php"><button type="submit" class="icon-button-add"><span class="material-symbols-outlined">add_box</span></button></form>
                <form action="modificar.php"><button type="submit" class="icon-button-edit"><span class="material-symbols-outlined">edit</span></button></form>
                <form action="eliminar.php"><button type="submit" class="icon-button-delete"><span class="material-symbols-outlined">delete</span></button></form>
                <form action="examinar.php"><button type="submit" class="icon-button-db"><span class="material-symbols-outlined">search</span></button></form>
                <form action="http://localhost/phpmyadmin/index.php?"><button type="submit" class="icon-button-db"><span class="material-symbols-outlined">database</span></button></form>
            </div>
        </div>
		<nav>
			<div class="topnav">
				<a href="index.php">REGRESAR</a>
				<a href="http://localhost/c/pc/p3/" style="float:right">INDEX</a>
			</div>
		</nav>
    </header>
    <section>
		<div class="container">
			<div class="card">
				<div class="row">
					<h1>Alta: Producto</h1>
					<main>
						<form action="registrar.php" method="post">
							<div class="row">
								<div class="col-25">
									<label for="Clave">Clave</label>
								</div>
								<div class="col-75">
									<input type="number" id="Clave" name="Clave" placeholder="Clave... " required>
								</div>
							</div>
							<div class="row">
								<div class="col-25">
									<label for="Descripcion">Descripción</label>
								</div>
								<div class="col-75">
									<input type="text" id="Descripcion" name="Descripcion" placeholder="Descripción... " required>
								</div>
							</div>
							<div class="row">
								<div class="col-25">
									<label for="Moneda">Moneda</label>
								</div>
								<div class="col-75">
									<input type="text" id="Moneda" name="Moneda" placeholder="Moneda..." required>
								</div>
							</div>
							<div class="row">
								<div class="col-25">
									<label for="Precio">Precio</label>
								</div>
								<div class="col-75">
									<input type="number" id="Precio" name="Precio" placeholder="Precio...">
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
        <h3>Cuarto Semestre de Programación.</h3>
        </div>
    </footer>
</body>
</html>
<!-- Pérez Pérez, Kevin Fernando. Cuarto Semestre de Programación T.M.-->