<<<<<<< HEAD
<?php 
include '../Classes/ConexaoBanco.php';

$cpf =$_POST['DS_CPF_CNPJ'];
$sql="SELECT * FROM `cin_db`.`clientes` where DS_CPF_CNPJ ='".$cpf."' ";

echo $sql;
exit();
$Cliente = $banco->executeQuery($sql);

if ($Cliente->num_rows==1) {
		header("location:../Views/CadastroCliente.php");
}
else
{
    	header("location:CadastroClientesDB.php");
}
=======
<?php 
include '../Classes/ConexaoBanco.php';

$cpf =$_POST['DS_CPF_CNPJ'];
$sql="SELECT * FROM `CIN_DB`.`Clientes` where DS_CPF_CNPJ ='".$cpf."' ";

echo $sql;
exit();
$Cliente = $banco->executeQuery($sql);

if ($Cliente->num_rows==1) {
		header("location:../Views/CadastroCliente.php");
}
else
{
    	header("location:CadastroClientesDB.php");
}
>>>>>>> df27015e8983967067fe6b0cf51ff9010c2f1465
 ?>