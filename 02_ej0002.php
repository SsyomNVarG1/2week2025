<html><head><title> suma y resta  </title>
</head>
<body>
<?php 
   
if(isset($_POST['check1']) && $_POST['check1'] == 'suma')
{
	$sumar=$_POST['valor1'] + $_POST['valor2'];
	echo "la suma es ".$sumar ;
	
}
 if(isset($_POST['check2']) && $_POST['check2'] == 'resta')
{
		 $restar= $_POST['valor1'] - $_POST['valor2'];
		 echo "la resta es ".$restar ;	 
}
 
 
 ?>
</body>
</html>