<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica 4</title>
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
        .back-button {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .back-button:hover {
            background-color: #0056b3;
        }
        @media (max-width: 480px) {
            .header img {
                height: 40px;
            }
            .header .info {
                font-size: 12px;
            }
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
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $edad = $_POST['edad'];
            if ($edad > 15) {
                echo "<p>Tienes más de 15 años.</p>";
            } else {
                echo "<p>No tienes más de 15 años.</p>";
            }
        }
        ?>
        <a href="index.html" class="back-button">Regresar al Formulario</a>
    </div>
</div>
</body>
</html>
