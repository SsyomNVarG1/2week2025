<html>
	<head> <title> Adivina </title> </head>
	<body>
		<?
			$num = $_POST['valor1'];
			
			if($num>=1 && $num<=20){ 
				$adivina = rand(1,20);
				if($num == $adivina)
				{  
					echo "ganaste!";
				}
				else 
				{
					echo "perdiste! <br>";
					echo "el numero era ".$adivina;
				}
			}else 
			{
				echo "el  numero ingresado no esta en el rango indicado";
				
			}
		?>
	<body>
<html>	
