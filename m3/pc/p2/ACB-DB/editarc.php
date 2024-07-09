<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" href="http://fontawesome.io/assets/font-awesome/css/font-awesome.css" rel="stylesheet">
    <script src="https://use.fontawesome.com/d753ff1474.js"></script>
    <link rel="stylesheet" href="styleform.css">
    <link rel="icon" href="img/cimarron.png">
    <title>Editar: Cliente</title>
</head>
<body>
    <header>
        <div class="header">
                    <h1>Base de Datos</h1>
                    <p>"SISTEMA DE ALTA / BAJA / CONSULTA"</p>
        </div>
    </header>
    <nav>
			<div class="topnav">
				<a href="cliente.php">REGRESAR</a>
				<a href="http://localhost/c/pc/p2/" style="float:right">INDEX</a>
			</div>
		</nav>
    <section>
		<div class="container">
			<div class="card">
				<div class="row">
					<h1>Editar: Cliente</h1>
					<?php 
						include("funciones.php");
						$id = $_GET['id'];
						seleccionacampo('cliente','id',$id);
					?>
                    <main>
					<form action="" method="post">
						<div class="row">
							<div class="col-25">
								<label for="id">ID</label>
							</div>
							<div class="col-75">
								<input type="number" id="id" name="id" value="<?php echo $row->id;?>" required>
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
								<label for="rfc">RFC</label>
							</div>
							<div class="col-75">
								<input type="text" id="rfc" name="rfc" value="<?php echo $row->rfc;?>">
							</div>
						</div>
						<div class="row">
							<div class="col-25">
								<label for="appat">Apellido Paterno</label>
							</div>
							<div class="col-75">
								<input type="text" id="appat" name="appat" value="<?php echo $row->appat;?>">
							</div>
						</div>
						<div class="row">
							<div class="col-25">
								<label for="apmat">Apellido Materno</label>
							</div>
							<div class="col-75">
								<input type="text" id="apmat" name="apmat" value="<?php echo $row->apmat;?>">
							</div>
						</div>
						<div class="row">
							<div class="col-25">
								<label for="direccion">Dirección</label>
							</div>
							<div class="col-75">
								<input type="text" id="direccion" name="direccion" value="<?php echo $row->direccion;?>">
							</div>
						</div>
						<div class="row">
							<div class="col-25">
								<label for="telefono">Teléfono</label>
							</div>
							<div class="col-75">
								<input type="text" id="telefono" name="telefono" value="<?php echo $row->telefono;?>">
							</div>
						</div>
						<div class="row">
							<div class="col-25">
								<label for="correo">Correo</label>
							</div>
							<div class="col-75">
								<input type="text" id="correo" name="correo" value="<?php echo $row->correo;?>">
							</div>
						</div>
						<br>
						<div class="row">
							<input type="submit" name="submit" value="Grabar datos"> 
							<input type="reset" value="Borrar todo">
						</div>
					</form>
                    </main>
					<?php
						if(isset($_POST['submit'])){
						$campos = array("id"=>$_POST['id'], "rfc"=>$_POST['rfc'],"nombre"=>$_POST['nombre'],"appat"=>$_POST['appat'],"apmat"=>$_POST['apmat'],"direccion"=>$_POST['direccion'],"telefono"=>$_POST['telefono'],"correo"=>$_POST['correo']);
						$tbl = "cliente";
						editarf($tbl,$campos,'id',$id);
						header("location:cliente.php");
						}
					?>
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