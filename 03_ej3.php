<html>
	<head>
		<title> suma y resta</title>
	</head>
<body>
<!-- PONGO UN COLOR DE FONDO -->
<body bgcolor="F3C327">
<?php 
/* GUARDO EL VALOR DEL IMPORTE A FINANCIAR EN UNA VARIABLE */
$importe=$_REQUEST['valor1'];
$url = "03_ej3.html";
$texto = "Inicio";
/* LUEGO PREGUNTO SI LA VARIABLE CUOTA TIENE EL VALOR QUE BUSCO PARA REALIZAR EL CALCULO DE LOS INTERESES */
if (empty($importe) || empty($_REQUEST['cuota'])) {
    echo "Por favor, ingrese los valores necesarios.";
    exit;
}else{

switch($_REQUEST['cuota']){
	case 1: {
		$calculo=$importe * 1.10 ;
		echo "El total a pagar en 1(Una) cuotas por cuota es " .($calculo/$_REQUEST['cuota']) ."<br>" ;
		echo "El total a pagar en 1(Una) cuotas " .$calculo ."<br>";
		echo "<a href='$url'>$texto</a>";
		break;
	}
	case 2: {
		$calculo=$importe * 1.12 ;
		echo "El total a pagar en 2(Dos) cuotas por cuota es " .($calculo/$_REQUEST['cuota']) ."<br>" ;
		echo "El total a pagar en 2(Dos) cuotas " .$calculo ."<br>";
		echo "<a href='$url'>$texto</a>";
		break;
	}
	case 3: {
		$calculo=$importe * 1.14 ;
		echo "El total a pagar en 3(Tres) cuotas por cuota es " .($calculo/$_REQUEST['cuota']) ."<br>" ;
		echo "El total a pagar en 3(Tres) cuotas " .$calculo ."<br>";
		echo "<a href='$url'>$texto</a>";
		break;
	}
	case 4: {
		$calculo=$importe * 1.16 ;
		echo "El total a pagar en 4(Cuatro) cuotas por cuota es " .($calculo/$_REQUEST['cuota']) ."<br>" ;
		echo "El total a pagar en 4(Cuatro) cuotas " .$calculo ."<br>";
		echo "<a href='$url'>$texto</a>";
		break;
		var_dump($calculo);
	}
	case 5: {
		$calculo=$importe * 1.18 ;
		echo "El total a pagar en 5(Cinco) cuotas por cuota es " .($calculo/$_REQUEST['cuota']) ."<br>" ;
		echo "El total a pagar en 5(Cinco) cuotas " .$calculo ."<br>";
		echo "<a href='$url'>$texto</a>";
		break;
	}
	case 6: {
		$calculo=$importe * 1.20 ;
		echo "El total a pagar en 6(Seis) cuotas por cuota es " .($calculo/$_REQUEST['cuota']) ."<br>" ;
		echo "El total a pagar en 6(Seis) cuotas " .$calculo ."<br>";
		echo "<a href='$url'>$texto</a>";
		break;
	}
	case 7: {
		$calculo=$importe * 1.22 ;
		echo "El total a pagar en 7(Siete) cuotas por cuota es " .($calculo/$_REQUEST['cuota']) ."<br>" ;
		echo "El total a pagar en 7(Siete) cuotas " .$calculo ."<br>";
		echo "<a href='$url'>$texto</a>";
		break;
	}
	case 8: {
		$calculo=$importe * 1.24 ;
		echo "El total a pagar en 8(Ocho) cuotas por cuota es " .($calculo/$_REQUEST['cuota']) ."<br>" ;
		echo "El total a pagar en 8(Ocho) cuotas " .$calculo ."<br>";
		echo "<a href='$url'>$texto</a>";
		break;
	}
	case 9: {
		$calculo=$importe * 1.26 ;
		echo "El total a pagar en 9(Nueve) cuotas por cuota es " .($calculo/$_REQUEST['cuota']) ."<br>" ;
		echo "El total a pagar en 9(Nueve) cuotas " .$calculo ."<br>";
		echo "<a href='$url'>$texto</a>";
		break;
	}
	case 10: {
		$calculo=$importe * 1.28 ;
		echo "El total a pagar en 10(diez) cuotas por cuota es " .($calculo/$_REQUEST['cuota']) ."<br>" ;
		echo "El total a pagar en 10(diez) cuotas " .$calculo ."<br>";
		echo "<a href='$url'>$texto</a>";
		break;
	}
	case 11: {
		$calculo=$importe * 1.30 ;
		echo "El total a pagar en 11(Once) cuotas por cuota es " .($calculo/$_REQUEST['cuota']) ."<br>" ;
		echo "El total a pagar en 11(Once) cuotas " .$calculo ."<br>";
		echo "<a href='$url'>$texto</a>";
		break;
	}
	case 12: {
		$calculo=$importe * 1.32 ;
		echo "El total a pagar en 12(Doce) cuotas por cuota es " .($calculo/$_REQUEST['cuota']) ."<br>" ;
		echo "El total a pagar en 12(Doce) cuotas " .$calculo ."<br>";
		echo "<a href='$url'>$texto</a>";
		break;
	}
}
}
 ?>
 
</body>
</html>