<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suscripción Boletín</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }
        .container {
            max-width: 75%;
            margin: 2.5% auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .titles {
            max-width: 90%;
            margin: 2.5% auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #333;
        }
        .form-group {
            margin-bottom: 20px;
            display: flex;
            flex-direction: column;
        }
        input[type="text"], input[type="password"], input[type="submit"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
    </style>
</head>
<body background="imagenes/wallpaper.png">
    <div class="titles">
    <h1><center>Ejemplo de Utilización de datos.</center></h1>
    <form action="index-1.php" method="get">
        <?php
        echo"<center><sub>Nota: los datos aquí recabados serán utilizados solo para enviar información a nuestros clientes.</sub></center>";
        ?>
    </div>
        <div class="container">
            <div class="form-group">
                Nombre: <input type="text" name="nombre"><br>
                Apellido: <input type="text" name="apellido"><br>
                Correo Electronico: <input type="text" name="correo"><br>
                Contraseña: <input type="password" name="password"><br><br>
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
                            Nivel de estudios<br/>
                                <input type="radio" name="rdb2" value="Secundaria"/> Nivel Secundaria<br/>
                                <input type="radio" name="rdb2" value="Barchillerato"/> Barchillerato<br/>
                                <input type="radio" name="rdb2" value="Licenciatura"/>Licenciatura<br/>
                                <input type="radio" name="rdb2" value="Diplomado"/> Nivel Diplomado<br/>
                                <input type="radio" name="rdb2" value="Maestría"/> Maestría o Doctorado<br/>
                            </td>
                            <td>
                                Interesado en los siguientes temas:<br/>
                                <input type="checkbox" name="chk1" value="Música">Música<br/>
                                <input type="checkbox" name="chk2" value="Deportes">Deportes<br/>
                                <input type="checkbox" name="chk3" value="Cine">Cine<br/>
                                <input type="checkbox" name="chk4" value="Libros">Libros<br/>
                                <input type="checkbox" name="chk5" value="Ciencia">Ciencia<br/>
                            </td>
                    </tr>
                </table>
                <hr>
                <p>Día de la semana que le interesa recibirlo:</p>
                <select name="lista">
                    <option>Dia de la semana que le interese recibirlo:</option>
                    <option value="Lunes">Lunes</option>
                    <option value="Martes">Martes</option>
                    <option value="Miercoles">Miercoles</option>
                    <option value="Jueves">Jueves</option>
                    <option value="Viernes">Viernes</option>
                    <option value="Sabado">Sabado</option>
                    <option value="Domingo">Domingo</option>
                </select>
                <p>Su opinion:</p>
                <textarea name="comentario" rows="5" cols="50"></textarea>
                <p class="form-group">
                    <input type="submit" value="Comprobar datos del formulario">
                    <input type="reset" value="Borrar todo">
                </p>
            </div>
        </div>
    </form>
</body>
</html>
