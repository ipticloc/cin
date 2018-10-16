<<<<<<< HEAD
<?php
include '../Classes/ConexaoBanco.php';

include '../Classes/Sessao_CIN.php';
Sessao_CIN::ValidaSessao();

$ID_TIPOMATERIAL = $_GET['ID_TIPOMATERIAL'];


$sql = "DELETE FROM `cin_db`.`tiposmateriais` WHERE `ID_TIPOMATERIAL`= ('".$ID_TIPOMATERIAL."')";

//$conexao= mysqli_connect("127.0.0.1","root","cloc","CIN_DB") or die('Erro na conexão');

$banco = new ConexaoBanco();
$banco->executeQuery($sql);

header("location:../Views/listartudo.php");
=======
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
>>>>>>> df27015e8983967067fe6b0cf51ff9010c2f1465
?>