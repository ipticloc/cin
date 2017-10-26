<?php

include '../Classes/ConexaoBanco.php';

include '../Classes/Sessao_CIN.php';

Sessao_CIN::ValidaSessao();

$ID_PEDIDO = $_POST['ID_PEDIDO'];
$SQ_PEDIDO = $_POST['SQ_PEDIDO'];
$DS_ITEM = $_POST['DS_ITEM'];
$VL_QUANTIDADE = $_POST['VL_QUANTIDADE'];
$DS_COR = $_POST['DS_COR'];
$ID_TIPOMATERIAL = $_POST['ID_TIPOMATERIAL'];
$SL_CORTE = $_POST['SL_CORTE'];
$ST_ETIQUETA = $_POST['ST_ETIQUETA'];
$ST_BORDADO = $_POST['ST_BORDADO'];
$ST_SILK = $_POST['ST_SILK'];
$DS_PREPARACAO = $_POST['DS_PREPARACAO'];


$sql = "Update  `ItensPedido` set `DS_ITEM` = '".$DS_ITEM."' , `VL_QUANTIDADE` = '".$VL_QUANTIDADE."' , `DS_COR` = '".$DS_COR."' , `ID_TIPOMATERIAL` = '".$ID_TIPOMATERIAL."' , `SL_CORTE` = '".$SL_CORTE."' , `ST_ETIQUETA` = '".$ST_ETIQUETA."' , `ST_BORDADO` = '".$ST_BORDADO."' , `ST_SILK` = '".$ST_SILK."' , `DS_PREPARACAO` = '".$DS_PREPARACAO."' WHERE ID_PEDIDO = '".$ID_PEDIDO."' and SQ_PEDIDO = '".$SQ_PEDIDO."' ";


$banco = new ConexaoBanco();
$banco->executeQuery($sql);


header("location:../Views/ListarItensDoPedido.php?ID_PEDIDO=$ID_PEDIDO");

?>