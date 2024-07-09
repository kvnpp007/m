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
            background-color: mediumseagreen;
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
            <h1>Red de Hospitales</h1>
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
                    <h1>Alta: Paciente</h1>
                    <main>
                        <form action="registrar.php" method="post">
                            <div class="row">
                                <div class="col-25">
                                    <label for="id">Identificador</label>
                                </div>
                                <div class="col-75">
                                    <input type="number" id="id" name="id" placeholder="Identificador..." required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-25">
                                    <label for="rfc">RFC</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" id="rfc" name="rfc" placeholder="RFC..." required>
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
                                    <label for="ap_paterno">Apellido Paterno</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" id="ap_paterno" name="ap_paterno" placeholder="Apellido Paterno..." required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-25">
                                    <label for="ap_materno">Apellido Materno</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" id="ap_materno" name="ap_materno" placeholder="Apellido Materno...">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-25">
                                    <label for="direccion">Dirección</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" id="direccion" name="direccion" placeholder="Dirección...">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-25">
                                    <label for="ciudad">Ciudad</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" id="ciudad" name="ciudad" placeholder="Ciudad...">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-25">
                                    <label for="estado">Estado</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" id="estado" name="estado" placeholder="Estado...">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-25">
                                    <label for="telefono">Teléfono</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" id="telefono" name="telefono" placeholder="Teléfono...">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-25">
                                    <label for="cuenta">Cuenta</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" id="cuenta" name="cuenta" placeholder="Cuenta...">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-25">
                                    <label for="habitacion">Habitación</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" id="habitacion" name="habitacion" placeholder="Habitación...">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-25">
                                    <label for="generales">Generales</label>
                                </div>
                                <div class="col-75">
                                    <textarea id="generales" name="generales" placeholder="Información general..." style="height:200px"></textarea>
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
            <h2>Camacho Orantes, Ángel Isaac.</h2>
            <h3>Cuarto Semestre de Programación.</h3>
        </div>
    </footer>
</body>
</html>
<!-- Pérez Pérez, Kevin Fernando. Cuarto Semestre de Programación T.M.-->