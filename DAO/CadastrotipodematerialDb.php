<<<<<<< HEAD
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
=======
<?php
include '../Classes/ConexaoBanco.php';

include '../Classes/Sessao_CIN.php';

Sessao_CIN::ValidaSessao();

$descricao = $_POST['descricao'];

$sql="insert into `TiposMateriais`(`DS_TIPOMATERIAL`) values ('".$descricao."')";

$banco = new ConexaoBanco();
$banco->executeQuery($sql);

header("location:../Views/listartudo.php");
>>>>>>> df27015e8983967067fe6b0cf51ff9010c2f1465
?>