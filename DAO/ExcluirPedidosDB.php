<<<<<<< HEAD
<?php
include '../Classes/ConexaoBanco.php';

include '../Classes/Sessao_CIN.php';
Sessao_CIN::ValidaSessao();

$ID_PEDIDO = $_GET['ID_PEDIDO'];

  
$sql = "DELETE FROM `cin_db`.`pedidos`
WHERE  ID_PEDIDO = '".$ID_PEDIDO."'; ";



$banco = new ConexaoBanco();
$banco->executeQuery($sql);


header("location:../Views/ListarPedidos.php");

=======
<?php
include '../Classes/ConexaoBanco.php';

include '../Classes/Sessao_CIN.php';
Sessao_CIN::ValidaSessao();

$ID_PEDIDO = $_GET['ID_PEDIDO'];

  
$sql = "DELETE FROM `CIN_DB`.`Pedidos`
WHERE  ID_PEDIDO = '".$ID_PEDIDO."'; ";



$banco = new ConexaoBanco();
$banco->executeQuery($sql);


header("location:../Views/ListarPedidos.php");

>>>>>>> df27015e8983967067fe6b0cf51ff9010c2f1465
?>