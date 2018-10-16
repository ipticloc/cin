<?php
include '../Classes/ConexaoBanco.php';
$aa = $_GET['a'];
$senha = $_POST['Senha'];
$email = $_POST['Email'];
$codificada = md5($senha);
$sql = "SELECT * FROM `CIN_DB`.`Clientes` where `DS_CPF_CNPJ` =".$aa."";
$banco = new ConexaoBanco();
$usuario = $banco->executeQuery($sql);
if ($Usuario->num_rows==1){
	echo "este usuario já está cadastrado";
}else{
	echo "usuario não cadastrado";
}
?>