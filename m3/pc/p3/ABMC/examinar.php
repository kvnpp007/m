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
                    <h1>Consulta: Ejemplares</h1>
                    <main>
                        <table>
                            <tr>
                                <td style="padding: 10px;"><b>Clave</b></td>
                                <td style="padding: 10px;"><b>Descripción</b></td>
                                <td style="padding: 10px;"><b>Moneda</b></td>
                                <td style="padding: 10px;"><b>Precio</b></td>
                            </tr>     
                            <?php
                                $sql ="SELECT * FROM consumible";
                                $resultado=mysqli_query($conexion,$sql);
                                while($mostrar=mysqli_fetch_array($resultado)) {
                            ?> 
                            <tr>
                            <td>
                                <?php echo $mostrar['Clave']?></td>
                                <td><?php echo $mostrar['Descripcion']?></td>
                                <td><?php echo $mostrar['Moneda']?></td>
                                <td><?php echo $mostrar['Precio']?></td>
                                <td>
                                    <button type="button" class="icon-button-edit" onclick="window.location.href='modificar.php?Clave=<?php echo $mostrar['Clave']; ?>'">
                                        <span class="material-symbols-outlined">Edit</span>
                                    </button>
                                </td>
                                <td>
                                    <button type="button" class="icon-button-delete" onclick="window.location.href='suprimir.php?Clave=<?php echo $mostrar['Clave']; ?>'">
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