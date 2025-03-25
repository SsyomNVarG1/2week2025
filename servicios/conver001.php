<?
$get = @file_get_contents("https://api.bluelytics.com.ar/v2/latest");
if (strpos($http_response_header[0], "200")) { 
  var_dump($get);
  exit();
 var_dump($http_response_header[0]);
 $decoded_json = json_decode($get, true);
  $dolar_oficial= $decoded_json['oficial'];
   $dolar_blue= $decoded_json['blue'];
  $euro_oficial=$decoded_json['oficial_euro'];
   $euro_blue=$decoded_json['blue_euro'];
   echo "Dolar Oficial=".$dolar_oficial['value_sell'];
   echo "<br>";
   echo $dolar_blue['value_sell'];
   echo "<br>";
   echo $euro_oficial['value_sell'];
   echo "<br>";
   echo $euro_blue['value_sell'];
   echo "<br>";
   echo $decoded_json['last_update'];
   
} else { 
    echo "<h1> Error en conexion<h1>";
   var_dump($http_response_header[0]);
} 

?>
