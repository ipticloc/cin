<?php 
	if(!function_exists(proteger))

		function proteger(){

			if(!isset($_SESSION))
			session_start();
			if(!isset($_SESSION['login']) || is_numeric($_SESSION['login'])){

				header("Location: login.php");
			}

		}
		
?>