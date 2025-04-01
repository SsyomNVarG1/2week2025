<html>
<head>
<title>Tarea25Marzo2025</title>
</head>
<body>

<?php
$nac = $_POST['nacimiento'];

$dif = 2025- $nac;


if( $dif >= 18){
    echo("Eres mayor de edad por lo tanto tus datos fueron  guardados");
    #No se guardar datos asi que le consulto al profe, pero la idea es esta

    $nombre = $_POST['nombres'];
    $apellido = $_POST['apellido'];
    $email = $_POST['correo'];
    $rs1 = $_POST['facebook'];
    $rs2 = $_POST['instagram'];
    $perfil = $_POST['perfil'];


}
else{
echo("Los datos no seran guardados debido a la minoria de edad del usuario, adios. seras expulsado de la pagina");

#no se como sacarlo de la pagina, pero la idea esta.
}


?>

</body>
</html>