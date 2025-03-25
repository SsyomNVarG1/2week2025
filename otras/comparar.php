<?php 
// Verficiamos si dos cadenas son iguales e identicas 

// strcmp -- diferencia entre mayusculas y minusculas 
// strcasecmp -- no diferencia entre mayusculas y minusculas 
// Ambas devuelven 0 ó -1 

$var1= "Uterra.com"; 
$var2= "uterra.com"; 

$verf_identico = strcmp($var1, $var2); 

if ($verf_identico <> 0)  
{  
echo "<b>$var1</b> y <b>$var2</b> NO son identicos ($verf_identico)";  
}  
else  
{  
echo "<b>$var1</b> y <b>$var2</b> son identicos ($verf_identico)";  
}  

?>
