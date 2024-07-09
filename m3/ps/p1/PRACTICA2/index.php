<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Primer programa PHP</title>
    <style>
        body, html {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-image: url('imagenes/paisaje.jpg');
            color: white;
        }
        .header {
            background: rgba(0, 0, 0, 0.5);
            padding: 10px;
            text-align: center;
        }
        .content {
            padding: 10px;
            text-align: center;
        }
        h1, h3 {
            color: #ffcc00;
        }
        p, h4, h5{
            color: #f0f0f0;
        }
    </style>
</head>
<body>
<div class="header">
    <?php
    echo "<h4>Pérez Pérez, Kevin Fernando.</h4><h5>Cuarto Semestre de Pogramación.</h5>";
    ?>
</div>
<div class="content">
    <?php
    print "<h1>Empezamos...</h1>";
    echo "<p>A programar</p><h3> en PHP</h3>";
    ?>
</div>
</body>
</html>
