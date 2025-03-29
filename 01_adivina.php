<html>

<head>
  <title>Adivina</title>
</head>

<body>
  <?php
  if (isset($_POST)) {
    $num = (isset($_POST['valor1'])) ? (int)$_POST['valor1'] : false;
    $adivina = rand(1, 20);

    if (is_numeric($num) && ($num >= 1 && $num <= 20)) {
      if ($num === $adivina) {
        echo "<p>Ganaste!</p>";
        echo '<a href="./01_adivina.html">Volver</a>';
      } else {
        echo "<p>Perdiste!</p>";
        echo "<p>El número era: " . $adivina . "</p>";
        echo '<a href="./01_adivina.html">Volver</a>';
      }
    } else {
      echo "<p>Ingresa un número válido entre 1 y 20.</p>";
      echo '<a href="./01_adivina.html">Volver</a>';
    }
  } else {
    header('Location: 01_adivina.html');
  }
  ?>
</body>

</html>