<html>

<head>
  <title>Conversor</title>
</head>

<body>
  <?php
  if (isset($_POST)) {
    $importe = (isset($_POST['valor'])) ? (float)$_POST['valor'] : false;
    $importe = ($importe < 1) ? 1 : $importe;

    $tipo_de_cambio = (isset($_POST['radio1'])) ? $_POST['radio1'] : false;

    if ($tipo_de_cambio === false) header('Location: 04_Conversor.html');
    switch ($tipo_de_cambio) {
      case 'Dolar': {
          $dolar = $importe * 8;
          echo "<p>El valor convertido en dolar es: " . $dolar . "</p>";
          break;
        }

      case 'Peso Chileno': {
          $peso_chileno = $importe * 68.35;
          echo "<p>El valor convertido en pesos chilenos es: " . $peso_chileno . "</p>";
          break;
        }

      case 'Euros': {
          $euros = $importe * 10.30;
          echo "<p>El valor convertido en euros es: " . $euros . "</p>";
          break;
        }

      case 'Pesos Argentinos': {
          $pesos_argentinos = $importe * 1;
          echo "<p>El valor convertido en pesos argentinos es: " . $pesos_argentinos . "</p>";
          break;
        }

      default:
        echo "<p>El tipo de cambio no es valido.</p>";
        break;
    }

    echo '<a href="./04_Conversor.html">Volver</a>';
  } else {
    header('Location: 04_Conversor.html');
  }
  ?>
</body>

</html>