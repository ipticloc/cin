<<<<<<< HEAD
<?php
include '../Classes/ConexaoBanco.php';

include '../Classes/Sessao_CIN.php';
Sessao_CIN::ValidaSessao();

$codigo = $_GET['ID_CLIENTE'];


$sql = "DELETE FROM `CIN_DB`.`Clientes` WHERE `ID_CLIENTE`= '".$codigo."'";

$banco = new ConexaoBanco();
$banco->executeQuery($sql);

header("location:../Views/listarclientes.php");
=======
<?php
include '../Classes/ConexaoBanco.php';

include '../Classes/Sessao_CIN.php';
Sessao_CIN::ValidaSessao();

$codigo = $_GET['ID_CLIENTE'];


$sql = "DELETE FROM `CIN_DB`.`Clientes` WHERE `ID_CLIENTE`= '".$codigo."'";

$banco = new ConexaoBanco();
$banco->executeQuery($sql);

header("location:../Views/listarclientes.php");
>>>>>>> df27015e8983967067fe6b0cf51ff9010c2f1465
?>