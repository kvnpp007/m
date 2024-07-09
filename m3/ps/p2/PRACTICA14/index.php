<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica 14</title>
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

    .imgs {
    max-width: 90%;
    max-height: 90%;
    align-content: center;
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
<body background="imgs/fondo.png">
    <div class="container">
        <div class="containers form-group">
            <center>
                <h1>Pérez Pérez, Kevin Fernando.</h1><br>
                <h2>Cuarto Semestre de Programación.</h2><br>
                <h5>Centro de Bachillerato Tecnológico Industrial y de Servicios Número.</h5><br>
            </center>
            <div class="containers form-group">
                <form action="index.php" method="post">
                    <input type="submit" name="cbtis" value="256">
                    <input type="submit" name="cbtis" value="230">
                    <input type="submit" name="cbtis" value="81">
                    <input type="submit" name="cbtis" value="62">
                </form>
            </div>
            <div class="containers form-group imgs">
                <?php
                    if ($_POST){
                        $img1 = "imgs/cbtis256.png";
                        $img2 = "imgs/cbtis230.jpeg";
                        $img3 = "imgs/cbtis81.jpg";
                        $img4 = "imgs/cbtis62.png";
                        $cbtis = $_POST["cbtis"];
                        switch ($cbtis) {
                            case "256":
                                echo "<b>CBTIS No.256</b>";
                                ?>
                                <img src="<?php echo $img1 ?>" alt="CBTIS" width="230" height="230" max-height="230">
                                <?php
                                break;
                            case "230":
                                echo "<b>CBTIS No.230</b>";
                                ?>
                                <img src="<?php echo $img2 ?>" alt="CBTIS" width="230" height="230" max-height="230">
                                <?php
                                break;
                            case "81":
                                echo "<b>CBTIS No.81</b>";
                                ?>
                                <img src="<?php echo $img3 ?>" alt="CBTIS" width="230" height="230" max-height="230">
                                <?php
                                break;
                            case "62":
                                echo "<b>CBTIS No.62</b>";
                                ?>
                                <img src="<?php echo $img4 ?>" alt="CBTIS" width="230" height="230" max-height="230">
                                <?php
                                break;
                        }
                    }
                ?>
            </div>
        </div>
    </div>    
</body>
</html>
<!-- Pérez Pérez, Kevin Fernando. Cuarto Semestre de Programación T.M.-->