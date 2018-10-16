<<<<<<< HEAD
<?php
include '../Classes/Sessao_CIN.php';
Sessao_CIN::ValidaSessao();

$ID_USUARIO = $_GET['ID_USUARIO'];


$sql = "DELETE FROM `CIN_DB`.`Usuario` WHERE `ID_USUARIO`= ('".$ID_USUARIO."')";

$conexao= mysqli_connect("127.0.0.1","root","","cin_db") or die('Erro na conexão');

mysqli_set_charset($conexao,'utf8');
mysqli_query($conexao,$sql) or die('Erro ao excluir .');

mysqli_close($conexao);

header("location:../Views/listartodosusuarios.php");
=======
<?php
include '../Classes/Sessao_CIN.php';
Sessao_CIN::ValidaSessao();

$ID_USUARIO = $_GET['ID_USUARIO'];


$sql = "DELETE FROM `CIN_DB`.`Usuario` WHERE `ID_USUARIO`= ('".$ID_USUARIO."')";

$conexao= mysqli_connect("127.0.0.1","root","cloc","CIN_DB") or die('Erro na conexão');

mysqli_set_charset($conexao,'utf8');
mysqli_query($conexao,$sql) or die('Erro ao excluir .');

mysqli_close($conexao);

header("location:../Views/listartodosusuarios.php");
>>>>>>> df27015e8983967067fe6b0cf51ff9010c2f1465
?>