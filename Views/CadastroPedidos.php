<?php
include '../Classes/ConexaoBanco.php';
include '../Classes/Sessao_CIN.php';
Sessao_CIN::ValidaSessao();
$banco = new ConexaoBanco();
$sql = "SELECT * FROM Clientes";
$todosclientes = $banco->executeQuery($sql);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
  	<title>Cadastro Pedidos</title>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap-responsive.min.css">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <script type="text/javascript" scr="../js/bootstrap.min.js"></script>
    <script src="../js/editavel.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/editavel.css">
  </head>
<body>
  <?php include("menu_topo.php"); ?>
    <div class="container-fluid">
      <div class="row-fluid">
      <?php include("menu_lateral.php"); ?>    
        <div class="span9">
          <div class="hero-unit">
            <h1>Pedidos</h1>
            <p></p>
          </div>
          <div class="container-fluid">
            <form method="post"  action="../DAO/CadastroPedidosDB.php">
              <fieldset>
                <legend>Cadastro</legend>
                <select name="ID_CLIENTE">
                  <?php
                 	   while ($linha = mysqli_fetch_array($todosclientes)){
                 	   echo "<option value=\"$linha[ID_CLIENTE]\" >$linha[NM_CLIENTE]</option>";       	   	  
                 	  }
                 	?>      	
                </select>
                <br>
                <button class="btn btn-success">Salvar</button>
                <a href="ListarPedidos.php" class="btn btn-info">Voltar</a>      
              </fieldset>
            </form>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>