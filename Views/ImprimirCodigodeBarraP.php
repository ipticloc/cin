<?php
include '../Classes/Sessao_CIN.php';
Sessao_CIN::ValidaSessao();

 $ID = $_GET['ID_ITENSPEDIDO'];
 $CD_BARRASP = $_GET['CD_BARRASP'];
 $DS_I = $_GET['DS_ITEM']
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
        <label><?php  echo "<h5>Nome do Material: $DS_I </h5>"?></label>        
        <br>
        <br>
        <br>        
        <div id='cb'>
          <?php
            echo "";
            echo "* "."$CD_BARRASP"." *";
            //gerador de código de barras.
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
      <textarea class="nos" placeholder="Ex.: Data de entrega, destinatario, descrinção do material..." maxlength="704" rows="12"></textarea>
    </center>                    
  </body>
</html>
