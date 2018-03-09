
<!DOCTYPE html>
<html>
<head>

	<title></title>

	<style type="text/css">
		body {
			color: #165555;
			font-size: 27pt;
			
		}
	</style>
</head>
<body>
<?php
$cb = $_GET['ID_ITENSPEDIDO']; // variavel do codigo de barras
	
$cin = '*CIN0000';
$cin1 = '*';
$cb = $cin.$cb;
$n = strlen($cb); // contador de caracteres do codigo de barras

	//estrutura que transforma a variavel cb em um array $nome
	for ($i=0; $i < $n; $i++){
		$nome[$i] = $cb[$i];
	}

	foreach($nome as $key){
		$img = $key;
		echo '<img src="../img/'.$img.'.png"/>';
	}
	echo "<br>";
	foreach ($nome as $key) {
		echo $key;
	}
	
?>
</body>
</html>