<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alta de Libros</title>
</head>
<body>
    <h1><center>Módulo de alta</center></h1>
    <form action="grabar.php" method="post" >
        <p>
            Clave: <input type="text" name="cla" size="5" >
            Descripción: <input type="text" name="name" size="60" >
            Moneda: <input type="text" name="mon" size="5" >
            Precio: <input type="number" name="pre" size="30" >
        </p>
        <br/>
        <p>
            <input type="submit" value="Grabar datos" >
            <input type="reset" value="Borrar todo" >
        </p>
    </form>
    <a href="index.html">Regresar</a>
</body>
</html>