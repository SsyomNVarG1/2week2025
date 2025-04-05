<font face="Arial, Trebuchet MS, Verdana" size="2" color="#000000">

  <?php
  if (!empty($_POST)) {
    $op = isset($_POST['op']) ? (int)$_POST['op'] : 0;
    
    if ($op < 1 || $op > 6) {
      header("Location: opcion.php");
      exit;
    }
    
    $existe = 0;
    $count_vote = 0;
    $lineas = [];
    
    // Abrir archivo para lectura
    $archivo = @fopen('result.dat', 'r+') or die("No puedo abrir archivo");
    
    // Leer todo el archivo y buscar la opción
    while (!feof($archivo)) {
      $linea = fgets($archivo);
      if (empty(trim($linea))) continue;
      
      $datos = explode("|", $linea);
      if (count($datos) < 2) continue;
      
      $seek = (int)$datos[0];
      $votos = (int)$datos[1];
      
      if ($seek == $op) {
        $count_vote = $votos + 1;
        $existe = 1;
        $lineas[] = "$op|$count_vote\n";
      } else {
        $lineas[] = $linea;
      }
    }
    
    // Si no existe la opción, agregarla con un voto
    if ($existe == 0) {
      $count_vote = 1;
      $lineas[] = "$op|$count_vote\n";
    }
    
    fclose($archivo);
    
    $archivo = @fopen('result.dat', 'w') or die("No puedo abrir archivo para escritura");
    foreach ($lineas as $linea) {
      fputs($archivo, $linea);
    }
    fclose($archivo);
    
    $total_votos = 0;
    foreach ($lineas as $linea) {
      $datos = explode("|", $linea);
      if (count($datos) >= 2) {
        $total_votos += (int)$datos[1];
      }
    }
    
    echo "<a href='javascript:history.back(-1);'>Se ha realizado la actualización. ¿Desea volver?</a>";
    echo "<br /><br />";
    echo "<b><u>RESULTADOS ENCUESTA</b></u>";
    echo "<br />";
    echo "Votos para opción $op: <b>{$count_vote}</b>";
    echo "<br />";
    echo "Total Votos: <b>{$total_votos}</b>";
    echo "<br /><br />";
    echo "<a href='javascript:history.back(-1);'>Volver</a>";
    echo "<br />";
  } else {
    header("Location: opcion.php");
    exit;
  }
?>

</font>