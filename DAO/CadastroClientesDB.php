<<<<<<< HEAD
<?php


include '../Classes/ConexaoBanco.php';

include '../Classes/Sessao_CIN.php';

Sessao_CIN::ValidaSessao();

$nome = $_POST['NM_CLIENTE'];
$cpf =$_POST['DS_CPF_CNPJ'];
$endereço= $_POST['DS_ENDEREÇO'];
$telefone=  $_POST['NR_TELEFONE'];
$email= $_POST['DS_EMAIL'];

$sql="INSERT INTO `cin_db`.`clientes`(`NM_CLIENTE`,`DS_ENDEREÇO`,`NR_TELEFONE`,`DS_EMAIL`,`DS_CPF_CNPJ`) values ('".$nome."','".$endereço."','".$telefone."','".$email."','".$cpf."')";



$banco = new ConexaoBanco();
 
$banco->executeQuery($sql);


header("location:../Views/listarclientes.php");

?> 
=======
<?php


include '../Classes/ConexaoBanco.php';

include '../Classes/Sessao_CIN.php';

Sessao_CIN::ValidaSessao();

$nome = $_POST['NM_CLIENTE'];
$cpf =$_POST['DS_CPF_CNPJ'];
$endereço= $_POST['DS_ENDEREÇO'];
$telefone=  $_POST['NR_TELEFONE'];
$email= $_POST['DS_EMAIL'];

$sql="INSERT INTO `CIN_DB`.`Clientes`(`NM_CLIENTE`,`DS_ENDEREÇO`,`NR_TELEFONE`,`DS_EMAIL`,`DS_CPF_CNPJ`) values ('".$nome."','".$endereço."','".$telefone."','".$email."','".$cpf."')";



$banco = new ConexaoBanco();
 
$banco->executeQuery($sql);


header("location:../Views/listarclientes.php");

?> 
>>>>>>> df27015e8983967067fe6b0cf51ff9010c2f1465
