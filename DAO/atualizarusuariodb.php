<?php
include '../Classes/ConexaoBanco.php';

include '../Classes/Sessao_CIN.php';
Sessao_CIN::ValidaSessao();

$nome = $_POST['nome'];
$email =$_POST['email'];
$codigo = $_POST['codigo'];
$senha = $_POST['senha'];

$sql = "UPDATE `Usuario` SET `DS_USUARIO` = ('".$nome."'), `DS_EMAIL` = ('".$email."'),`DS_SENHA` = ('".$senha."') 
WHERE `ID_USUARIO` = ('".$codigo."')";

$banco = new ConexaoBanco();
$banco->executeQuery($sql);


header("location:../Views/listartodosusuarios.php");
?>