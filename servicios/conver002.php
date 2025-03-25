<?php
   
    $ch = curl_init(); 
//    curl_setopt($ch, CURLOPT_HTTPHEADER, 0);
    curl_setopt($ch, CURLOPT_URL, "https://api.bluelytics.com.ar/v2/latest");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $res = curl_exec($ch);
    $code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch); 
//    print_r($res);
    print_r($code);
    echo "<br>";
 $decoded_json = json_decode($res, true);
   $dolar_oficial= $decoded_json['oficial'];
   $dolar_blue= $decoded_json['blue'];
   $euro_oficial=$decoded_json['oficial_euro'];
   $euro_blue=$decoded_json['blue_euro'];
   echo $dolar_oficial['value_sell'];
   echo "<br>";
   echo $dolar_blue['value_sell'];
   echo "<br>";
   echo $euro_oficial['value_sell'];
   echo "<br>";
   echo $euro_blue['value_sell'];
   echo "<br>";
   echo $decoded_json['last_update'];
    
?>

