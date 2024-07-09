<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica 13</title>
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
    max-width: 50%;
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

    input[type="submit"] {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    }

    </style>
</head>
<body>
    <div class="container">
        <div class="containers form-group">
            <center>
                <h1>Pérez Pérez, Kevin Fernando.</h1><br>
                <h2>Cuarto Semestre de Programación.</h2><br>
            </center>
            <form action="index.php" method="post">
                <input type="submit" name="btnVAlor" value="1">
                <input type="submit" name="btnVAlor" value="2">
                <input type="submit" name="btnVAlor" value="3">
            </form>
            <div class="containers form-group">
                <?php
                    if ($_POST){
                        $boton = $_POST["btnVAlor"];
                        switch ($boton) {
                            case "1":
                                echo "<b>Presiono el botón 1</b>";
                                break;
                            case "2":
                                echo "<b>Presiono el botón 2</b>";
                                break;
                            case "3":
                                echo "<b>Presiono el botón 3</b>";
                                break;
                        }
                    }
                ?>
            </div>
        </div>
    </div>    
</body>
</html>