<?php
include '../Classes/ConexaoBanco.php';

include '../Classes/Sessao_CIN.php';
Sessao_CIN::ValidaSessao();

//$conexao = mysqli_connect("localhost","root","cloc","CIN_DB");
//mysqli_set_charset($conexao, 'utf8');

$banco = new ConexaoBanco();



$PesquisaId = $_GET["PesquisaIdPedido"];


if($PesquisaId != ""){

    $sql = "SELECT * FROM ItensPedido WHERE ID_ITENSPEDIDO='".$PesquisaId."'";
    $TodosItensDoPedido = $banco->executeQuery($sql);

function geraCodigoBarra($numero){
    $fino = 2.5;
    $largo = 13;
    $altura = 50;
    
    $barcodes[0] = '00110';
    $barcodes[1] = '10001';
    $barcodes[2] = '01001';
    $barcodes[3] = '11000';
    $barcodes[4] = '00101';
    $barcodes[5] = '10100';
    $barcodes[6] = '01100';
    $barcodes[7] = '00011';
    $barcodes[8] = '10010';
    $barcodes[9] = '01010';
    
    for($f1 = 9; $f1 >= 0; $f1--){
      for($f2 = 9; $f2 >= 0; $f2--){
        $f = ($f1*10)+$f2;
        $texto = '';
        for($i = 1; $i < 6; $i++){
          $texto .= substr($barcodes[$f1], ($i-1), 1).substr($barcodes[$f2] ,($i-1), 1);
        }
        $barcodes[$f] = $texto;
      }
    }
    
    echo '<img src="../imagens/p.gif" width="'.$fino.'" height="'.$altura.'" border="0" />';
    echo '<img src="../imagens/b.gif" width="'.$fino.'" height="'.$altura.'" border="0" />';
    echo '<img src="../imagens/p.gif" width="'.$fino.'" height="'.$altura.'" border="0" />';
    echo '<img src="../imagens/b.gif" width="'.$fino.'" height="'.$altura.'" border="0" />';
    
    echo '<img ';
    
    $texto = $numero;
    
    if((strlen($texto) % 2) <> 0){
      $texto = '0'.$texto;
    }
    
    while(strlen($texto) > 0){
      $i = round(substr($texto, 0, 2));
      $texto = substr($texto, strlen($texto)-(strlen($texto)-2), (strlen($texto)-2));
      
      if(isset($barcodes[$i])){
        $f = $barcodes[$i];
      }
      
      for($i = 1; $i < 11; $i+=2){
        if(substr($f, ($i-1), 1) == '0'){
            $f1 = $fino ;
          }else{
            $f1 = $largo ;
          }
          
          echo 'src="../imagens/p.gif" width="'.$f1.'" height="'.$altura.'" border="0">';
          echo '<img ';
          
          if(substr($f, $i, 1) == '0'){
          $f2 = $fino ;
        }else{
          $f2 = $largo ;
        }
        
        echo 'src="../imagens/b.gif" width="'.$f2.'" height="'.$altura.'" border="0">';
        echo '<img ';
      }
    }
    echo 'src="../imagens/p.gif" width="'.$largo.'" height="'.$altura.'" border="0" />';
    echo '<img src="../imagens/b.gif" width="'.$fino.'" height="'.$altura.'" border="0" />';
    echo '<img src="../imagens/p.gif" width="1" height="'.$altura.'" border="0" />';
  }

}



//$TodosItensDoPedido = mysqli_query($conexao,$sql);
//print_r($TodosItensDoPedido);
//exit();
//mysqli_close($conexao);



?>



<!DOCTYPE html>
<html>

<head>

<meta charset="utf-8">
<title>Pesquisar Codigo De Barra</title>
<t <link rel="stylesheet" type="text/css" href="style.css">
   <link rel="stylesheet" type="text/css" href="../css/bootstrap-responsive.min.css">
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
  <script type="text/javascript" scr="../js/bootstrap.min.js"></script>
  <style type="text/css">
    .a{
      font-size: 70px;
      height: 10%;
      width: 35%;
    }
    .parado{
    
    display: inline-block; 
    border-radius: 50%; 
    height: 10px; width: 10px; 
    border: 1px solid #000000; 
    background-color:#DD0000;
  }

  .executando{
    
    display: inline-block; 
    border-radius: 50%; 
    height: 10px; width: 10px;
    border: 1px solid #000000; 
    background-color: #FFFF00;

  }
  .concluido{
    display: inline-block; 
    border-radius: 50%; 
    height: 10px; width: 10px; 
    border: 1px solid #000000; 
    background-color: #00DD00;
    
  }
  .principal {
  float: left;
  background-color: red;
}
.direita{
  float: right;
  background-color:blue;
}
  </style>
</head>


