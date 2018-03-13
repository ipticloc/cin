<?php
include '../Classes/ConexaoBanco.php';
include '../Classes/Sessao_CIN.php';

$senha = $_POST['Senha'];
$email = $_POST['Email'];
$codificada = md5($senha);
$sql="SELECT * FROM `CIN_DB`.`Usuario` where DS_EMAIL ='".$email."' and DS_SENHA = '".$codificada."'";


$banco = new ConexaoBanco();


$Usuario = $banco->executeQuery($sql);

if ($Usuario->num_rows==0) {

header("location:login.php");

}
else
{
	while ($linha = mysqli_fetch_array($Usuario)) {
		$usuario_session = array('ID_USUARIO' => $linha[ID_USUARIO], 'DS_EMAIL' =>$linha[DS_EMAIL], 'DS_USUARIO'=> $linha[DS_USUARIO]);
		Sessao_CIN::EscreverSessao($usuario_session);

	}
	header("location:menu.php");
	
}
?>
