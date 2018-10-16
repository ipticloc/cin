<?php
include '../Classes/ConexaoBanco.php';

include '../Classes/Sessao_CIN.php';

Sessao_CIN::ValidaSessao();

$descricao = $_POST['descricao'];
$cod = $_POST['numeroAle'];

$sql="insert into `tiposmateriais`(`DS_TIPOMATERIAL`,`CD_BARRAS`) values ('$descricao','$cod')";

$banco = new ConexaoBanco();
$banco->executeQuery($sql);

header("location:../Views/listartudo.php");
?>