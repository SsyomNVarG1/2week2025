<?php   
// Devuelve el mes en español   

$mes_actu = date("n"); // Mes del 1 al 12  

    $array_mes_espa = array( 
        1=>"Enero",  
        2=>"Febrero",  
        3=>"Marzo",  
        4=>"Abril",  
        5=>"Mayo",  
        6=>"Junio",  
        7=>"Julio",  
        8=>"Agosto",  
        9=>"Septiembre",  
        10=>"Octubre",  
        11=>"Noviembre",  
        12=>"Diciembre" 
    );  
   
$mes_espa = $array_mes_espa[$mes_actu];    

// echo "$mes_actu - $mes_espa";   

// ---------------------------------------- 

// Devuelve el dia de la semana en español 

$dia_actu = date("w"); // Dia semana 0 a 6, donde 0 es domingo  

    $array_dia_semana = array( 
        0=>"Domingo",  
        1=>"Lunes",  
        2=>"Martes",  
        3=>"Miércoles",  
        4=>"Jueves",  
        5=>"Viernes",  
        6=>"Sábado" 
    ); 

$dia_semana = $array_dia_semana[$dia_actu];   

// echo "$dia_actu - $dia_semana";  

// ---------------------------------------- 

$_dia = date("d");    // Devuelve el dia del mes 
$_anio = date("Y");    // Devuelve el año 

$_feespanol = "Hoy es $dia_semana $_dia de $mes_espa de $_anio."; 
// ---------------------------------------- 

echo "$_feespanol"; 
?>