
<font face="Arial, Trebuchet MS, Verdana" size="2" color="#000000">


<?
$op=$_POST['op'];
$existe=0;
$archivo=fopen('result.dat','a+') or die("no puedo abrir archivo");
$archivo2=fopen('result.tmp','a+')or die("no puedo abrir archivo temporal de trabajo");
while(!feof($archivo) && $existe==0)
{
      $linea=fgets($archivo);
      $datos=explode("|",$linea);
      $seek=$datos[0];
      $count_vote=$datos[1];
      settype($count_vote,"integer");
      settype($seek,"integer");
      settype($op,"integer");
      if($seek==$op)
      {
            $count_vote++;
            $existe=1;
      }
}
if ($existe==0){
      fclose($archivo);
      $archivo=fopen('result.dat','a') or die("no puedo abrir archivo");
      $count_vote=1;    
      fputs($archivo,$op."|".$count_vote."\n");
}
else{
      fclose($archivo);
      $archivo=fopen('result.dat','r') or die("no puedo abrir archivo");
      while(!feof($archivo))
      {
            $linea=fgets($archivo);
            $datos=explode("|",$linea);
            $seek=$datos[0];
            settype($seek,"integer");
            settype($op,"integer");
            if($seek==$op)
            {
                  fputs($archivo2,$op."|".$count_vote."\n");      
            }
            else {
                  fputs($archivo2,$linea);
            }
      }
}

echo "<a href=javascript:history.back(-1);>Se ha realizado la actualizaci�n desea volver?</a>";
fclose($archivo);
fclose($archivo2);
if ($existe==1){
      unlink("result.dat");
      rename("result.tmp","result.dat");
}
echo "<B><U>RESULTADOS ENCUESTA</B></U>";
echo "<br><br>";
echo "Total Votos: <b>$votos</b>";
echo "<br><br>";
echo "<a href=javascript:history.back(-1);>Volver</a>";
echo"<br>";
?>
</font>
