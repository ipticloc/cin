<<<<<<< HEAD
<?php
include '../Classes/ConexaoBanco.php';

include '../Classes/Sessao_CIN.php';
Sessao_CIN::ValidaSessao();
$DT_PEDIDO = $_POST['DT_PEDIDO'];
$ID_CLIENTE = $_POST['ID_CLIENTE'];

//$sql = "INSERT INTO `Pedidos`(`DT_PEDIDO` , `ID_CLIENTE` , `ID_USUARIO`) Values ( '".date("Y-m-d")."' , '".$ID_CLIENTE."' , '".$_SESSION["Usuario"]['ID_USUARIO']."' )";
$sql = "INSERT INTO `pedidos`(`DT_PEDIDO` , `ID_CLIENTE` ) Values ( SYSDATE(), '".$ID_CLIENTE."' )";

$banco = new ConexaoBanco();
$banco->executeQuery($sql);

header("location:../Views/ListarPedidos.php");

?>



=======
<?php
include '../Classes/ConexaoBanco.php';

include '../Classes/Sessao_CIN.php';
Sessao_CIN::ValidaSessao();

$DT_PEDIDO = $_POST['DT_PEDIDO'];
$ID_CLIENTE = $_POST['ID_CLIENTE'];

//$sql = "INSERT INTO `Pedidos`(`DT_PEDIDO` , `ID_CLIENTE` , `ID_USUARIO`) Values ( '".date("Y-m-d")."' , '".$ID_CLIENTE."' , '".$_SESSION["Usuario"]['ID_USUARIO']."' )";
$sql = "INSERT INTO `Pedidos`(`DT_PEDIDO` , `ID_CLIENTE` ) Values ( SYSDATE(), '".$ID_CLIENTE."' )";

$banco = new ConexaoBanco();
$banco->executeQuery($sql);

header("location:../Views/ListarPedidos.php");

?>



>>>>>>> df27015e8983967067fe6b0cf51ff9010c2f1465
