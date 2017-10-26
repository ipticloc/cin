/<?php
include '../Classes/ConexaoBanco.php';

include '../Classes/Sessao_CIN.php';
Sessao_CIN::ValidaSessao();

$codigo = $_GET['ID_CLIENTE'];


$sql = "DELETE FROM `CIN_DB`.`Clientes` WHERE `ID_CLIENTE`= '".$codigo."'";

$banco = new ConexaoBanco();
$banco->executeQuery($sql);

header("location:../Views/listarclientes.php");
?>