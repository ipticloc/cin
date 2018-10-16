<<<<<<< HEAD
<?php


class ConexaoBanco
{
	var $host="localhost";
	var $user="root";
	var $password="";
	var $database="cin_db";

	var $query;
	var $link;
	var $result;

	function ConexaoBanco()
	{
	 //Apenas instancia o Objeto
	}

	//Esta função faz a conexão com o Banco de Dados
	function connect()
	{
		$this->link=mysqli_connect($this->host,$this->user,$this->password,$this->database);
		
		if(!$this->link)
		{
			echo "Falha na conexão com o Banco de Dados!<br />";
			echo "Erro: " . mysqli_error();
			die();
		}
		elseif(!mysqli_select_db($this->link,$this->database))
		{
			echo "O Banco de Dados solicitado não pode ser aberto!<br />";
			echo "Erro: " . mysqli_error();
			die();
		}
	}

	//Esta função executa uma Query
	function executeQuery($query)
	{

		$this->connect();
		       
		$this->query=$query;
		mysqli_set_charset($this->link,'utf8');
		if($this->result=mysqli_query($this->link,$this->query))
		{
			$this->disconnect();
			return $this->result;
		}
		else
		{
			echo "Ocorreu um erro na execução da SQL";
			echo "Erro: " . mysqli_error();
			echo "SQL: " . $query;
			die();
			disconnect();
		}
	}

	//Esta função desconecta do Banco
	function disconnect()
	{
		return mysqli_close($this->link);
	}
}

=======
<?php


class ConexaoBanco
{
	var $host="localhost";
	var $user="root";
	var $password="cloc";
	var $database="CIN_DB";

	var $query;
	var $link;
	var $result;

	function ConexaoBanco()
	{
	 //Apenas instancia o Objeto
	}

	//Esta função faz a conexão com o Banco de Dados
	function connect()
	{
		$this->link=mysqli_connect($this->host,$this->user,$this->password,$this->database);
		
		if(!$this->link)
		{
			echo "Falha na conexão com o Banco de Dados!<br />";
			echo "Erro: " . mysqli_error();
			die();
		}
		elseif(!mysqli_select_db($this->link,$this->database))
		{
			echo "O Banco de Dados solicitado não pode ser aberto!<br />";
			echo "Erro: " . mysqli_error();
			die();
		}
	}

	//Esta função executa uma Query
	function executeQuery($query)
	{

		$this->connect();
		       
		$this->query=$query;
		mysqli_set_charset($this->link,'utf8');
		if($this->result=mysqli_query($this->link,$this->query))
		{
			$this->disconnect();
			return $this->result;
		}
		else
		{
			echo "Ocorreu um erro na execução da SQL";
			echo "Erro: " . mysqli_error();
			echo "SQL: " . $query;
			die();
			disconnect();
		}
	}

	//Esta função desconecta do Banco
	function disconnect()
	{
		return mysqli_close($this->link);
	}
}

>>>>>>> df27015e8983967067fe6b0cf51ff9010c2f1465
?>