<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" href="http://fontawesome.io/assets/font-awesome/css/font-awesome.css" rel="stylesheet">
    <script src="https://use.fontawesome.com/d753ff1474.js"></script>
    <link rel="stylesheet" href="styleform.css">
    <link rel="icon" href="img/cimarron.png">
    <title>Editar: Producto</title>
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
				<a href="producto.php">REGRESAR</a>
				<a href="http://localhost/c/pc/p2/" style="float:right">INDEX</a>
			</div>
		</nav>
    <section>
		<div class="container">
			<div class="card">
				<div class="row">
					<h1>Editar: Producto</h1>
					<?php 
						include("funcioneseditp.php");
						$id = $_GET['id'];
						seleccionacampo('productos','id',$id);
					?>
                    <main>
						<form action="" method="post">
						<div class="row">
							<div class="col-25">
								<label for="id">Clave del producto</label>
							</div>
							<div class="col-75">
								<input type="number" id="id" name="id" value="<?php echo $row->id;?>" required>
							</div>
						</div>
						<div class="row">
							<div class="col-25">
								<label for="description">Descripcción</label>
							</div>
							<div class="col-75">
								<input type="text" id="description" name="description" value="<?php echo $row->description;?>">
							</div>
						</div>
						<div class="row">
							<div class="col-25">
								<label for="price">Precio del producto</label>
							</div>
							<div class="col-75">
								<input type="text" id="price" name="price" value="<?php echo $row->price;?>">
							</div>
						</div>
						<div class="row">
							<div class="col-25">
								<label for="unit">Unidades por presentación</label>
							</div>
							<div class="col-75">
								<input type="text" id="unit" name="unit" value="<?php echo $row->unit;?>">
							</div>
						</div>
						<div class="row">
							<div class="col-25">
								<label for="quantity">Cantidad de producto</label>
							</div>
							<div class="col-75">
								<input type="text" id="quantity" name="quantity" value="<?php echo $row->quantity;?>">
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
							$campos = array("id"=>$_POST['id'], "description"=>$_POST['description'],"price"=>$_POST['price'],"unit"=>$_POST['unit'],"quantity"=>$_POST['quantity']);
							$tbl = "productos";
							editarf($tbl,$campos,'id',$id);
							header("location:producto.php");
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