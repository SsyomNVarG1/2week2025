<?php
$nombre=$_POST['nombre'];
$contraseña=$_POST['contraseña'];
$NomAdmin="kevin";
$ContrAdmin="hola123";
if($nombre==$NomAdmin||$contraseña==$ContrAdmin)
{
    echo "<h1>Buenos Dias Admin</h1>";
}
else 
{
    echo"No Eres Admin";
}


?>