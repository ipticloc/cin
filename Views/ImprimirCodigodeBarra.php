<<<<<<< HEAD
﻿<?php
include '../Classes/Sessao_CIN.php';
Sessao_CIN::ValidaSessao();

 $ID = $_GET['ID_TIPOMATERIAL'];
 $CD_BARRAS = $_GET['CD_BARRAS'];
 $DS_T = $_GET['DS_TIPOMATERIAL'];
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Código de Barras</title>  
    <link rel="stylesheet" type="text/css" href="../css/bootstrap-responsive.min.css">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <script type="text/javascript" scr="../js/bootstrap.min.js"></script>
    <script src="../js/editavel.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/editavel.css">
  </head>
  <body>    
    <a href="#"><img class="inv" src="logo-cin.png"></a>    
    <div class="container-fluid">
      <div class="row-fluid">    
        <div class="">
          <div class="hero-unit erno">
            <h1 align="center">Tipo de Material</h1>
          </div>
        </div>
      </div>
    </div>
    <center>
      <form method="post">                                      
        <br>                
        <h3>Código de Barras do Material</h3>
        <label><?php  echo "<h5>Nome do Material: $DS_T </h5>"?></label>        
        <br>
        <br>
        <br>        
        <div id='cb'>
          <?php
            echo "";
            echo "* "."$CD_BARRAS"." *";
          ?>
          <br>
        </div>
      </form>                         
      <br>
      <br>    
      <input type="button" class="btn btn-success" onclick="printpage()" value="Imprimir">
      <br>
      <br>
      <br>
      <h5>Informações do produto:</h5>
      <textarea class="nos" placeholder="Ex.: Data de entrega, destinatario, descrição do material..." maxlength="704" rows="12"></textarea>
    </center>                    
  </body>
=======

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
<body>s
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
>>>>>>> df27015e8983967067fe6b0cf51ff9010c2f1465
</html>