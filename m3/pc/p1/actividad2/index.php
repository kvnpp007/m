<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Conversor de Unidades</title>
<style>
  body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background-color: #f4f4f4;
  }
  .container {
    text-align: center;
  }
  input[type="number"] {
    width: 100px;
    padding: 8px;
    margin: 5px;
    border-radius: 5px;
    border: 1px solid #ccc;
  }
  select {
    padding: 8px;
    margin: 5px;
    border-radius: 5px;
    border: 1px solid #ccc;
  }
  button {
    padding: 10px 20px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
  }
  button:hover {
    background-color: #0056b3;
  }
  #result {
    margin-top: 20px;
  }
</style>
</head>
<body>

<div class="container">
  <h1>Conversor de Unidades</h1>
  <form method="post">
    <h2>Conversión de Temperatura</h2>
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
    <h2>Conversión de Longitud</h2>
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
    ?>
  </div>
</div>
</body>
</html>
