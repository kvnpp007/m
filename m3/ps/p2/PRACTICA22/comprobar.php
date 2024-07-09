<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="img/cimarron.png">
    <title>Comprobar datos (Práctica 21).</title>
</head>
<body>
    <center><h1>Pérez Pérez, Kevin Fernando. Cuarto Semestre de Programación.</h1></center>
    <h1>Tus datos de suscripci&iacute;n:</h1>
    <p>Estos son los datos que nos haz enviado</p>
    <?php
    if(isset($_POST['nombre'])){
        echo "Nombre: "; echo $_POST['nombre']. "<br>"; }
    if(isset($_POST['apellido'])){
        echo "Apellido: "; echo $_POST['apellido']. "<br>"; }
    if(isset($_POST['email'])){
        echo "Correo Electrónico: "; echo $_POST['email']. "<br>"; }
    if(isset($_POST['contras'])){
        echo "Contraseña: "; echo $_POST['contras']. "<br>"; }
    if(isset($_POST['sexo'])){
        echo "Sexo: "; echo $_POST['sexo']. "<br>"; }
    if(isset($_POST['estudios'])){
        echo "Estudios: "; echo $_POST['estudios']. "<br>"; }
    echo "De interes: ";
    if(isset($_POST['JavaScript'])){
        echo "JavaScript: "; echo $_POST['JavaScript']. "<br>"; }
    if(isset($_POST['Android'])){
        echo "Android: "; echo $_POST['Android']. "<br>"; }
    if(isset($_POST['PHP'])){
        echo "PHP: "; echo $_POST['PHP']. "<br>"; }
    if(isset($_POST['VisualFoxPro'])){
        echo "Visual Fox Pro: "; echo $_POST['VisualFoxPro']. "<br>"; }
    if(isset($_POST['C++'])){
        echo "C++: "; echo $_POST['C++']. "<br>"; }
    ?>
    <p>Comprueba tus datos antes de enviarlos, sino estan bien, vuelve a escribirlos</p>
    <p>Los datos son correctos: <a href="enviar.html">Enviar.</a></p>
    <p>Los datos son incorrectos: <a href="index.html">Volver a escribir.</a></p>
</body>
</html>
<!-- Pérez Pérez, Kevin Fernando. Cuarto Semestre de Programación T.M.-->