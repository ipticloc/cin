<?php 
$codigo = $_POST['codigo'];
echo $codigo;
echo "<br>";
$tamPalavra = strlen($codigo);
echo $tamPalavra;

  echo "<br><br><br>";


for ($i = 0; $i < $tamPalavra; $i++) {
  
  
  $Separar = $codigo[$i] % 2;
  if ($Separar == 0)
  {
  	echo 'Par ' . $i . ' = ' . $codigo[$i] . '<br />';
  	$Par = $codigo[$i] + $Par;

  }
  else
  {
  	
  	echo 'Impar ' . $i . ' = ' . $codigo[$i] . '<br />';
  	$impar = $codigo[$i] + $impar;
  }
}
$imparFinal = $impar * 3;
$Final = $imparFinal + $Par;
  
  $dv = 10 - ($Final%10);

  echo "<br><br><br>";
  echo "o digito verificador é: ".$dv;
  echo $codigo;
  echo "<br>";
  echo $dv;

?>