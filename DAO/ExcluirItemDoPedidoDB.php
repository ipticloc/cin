<?php
include '../Classes/ConexaoBanco.php';

include '../Classes/Sessao_CIN.php';
Sessao_CIN::ValidaSessao();



$ID_PEDIDO = $_GET['ID_PEDIDO'];
$SQ_PEDIDO = $_GET['SQ_PEDIDO'];
$DT_PEDIDO = $GET['DT_PEDIDO'];
  
$sql = "delete from `ItensPedido` WHERE ID_PEDIDO ='".$ID_PEDIDO."' and SQ_PEDIDO = '".$SQ_PEDIDO."' ";
//echo $sql;


$banco = new ConexaoBanco();
$banco->executeQuery($sql);


header("location:../Views/ListarItensDoPedido.php?ID_PEDIDO=$ID_PEDIDO&DT_PEDIDO=$DT_PEDIDO");

?>