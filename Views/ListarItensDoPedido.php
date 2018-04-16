<?php

include '../Classes/ConexaoBanco.php';

include '../Classes/Sessao_CIN.php';
Sessao_CIN::ValidaSessao();

$ID_PEDIDO = $_GET['ID_PEDIDO'];
$NM_CLIENTE = $_GET['NM_CLIENTE'];
$DT_PEDIDO = $_GET['DT_PEDIDO'];

$sql = "select * from ItensPedido INNER JOIN TiposMateriais ON ItensPedido.ID_TIPOMATERIAL = TiposMateriais.ID_TIPOMATERIAL WHERE ID_PEDIDO ='".$ID_PEDIDO."'";


$banco = new ConexaoBanco();
$TodosItensDoPedido = $banco->executeQuery($sql);

?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf8">
	<title>ITENS DO PEDIDO</title>
   <link rel="stylesheet" type="text/css" href="style.css">
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
  </style>
</head>
<body>
 <?php include("menu_topo.php"); ?>

    <div class="container-fluid">
    <div class="row-fluid">
    <?php include("menu_lateral.php"); ?>

        <div class="span9">
        <div class="hero-unit">
     <h1>Itens do Pedido</h1>
     </div>
     <div class="container">
     <form method="post">
     <fieldset>
    <div class="button">
     <a class="btn btn-primary" href="CadastroItemPedido.php?ID_PEDIDO=<?php echo $ID_PEDIDO;?>">Novo</a>
     </div>
     <br>
     <table style="width:90%" class="table table-striped">
     <tr>
          <td>ID Pedido</td>
          <td>Sequência do pedido</td>
          <td>Quantidade de item</td>
          <td>Nome do item</td>
          <td>Cor</td>
          <td>Data do cadastro</td>
          <td>Corte</td>
          <td>Etiquetagem</td>
          <td>Silk</td>
          <td>Bordado</td>
          <td>Preparação</td>

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
                <td style=\"text-align:center\">$linha[DT_CADASTRO]</td>";


                if($linha['SL_CORTE'] == 1){
                  echo"<td style=\"text-align:center\"><div class=\"parado\"></div></td>";
                  }
                if($linha['SL_CORTE'] == 2){
                  echo"<td style=\"text-align:center\"><div class=\"executando\"></div></td>";
                }
                if($linha['SL_CORTE'] == 3){
                  echo"<td style=\"text-align:center\"><div class=\"concluido\"></div></td>";
                }
                
                if($linha['ST_ETIQUETA'] == 1){
                  echo"<td style=\"text-align:center\"><div class=\"parado\"></div></td>";
                  }
                if($linha['ST_ETIQUETA'] == 2){
                  echo"<td style=\"text-align:center\"><div class=\"executando\"></div></td>";
                }
                if($linha['ST_ETIQUETA'] == 3){
                  echo"<td style=\"text-align:center\"><div class=\"concluido\"></div></td>";
                }


                if($linha['ST_SILK'] == 1){
                  echo"<td style=\"text-align:center\"><div class=\"parado\"></div></td>";
                  }
                if($linha['ST_SILK'] == 2){
                  echo"<td style=\"text-align:center\"><div class=\"executando\"></div></td>";
                }
                if($linha['ST_SILK'] == 3){
                  echo"<td style=\"text-align:center\"><div class=\"concluido\"></div></td>";
                }



                if($linha['ST_BORDADO'] == 1){
                  echo"<td style=\"text-align:center\"><div class=\"parado\"></div></td>";
                  }
                if($linha['ST_BORDADO'] == 2){
                  echo"<td style=\"text-align:center\"><div class=\"executando\"></div></td>";
                }
                if($linha['ST_BORDADO'] == 3){
                  echo"<td style=\"text-align:center\"><div class=\"concluido\"></div></td>";
                }


                if($linha['DS_PREPARACAO'] == 1){
                  echo"<td style=\"text-align:center\"><div class=\"parado\"></div></td>";
                  }
                if($linha['DS_PREPARACAO'] == 2){
                  echo"<td style=\"text-align:center\"><div class=\"executando\"></div></td>";
                }
                if($linha['DS_PREPARACAO'] == 3){
                  echo"<td style=\"text-align:center\"><div class=\"concluido\"></div></td>";
                }
                echo"
                <td style=\"text-align:center\">$linha[DS_TIPOMATERIAL]</td>
                <td align=\"center\">
                   <a class=\"btn\" href=\"AtualizarItemDoPedido.php?SQ_PEDIDO=$linha[SQ_PEDIDO]&VL_QUANTIDADE=$linha[VL_QUANTIDADE]&DS_ITEM=$linha[DS_ITEM]&DS_COR=$linha[DS_COR]&DT_CADASTRO=$linha[DT_CADASTRO]&SL_CORTE=$linha[SL_CORTE]&ST_ETIQUETA=$linha[ST_ETIQUETA]&ST_SILK=$linha[ST_SILK]&ST_BORDADO=$linha[ST_BORDADO]&DS_PREPARACAO=$linha[DS_PREPARACAO]&ID_TIPOMATERIAL=$linha[ID_TIPOMATERIAL]&ID_PEDIDO=$linha[ID_PEDIDO]\">Editar</a>

                     <a class=\"btn btn-danger\" onclick=\"return confirm('Você tem certeza que deseja exluir o item cujo o codigo é: $linha[ID_ITENSPEDIDO]?') \";  href=\"../DAO/ExcluirItemDoPedidoDB.php?ID_PEDIDO=$linha[ID_PEDIDO]&SQ_PEDIDO=$linha[SQ_PEDIDO]\">Excluir</a>

                    <a class=\"btn \" href=\"ImprimirCodigodeBarra.php?ID_ITENSPEDIDO=$linha[ID_ITENSPEDIDO]\" target='blank'>CB</a>

                </td>";

                echo "</tr>";

         }
    ?>

     </table>


          <div class="parado"></div>  Parado
          </br>
          <div class="executando"></div>  Executando
          </br>
          <div class="concluido"></div>  Concluído
          </br>
           </br>
    <button class="btn btn-success">Salvar</button>
      <a href="ListarPedidos.php" class="btn btn-info">Voltar</a>
      </fieldset>
      </form>
      </div>
      </br>


</body>
</html>
