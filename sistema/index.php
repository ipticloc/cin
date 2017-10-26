<?php
	include("classes/conec.php");

	if (isset($_POST['email']) && strlen($_POST['email']) > 0) {
			session_start();
		}
	$_SESSION['email'] = $mysqli->escape_string($_POST['email']);
	$_SESSION['senha'] = md5(md5($_POST['senha']));

	$sql_code = "SELECT senha, id FROM cadastro where email = '$_SESSION[email]'";
	$sql_query = $mysqli->query($sql_code) or die($mysqli->error);
	$dado = $sql_query->fetch_assoc();
	$total = $sql_query->num_rows;

	if($total == 0){
		$erro[] = "este email não pertence á nenhum usuário.";
	}else{

		if($dado['senha'] == $_SESSION['senha']){
			$_SESSION['usuário'] = $dado['id'];
		}else{
			$erro[] = "senha incorreta.";
		}

	}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>Damasco by Illumini</title>
	<link rel="stylesheet" href="css/estiloLogin.css">
</head>
<body>
	<form action="index.html" method="post">
		
		<input type="text" name="email" placeholder="e-mail" value="<?php echo $_SESSION['email'];?>"><br><br>
		<input type="password" name="senha" placeholder="********"><br><br>
		<input type="submit" name="login">

	</form>
	<div><a href="">Esqueceu sua Senha?</a></div>
	<div></div>
	<div></div>
</body>
</html>