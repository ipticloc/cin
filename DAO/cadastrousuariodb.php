<?php
include '../Classes/ConexaoBanco.php';

include '../Classes/Sessao_CIN.php';
Sessao_CIN::ValidaSessao();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$DS_USUARIO = $_POST['nome'];
$DS_SENHA = $_POST['Senha'];
$DS_EMAIL = $_POST['Email'];

$codificada = md5($DS_SENHA);

$sql="insert into `Usuario`(`DS_USUARIO`,`DS_SENHA`,`DS_EMAIL`) values ('".$DS_USUARIO."','".$codificada."','".$DS_EMAIL."')";
echo $sql;

$banco = new ConexaoBanco();
$banco->executeQuery($sql);
header("location:../Views/listartodosusuarios.php");
?>
