<html>

<head>
  <title>suma y resta</title>
</head>

<body>
  <?php
  if (isset($_POST)) {
    $valor1 = (isset($_POST['valor1'])) ? (int)$_POST['valor1'] : false;
    $valor2 = (isset($_POST['valor2'])) ? (int)$_POST['valor2'] : false;

    $valor1 = ($valor1 < 0) ? 0 : $valor1;
    $valor2 = ($valor2 < 0) ? 0 : $valor2;

    if (isset($_POST['check1']) || isset($_POST['check2'])) {
      if (isset($_POST['check1']) && $_POST['check1'] === 'suma') {
        $sumar = $valor1 + $valor2;
        echo "<p>La suma es: " . $sumar . "</p>";
      }

      if (isset($_POST['check2']) && $_POST['check2'] === 'resta') {
        $restar = abs($valor1 - $valor2);
        echo "<p>La resta es: " . $restar . "</p>";
      }

      echo '<a href="./02_ej0002.html">Volver</a>';
    } else {
      header('Location: 02_ej0002.html');
    }
  } else {
    header('Location: 02_ej0002.html');
  }
  ?>
</body>

</html>