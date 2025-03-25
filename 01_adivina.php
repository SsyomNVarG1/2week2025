<html>
	<head> <title> Adivina </title> </head>
	<body>
		<?
			$num = $_POST['valor1'];
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
		?>
	<body>
<html>	
