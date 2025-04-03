<html>
<head>
<title> Conversor </title>
</head>
<body>
<?php 
$Importe = $_POST['Valor'];
if ($_POST['Radio1'] == "Dolar")
{

$Dolar= $Importe*8;
Echo " El valor convertido en dolar es :".$Dolar;

}

elseif($_POST['Radio1'] == "Peso Chileno")
{

$PesoChileno= $Importe*68.35;
Echo " El valor convertido en pesos chilenos es :".$PesoChileno;

}

elseif($_POST['Radio1'] == "Euros")
{

$Euros= $Importe*10.30;
Echo " El valor convertido en euros es :".$Euros;


}

elseif($_POST['Radio1'] == "Pesos Argentinos")
{

$PesosArgentinos= $Importe*1;
Echo " El valor convertido en pesos argentinos es :".$PesosArgentinos;
}

?> </body></html>