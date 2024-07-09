<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dar de baja libros</title>
</head>
<body>
    <h1><center>Módulo de dar de baja </center></h1>
    
    <form action="borrar.php" method="post">
        <p>
            <label for="id">Clave del producto a dar de baja:</label>
            <input type="text" name="c" id="c" size="5" required/>
        </p>
        
        <input type="hidden" name="action" value="delete">
        
        <br/>
        
        <p>
            <input type="submit" value="Dar de baja"> 
            <input type="reset" value="Borrar todo">
        </p>
    </form>
</body>
</html>
