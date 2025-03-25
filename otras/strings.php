<?php  
// Recortamos una cadena  


$cadena = "Esto es una cadena";  

$nueva_cadena1 = substr($cadena, 2);     // Eliminamos los 2 caracteres de la izquierda  
$nueva_cadena2 = substr($cadena, -3);    // Imprimimos los 3 caracteres de la derecha  
$nueva_cadena3 = substr($cadena, 2,-3);     // Eliminamos 2 caracteres por la izquierda y 3 por la derecha  
$nueva_cadena4 = substr($cadena, 0,10);    // Imprimimos los 10 primeros caracteres de la izquierda 
$nueva_cadena5 = substr($cadena, 0,-4);    // Eliminamos 4 caracteres por la derecha 


echo " 
Cadena original: <br> $cadena <br> 
--------------- <br> 
$nueva_cadena1 - Eliminamos los 2 caracteres de la izquierda <br> 
$nueva_cadena2 - Imprimimos los 3 caracteres de la derecha <br> 
$nueva_cadena3 - Eliminamos 2 caracteres por la izquierda y 3 por la derecha <br>  
$nueva_cadena4 - Imprimimos los 10 primeros caracteres de la izquierda  <br> 
$nueva_cadena5 - Eliminamos 4 caracteres por la derecha <br> 
";  
?>