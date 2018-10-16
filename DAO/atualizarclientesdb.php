<<<<<<< HEAD
<?php
include '../Classes/ConexaoBanco.php';

include '../Classes/Sessao_CIN.php';
Sessao_CIN::ValidaSessao();

$nome = $_POST['NM_CLIENTE'];
$cpf =$_POST['DS_CPF_CNPJ'];
$email =$_POST['DS_EMAIL'];
$codigo = $_POST['codigo'];
$telefone = $_POST['NR_TELEFONE'];
$endereço =$_POST['DS_ENDEREÇO'];

$sql = "UPDATE `Clientes` SET `NM_CLIENTE` = ('".$nome."'),`DS_CPF_CNPJ`=('".$cpf."'),`NR_TELEFONE` = ('".$telefone."'),`DS_ENDEREÇO` = ('".$endereço."'),`DS_EMAIL` = ('".$email."') 
WHERE `ID_CLIENTE` = ('".$codigo."')";


$banco = new ConexaoBanco();
$banco->executeQuery($sql);

header("location:../Views/listarclientes.php");
=======
<?php
include '../Classes/ConexaoBanco.php';

include '../Classes/Sessao_CIN.php';
Sessao_CIN::ValidaSessao();

$nome = $_POST['NM_CLIENTE'];
$cpf =$_POST['DS_CPF_CNPJ'];
$email =$_POST['DS_EMAIL'];
$codigo = $_POST['codigo'];
$telefone = $_POST['NR_TELEFONE'];
$endereço =$_POST['DS_ENDEREÇO'];

$sql = "UPDATE `Clientes` SET `NM_CLIENTE` = ('".$nome."'),`DS_CPF_CNPJ`=('".$cpf."'),`NR_TELEFONE` = ('".$telefone."'),`DS_ENDEREÇO` = ('".$endereço."'),`DS_EMAIL` = ('".$email."') 
WHERE `ID_CLIENTE` = ('".$codigo."')";


$banco = new ConexaoBanco();
$banco->executeQuery($sql);

header("location:../Views/listarclientes.php");
>>>>>>> df27015e8983967067fe6b0cf51ff9010c2f1465
?>