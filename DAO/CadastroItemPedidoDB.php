<?php

include '../Classes/ConexaoBanco.php';

include '../Classes/Sessao_CIN.php';

Sessao_CIN::ValidaSessao();
$ID_PEDIDO = $_POST['ID_PEDIDO'];
$SQ_PEDIDO = $_POST['SQ_PEDIDO'];
$DS_ITEM = $_POST['DS_ITEM'];
$VL_QUANTIDADE = $_POST['VL_QUANTIDADE'];
$DS_COR = $_POST['DS_COR'];
$DT_CADASTRO = $_POST['DT_CADASTRO'];
$ID_TIPOMATERIAL = $_POST['ID_TIPOMATERIAL'];


$sql = "INSERT INTO `itenspedido`(
`ID_PEDIDO`,
`SQ_PEDIDO`,
`DS_ITEM`,
`VL_QUANTIDADE`,
`DS_COR`,
`DT_CADASTRO`,
`SL_CORTE`,
`ST_ETIQUETA`,
`ST_SILK`,
`ST_BORDADO`,
`DS_PREPARACAO`,
`ID_TIPOMATERIAL`) Values ('".$ID_PEDIDO."','".$SQ_PEDIDO."', '".$DS_ITEM."' , '".$VL_QUANTIDADE."' ,'".$DS_COR."' ,'".date("Y-m-d")."' , '1' ,'1' ,'1' ,'1', '1', '".$ID_TIPOMATERIAL."')";


$banco = new ConexaoBanco();
$banco->executeQuery($sql);


header("location:../Views/ListarItensDoPedido.php?ID_PEDIDO=$ID_PEDIDO");

?>
