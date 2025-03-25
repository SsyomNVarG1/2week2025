<?php 
// Creamos un directorio o carpeta  

$directorio = "mis_fotos"; 
$dirmake = mkdir("$directorio", 0777); 
?> 
=================================== 
<?php 
// Eliminamos un directorio o carpeta vacio 

$directorio = "mis_fotos"; 
$dirmake = rmdir("$directorio"); 
?> 
=================================== 
<?php 
// Eliminamos la foto - en_la_playa.jpg - que está en el  
// directorio en el directorio - mis_fotos - 

$foto = "mis_fotos/en_la_playa.jpg"; 
unlink($foto); 

?> 
=================================== 
<?php  
// Eliminamos todas las fotos contenidas en el directorio - mis_fotos - y seguidamente 
// eliminamos la carpeta o directorio 

$mis_fotos = "mis_fotos";    // Carpeta que contine archivos y queremos eliminar 

foreach(glob($mis_fotos."/*.*") as $archivos_carpeta)  
{  
 unlink($archivos_carpeta);     // Eliminamos todos los archivos de la carpeta hasta dejarla vacia  
}  
rmdir($mis_fotos);         // Eliminamos la carpeta vacia  

?>