<?php
include("funcioneseditar.php");
$conexion = conectar();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@40,400,0,0" />
    <link rel="stylesheet" href="styleform.css">
    <link rel="icon" href="img/cimarron.png">
    <link rel="icon" href="img/cimarron.png">
    <title>Consulta: Modificar</title>
</head>
<body>
    <header>
        <div class="header">
            <h1>Veterinaria</h1>
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
                    <h1>Consulta: Mascotas</h1>
                    <main>
                        <table>
                            <tr>
                                <td style="padding: 10px;"><b>Nombre</b></td>
                                <td style="padding: 10px;"><b>Propietario</b></td>
                                <td style="padding: 10px;"><b>Especie</b></td>
                                <td style="padding: 10px;"><b>Sexo</b></td>
                                <td style="padding: 10px;"><b>Fecha de Nacimiento</b></td>
                            </tr>     
                            <?php
                                $sql ="SELECT * FROM mascotas";
                                $resultado=mysqli_query($conexion,$sql);
                                while($mostrar=mysqli_fetch_array($resultado)) {
                            ?> 
                            <tr>
                            <td>
                                <?php echo $mostrar['nombre']?></td>
                                <td><?php echo $mostrar['propietario']?></td>
                                <td><?php echo $mostrar['especie']?></td>
                                <td><?php echo $mostrar['sexo']?></td>
                                <td><?php echo $mostrar['fechaNacimiento']?></td>
                                <td>
                                    <button type="button" class="icon-button-edit" onclick="window.location.href='modificar.php?id=<?php echo $mostrar['id']; ?>'">
                                        <span class="material-symbols-outlined">Edit</span>
                                    </button>
                                </td>
                                <td>
                                    <button type="button" class="icon-button-delete" onclick="window.location.href='suprimir.php?id=<?php echo $mostrar['id']; ?>'">
                                        <span class="material-symbols-outlined">Delete</span>
                                    </button>
                                </td>
                            </tr>
                            <?php
                            }
                            ?>
                        </table>
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