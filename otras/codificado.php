<?php 
// Codificacion y decodificacion de cadenas y valores numericos 

$cadena = $_POST["cadena"]; 

if (empty($cadena))   
{   
echo "<p align=\"center\">Introduzca la cadena que desea codificar.</p>";   
}   
else   
{  

$cod_url = urlencode($cadena); 
$deco_url = urldecode($cod_url); 

$codifica1 = base64_encode($cadena); 
$decodifica2 = base64_decode($codifica1); 

$codifica3 = convert_uuencode($cadena); 
$decodifica4 = convert_uudecode($codifica3); 

// Codificado no reversible 
$codifica5 = md5($cadena); 

echo " 
<p> 
<b>Codificado con URLenconde: </b> 
<div class=\"texto\">$cod_url</div> 
Decodificado URLdecode: $deco_url  
</p> 

<p> 
<b>Codificado en base 64: </b> 
<div class=\"texto\">$codifica1</div> 
Decodificado en base 64: $decodifica2  
</p> 

<p> 
<b>Codificado seguro con algoritmo uuencode: </b> 
<div class=\"texto\">$codifica3</div> 
Decodificado seguro con algoritmo uuencode: $decodifica4  
</p> 

<p> 
<b>Codificación no reversible (MD5): </b> 
<div class=\"texto\">$codifica5</div> 
</p> 
"; 

} 

?> 
</body> 

</html>
