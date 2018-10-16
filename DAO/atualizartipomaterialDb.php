<<<<<<< HEAD
<?php
include '../Classes/ConexaoBanco.php';

include '../Classes/Sessao_CIN.php';
Sessao_CIN::ValidaSessao();

$codigo = $_POST['codigo'];
$descricao =$_POST['descricao'];

$sql = "UPDATE `tiposmateriais` SET `DS_TIPOMATERIAL` = ('".$descricao."') 
WHERE `ID_TIPOMATERIAL` = ('".$codigo."')";


$banco = new ConexaoBanco();
$banco->executeQuery($sql);

header("location:../Views/listartudo.php");
=======
<?php
include '../Classes/ConexaoBanco.php';

include '../Classes/Sessao_CIN.php';
Sessao_CIN::ValidaSessao();

$codigo = $_POST['codigo'];
$descricao =$_POST['descricao'];

$sql = "UPDATE `TiposMateriais` SET `DS_TIPOMATERIAL` = ('".$descricao."') 
WHERE `ID_TIPOMATERIAL` = ('".$codigo."')";


$banco = new ConexaoBanco();
$banco->executeQuery($sql);

header("location:../Views/listartudo.php");
>>>>>>> df27015e8983967067fe6b0cf51ff9010c2f1465
?>