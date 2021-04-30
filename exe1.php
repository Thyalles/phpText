<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>Curso PHP</title>
</head>
<body>
	<?php  
		$idade = 5;
		$peso = 40;

		if(($idade>15 && $idade<70) && $peso >= 50.0){
			echo 'Atende aos requisitos';
		}else{
			echo "Não atende aos requisitos";
		}

		echo "<br/> ";
		echo date('d/m/Y H:i');
		echo "<br/> ";
		echo date_default_timezone_get();
		echo date_default_timezone_set('America/Bahia');
		echo "<br/> ";
		echo date('d/m/Y H:i');

	?>	
</body>
</html>