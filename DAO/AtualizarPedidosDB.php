<<<<<<< HEAD
<?php
include '../Classes/ConexaoBanco.php';
include '../Classes/Sessao_CIN.php';

Sessao_CIN::ValidaSessao();
$ID_PEDIDO = $_POST['ID_PEDIDO'];
$ID_CLIENTE = $_POST['ID_CLIENTE'];
$DT_PEDIDO = $_POST['DT_PEDIDO'];
$sql = "UPDATE `cin_db`.`Pedidos` SET `ID_CLIENTE` = '".$ID_CLIENTE."' , `DT_PEDIDO` = '".$DT_PEDIDO."' WHERE `ID_PEDIDO` = '".$ID_PEDIDO."' ;";

$banco = new ConexaoBanco();
$banco->executeQuery($sql);


header("location:../Views/ListarPedidos.php");


?>
=======
<?php
include '../Classes/ConexaoBanco.php';
include '../Classes/Sessao_CIN.php';

Sessao_CIN::ValidaSessao();
$ID_PEDIDO = $_POST['ID_PEDIDO'];
$ID_CLIENTE = $_POST['ID_CLIENTE'];
$DT_PEDIDO = $_POST['DT_PEDIDO'];
$sql = "UPDATE `CIN_DB`.`Pedidos` SET `ID_CLIENTE` = '".$ID_CLIENTE."' , `DT_PEDIDO` = '".$DT_PEDIDO."' WHERE `ID_PEDIDO` = '".$ID_PEDIDO."' ;";

$banco = new ConexaoBanco();
$banco->executeQuery($sql);


header("location:../Views/ListarPedidos.php");


?>
>>>>>>> df27015e8983967067fe6b0cf51ff9010c2f1465
