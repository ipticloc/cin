<?php
include '../Classes/ConexaoBanco.php';

include '../Classes/Sessao_CIN.php';
<<<<<<< HEAD
=======

>>>>>>> 73a74eef9677186827527c4d55369ddb5c0e090c
Sessao_CIN::ValidaSessao();

$ID_PEDIDO = $_POST['ID_PEDIDO'];
$ID_CLIENTE = $_POST['ID_CLIENTE'];
$DT_PEDIDO = $_POST['DT_PEDIDO'];



$sql = "UPDATE `CIN_DB`.`Pedidos` SET `ID_CLIENTE` = '".$ID_CLIENTE."' , `DT_PEDIDO` = '".$DT_PEDIDO."' WHERE `ID_PEDIDO` = '".$ID_PEDIDO."' ;";


<<<<<<< HEAD

=======
>>>>>>> 73a74eef9677186827527c4d55369ddb5c0e090c
$banco = new ConexaoBanco();
$banco->executeQuery($sql);


header("location:../Views/ListarPedidos.php");

<<<<<<< HEAD
?>
=======
?>
>>>>>>> 73a74eef9677186827527c4d55369ddb5c0e090c
