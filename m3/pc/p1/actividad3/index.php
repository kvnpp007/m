<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<link  rel="stylesheet" href="convstyle.css"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Conversor de Unidades</title>
</head>
<body background="imgs/impression-header.png">
    <header>
        <div class="menu conteiner">
            <a href="http://2kpp.com/c/pc/" class="logo">#</a>
            <input type="checkbox" id="menu" />
            <label for="menu">
                <img src="imgs/logo dgeti rend.png" class="menu icono" alt="" />
            </label>
        </div>
        <div class="header-content h1 conteiner">
            <h1>Conversor de Unidades</h1>
        </div>
    </header>
    <div class="container form-group">
    <div class="containers">
        <form method="post">
            <h3>Conversión de Temperatura</h3>
            <label for="temperature">Cantidad:</label>
            <input type="number" id="temperature" name="temperature" placeholder="Cantidad" required>
            <select name="fromTemperature">
                <option value="celsius">Celsius</option>
                <option value="fahrenheit">Fahrenheit</option>
            </select>
            <label for="toTemperature">Convertir a:</label>
            <select id="toTemperature" name="toTemperature">
                <option value="fahrenheit">Fahrenheit</option>
                <option value="celsius">Celsius</option>
            </select>
            <button type="submit" name="convertTemperature">Convertir</button>
        </form>
        <form method="post">
            <h3>Conversión de Longitud</h3>
            <label for="length">Cantidad:</label>
            <input type="number" id="length" name="length" placeholder="Cantidad" required>
            <select name="fromLength">
                <option value="meters">Metros</option>
                <option value="centimeters">Centímetros</option>
                <option value="millimeters">Milímetros</option>
            </select>
            <label for="toLength">Convertir a:</label>
            <select id="toLength" name="toLength">
                <option value="meters">Metros</option>
                <option value="centimeters">Centímetros</option>
                <option value="millimeters">Milímetros</option>
            </select>
            <button type="submit" name="convertLength">Convertir</button>
        </form>
        <form method="post">
            <h3>Conversión de Bases Numéricas</h3>
            <label for="number">Número:</label>
            <input type="text" id="number" name="number" placeholder="Número" required>
            <select name="fromBase">
                <option value="decimal">Decimal</option>
                <option value="binary">Binario</option>
                <option value="octal">Octal</option>
                <option value="hexadecimal">Hexadecimal</option>
            </select>
            <label for="toBase">Convertir a:</label>
            <select id="toBase" name="toBase">
                <option value="decimal">Decimal</option>
                <option value="binary">Binario</option>
                <option value="octal">Octal</option>
                <option value="hexadecimal">Hexadecimal</option>
            </select>
            <button type="submit" name="convertBase">Convertir</button>
        </form>
        <div id="result">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (isset($_POST['convertTemperature'])) {
                    $temperature = $_POST['temperature'];
                    $fromTemperature = $_POST['fromTemperature'];
                    $toTemperature = $_POST['toTemperature'];
                    $result = convertTemperature($temperature, $fromTemperature, $toTemperature);
                    echo "<p>Resultado: $result</p>";
                }
                if (isset($_POST['convertLength'])) {
                    $length = $_POST['length'];
                    $fromLength = $_POST['fromLength'];
                    $toLength = $_POST['toLength'];
                    $result = convertLength($length, $fromLength, $toLength);
                    echo "<p>Resultado: $result</p>";
                }
                if (isset($_POST['convertBase'])) {
                    $number = $_POST['number'];
                    $fromBase = $_POST['fromBase'];
                    $toBase = $_POST['toBase'];
                    $result = convertBase($number, $fromBase, $toBase);
                    echo "<p>Resultado: $result</p>";
                }
            }
            function convertTemperature($temperature, $from, $to) {
                if ($from == 'celsius' && $to == 'fahrenheit') {
                    return ($temperature * 9/5) + 32;
                } elseif ($from == 'fahrenheit' && $to == 'celsius') {
                    return ($temperature - 32) * 5/9;
                } else {
                    return $temperature;
                }
            }
            function convertLength($length, $from, $to) {
                if ($from == 'meters' && $to == 'centimeters') {
                    return $length * 100;
                } elseif ($from == 'meters' && $to == 'millimeters') {
                    return $length * 1000;
                } elseif ($from == 'centimeters' && $to == 'meters') {
                    return $length / 100;
                } elseif ($from == 'centimeters' && $to == 'millimeters') {
                    return $length * 10;
                } elseif ($from == 'millimeters' && $to == 'meters') {
                    return $length / 1000;
                } elseif ($from == 'millimeters' && $to == 'centimeters') {
                    return $length / 10;
                } else {
                    return $length;
                }
            }
            function convertBase($number, $fromBase, $toBase) {
                if ($fromBase == 'decimal' && $toBase == 'binary') {
                    return decbin($number);
                } elseif ($fromBase == 'decimal' && $toBase == 'octal') {
                    return decoct($number);
                } elseif ($fromBase == 'decimal' && $toBase == 'hexadecimal') {
                    return dechex($number);
                } elseif ($fromBase == 'binary' && $toBase == 'decimal') {
                    return bindec($number);
                } elseif ($fromBase == 'binary' && $toBase == 'octal') {
                    return decoct(bindec($number));
                } elseif ($fromBase == 'binary' && $toBase == 'hexadecimal') {
                    return strtoupper(dechex(bindec($number)));
                } elseif ($fromBase == 'octal' && $toBase == 'decimal') {
                    return octdec($number);
                } elseif ($fromBase == 'octal' && $toBase == 'binary') {
                    return decbin(octdec($number));
                } elseif ($fromBase == 'octal' && $toBase == 'hexadecimal') {
                    return strtoupper(dechex(octdec($number)));
                } elseif ($fromBase == 'hexadecimal' && $toBase == 'decimal') {
                    return hexdec($number);
                } elseif ($fromBase == 'hexadecimal' && $toBase == 'binary') {
                    return decbin(hexdec($number));
                } elseif ($fromBase == 'hexadecimal' && $toBase == 'octal') {
                    return decoct(hexdec($number));
                } else {
                    return $number;
                }
            }
            ?>
        </div>
        <div class="">
        <img src="imgs/cimarron_guinda_sin_fondo.png" width="100" height="100" align="right" padding="50"/>
            <font align="left">
                <ul>
                    <li><h3>Pérez Pérez, Kevin Fernando.</h3></li>
                    <li><h3>Meza Orozco, Javier de Jesús.</h3></li>
                    <li><h3>Cuarto Semestre de Programación.</h3></li>
                </ul>
            </font>
        </div>
    </div>
    </div>
</body>
</html>
<!-- Pérez Pérez, Kevin Fernando. Cuarto Semestre de Programación T.M.-->