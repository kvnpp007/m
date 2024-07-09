<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@40,400,0,0" />
    <link rel="stylesheet" href="styleform.css">
    <link rel="icon" href="img/cimarron.png">
    <title>Modificar</title>
</head>
<body>
	<header>
        <div class="header">
            <h1>Veterinaria/h1>
            <p>Base de Datos</p>
            <div style="text-align:center; text-decoration: none; display: flex;">
                <form action="agregar.php"><button type="submit" class="icon-button-add"><span class="material-symbols-outlined">add_box</span></button></form>
                <form action="modificar.php"><button type="submit" class="icon-button-edit"><span class="material-symbols-outlined">edit</span></button></form>
                <form action="eliminar.php"><button type="submit" class="icon-button-delete"><span class="material-symbols-outlined">delete</span></button></form>
                <form action="examinar.php"><button type="submit" class="icon-button-db"><span class="material-symbols-outlined">search</span></button></form>
                <form action="http://localhost/phpmyadmin/index.php?"><button type="submit" class="icon-button-db"><span class="material-symbols-outlined">database</span></button></form>
            </div>
        </div>
	</header>
    <nav>
			<div class="topnav">
				<a href="index.php">REGRESAR</a>
				<a href="http://localhost/c/pc/p2/" style="float:right">INDEX</a>
			</div>
		</nav>
    <section>
		<div class="container">
			<div class="card">
				<div class="row">
					<h1>Modificar: Producto</h1>
					<?php 
						include("funciones.php");
						$id = $_GET['id'];
						seleccionacampo('mascotas','id',$id);
					?>
                    <?php
						if(isset($_POST['submit'])){
						$campos = array("id"=>$_POST['id'], "nombre"=>$_POST['nombre'],"propietario"=>$_POST['propietario'],"especie"=>$_POST['especie'], "sexo"=>$_POST['sexo'],"fechaNacimiento"=>$_POST['fechaNacimiento']);
						$tbl = "mascotas";
						editarf($tbl,$campos,'id',$id);
						header("location:examinar.php");
						}
					?>
                    <main>
						<form action="" method="post">
							<div class="row">
								<div class="col-25">
									<label for="id">Identificador</label>
								</div>
								<div class="col-75">
									<input type="text" id="id" name="id" value="<?php echo $row->id;?>">
								</div>
							</div>
							<div class="row">
								<div class="col-25">
									<label for="nombre">Nombre</label>
								</div>
								<div class="col-75">
									<input type="text" id="nombre" name="nombre" value="<?php echo $row->nombre;?>">
								</div>
							</div>
							<div class="row">
								<div class="col-25">
									<label for="propietario">Propietario</label>
								</div>
								<div class="col-75">
									<input type="text" id="propietario" name="propietario" value="<?php echo $row->propietario;?>">
								</div>
							</div>
							<div class="row">
								<div class="col-25">
									<label for="especie">Especie</label>
								</div>
								<div class="col-75">
									<input type="text" id="especie" name="especie" value="<?php echo $row->especie;?>">
								</div>
							</div>
							<div class="row">
								<div class="col-25">
									<label for="sexo">Sexo</label>
								</div>
								<div class="col-75">
									<input type="text" id="sexo" name="sexo" value="<?php echo $row->sexo;?>">
								</div>
							</div>
							<div class="row">
								<div class="col-25">
									<label for="fechaNacimiento">Fecha de Nacimiento</label>
								</div>
								<div class="col-75">
									<input type="text" id="fechaNacimiento" name="fechaNacimiento" value="<?php echo $row->fechaNacimiento;?>">
								</div>
							</div>
							<br>
						<div class="row">
							<input type="submit" name="submit" value="Grabar datos"> 
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