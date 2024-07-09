<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica 15</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap');
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            text-decoration:none;
            list-style:none;
        }

        body {
            font-family: 'Poppins', sans-serif;
        }
        .conteiner{
            max-width:1200px;
            margin:0 auto;
        }

        .containers {
            max-width: 75%;
            margin: 2.5% auto;
            padding: 10px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .form-group {
            margin-bottom: 10px;
            display: flex;
            flex-direction: column;
        }

        h1, h2{
            font-size:35px;
            line-height:70px;
            color:#323337;
            text-transform:uppercase;
            margin-bottom:20px;
        }

        p{
            font-size:25px;
            line-height:50px;
            color:#323337;
            text-transform:uppercase;
            margin-bottom:10px;
        }
    </style>
</head>
<body background="imgs/fondo.png">
    <div class="container containers form-group">
        <center>
            <h1>Pérez Pérez, Kevin Fernando.</h1><br>
            <h2>Cuarto Semestre de Programación.</h2><br>
        </center>
    </div>
    <div class="container containers form-group">
        <?php
            function participantes ( $nombre, $plantel ) {
                echo "<p>Bienvenido(a) ".$nombre." del ".$plantel.".</p><br>";
            }
            participantes("Rosa","CBTIS 286");
            participantes("Julio","CBTIS 69");
            participantes("Alicia","CBTIS 230");
        ?>
    </div>  
</body>
</html>
<!-- Pérez Pérez, Kevin Fernando. Cuarto Semestre de Programación T.M.-->