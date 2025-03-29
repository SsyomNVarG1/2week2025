<html>

<head>
  <title>Calculo de intereses</title>
</head>

<body>
  <!--- PONGO UN COLOR DE FONDO ---->

  <body bgcolor="F3C327">
    <?php
    if (isset($_REQUEST)) {
      /* GUARDO EL VALOR DEL IMPORTE A FINANCIAR EN UNA VARIABLE */
      $importe = (isset($_REQUEST['valor1'])) ? (float)$_REQUEST['valor1'] : false;
      $importe = ($importe < 1) ? 1 : $importe;
      /* LUEGO PREGUNTO SI LA VARIABLE RADIO1 TIENE EL VALOR QUE BUSCO PARA REALIZAR EL CALCULO DE LOS INTERESES */

      $num_coutas = (isset($_REQUEST['radio1'])) ? $_REQUEST['radio1'] : false;

      if ($num_coutas === false) header('Location: 03_ej3.html');
      switch ($num_coutas) {
        case 1: {
            echo "<p>El total a pagar en " . $num_coutas . " cuota es: " . $importe . "</p>";
            break;
          }

        case 2: {
            $calculo = $importe * 1.02;
            echo "<p>El total a pagar en " . $num_coutas . " cuotas por cuota es: " . ($calculo / $num_coutas) . "</p>";
            echo "<p>El total a pagar en " . $num_coutas . " cuotas es: " . $calculo . "</p>";
            break;
          }

        case 3: {
            $calculo = $importe * 1.03;
            echo "<p>El total a pagar en " . $num_coutas . " cuotas por cuota es: " . ($calculo / $num_coutas) . "</p>";
            echo "<p>El total a pagar en " . $num_coutas . " cuotas es: " . $calculo . "</p>";
            break;
          }

        case 4: {
            $calculo = $importe * 1.04;
            echo "<p>El total a pagar en " . $num_coutas . " cuotas por cuota es: " . ($calculo / $num_coutas) . "</p>";
            echo "<p>El total a pagar en " . $num_coutas . " cuotas es: " . $calculo . "</p>";
            break;
          }

        case 5: {
            $calculo = $importe * 1.05;
            echo "<p>El total a pagar en " . $num_coutas . " cuotas por cuota es: " . ($calculo / $num_coutas) . "</p>";
            echo "<p>El total a pagar en " . $num_coutas . " cuotas es: " . $calculo . "</p>";
            break;
          }

        case 6: {
            $calculo = $importe * 1.06;
            echo "<p>El total a pagar en " . $num_coutas . " cuotas por cuota es: " . ($calculo / $num_coutas) . "</p>";
            echo "<p>El total a pagar en " . $num_coutas . " cuotas es: " . $calculo . "</p>";
            break;
          }

        case 7: {
            $calculo = $importe * 1.07;
            echo "<p>El total a pagar en " . $num_coutas . " cuotas por cuota es: " . ($calculo / $num_coutas) . "</p>";
            echo "<p>El total a pagar en " . $num_coutas . " cuotas es: " . $calculo . "</p>";
            break;
          }

        case 8: {
            $calculo = $importe * 1.08;
            echo "<p>El total a pagar en " . $num_coutas . " cuotas por cuota es: " . ($calculo / $num_coutas) . "</p>";
            echo "<p>El total a pagar en " . $num_coutas . " cuotas es: " . $calculo . "</p>";
            break;
          }

        case 9: {
            $calculo = $importe * 1.09;
            echo "<p>El total a pagar en " . $num_coutas . " cuotas por cuota es: " . ($calculo / $num_coutas) . "</p>";
            echo "<p>El total a pagar en " . $num_coutas . " cuotas es: " . $calculo . "</p>";
            break;
          }

        case 10: {
            /* EN UNA VARIABLE AUXILIAR REALIZO EL CALCULO DEL INTERES */
            $calculo = $importe * 1.10;
            /* MUESTRO EL VALOR DE CADA CUOTA DIVIDIENDO EL TOTAL POR LA CANTIDAD DE CUOTAS */
            echo "<p>El total a pagar en " . $num_coutas . " cuotas por cuota es: " . ($calculo / $num_coutas) . "</p>";
            echo "<p>El total a pagar en " . $num_coutas . " cuotas es: " . $calculo . "</p>";
            break;
          }

        case 11: {
            $calculo = $importe * 1.11;
            echo "<p>El total a pagar en " . $num_coutas . " cuotas por cuota es: " . ($calculo / $num_coutas) . "</p>";
            echo "<p>El total a pagar en " . $num_coutas . " cuotas es: " . $calculo . "</p>";
            break;
          }

        case 12: {
            $calculo = $importe * 1.12;
            echo "<p>El total a pagar en " . $num_coutas . " cuotas por cuota es: " . ($calculo / $num_coutas) . "</p>";
            echo "<p>El total a pagar en " . $num_coutas . " cuotas es: " . $calculo . "</p>";
            break;
          }

        default:
          echo "<p>El número de cuotas es incorrecto.</p>";
          break;
      }

      echo '<a href="./03_ej3.html">Volver</a>';
    } else {
      header('Location: 03_ej3.html');
    }
    ?>
  </body>

</html>