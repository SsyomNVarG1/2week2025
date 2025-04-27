<html>
<head>
<title> Conversor </title>
</head>
<body>
<?php 
$importe = $_POST['valor'];
$moneda = $_REQUEST['moneda'];
$url = "04_Conversor.html";
$texto = "Inicio";

if(empty($importe) || $importe<= 0){
    echo "Por favor ingrese un monto valido superior a 0 ";
    echo "<a href='$url'>$texto</a>";

}else{

    if($_REQUEST['moneda'] == $_REQUEST['cambio']){
    echo "La moneda de ingreso y de cambio es la misma, el valor es ".$_REQUEST['valor'];
    }

switch($_REQUEST['moneda']){
    case 1: switch($_REQUEST['cambio']){
        case 1: break;

        case 2:{$calculo=($importe*0.8);
            echo "el importe de cambio es de ".$calculo;
            break;}

        case 3:{$calculo=($importe*0.00075);
            echo "el importe de cambio es de ".$calculo;
            break;}

        case 4:{$calculo=($importe*0.00086);
                echo "el importe de cambio es de ".$calculo;
                break;}
            }
                break;

    case 2:switch($_REQUEST['cambio']){
        case 1:{$calculo=($importe*1.24);
            echo "el importe de cambio es de ".$calculo;
            break;}
        
        case 2: break;

        case 3:{$calculo=($importe*0.00094);
            echo "el importe de cambio es de ".$calculo;
            break;}

        case 4:{$calculo=($importe*0.0011);
            echo "el importe de cambio es de ".$calculo;
            break;}
            }
            break;

    case 3:switch($_REQUEST['cambio']){
        case 1:{$calculo=($importe*1325.83);
            echo "el importe de cambio es de ".$calculo;
            break;}
        
        case 2:{$calculo=($importe*1065);
            echo "el importe de cambio es de ".$calculo;
            break;}

        case 3:break;

        case 4:{$calculo=($importe*1.14);
            echo "el importe de cambio es de ".$calculo;
            break;}
            }
            break;

    case 4:switch($_REQUEST['cambio']){
        case 1:{$calculo =($importe*0.00086);
            echo "el importe de cambio es de ".$calculo;
            break;}
        
        case 2:{$calculo=($importe*0.0011);
            echo "el importe de cambio es de ".$calculo;
            break;}

        case 3:{$calculo=($importe*0.88);
            echo "el importe de cambio es de ".$calculo;
            break;}

        case 4: break;
            }
            break;
}
}/*Cotizacion 26-04-2025*/
?> 
    </body>
</html>
