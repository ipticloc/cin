<?php
	$email = $_GET['em'];
	$senha = $_GET['se'];

	$login =  mysqli_query($con, "SELECT*FROM cadastro WHERE email = $email AND senha = $senha");

	$a = mysqli_num_rows($login);

	if($a === 1){
		header('Location: lista.php');
	}else{
		echo "<script>alert('deu ruim');</script>";
	}

	md5($senha);12344~

?>