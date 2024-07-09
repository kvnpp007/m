<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica 3</title>
    <style>
        body, html {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-image: url('imagenes/paisaje.jpg');
            background-size: cover;
            background-position: center;
            height: 100%;
        }
        .header {
            background: rgba(255, 255, 255, 0.8);
            padding: 10px;
            text-align: center;
            position: fixed;
            width: 100%;
            top: 0;
            left: 0;
            z-index: 1000;
        }
        .header img {
            height: 50px;
            vertical-align: middle;
        }
        .header .info {
            display: inline-block;
            margin-left: 10px;
        }
        .container {
            margin-top: 70px;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: calc(100vh - 70px);
        }
        .content-box {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        input[type=text], input[type=submit] {
            padding: 10px;
            margin: 10px 0;
            border-radius: 4px;
        }
        input[type=text] {
            border: 1px solid #ccc;
        }
        input[type=submit] {
            border: none;
            background-color: #007bff;
            color: white;
            cursor: pointer;
        }
        input[type=submit]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
<div class="header">
    <img src="imagenes/cimarrones.jpg" alt="Logo">
    <div class="info">
        <strong>Pérez Pérez, Kevin Fernando.</strong><br>Cuarto Semestre de Programación.
    </div>
</div>
<div class="container">
    <div class="content-box">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['nombre'])) {
            $nombre = htmlspecialchars($_POST['nombre']);
            echo "<p>Hola, $nombre!</p>";
            echo '<a href="index.php" class="back-button">Regresar</a>';
        } else {
            ?>
            <h2>Ingrese su nombre</h2>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                Nombre: <input type="text" name="nombre" required>
                <input type="submit" value="Enviar Saludo">
            </form>
            <?php
        }
        ?>
    </div>
</div>
</body>
</html>