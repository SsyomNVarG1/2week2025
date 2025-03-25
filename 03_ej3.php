<html><head><title> suma y resta  </title>
</head>
<body>
<! PONGO UN COLOR DE FONDO ------ >
<body bgcolor="F3C327">
<?php 
/* GUARDO EL VALOR DEL IMPORTE A FINANCIAR EN UNA VARIABLE */
$importe=$_REQUEST['valor1'];
/* LUEGO PREGUNTO SI LA VARIABLE RADIO1 TIENE EL VALOR QUE BUSCO PARA REALIZAR EL CALCULO DE LOS INTERESES */
if($_REQUEST['radio1']==10)
{
/* EN UNA VARIABLE AUXILIAR REALIZO EL CALCULO DEL INTERES */
	$calculo=$importe * 1.10 ;
/* MUESTRO EL VALOR DE CADA CUOTA DIVIDIENDO EL TOTAL POR LA CANTIDAD DE CUOTAS */
	echo "El total a pagar en 10(diez) cuotas por cuota es " .($calculo/$_REQUEST['radio1']) ."<br>" ;
	echo "El total a pagar en 10(diez) cuotas " .$calculo ."<br>";
}
 
 ?>
 
</body>
</html>