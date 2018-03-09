<?php
	unset($_SESSION["Usuario"]);
	$_SESSION["Usuario"] = null;
	session_destroy();
	header("location:login.php");
?>