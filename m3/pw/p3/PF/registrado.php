<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleform.css">
    <link rel="icon" href="img/cimarron.png">
    <title>Formulario: Completado</title>
</head>
<body>
    <header>
        <div class="header">
            <h1>Contactanos</h1>
        </div>
        <nav>
			<div class="topnav">
				<a href="suscripcion.php">REGRESAR</a>
				<a href="index.html" style="float:right">INDEX</a>
			</div>
		</nav>
    </header>
    <section>
		<div class="container">
			<div class="card">
				<div class="row">
					<h1>Datos de registro</h1>
                    <?php
                        if(isset($_POST['nombre'])){
                            echo "Nombre: "; echo $_POST['nombre']. "<br><br>"; }
                        if(isset($_POST['ap-pat'])){
                            echo "Apellido Paterno: "; echo $_POST['ap-pat']. "<br><br>"; }
                        if(isset($_POST['ap-mat'])){
                            echo "Apellido Materno: "; echo $_POST['ap-mat']. "<br><br>"; }
                        if(isset($_POST['telefono'])){
                            echo "Teléfono: "; echo $_POST['telefono']. "<br><br>"; }
                        if(isset($_POST['correo'])){
                            echo "Correo Electrónico: "; echo $_POST['correo']. "<br><br>"; }
                    ?>
				</div>
			</div>
		</div>
    </section>
    <div class="row">
        <div class="card">
            <a href="enviarlo.html">Enviar</a>
            <a href="suscripcion.php">Volver a escribir</a>
            <a href="index.html" style="float:right">Página principal</a>
        </div>
    </div>
    <footer>
        <div class="footer">
        <h2>Pérez Pérez, Kevin Fernando.</h2>
        <h3>Cuarto Semestre de Programación.</h3>
        </div>
    </footer>
</body>
</html>
<!-- Pérez Pérez, Kevin Fernando. Cuarto Semestre de Programación T.M.-->