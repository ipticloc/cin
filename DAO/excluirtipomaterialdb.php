<?php
include '../Classes/ConexaoBanco.php';

include '../Classes/Sessao_CIN.php';
Sessao_CIN::ValidaSessao();

$ID_TIPOMATERIAL = $_GET['ID_TIPOMATERIAL'];


$sql = "DELETE FROM `CIN_DB`.`TiposMateriais` WHERE `ID_TIPOMATERIAL`= ('".$ID_TIPOMATERIAL."')";

//$conexao= mysqli_connect("127.0.0.1","root","cloc","CIN_DB") or die('Erro na conexão');

$banco = new ConexaoBanco();
$banco->executeQuery($sql);

header("location:../Views/listartudo.php");
?>