<body>
 <?php include("menu_topo.php"); ?>

    <div class="container-fluid">
    <div class="row-fluid">
    <?php include("menu_lateral.php"); ?>
        <div class="span9">
        <div class="hero-unit">
        <h1 align="center">Pesquisar Codigo De Barra</h1>
        </div>

        

 
     <fieldset>
      <div align="left" class="control-group">

   
    	
    <br>
    

    <div class="container">
        <label>Pesquisa : </label>

        <form class="form-inline">
          <label>ID</label>
          <input type="text" name="PesquisaIdPedido" placeholder="Ex: 231">
         
          <input class="btn btn-info" type="submit" value="Pesquisar">
        </form>

    </div>
    <br>
     
       <table style="width:90%;" class="table table-striped">
     <tr>
          <td>ID Pedido</td>
          <td>Sequência do pedido</td>
          <td>Quantidade de item</td>
          <td>Nome do item</td>
          <td>Cor</td>
          <td>Data do cadastro</td>
          <td>ID ITENS PEDIDO</td>

          <td>Ações</td>
         
    
         
         
     </tr>

    <?php
         while ($linha = mysqli_fetch_array($TodosItensDoPedido)) {

           echo " <tr>
                <td style=\"text-align:center\">$linha[ID_PEDIDO]</td>
                <td style=\"text-align:center\">$linha[SQ_PEDIDO]</td>
                <td style=\"text-align:center\">$linha[VL_QUANTIDADE]</td>
                <td style=\"text-align:center\">$linha[DS_ITEM]</td> 
                <td style=\"text-align:center\">$linha[DS_COR]</td>
                <td style=\"text-align:center\">$linha[DT_CADASTRO]</td>
                <td style=\"text-align:center\">$linha[ID_ITENSPEDIDO]</td>
                <td align=\"center\"> 
                   <a class=\"btn\" href=\"AtualizarItemDoPedido.php?SQ_PEDIDO=$linha[SQ_PEDIDO]&VL_QUANTIDADE=$linha[VL_QUANTIDADE]&DS_ITEM=$linha[DS_ITEM]&DS_COR=$linha[DS_COR]&DT_CADASTRO=$linha[DT_CADASTRO]&SL_CORTE=$linha[SL_CORTE]&ST_ETIQUETA=$linha[ST_ETIQUETA]&ST_SILK=$linha[ST_SILK]&ST_BORDADO=$linha[ST_BORDADO]&DS_PREPARACAO=$linha[DS_PREPARACAO]&ID_TIPOMATERIAL=$linha[ID_TIPOMATERIAL]&ID_PEDIDO=$linha[ID_PEDIDO]\">Editar</a> </td>";
                   
           echo ";</tr>";
          

    ?>
   </table>
 <div class="row">
 
    <div class="span6">
      <dl>


		  <dt>Corte</dt>
		 <dd>

     <?php
if($linha[SL_CORTE] == 1){
                  echo"<td style=\"text-align:center\"><div class=\"parado\"></div></td>";
                  }
                if($linha[SL_CORTE] == 2){
                  echo"<td style=\"text-align:center\"><div class=\"executando\"></div></td>";
                }
                if($linha[SL_CORTE] == 3){
                  echo"<td style=\"text-align:center\"><div class=\"concluido\"></div></td>";
                }
                ?>
	 </dd>

	   <dt>Etiquetagem</dt>
		<dd>
 <?php
     
     if($linha[ST_ETIQUETA] == 1){
                  echo"<td style=\"text-align:center\"><div class=\"parado\"></div></td>";
                  }
                if($linha[ST_ETIQUETA] == 2){
                  echo"<td style=\"text-align:center\"><div class=\"executando\"></div></td>";
                }
                if($linha[ST_ETIQUETA] == 3){
                  echo"<td style=\"text-align:center\"><div class=\"concluido\"></div></td>";
                }
                ?>
	<dd>


		 <dt>Silk</dt>
		 <dd>

<?php
if($linha[ST_SILK] == 1){
                  echo"<td style=\"text-align:center\"><div class=\"parado\"></div></td>";
                  }
                if($linha[ST_SILK] == 2){
                  echo"<td style=\"text-align:center\"><div class=\"executando\"></div></td>";
                }
                if($linha[ST_SILK] == 3){
                  echo"<td style=\"text-align:center\"><div class=\"concluido\"></div></td>";
                }
                ?>
	 <dd>


      


	 	<dt>Bordado</dt>
		<dd>
    <?php
                if($linha[ST_BORDADO] == 1){
                  echo"<td style=\"text-align:center\"><div class=\"parado\"></div></td>";
                  }
                if($linha[ST_BORDADO] == 2){
                  echo"<td style=\"text-align:center\"><div class=\"executando\"></div></td>";
                }
                if($linha[ST_BORDADO] == 3){
                  echo"<td style=\"text-align:center\"><div class=\"concluido\"></div></td>";
                }
                ?>
       <dd>

	 	<dt>Preparação</dt>
	<dd>

  <?php

   if($linha[DS_PREPARACAO] == 1){
                  echo"<td style=\"text-align:center\"><div class=\"parado\"></div></td>";
                  }
                if($linha[DS_PREPARACAO] == 2){
                  echo"<td style=\"text-align:center\"><div class=\"executando\"></div></td>";
                }
                if($linha[DS_PREPARACAO] == 3){
                  echo"<td style=\"text-align:center\"><div class=\"concluido\"></div></td>";
                }
                 
               ?>
	 <dd>

</dl>
</div>

<div class="span6">
<?php 

  geraCodigoBarra($linha[ID_PEDIDO]);
}
?>
</div>

</div>

</div>


     </fieldset>
     
     </div>
     </div>
</div>
</body>
</html>
