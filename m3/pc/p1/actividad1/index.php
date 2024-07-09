<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link  rel="stylesheet" href="styles.css"/>
    <title>Registro</title>
</head>
<body background="imagenes/wallpaper.png">
<header class="header">
        <div class="menu conteiner">
            <a href="#" class="logo">DGETI</a>
            <input type="checkbox" id="menu" />
            <label for="menu">
                <img src="imgs/logo dgeti rend.png" class="menu icono" alt="" />
            </label>
            <nav class="navbar">
                <ul>
                    <li><a href="construccion.php">Construcción</a></li>
                    <li><a href="construccion.php">Electrónica</a></li>
                    <li><a href="construccion.php">Alimentos</a></li>
                    <li><a href="construccion.php">Programación</a></li>
                </ul>
            </nav>
        </div>
        <div class="header-content conteiner">
            <h1>CBTIS 230</h1>
            <p>
                Centro de Bachillerato Tecnológico Industrial y de Servicios Número 230.
            </p>
            <a href="#" class="btn-1">Informacion</a>
        </div>
    </header>
    <div class="titles">
    <h1><center>Formulario de Inscripción a educación nivel medio superior</center></h1>
    <form action="construccion.php" method="get">
        <?php
        echo"<center><sub>Rellenar los datos del formulario.</sub></center>";
        ?>
    </div>
        <div class="containers">
            <div class="form-group">
                Nombre: <input type="text" name="nombre"><br>
                Apellido: <input type="text" name="apellido"><br>
                Dirección: <input type="text" name="direccion"><br>
                Número Teléfonico: <input type="text" name="telefono"><br>
                Correo Electronico: <input type="text" name="correo"><br>
            </div>
            <hr>
            <div class="form-group">
                <table>
                    <tr>
                        <td>
                            Sexo<br/>
                            <input type="radio" name="rdb1" value="Femenino"/>Femenino<br/>
                            <input type="radio" name="rdb1" value="Masculino"/>Masculino<br/>
                        </td>
                        <td>
                            Especialidad:<br/>
                                <input type="radio" name="rdb2" value="Construccion"/>Construcción<br/>
                                <input type="radio" name="rdb2" value="Electronica"/>Electrónica<br>
                                <input type="radio" name="rdb2" value="Alimentos"/>Producción Industrial de Alimentos<br/>
                                <input type="radio" name="rdb2" value="Programacion"/>Programación<br/>
                        </td>
                        <td>
                            Taller escolar:<br/>
                                <input type="radio" name="rdb3" value="Música">Música<br/>
                                <input type="radio" name="rdb3" value="Pintura">Pintura<br/>
                                <input type="radio" name="rdb3" value="Ingles">Inglés<br/>
                                <input type="radio" name="rdb3" value="Oratoria">Oratoria<br/>
                        </td>
                    </tr>
                </table>
                <hr>
                <p>Antecedentes:</p>
                <textarea name="Antecedentes" rows="5" cols="50"></textarea>
                <?php
                switch ('rdb2') {
                    case 'construccion':
                }
                ?>
                <p class="form-group">
                    <input type="submit" value="Comprobar datos del formulario">
                    <input type="reset" value="Borrar todo">
                </p>
            </div>
        </div>
    </form>
</body>
</html>
