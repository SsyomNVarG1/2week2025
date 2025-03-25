<?php  
//direccion IP de un usuario  

$ip = $_SERVER["REMOTE_ADDR"];  

echo "Mi dirección IP es: $ip". "<br />";  

echo "IP Share: " . $_SERVER['HTTP_CLIENT_IP'] . "<br />";
echo "IP Proxy: " . $_SERVER['HTTP_X_FORWARDED_FOR'] . "<br />";
echo "IP Access: " . $_SERVER['REMOTE_ADDR'] . "<br />";
?> 