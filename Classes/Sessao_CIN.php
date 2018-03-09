<?php


class Sessao_CIN
{

	static function ValidaSessao()
	{
		session_start();
		if (isset($_SESSION["Usuario"])) {
  		
		}
        else{
           header("location:login.php");
		}
		
		
	}

	static function EscreverSessao($usuario_session){
		session_start();
		$_SESSION["Usuario"] = $usuario_session;
		
	}
	
}
	
?>
