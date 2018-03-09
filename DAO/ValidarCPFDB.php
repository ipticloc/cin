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
 ?>