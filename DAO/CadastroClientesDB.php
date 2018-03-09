<?php
<<<<<<< HEAD
include '../Classes/ConexaoBanco.php';

include '../Classes/Sessao_CIN.php';
=======

include '../Classes/ConexaoBanco.php';

include '../Classes/Sessao_CIN.php';

>>>>>>> 73a74eef9677186827527c4d55369ddb5c0e090c
Sessao_CIN::ValidaSessao();

$nome = $_POST['NM_CLIENTE'];
$cpf =$_POST['DS_CPF_CNPJ'];
$endereço= $_POST['DS_ENDEREÇO'];
$telefone=  $_POST['NR_TELEFONE'];
$email= $_POST['DS_EMAIL'];

<<<<<<< HEAD
$sql="INSERT INTO `CIN_DB`.`Clientes`(`NM_CLIENTE`,`DS_ENDEREÇO`,`NR_TELEFONE`,`DS_EMAIL`,`DS_CPF_CNPJ`) values ('".$nome."','".$endereço."','".$telefone."','".$email."','".$cpf."')";

$banco = new ConexaoBanco();
=======


$sql = "INSERT INTO Clientes(NM_CLIENTE, DS_ENDEREÇO, NR_TELEFONE, DS_EMAIL, DS_CPF_CNPJ)values('".$nome."','".$endereço."','".$telefone."','".$email."','".$cpf."')";





$banco = new ConexaoBanco();

>>>>>>> 73a74eef9677186827527c4d55369ddb5c0e090c
$banco->executeQuery($sql);


header("location:../Views/listarclientes.php");

<<<<<<< HEAD

?>
=======
?>
>>>>>>> 73a74eef9677186827527c4d55369ddb5c0e090c
