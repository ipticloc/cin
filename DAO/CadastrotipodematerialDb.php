<?php
include '../Classes/ConexaoBanco.php';

include '../Classes/Sessao_CIN.php';

Sessao_CIN::ValidaSessao();

$descricao = $_POST['descricao'];

$sql="insert into `TiposMateriais`(`DS_TIPOMATERIAL`) values ('".$descricao."')";

$banco = new ConexaoBanco();
$banco->executeQuery($sql);

header("location:../Views/listartudo.php");
?>